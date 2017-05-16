<!DOCTYPE html>
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
          <th><abbr title="Email">Email</abbr></th>
          <th><abbr title="PhoneNumber">Phone Number</abbr></th>
          <th><abbr title="Address">Address</abbr></th>
          <th><abbr title="City">City</abbr></th>
          <th><abbr title="Role">Role</abbr></th>
          <th><abbr title="Make">Make Admin</abbr></th>
        
        </tr>
      </thead>
              <tfoot>
              <tr>
          <th><abbr title="id">ID</abbr></th>
          <th>Name</th>
          <th><abbr title="Email">Email</abbr></th>
          <th><abbr title="PhoneNumber">Phone Number</abbr></th>
          <th><abbr title="Address">Address</abbr></th>
          <th><abbr title="City">City</abbr></th>
          <th><abbr title="Role">Role</abbr></th>
          <th></th>
        </tr>
          </tfoot>
              <tbody>
              
        <?php
                  foreach($Users as $user)
                  {
                      echo '<tr>';
                      echo '<th>'.$user->id.'</th>';
                      echo '<th>'.$user->name.'</th>';
                      echo '<th>'.$user->email.'</th>';
                      echo '<th>'.$user->phonenumber.'</th>';
                      echo '<th>'.$user->address.'</th>';
                      echo '<th>'.$user->cityname.'</th>';
                      if($user->role==0)
                      {
                        echo '<th>'.'User'.'</th>';
                      echo '<th><a href="/acu/edituser?id='.$user->id.'&role=1" class="button is-success">Make Admin</a></th>';
                      
                      }
                      else if ($user->role==1)
                      {
                          echo '<th>'.'Admin'.'</th>';
                      echo '<th><a href="/acu/edituser?id='.$user->id.'&role=0" class="button is-success">Remove Admin</a></th>';
                      
                      }
                      echo '</tr>';
                  }
                  ?>          
              </tbody>
            </table>
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
