<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orders</title>

      <?php include('includes/assets.php'); ?>
      
      <script>
       $(function(){
           
           $('#country').change(function(){
               
               var id = $(this).val();
               
               $(this).parent().addClass('is-loading');
               
               
               $.post('getCities' , {id : id})
                .done((data) => {
                   $('#city').empty().parent().show();
                   $(this).parent().removeClass('is-loading');
                   $('#city').append(`<option value='0'>Select City</option>`);
                   data.forEach(function(c){ 
                      $('#city').append(`<option value='${c.idcity}'>${c.cityname}</option>`); 
                   });
               });
           });
           
            $('#city').change(function(){
               
               var id = ($(this).val();
               
               $(this).parent().addClass('is-loading');
 
               $.post('getRes' , {id : id})
                .done((data) => {
                   $('#res').empty().parent().show();
                   $(this).parent().removeClass('is-loading');
                   data.forEach(function(c){
                      $('#res').append(`<option value='${c.idresurant}'>${c.nameresturant}</option>`); 
                   });
               });
           });
       })
      </script>
      
  </head>
  <body>
    <section class="hero is-warning is-bold is-fullheight">
      <!-- Hero header: will stick at the top -->
      <?php include('includes/header.php') ?>

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container">
            
            <div class="field is-grouped">
              <p class="control">
                <span class="select is-medium">
                  <select id="country">
                      <option value="0">Select Country</option>
                      <?php foreach($countries as $country){ ?>
                        <option value="<?= $country->idcountry ?>">
                            <?= $country->name ?>
                        </option>
                       <?php } ?>
                  </select>
                </span>
              </p>
              <p class="control">
                <span class="select is-medium " style="display:none">
                  <select id="city"></select>
                </span>
              </p>
             <p class="control">
                <span class="select is-medium " style="display:none">
                  <select id="res"></select>
                </span>
              </p>
           </div>

  
        </div>
      </div>

      <!-- Hero footer: will stick at the bottom -->
    <?php include('includes/footer.php') ?>
    </section>
  </body>
</html>
