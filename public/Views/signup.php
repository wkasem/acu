<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup</title>

      <?php include('includes/assets.php'); ?>
  </head>
  <body>
    <section class="hero is-warning is-bold is-fullheight">
      <!-- Hero header: will stick at the top -->
      <?php include('includes/header.php') ?>

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container">
          
            <div class="card">
              <div class="card-content">
                  <div class="field">
                <label class="label">Name</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" placeholder="Name" name="Name" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-check"></i>
                    </span>
                  </p>
                  
                </div>
                  <div class="field">
                  <label class="label">Email</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="Email" placeholder="Email" name="Email" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-warning"></i>
                    </span>
                  </p>
                  
                </div>
                  <div class="field">
                  <label class="label">Password</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="Password" placeholder="Password" name="Password" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-warning"></i>
                    </span>
                  </p>
                  
                </div>
                  <div class="field">
                  <label class="label">Phone Number</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="number" placeholder="Phone Number" name="PhoneNumber" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-warning"></i>
                    </span>
                  </p>
                </div>
                  <div class="field">
                  <label class="label">Adress</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="number" placeholder="Adress" name="Adress" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                      <i class="fa fa-warning"></i>
                    </span>
                  </p>
                </div>
                <div class="field">
              <label class="label">City</label>
              <p class="control">
                <span class="select">
                  <select>
                      
                  </select>
                </span>
              </p>
            </div>
              </div>
            </div>
            
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
