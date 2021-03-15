<div  id="allStores" >
   <div class="section-banner">
      <div class="section-banner-container container">
         <div class="section-banner-content">
            <div class="section-banner-content-inner">
               <nav role="navigation" class="breadcrumbs">
                  <div class="breadcrumbs-inner">
                     <a href="/" class="breadcrumbs-item">
                     <span class="breadcrumbs-text">Home</span>
                     </a>
                     <div class="breadcrumbs-item">
                        <span class="breadcrumbs-text">All Stores</span>
                     </div>
                  </div>
               </nav>
               <h1 class="section-banner-title">
                  All merchants List
               </h1>
            </div>
         </div>
      </div>
   </div>
   <div class="layout">
      <div class="container">
         <div class="layout-content">
            <div id="offers" class="section-tile-grid">
                <li     style="display: inline;">
                     <!-- <img   style="width: 50px;height:  50px;display: inline;">  -->
                     <a   ></a>
                  </li> 

<div class="alphabets-bar">
               <ul style="display: flex;width: 100%;    overflow-y: hidden;overflow-y:hidden;height:60px;list-style-type:none;margin: 0px;padding: 0px">
                  <li><a href="#A" class="button aplhpabets active " id="A" onclick="setCurrentAlphabet(this,'A')" >A</a></li>
                  <li><a href="#B" class="button aplhpabets" id="B" onclick="setCurrentAlphabet(this,'B')" >B</a></li>
                  <li><a href="#C" class="button aplhpabets" id="C" onclick="setCurrentAlphabet(this,'C')" >C</a></li>
                  <li><a href="#D" class="button aplhpabets" id="D" onclick="setCurrentAlphabet(this,'D')" >D</a></li>
                  <li><a href="#E" class="button aplhpabets" id="E" onclick="setCurrentAlphabet(this,'E')" >E</a></li>
                  <li><a href="#F" class="button aplhpabets" id="F" onclick="setCurrentAlphabet(this,'F')" >F</a></li>
                  <li><a href="#G" class="button aplhpabets" id="G" onclick="setCurrentAlphabet(this,'G')" >G</a></li>
                  <li><a href="#H" class="button aplhpabets" id="H" onclick="setCurrentAlphabet(this,'H')" >H</a></li>
                  <li><a href="#I" class="button aplhpabets" id="I" onclick="setCurrentAlphabet(this,'I')" >I</a></li>
                  <li><a href="#J" class="button aplhpabets" id="J" onclick="setCurrentAlphabet(this,'J')" >J</a></li>
                  <li><a href="#K" class="button aplhpabets" id="K" onclick="setCurrentAlphabet(this,'K')" >K</a></li>
                  <li><a href="#L" class="button aplhpabets" id="L" onclick="setCurrentAlphabet(this,'L')" >L</a></li>
                  <li><a href="#M" class="button aplhpabets" id="M" onclick="setCurrentAlphabet(this,'M')" >M</a></li>
                  <li><a href="#N" class="button aplhpabets" id="N" onclick="setCurrentAlphabet(this,'N')" >N</a></li>
                  <li><a href="#O" class="button aplhpabets" id="O" onclick="setCurrentAlphabet(this,'O')" >O</a></li>
                  <li><a href="#P" class="button aplhpabets" id="P" onclick="setCurrentAlphabet(this,'P')" >P</a></li>
                  <li><a href="#Q" class="button aplhpabets" id="Q" onclick="setCurrentAlphabet(this,'Q')" >Q</a></li>
                  <li><a href="#R" class="button aplhpabets" id="R" onclick="setCurrentAlphabet(this,'R')" >R</a></li>
                  <li><a href="#S" class="button aplhpabets" id="S" onclick="setCurrentAlphabet(this,'S')" >S</a></li>
                  <li><a href="#T" class="button aplhpabets" id="T" onclick="setCurrentAlphabet(this,'T')" >T</a></li>
                  <li><a href="#U" class="button aplhpabets" id="U" onclick="setCurrentAlphabet(this,'U')" >U</a></li>
                  <li><a href="#V" class="button aplhpabets" id="V" onclick="setCurrentAlphabet(this,'V')" >V</a></li>
                  <li><a href="#W" class="button aplhpabets" id="W" onclick="setCurrentAlphabet(this,'W')" >W</a></li>
                  <li><a href="#X" class="button aplhpabets" id="X" onclick="setCurrentAlphabet(this,'X')" >X</a></li>
                  <li><a href="#Y" class="button aplhpabets" id="Y" onclick="setCurrentAlphabet(this,'Y')" >Y</a></li>
                  <li><a href="#Z" class="button aplhpabets" id="Z" onclick="setCurrentAlphabet(this,'Z')" >Z</a></li>
                  <li><a href="#0" class="button aplhpabets" id="0" onclick="setCurrentAlphabet(this,'0-9')" >0-9</a></li>
               </ul>
            </div>
            <hr><br>    

               <div  v-for="store in allStores"  class="grid tile tile-block " style="height: 170px"  >
                  <div class="tile-block-inner">
                     <div class="tile-block-content">
                          <span class="tile-expires" style="width: 100%; text-align: center; ">{{store.name}}</span>
                        <a :href="base_url+'store/'+store.custom_url" class="tile-block-logo" style="width: 5.9375rem">
                          
                           <picture>
                           
                              <img  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" v-bind:alt="store.name" :alt="store.name"   width="175" height="175" class="tile-block-logo-image lazyloaded" draggable="false" >
                           </picture>
                        </a>
                        <a :href="base_url+'store/'+store.custom_url"  class="tile-block-label">
                     
                    
                 <!--        <h2 class="tile-block-title"    >
                           <span class="hover-over" title=""> {{store.name}}</span>
                        </h2> -->
                            </a>
                     </div>
                     

                     <div class="tile-block-footer">
 <!-- {{store.name}} -->
                        <span class="tile-expires">Deals : {{store.count.deals}}</span>
    
                        <span class="tile-terms" href="#" rel="noopener nofollow" >
                       Coupons : {{store.count.coupons}}
                        </span>
                        <br> 
                         <a :href="base_url+'store/'+store.custom_url"  class=" button  "> 
                             Browse all             
                        </a>
                       
                     </div>    

                   
                  </div>
               </div>





  <ul style="display: flex;width: 100%;    overflow-x: scroll;overflow-y:hidden;height:60px;list-style-type:none;padding: 0px">

                  <li><a href="#A" class="button aplhpabets active"  onclick="loadData(this,'1')" >1</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'2')" >2</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'3')" >3</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'4')" >4</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'5')" >5</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'6')" >6</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'7')" >7</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'8')" >8</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'9')" >9</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'10')" >10</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'11')" >11</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'12')" >12</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'13')" >13</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'14')" >14</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'15')" >15</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'Q')" >Q</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'R')" >R</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'S')" >S</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'T')" >T</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'U')" >U</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'V')" >V</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'W')" >W</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'X')" >X</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'Y')" >Y</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'Z')" >Z</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'0-9')" >0-9</a></li>
               </ul>
            </div>
            <hr><br>    





            </div>

               <aside class="layout-sidebar">
            <div class="panel">
               <div class="panel-inner">
                  <h2 class="h2">Popular Stores</h2>
                  <div  v-for="store in popular_stores"   class="col-lg-2 col-md-3 col-sm-3 merchant-column">
                     <a  :href="base_url+'store/'+store.custom_url">
                        <div class="popular-merchant">
                         
                           <p class="merchant-title"> {{store.name}}</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <lazy-html class="panel layout-sidebar-mpu" props="{&quot;htmlPath&quot;:&quot;/modal/mpu&quot;}">
               <div></div>
            </lazy-html>
            <lazy-html class="panel layout-sidebar-mpu" props="{&quot;htmlPath&quot;:&quot;/modal/appupsell&quot;}">
               <div></div>
            </lazy-html>
         </aside>
    

        </div>
    </div>
        
</div>