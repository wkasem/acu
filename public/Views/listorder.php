
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
             

              <th> OrderID</th>
              <th> Restaurant</th>
              <th> Description</th>
              <th> Price</th>
              <th> user</th>

            </tr>
          </thead>
            <tfoot>
                <tr>
                
                  <th> OrderID</th>
              <th> Restaurant</th>
              <th> Description</th>
              <th> Price</th>
              <th> user </th>

                </tr>
            </tfoot>
                
     <tbody>
    <tr>
      <th>1</th>
      <td>Leicester City</td>
      <td>38</td>
      <td>23</td>
      <td>12</td>
      
      </tr> 
                
                </tbody>
            </table>
            <div class="field is-grouped">
  <p class="control">
    <button class="button is-primary">Submit</button>
  </p>
  <p class="control">
    <button class="button is-link">Cancel</button>
  </p>
</div>
          </div>
          
          
      </div>
        
        
        
      
      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
