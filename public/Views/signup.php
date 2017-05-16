<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Signup</title>

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
                    <form action="signup" method="post" class="col s12">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="first_name" type="text" class="validate" name="first_name">
                          <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="last_name" type="text" class="validate" name="last_name">
                          <label for="last_name">Last Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email">Email</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate" name="password">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col m6 s12">
                          <input name="gender" type="radio" id="male" />
                          <label for="male">Male</label>
                        </div>
                        <div class="input-field col m6 s12">
                          <input name="gender" type="radio" id="female" />
                          <label for="female">Female</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                        <select class="browser-default" name="year_range">
                          <option value="" selected>Choose your Age Range</option>
                          <option value="0-5">0-5 Years</option>
                          <option value="0-10">0-10 Years</option>
                        </select>
                      </div>
                      </div>
                   </div>
              </div>
              <div class="card-action">
                <button class="btn">Signup</button>
              </div>
            </form>
            </div>
          </div>
        </div>

      </div>

  </body>
</html>
