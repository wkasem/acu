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
                  <p class="control">
                    <input class="input" type="text" placeholder="Text input">
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
