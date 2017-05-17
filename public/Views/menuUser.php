
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
            <form>
            <table class="table">
          <thead>
            <tr>
              <th>Chose</th>
              <th>Name</th>

              <th> Description</th>
              <th> Price</th>
              <th> Category</th>
              <th> type</th>

            </tr>
          </thead>
            <tfoot>
                <tr>
                  <th>Chose</th>
                  <th>Name</th>

                  <th> Description</th>
                  <th> Price</th>
                  <th> Category</th>
                  <th> type</th>

                </tr>
            </tfoot>
                
     <tbody>
      
        <?php
    $i=0;
                  foreach($Menu as $m)
                  {
                      echo '<tr>';
                      echo '<th><div class="field">
  <p class="control">
      <input type="checkbox" name ="'.$i.'" value="'.$m->idmeal.'">
  </p>
</div></th>';
                      echo '<th>'.$m->name.'</th>';
                      echo '<th>'.$m->discription.'</th>';
                      echo '<th>'.$m->price.'</th>';
                      echo '<th>'.$m->cname.'</th>';
                      if($m->extra==1)
                      {
                          echo '<th>Extra</th>';
                      }
                      else
                      {
                          echo '<th>Meal</th>';
                      }
                      echo '</tr>';
                  }
                  ?>
                </tbody>
            </table>
       </form>
                </div>  
      </div>
        
        
        
      
      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
