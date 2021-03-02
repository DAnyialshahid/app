<div class="container main-container">
    <div class="row">
        <div class="col-xs-12 wrapper clearfix">
            <h1 >Coupons, Promo Codes &amp; Deals by A Stores </h1>


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
            <div class="sitemap-stores">
              
                <div class="browse-card-list"> 

                    <div class="card-item"  v-for="store in allStores">
                        <a :href="base_url+'store/'+store.custom_url" title=" ">
                            <div class="img-container">
                                <img   v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" 
                                       v-bind:alt="store.name"
                                    class="lazy-load img-responsive"
                                 
                                />
                            </div>
                            <span>{{store.name}}</span>
                        </a>
                        <button data-id="132683" class="follow" aria-label="Follow AAA"><i class="df df-follow-o"></i></button>
                    </div>


    </div>
            </div>
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
        </div>
    </div>
</div>
