<div   id="top_menu_bar"  class=" md:tw-block" style="background: rgb(40, 40, 40);padding-top: 5px;">
    <div id="miss-modal-activator" style="height: 5px; position: fixed; top: 0px; z-index: 100; width: 100%;"></div>
    <header class="container-fluid  tw-justify-between" style="padding:0px">
        <div class="container col-md-12 col-xs-12  d-flexn" style="display: none; align-items: center; justify-content: center; " > 
        <div class="tw-hidden md:tw-block   lg:tw-block   tw-justify-betwee col-xs-12 tw-flex-col tw-items-end tw-w-full tw-my-2">
                <ul class="tw-list-reset tw-flex   tw-justify-between tw-items-center tw-text-xs">
                    <a class="col-auto tw-text-grey tw-pl-4" v-for="cat in popular_categories.slice(0, 9)" :href="base_url+'category/'+cat.slug" ><li>{{cat.name}}</li></a> 
                    <a  :href="base_url+'categories'" class="col-xs-4 tw-text-grey tw-pl-4"><li>All</li></a> 
                </ul>
            </div>
        </div>
        <div class="col-md-12 col-xs-12" style="padding:0px">
              <div class="col-md-3 col-xs-12 text-center">
                    <a :href="base_url" class="tw-block img-responsive" style=" display: inline-block;width: 236px;" ><img   src="<?=logo?>"  alt="" /></a>
              </div>
        <div class="col-md-3 col-xs-12 ">
              <ul class="tw-list-reset tw-flex tw-justify-between tw-w-full tw-my-4">
                <li class="nav-item dropdown">
                    <a   class="nav-link dropdown-toggle tw-text-grey-lightest hover:tw-text-blue tw-font-normal tw-pr-2"  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Stores</a>
                    <div class="dropdown-menu row">
                      <div class="s-popover--arrow" style="position: absolute; left: 0px; transform: translate(99px, 0px);"></div>
                          
                        <div v-for="store in popular_stores"  class="col-xs-12">
                      <a class="dropdown-item" :href="base_url+'store/'+store.custom_url">{{store.name}}</a> 
                      </div>
<div   class="col-xs-12">
                             <a class="dropdown-item" :href="base_url+'stores'" style="color:#3097d1 !important">View All Stores</a> 
                          </div>
                    </div>
                  </li>
               
                <a   :href="base_url+'categories'" class="tw-text-grey-lightest hover:tw-text-blue tw-font-normal tw-px-2"><li>Categories</li></a>
                <!-- <a :href="base_url+'page/submit_offer'" class="tw-text-grey-lightest hover:tw-text-blue tw-font-normal tw-px-2"><li>Submit Offer</li></a> -->
                <a   :href="base_url+'page/about_us'"   class="tw-text-grey-lightest hover:tw-text-blue tw-font-normal tw-px-2"><li>About</li></a>
                <a  :href="base_url+'page/contact_us'"  class="tw-text-grey-lightest hover:tw-text-blue tw-font-normal tw-px-2"><li>Contact</li></a> 
            </ul> 
          </div>

            <div class="col-md-3 col-xs-12">
              <div dusk="merchant-search" class="col-xs-12 nav-search tw-relative tw-w-full tw-z-20">
                  <div class="tw-flex">
                    <div class="tw-flex tw-flex-grow tw-rounded-l-sm tw-text-grey-darker tw-p-2">
               
                          <input type="text" class="typeahead" style="padding: 12px" id="search_input" name="merchant" placeholder="Search your favorite merchants..." class="tw-flex tw-flex-grow tw-rounded-l-sm tw-text-grey-darker tw-p-2" />

                    </div>
                     

                      <a href="#" class="tw-flex tw-items-center tw-rounded-r-sm tw-text-grey-lightest tw-bg-blue" style="height: 43px; margin-top: 7px; margin-left: -8px; "><i class="tw-p-4 fa fa-search"></i></a> </div>
                  <!---->
              </div>
              
          </div>
            <div class="col-md-1 col-xs-12 pt-2" style="padding-top: 18px">
               <div class="footer-social" style="margin: auto; width: fit-content; "> 

                   <a  :href="configs.facebook"  target="_blank"><i class="fab fa-facebook"></i></a> 
                    <a  :href="configs.instagram"  target="_blank"><i class="fab fa-instagram"></i></a>
                    <a  :href="configs.twitter"  target="_blank"><i class="fab fa-twitter"></i></a>

                </div>
              
          </div>
        </div>
    </header>
</div>