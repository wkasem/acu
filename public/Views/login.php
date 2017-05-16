<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

      <?php include('includes/assets.php'); ?>
  </head>
  <body>
    <?php include('includes/nav.php'); ?>

      <div class="container">

        <div class="row">
          <div class="col m6 push-m2 s12 m7">
            <div class="card">
              <div class="card-content">
                  <div class="row">
                    <form action="login" method="post" class="col s12">
                      <div class="row">
                        <div class="input-field col l12 s6">
                          <input id="email" type="text" class="validate" name="email">
                          <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col l12 s6">
                          <input id="password" type="password" class="validate" name="password">
                          <label for="password">password</label>
                        </div>
                      </div>
                   </div>
              </div>
              <div class="card-action">
                <button class="btn">Login</button>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>

  </body>
</html>
