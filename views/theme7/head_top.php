<t id="top_menu_bar">
<navbar>
   <div class="navbar nav ">
      <div class="container-fluid">
         <div class="v-flex">
            <div class="row">
              <div class="container">
              <div class="navbar-body">
               <div class="navbar-start">
                  <div class="logo-wrapper">
                     <a href="/">
                     <img  src="<?=logo?>"  class="img-responsive" >
                     </a>

                  </div>
               </div>
                 <!-- <span class="hd-seperator"></span> -->
               <form action="#" class="form-search" method="post" accept-charset="utf-8">
                  
                 <div class="search" style="    margin-right: 0;">
 <!--start d_search-->
      <input type="text"  id="search-input"  class=" search-input search-textbox query js-search-query js-search-panel-opener" autocomplete="off" name="query" type="search" placeholder="Start searching...">
 <!--- end d_search-->

 
                  
                    <a class="p-0"><i class="fa fa-search black"></i></a>



                 </div>
                 <div class="search_result_box border-orange"></div>
                        <ul class="socialLinksUl socialLinksUl_top "  ><li><a target="_blank" class="icon-facebook" href="http://facebook.com"><i class="wh fa fa-facebook"></i></a></li><li><a target="_blank" class="icon-gplus"><i class="wh fa fa-google-plus"></i></a></li><li><a target="_blank" class="icon-twitter" href="http://Twitter.com"><i class="wh fa fa-twitter"></i></a></li></ul>

                 </form>  

            <!--      <a href="https://www.verifieddeals.co.uk/categories" class="btn btn-category">
            <img src="https://www.verifieddeals.co.uk/assets/theme/images/category-nav-icon.png" class="img-responsive">Categories 
          </a> -->
                       

              </div>
                <ul class="site-nav">
                                <li><a :href="base_url+'stores'" >Stores </a></li>
                                <li><a :href="base_url+'categories'"  >Categories </a></li>
                                <li><a :href="base_url+'page/submit_offer'">Add offer </a></li>
                                <li><a  :href="base_url+'pages/faq'">Help</a></li>   
                                   <li><a  :href="base_url+'page/about_us'">About Us</a> </li>  
                                <li><a :href="base_url+'page/contact_us'" >Contact  Us</a></li>
                            </ul>


  
                   <!---start d_search-->
 <div class="search_resultbox" style="display: none;">
            <h2 class="heading">stores</h2>
            <ul class="search-list"></ul>
          </div>
           <!--- end d_search-->

            </div>
         </div>

       
      </div>
      <!-- <div class="container-fluid">
         <div class="row">
           <div class="container">
           
           </div>
         </div>
         <div class="tab-highlighter"></div>
      </div> -->
   </div>
 </div>
</navbar>

  




  
</t>


 