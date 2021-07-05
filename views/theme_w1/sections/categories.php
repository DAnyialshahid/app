<div class="container">
<?php 

if (isset($data->categoriesByGroups)){
  foreach (array_slice($data->categoriesByGroups,0,21) as $group ) { ?>

    <div class="accordion">
        <dl><dt id="accord-trig">

          <a href="#accordionlist" id="accord-child" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger is-expanded"><?=$group->name?></a><a href="https://www.savified.com/categories/food-and-drink" class="btn btn-visit-s">View All</a>
        </dt><dd class="accordion-content accordionItem is-expanded" id="accordionlist" aria-hidden="true">
        <ul class="categories-holder">
        

        <?php 
// exit(print_r($group));
          if (isset($group->categories)){
            foreach (array_slice($group->categories,0,21) as $category ) { 

          ?>

             <li><a href="<?=base_url()?>category/<?=$category->slug?>"><?=$category->name?></a></li>

          <?php
          }}
          ?>
            </ul></dd></dl></div>
         


<?php
}}
?>



</div>