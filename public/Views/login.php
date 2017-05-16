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
                <form action="/login" method="post">
              <div class="card-content">
                  <div class="field">
                  <label class="label">Email</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-success" required type="Email" placeholder="Email" name="Email" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </p>
                  
                </div>
                  <div class="field">
                  <label class="label">Password</label>
                  <p class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="Password" required placeholder="Password" name="Password" value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </p>
                </div>
                  <div class="field is-grouped">
                  <p class="control">
                    <button class="button is-primary">Submit</button>
                  </p>
                </div>

              </div>
            </form>
                    </div>
            
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
