<div class="stores-list bg-grey pdTop30"  id="allStores" >



   <div class="container">
   
 
   <div class="top-heading" style="margin-bottom:30px; margin-top:30px"><h3><span>Popular Stores</span></h3></div>
    <div   class="horiz-coupon "  >
  <div class=" row main-carousel " style="margin:0">
  <div class="col-md-3 col-xs-12  carousel-cell"  v-for="store in popular_stores"  style="border: solid #f1f1f1;" >
    <div class="col-md-4 col-xs-4  imageColumn">
      <a :href="base_url+'store/'+store.custom_url" class="">        
       <img class="img-responsive  "  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" style="">
      </a>
    </div>
  <div class="col-md-8">
          <div class="horiz-coupon-heading-box">
            <p class="abs">


         
               <i class="fa fa-tag"></i> {{store.count.coupons}} Codes  <i class="fa fa-tags"></i> {{store.count.deals}} Deals 
                            </p>
            <a :href="base_url+'store/'+store.custom_url"  class="show_coupon" >
              <h3>  {{store.name}}</h3>

            </a>
          </div>
         
          
          
          <div class="col-md-12">
         <div class="action-block " target="_blank">
            <a :href="base_url+'store/'+store.custom_url" target="_blank" class="show_coupon" data-id="11184" data-clipboard-text=" ">
               <p class="btn-code" data-type="deal"> 
                  <span class="btn-hover fix-btn">Visit</span> 
               </p>
            </a>
            <br>
         </div>        </div>


        </div>

    


  </div>
  </div>
</div>


   <div class="top-heading" style="margin-bottom:30px; margin-top:30px"><h3><span>All Stores</span></h3></div>
   
      <div class="store-letter-group"> 

         <h2 class="categories" id="stores-0to9">
            <!-- <strong>0 - 9</strong>  -->

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
                  <li><a href="#0" class="button aplhpabets" id="0" onclick="setCurrentAlphabet(this,'0-9')" >Numbers</a></li>
               </ul>
            </div>


         </h2>
         
         <ul class="all_stores">
         
                  
         <li     v-for="store in allStores" >
              <img  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" v-bind:alt="store.name" :alt="store.name"   width="50" height="50" class="tile-block-logo-image lazyloaded" draggable="false" style="    border-radius: 12px;" >
               <a :href="base_url+'store/'+store.custom_url"> <STRONG>&nbsp;{{store.name}}</STRONG> <br><sup  >{{store.count.coupons}} offers</sup> </a>
            </li>
         </ul>

 
<div class="alphabets-bar">
               <ul style="display: flex;width: 100%;    overflow-y: hidden;overflow-y:hidden;height:60px;list-style-type:none;margin: 0px;padding: 0px">
                  <li><a href="#A" class="button aplhpabets active "  onclick="loadData(this,'1')" >1</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'2')" >2</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'3')" >3</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'4')" >4</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'5')" >5</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'6')" >6</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'7')" >7</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'8')" >8</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'9')" >9</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'10')" >10</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'12')" >12</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'13')" >13</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'14')" >14</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'15')" >15</a></li>
                  <li><a href="#A" class="button aplhpabets"  onclick="loadData(this,'16')" >16</a></li>
               </ul>
            </div>
 

         </div>





   </div>
</div>










 