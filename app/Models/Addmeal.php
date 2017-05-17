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

 <form action="Addmeal" method="post">    
      <div class="hero-body">
        <div class="container has-text-centered">
        
<label>Name</label>
            <div class="field" >
              <p class="control">
                <input class="input is-primary" type="text" name="name" placeholder="Name" required>
              </p>
            </div>
            
<label>Description</label>
            <div class="field">
                  <p class="control">
                    <input class="input is-info" type="text" name="description" placeholder="description" required>
                  </p>
            </div>

            
<label>Price</label>  
            <div class="field">
              <p class="control">
                <input class="input is-success" type="text" placeholder="Price" name="price" required>
              </p>
            </div>
            
<label>category</label>
            <div class="field has-addons">
  <p class="control is-expanded">
    <span class="select is-fullwidth">
      <select name="category">
        <option value="Uruguay">Uruguay</option>
        <option value="Venezuela">Venezuela</option>
      </select>
    </span>
  </p>
  <p class="control">
    <button type="submit" class="button is-primary">Choose</button>
  </p>
</div>

            <div class="field is-horizontal">
                  <div class="field-label">
                    <label class="label">Extra</label>
                  </div>
                  <div class="field-body">
                    <div class="field">
                      <div class="control">
                        <label class="checkbox">
                          <input type="checkbox" name="extra">
                          Checkbox
                        </label>
                      </div>
                    </div>
                  </div>
            </div>
            
        </div>
      </div>
        </form>

      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
