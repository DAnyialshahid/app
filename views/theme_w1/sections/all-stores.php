<div class="container">


  <div class="section first bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="section_title border">Popular Brands</h1>
        <div class="astrodivider">
          <div class="astrodividermask"></div>
          <span><i>☆</i></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_stores_column ">
        
        <div class="topstores_carousel row">
                    

                    <?php 

if (isset($data->popularStores)){
  foreach (array_slice($data->popularStores,0,6) as $store ) { 

?>

               <div class="top_brand_block  col-xs-4 col-sm-3 col-md-3  col-lg-2">
            <a href="/<?=$store->custom_url?>">
              <div class="web_imagebox">
                <img class="img-responsive owl-lazy" src="<?=$store->img_src?>" style="opacity: 1;">
              </div>
              <h2 class="tbb_title">
                <?=$store->name?>  </h2>
            </a>
          </div>

  <?php 
    }
  }
?>


                    

     
      </div>
    </div>
  </div>
</div>
</div>


      <div class="accordion">
        <dl>
        <dt>
          <div class="row">
            <ul class="pagination-links" >
              <li></li><li>


 <?php   foreach (['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']as $alphbets ) {    ?>
                <a href="/stores/<?=$alphbets?>" ><?=$alphbets?></a>
             
     <?php  }  ?>
  <a href="/stores/all" >All</a>


              </li>              </ul>

        
 
     </div>
     </dt>
      </dl>
      </div>
      <div class="accordion">
      <dl>
        <dd class="accordion-content accordionItem is-expanded" id="accordionlist" aria-hidden="false">
          <ul class="categories-holder">

            <?php 

    if (isset($data->stores)){
      foreach (array_slice($data->stores,0,9999999) as $store ) { 

    ?>
       <li><a href="/store/<?=$store->custom_url?>"><?=$store->name?></a></li>

      <?php 
        }
      }
    ?>
          </ul>
        </dd>
      </dl>
    </div>


  </div>



















 