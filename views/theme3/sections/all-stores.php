<main class="main"  id="allStores">
            <div class="page-head-container">
        <div class="container valign-wrapper">
            <h1 class="valign">All Stores</h1>
        </div>
    </div>

    <div class="page-content">
        
        <div class="container breadcrumb-nav">
            <div class="container breadcrumb-list">
                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb-ol">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="/" title=""><span itemprop="name">Home</span> </a> <meta itemprop="position" content="1"> <i class="fa fa-chevron-right"></i></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">All Stores</span> <meta itemprop="position" content="2"> </li>
                </ol>
            </div>
        </div>
        
        <div class="container all-stores">
            <div class="row">
                                    <div class="col s12">
                        <ul class="tabs" style="width: 100%;">
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'A')" class="active">A</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'B')">B</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'C')">C</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'D')">D</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'E')">E</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'F')">F</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'G')">G</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'H')">H</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'I')">I</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'J')">J</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'K')">K</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'L')">L</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'M')">M</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'N')">N</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'O')">O</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'P')">P</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'R')">R</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'S')">S</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'T')">T</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'U')">U</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'V')">V</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'W')">W</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'Y')">Y</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'Z')">Y</a></li>
                                                            <li class="tab col s3"><a href="#list" onclick="setCurrentAlphabet(this,'0-9')">0-9</a></li>
                                                    <div class="indicator" style="right: 1224.35px; left: 0px;"></div></ul>
                    </div>
                    
                               <div id="list1" class="col s12 category-col mt-2">
<br>
                               
                               

                 <div  v-for="store in allStores"  class="col-md-3 mb-2">
                                    <a :href="base_url+'store/'+store.custom_url"  class="card hoverable" style="display: flex; padding: 7px; margin:11px;"> <img  v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image"
                                                   v-bind:alt="store.name" :alt="store.name" style="width: 50px;height:  50px">
                                        <span style="margin-left: 22px;height:40px ">{{store.name}}</span> </a>
                                </div>
                                                   
                                          
                                   
                                                    </div>
                                 </div>


                                 <center>
        <ul class="pagination">
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
    </div>
    </main>



 


 
