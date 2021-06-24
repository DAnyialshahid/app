<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<div id="categories" class="row">


 
<div class="container " >

 <br>
 <br>
  <div class="col-lg-12"><div class="top-heading"><h3><span> All categories</span></h3></div></div>
 
<div class="row" >
<div class="grid row d-flex justify-content-center" >
  <div class="grid-sizer"></div>

<?php 

if (isset($data->categoriesByGroups)){
  foreach (array_slice($data->categoriesByGroups,0,21) as $group ) { 

?>
      
<div class="grid-item    "  style="width: 300px;    ">


    <div class="col-md-12" >
    
      <a href="#" class=" list-group-item group a_none ">        <?=$group->name?></a>
    


          <?php 
// exit(print_r($group));
          if (isset($group->categories)){
            foreach (array_slice($group->categories,0,21) as $category ) { 

          ?>
              <div class="col-md-12" style="padding: 0px"  >
                


                          <a  href="<?=base_url()?>category/<?=$category->slug?>" class="list-group-item a_none">
                              <i   class="fa fa-arrow-right"></i> 


                              ➔  <?=$category->name?>
                             </a>
                        </div>  

             <?php 
              }
            }
          ?> 




              </div>  
  </div>

   <?php 
    }
  }
?> 


   
  </div>
  </div>


</div>
 
</div>




 

  