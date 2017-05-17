+<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

      <?php include('includes/assets.php'); ?>
  </head>
  <body>
    <section class="hero is-warning is-bold is-fullheight">
      <!-- Hero header: will stick at the top -->
      <?php include('includes/header.php') ?>

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered">
        <table class="table">
      <thead>
        <tr>
          <th><abbr title="id">ID</abbr></th>
          <th>Name</th>
          <th><abbr title="PhoneNumber">Phone Number</abbr></th>
          <th><abbr title="Address">Address</abbr></th>
          <th><abbr title="City">City</abbr></th>
          <th><abbr title="Edit">Edit/Delete</abbr></th>
          
        </tr>
      </thead>
              <tfoot>
              <tr>
          <th><abbr title="id">ID</abbr></th>
          <th>Name</th>
          <th><abbr title="PhoneNumber">Phone Number</abbr></th>
          <th><abbr title="Address">Address</abbr></th>
          <th><abbr title="City">City</abbr></th>
          <th><abbr title="Edit">Edit/Delete</abbr></th>
          <th></th>
        </tr>
          </tfoot>
              <tbody>
              
        <?php
                  foreach($res as $restu)
                  {
                      echo '<tr>';
                      echo '<th>'.$restu->idresurant.'</th>';
                      echo '<th>'.$restu->nameresturant.'</th>';
                      echo '<th>'.$restu->phonenumberresturant.'</th>';
                      echo '<th>'.$restu->address.'</th>';
                      echo '<th>'.$restu->cityname.'</th>';
                      echo '<th><a href="/acu/editres?id='.$restu->idresurant.'" class="button is-success">Edit</a>
                      <a href="/acu/deleteres?id='.$restu->idresurant.'" class="button is-success">Delete</a>
                      <a href="/acu/menuadmin?id='.$restu->idresurant.'" class="button is-success">Menu</a>
                      </th>';
                      echo '</tr>';
                  }
                  ?>          
              </tbody>
            </table>
            <a href="/acu/addrest" class="button is-success">Add Resturant</a>
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
