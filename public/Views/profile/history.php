<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>History</title>

      <?php include(__DIR__.'/../includes/assets.php'); ?>
  </head>
  <body>
    <?php include('includes/nav.php'); ?>

      <div class="container">

        <?php foreach($history as $key => $hist){ ?>
          <div class="row">
            <div class="col l6 push-l2">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title"><?php echo date('d-m-Y', strtotime($hist->created_at)); ?></span>
                  <p><?php echo $hist->msg; ?></p>
                </div>
                <div class="card-action">
                  <a href=<?php echo 'invoice?id='.$hist->id; ?> >Show Invoice</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>

  </body>
</html>
