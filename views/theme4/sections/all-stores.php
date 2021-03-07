
<main class="main"  id="allStores">

    <div class="sb_sections border">
    <div class="container store-container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="store_breadcrumbs">
                    <li><a href="https://www.verifieddeals.co.uk/">Home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">All Stores</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


 
<div class="section bg paddingBottom-flex">
    <div class="container">
                <div class="row">
            <div class="col-lg-12">
                <div class="merchants_popular-stores">
                    <h2 class="section-title md">Popular Merchants</h2>
                    <div class="pp-stores-list"> 

                    <div  v-for="store in popular_stores"   class="col-lg-2 col-md-3 col-sm-3 merchant-column">
                                <a  :href="base_url+'store/'+store.custom_url">
                                    <div class="popular-merchant">
                                        <div class="web_imagebox">
                                            <img   class="img-responsive lazy" v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image">
                                        </div> 
                                        <p class="merchant-title"> {{store.name}}</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                </div>
            </div>
        </div>
            </div>
</div>




<div class="section bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="merchants_list">
                    <h2 class="section-title md">Merchants List</h2>
                    <div class="alphabets-bar">
                        <ul>
                                                    <li><a href="#A" id="A" onclick="setCurrentAlphabet(this,'A')" class="active">A</a></li>
                                                    <li><a href="#B" id="B" onclick="setCurrentAlphabet(this,'B')" >B</a></li>
                                                    <li><a href="#C" id="C" onclick="setCurrentAlphabet(this,'C')" >C</a></li>
                                                    <li><a href="#D" id="D" onclick="setCurrentAlphabet(this,'D')" >D</a></li>
                                                    <li><a href="#E" id="E" onclick="setCurrentAlphabet(this,'E')" >E</a></li>
                                                    <li><a href="#F" id="F" onclick="setCurrentAlphabet(this,'F')" >F</a></li>
                                                    <li><a href="#G" id="G" onclick="setCurrentAlphabet(this,'G')" >G</a></li>
                                                    <li><a href="#H" id="H" onclick="setCurrentAlphabet(this,'H')" >H</a></li>
                                                    <li><a href="#I" id="I" onclick="setCurrentAlphabet(this,'I')" >I</a></li>
                                                    <li><a href="#J" id="J" onclick="setCurrentAlphabet(this,'J')" >J</a></li>
                                                    <li><a href="#K" id="K" onclick="setCurrentAlphabet(this,'K')" >K</a></li>
                                                    <li><a href="#L" id="L" onclick="setCurrentAlphabet(this,'L')" >L</a></li>
                                                    <li><a href="#M" id="M" onclick="setCurrentAlphabet(this,'M')" >M</a></li>
                                                    <li><a href="#N" id="N" onclick="setCurrentAlphabet(this,'N')" >N</a></li>
                                                    <li><a href="#O" id="O" onclick="setCurrentAlphabet(this,'O')" >O</a></li>
                                                    <li><a href="#P" id="P" onclick="setCurrentAlphabet(this,'P')" >P</a></li>
                                                    <li><a href="#Q" id="Q" onclick="setCurrentAlphabet(this,'Q')" >Q</a></li>
                                                    <li><a href="#R" id="R" onclick="setCurrentAlphabet(this,'R')" >R</a></li>
                                                    <li><a href="#S" id="S" onclick="setCurrentAlphabet(this,'S')" >S</a></li>
                                                    <li><a href="#T" id="T" onclick="setCurrentAlphabet(this,'T')" >T</a></li>
                                                    <li><a href="#U" id="U" onclick="setCurrentAlphabet(this,'U')" >U</a></li>
                                                    <li><a href="#V" id="V" onclick="setCurrentAlphabet(this,'V')" >V</a></li>
                                                    <li><a href="#W" id="W" onclick="setCurrentAlphabet(this,'W')" >W</a></li>
                                                    <li><a href="#X" id="X" onclick="setCurrentAlphabet(this,'X')" >X</a></li>
                                                    <li><a href="#Y" id="Y" onclick="setCurrentAlphabet(this,'Y')" >Y</a></li>
                                                    <li><a href="#Z" id="Z" onclick="setCurrentAlphabet(this,'Z')" >Z</a></li>
                                                    <li><a href="#0" id="0" onclick="setCurrentAlphabet(this,'0-9')" >0-9</a></li>
                                                </ul>
                    </div>
                                
 


                                <div class="stores-wrapper">
                                <div class="big-alpha">
                                    <h1>A</h1>
                                </div>
                                <ul class="list"> 

                                    <li     v-for="store in allStores"  style="display: inline;"> 
                                         <!-- <img    v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" v-bind:alt="store.name" :alt="store.name" style="width: 50px;height:  50px;display: inline;">  -->
                                         <a   :href="base_url+'store/'+store.custom_url"> {{store.name}}</a>
                                    </li>
                                </ul>
                            </div>  
                                                      
                                                      
                                                      
                      <center>
        <div class="alphabets-bar">
        <ul class="pagination">
                <li> <a class="active" href="#A" onclick="loadData(this,'1')"> 1</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'2')"> 2</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'3')"> 3</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'4')"> 4</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'5')"> 5</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'6')"> 6</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'7')"> 7</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'8')"> 8</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'9')"> 9</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'10')"> 10</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'11')"> 11</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'12')"> 12</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'13')"> 13</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'14')"> 14</a> </li> 
                <li> <a class="" href="#A" onclick="loadData(this,'15')"> 15</a> </li> 

            </ul>
        </div>
        </center>

            </div>
        </div>
    </div>
</div>





















 

 


 
