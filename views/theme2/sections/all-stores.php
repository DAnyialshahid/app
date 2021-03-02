<section class="main-content " id="allStores">
    <div class="container">
        <div class="row">
            <div class="article">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div  >
                                   <h1 >Coupons, Promo Codes &amp; Deals by Stores alphabets</h1> 

                        <hr class="border-line" />
                        <div class="col-xs-12 wrapper clearfix">
                                <ul class="pagination sitemap-letters"> 
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'A')" >A</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'B')" >B</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'C')" >C</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'D')" >D</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'E')" >E</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'F')" >F</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'G')" >G</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'H')" >H</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'I')" >I</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'J')" >J</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'K')" >K</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'L')" >L</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'M')" >M</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'N')" >N</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'O')" >O</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'P')" >P</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'Q')" >Q</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'R')" >R</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'S')" >S</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'T')" >T</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'U')" >U</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'V')" >V</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'W')" >W</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'X')" >X</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'Y')" >Y</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'Z')" >Z</a></li>
                                    <li><a href="#" onclick="setCurrentAlphabet(this,'0-9')">0-9</a></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
   
           
                          <ul class="stores-list row">

                               <li  v-for="store in allStores"  class="col-xs-3 col-sm-4 col-md-4 col-lg-4 mb-1 " style="margin-bottom:6px" >
                                   <a :href="base_url+'store/'+store.custom_url" class="row" title=" ">
                                       
                                            <img    v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" 
                                       v-bind:alt="store.name"
                                                class="col-xs-12 col-md-3 lazy-load img-responsive"
                                                style="border-radius: 7px;box-shadow: rgb(0 0 0 / 4%) 0px 0px 11px 1px;" 
                                                 
                                             
                                            />
                                              <span  class="col-xs-8 hidden-xs" >{{store.name}}</span>
                                       
                                      
                                    </a>
                                    
                               </li>
                               

                          </ul>

             
     
        <center>
        <ul class="pagination" style="display: none">
                <li class="active">
                    <a href="#" onclick="loadData(this,'1')">
                        1
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'2')">
                        2
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'3')">
                        3
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'4')">
                        4
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'5')">
                        5
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'6')">
                        6
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'7')">
                        7
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'8')">
                        8
                    </a>
                </li>
                <li>
                    <a href="#" onclick="loadData(this,'9')">
                        9
                    </a>
                </li>
                <li>
                    <a href="#0" onclick="loadData(this,'10')">
                        10
                    </a>
                </li>
                <li>
                    <a href="#1" onclick="loadData(this,'11')">
                        11
                    </a>
                </li>
                <li>
                    <a href="#2" onclick="loadData(this,'12')">
                        12
                    </a>
                </li>
                <li>
                    <a href="#3" onclick="loadData(this,'13')">
                        13
                    </a>
                </li>
                <li>
                    <a href="#4" onclick="loadData(this,'14')">
                        14
                    </a>
                </li>
                <li>
                    <a href="#5" onclick="loadData(this,'15')">
                        15
                    </a>
                </li>
                <li>
                    <a href="#6" onclick="loadData(this,'16')">
                        16
                    </a>
                </li>
            </ul>
        </center>
    </div>
</section>


 
