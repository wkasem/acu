<?php

require 'Controller.php';

require __DIR__.'/../Models/Courses.php';
require __DIR__.'/../Models/History.php';
require __DIR__.'/../Models/UserCourses.php';
require __DIR__.'/../Models/UserCourseDetails.php';

class registraionController extends Controller
{

  protected $user_id;

  public function __construct()
  {

    session_start();

    $this->user_id = is_object($_SESSION['user']) ? $_SESSION['user']->id : $_SESSION['user']['id'];
  }

  public function index()
  {

    $year_range = is_object($_SESSION['user']) ? $_SESSION['user']->year_range : $_SESSION['user']['year_range'];

    $courses = (new Courses)->find( ['year_range' => $year_range , 'semster' => date('Y')] );

    $this->view('public.Views.profile.registraion' , ['courses' => $courses]);
  }

  public function register()
  {

    (new UserCourses)->delete(['user_id'   => $this->user_id]);
    (new UserCoursesDetails)->delete(['user_id'   => $this->user_id]);

    $invoice_id = uniqid(rand() * 666);

    foreach ($_POST as $name => $data) {

      $data = explode(',' , $data);

      $id = $data[0];
      $credit_hours = $data[1];

      (new UserCourses)->create([
        'user_id'   => $this->user_id,
        'course_id' => $id
      ]);

      (new UserCoursesDetails)->create([
        'invoice_id'  => $invoice_id,
        'user_id'     => $this->user_id,
        'course_id'   => $id,
        'course_name' => $name,
        'credit_hours'=> $credit_hours,
        'semester'    => date('Y'),
        'created_at'  => date("Y-m-d H:i:s")
      ]);


    }

    (new History)->create([
        'id'         => $invoice_id,
        'user_id'    => $this->user_id,
        'msg'        => "You have registered for " . date('Y') ." Semster",
        'created_at' => date("Y-m-d H:i:s")
    ]);

    redirect("registraion/invoice?id=$invoice_id");

  }

  public function showInvoice()
  {
    $_GET['id'] ? $id = $_GET['id'] : redirect('home');

    $thisYear = (new UserCoursesDetails)->find( ['invoice_id'    => $id] );

    $this->view('public.Views.profile.invoice',['thisYear' => $thisYear]);
  }

  public function showHistory()
  {

    $history  = (new UserCoursesDetails)->find( ['user_id'    => $this->user_id] );

    $this->view('public.Views.profile.history',['history' => $history]);

  }


}
