<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>

      <?php include(__DIR__.'/../includes/assets.php'); ?>
  </head>
  <body>
    <?php include('includes/nav.php'); ?>

      <div class="container">

        <table class="striped">
          <thead>
            <tr>
                <th data-field="id">Course Name</th>
                <th data-field="name">Semester</th>
                <th data-field="price">Credit Hours</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach($thisYear as $key => $course){ ?>
            <tr>
              <td><?php echo $course->course_name;?></td>
              <td><?php echo $course->semester;?></td>
              <td><?php echo $course->credit_hours;?></td>
            </tr>
            <?php } ?>
          </tbody>
       </table>

      </div>

  </body>
</html>
