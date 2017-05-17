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
             <form action="addrest" method="post" >
              <div class="card-content">                  
                  <div class="field">
                <label class="label">Name</label>
                  <p class="control has-icons-left has-icons-right">
                      
            <input class="input is-success" type="text" required placeholder="Name" name="Name" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                  </p>
                  
                </div>
                  <div class="field">
                  <label class="label">Phone Number</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="number" placeholder="Phone Number" name="PhoneNumber" value="" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </p>
                </div>
                  <div class="field">
                  <label class="label">Adress</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" placeholder="Adress" name="Address" value="" required>
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
              <label class="label">City</label>
              <p class="control">
                <span class="select">
                  <select name="CityId" required>
                      <?php
                      foreach ($cities as $city) {
                        echo '<option value='.$city->idcity.'>'.$city->cityname.'</option>';
                      }
                      ?>
                  </select>
                </span>
              </p>
            </div>
                  <input type="hidden" name="id" value="<?php echo $res[0]->idresurant;?>">
              <div class="field is-grouped">
                <p class="control">
            <button class="button is-primary">Submit</button>
            </p>
        </div>  
              </div>
         </form>
           
        </div>
      </div>
      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
