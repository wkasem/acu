<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>registraion</title>

      <?php include(__DIR__.'/../includes/assets.php'); ?>
  </head>
  <body>
    <?php include('includes/nav.php'); ?>

      <div class="container">

        <div class="row">
          <div class="col m6 push-m2 s12 m7">
            <div class="card">
              <div class="card-content">
                <h4><?php echo $courses[0]->semster; ?></h4>
                  <div class="row">
                    <form action="registraion" method="post" class="col s12">

                      <?php foreach($courses as $key => $course){ ?>
                      <div class="row">
                        <div class="input-field col s6">
                          <input type="checkbox"
                                 id=<?php echo $course->id; ?>
                                 name=<?php echo $course->course_name; ?>
                                 value=<?php echo $course->id .','.$course->credit_hours ?> />

                          <label for=<?php echo $course->id; ?> ><?php echo $course->course_name ?></label>
                        </div>
                      </div>
                      <?php } ?>

                     </div>
              <div class="card-action">
                <button class="btn">Register</button>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>

  </body>
</html>
