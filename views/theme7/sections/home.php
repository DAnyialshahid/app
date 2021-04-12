  

<main class="main" id="home">

<!-- 
    <div class="section bg slider-box">
    <div class="container">

 
    <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="mainpage-title">
              <h1> {{configs.site_name}} have some Special Offers for you!</h1>
        <p>Free Online Coupons and Promo Codes for the Store You Love!</p>
      </div>
    </div>
 <hr class="seperator">


<div class="row  "   >
  <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>  Pouplar Stores </span> </h3>
        </div>
      </div>

</div>
<div class="row hot-stores"   >

<div class="col-md-2 col-xs-12"  v-for="store in show_in_home_stores" >
<div class="noPd">
      <div class="top-store">
        <a :href="base_url+'store/'+store.custom_url" style="text-decoration:none">
          <div class="web_imagebox">
            <img class="img-responsive owl-lazy" v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" style="opacity: 1;">
          </div>
          <p class="psc_title">{{store.name}}</p>
         
        </a>
      </div>
    </div>
    </div>
</div>
 


         
    </div>
<hr>

    <div class="col-md-12 col-xs-12"    >
      <div class="owl-carousel owl-theme">

            <a v-for="slide in slides"  :href="slide.link">
              <img class="owl-lazy"   :data-src="api_url+'/assets/uploads/slides/'+slide.file_name"   alt="" style="height: 320px">
             </a>
            </div>
    </div>


</div>
 -->


 <div class="row  bgwhite"   >
    <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>  Pouplar Stores </span> </h3>
        </div>
      </div>
 </div>
 <div class="row hot-stores bgwhite"   >

<div class="col-md-2 col-xs-12"  v-for="store in show_in_home_stores" >
<div class="noPd">
      <div class="top-store">
        <a :href="base_url+'store/'+store.custom_url" style="text-decoration:none">
          <div class="web_imagebox">
            <img class="img-responsive owl-lazy" v-bind:src="api_url+'/assets/uploads/stores/'+store.feature_image" style="opacity: 1;">
          </div>
          <p class="psc_title">{{store.name}}</p>
         
        </a>
      </div>
    </div>
    </div>
</div>    



  <div class="featured-coupons bgwhite pdTop30 pdBtm30 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>   Featured Coupons & Deals </span> </h3>
        </div>
      </div>
    </div>
    <div class="row   recommended-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable"> 

      <div v-for="coupon in recommended_coupons"  class="col-xs-12 col-sm-6 col-md-3  ">
                      

                        <!--    <span class="ribbon ribbon1" v-if="coupon.exclusive!=0"><b>Exclusive </b></span>
            <span class="ribbon ribbon2" v-if="coupon.verified!=0"><b style="color: #2bc089;">Verified </b></span>
            <span class="ribbon ribbon3" v-if="coupon.featured!=0"><b style="color: #c0842b;">Featured </b></span>

 {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}} 
 <span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
<span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>
<span>See all  <b>{{coupon.store.name}}</b> Offers - </span>
             -->
            <div class="featured-coupons-box ">
              
              <div class="featured-content-box row">
                <div class="col-md-3">
                  <a :href="base_url+'store/'+coupon.store.custom_url"  class="img-center">   

                   <img v-if="coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"     class="img-responsive">
                  <img v-if="!coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"      class="img-responsive">


                  </a>
              </div>


              <div class="col-md-9">
                  <div class="expired-info">
                  <span class="p-5 fw-600"><i class="fa fa-eye"></i> {{coupon.visits}} Used</span>
                            <span class="p-5 fw-600"><i class="fa fa-clock-o"></i> {{coupon.expire_date}}</span>
                      </div>
                <!--<p class="code-type">Code</p>-->
                <a href="javascript:void(0)" target="_blank" class="show_coupon copycodebtn" data-id="19798" data-clipboard-text=" ">
                  <p class="featured-coupon-title">{{coupon.name}}</p>
                </a>
                <div class="featured-coupon-desc" v-if="coupon.description"> {{coupon.description.substring(0,92)}}  <span class="moreellipses">...</span><span class="morecontent"> 
                  <a :href="base_url+'store/'+coupon.store.custom_url"  class="morelink">Read more</a></span>
                </div>
               

              </div>
              </div>
               
              <div class="action-block " target="_blank">
               


            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass  "
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  > 

                         <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Get Deal</span> 
                      </p>

                </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >


                   <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Copy Code</span> 
                      </p>  

                  <!-- {{coupon.coupon_code}} -->

                    </a>

 

                  </div></div>        
              </div>


            

    </div>
  </div>
</div>













<div class="featured-coupons bgwhite pdTop30 pdBtm30 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>Weekly Most Popular Coupons & Deals </span> </h3>
        </div>
      </div>
    </div>
    <div class="row   popular-coupon-carousel hot-deals-carousel featured-coupon-carousel main-carousel flickity-enabled is-draggable"> 
            <div v-for="coupon in popular_coupons"  class="col-xs-12 col-sm-6 col-md-3  ">
                      

                        <!--    <span class="ribbon ribbon1" v-if="coupon.exclusive!=0"><b>Exclusive </b></span>
            <span class="ribbon ribbon2" v-if="coupon.verified!=0"><b style="color: #2bc089;">Verified </b></span>
            <span class="ribbon ribbon3" v-if="coupon.featured!=0"><b style="color: #c0842b;">Featured </b></span>

 {{coupon.short_title.split(' ')[0]}}     {{coupon.short_title.split(' ')[1]}} 
 <span v-if="coupon.type=='coupon'"   style="font-size:12px;color:orange;">  <b> Code </b>  </span>
<span v-if="coupon.type=='deal'"   style="font-size:12px;color:blue;"> <b>Deal  </b></span>
<span>See all  <b>{{coupon.store.name}}</b> Offers - </span>
             -->
            <div class="featured-coupons-box ">
              
              <div class="featured-content-box row">
                <div class="col-md-3">
                  <a :href="base_url+'store/'+coupon.store.custom_url" class="img-center" >   

                   <img v-if="coupon.feature_image" :src="api_url+'/assets/uploads/coupons/'+coupon.feature_image"     class="img-responsive">
                  <img v-if="!coupon.feature_image && coupon.store.feature_image" :src="api_url+'/assets/uploads/stores/'+coupon.store.feature_image"      class="img-responsive">


                  </a>
              </div>


              <div class="col-md-9">
                  <div class="expired-info">
                  <span class="p-5 fw-600"><i class="fa fa-eye"></i> {{coupon.visits}} Used</span>
                            <span class="p-5 fw-600"><i class="fa fa-clock-o"></i> {{coupon.expire_date}}</span>
                      </div>
                <!--<p class="code-type">Code</p>-->
                <a href="javascript:void(0)" target="_blank" class="show_coupon copycodebtn" data-id="19798" data-clipboard-text=" ">
                  <p class="featured-coupon-title">{{coupon.name}}</p>
                </a>
                <div class="featured-coupon-desc" v-if="coupon.description"> {{coupon.description.substring(0,92)}}  <span class="moreellipses">...</span><span class="morecontent"> 
                  <a :href="base_url+'store/'+coupon.store.custom_url"  class="morelink">Read more</a></span>
                </div>
               

              </div>
              </div>
               
              <div class="action-block " target="_blank">
               


            <a  v-if="coupon.type=='deal'"   target="_blank" 
                                  class="clipClass  "
                                 :data-clipboard-text="'DEAL Activated'" 
                                 v-on:click="loadCouponAffilate(coupon)"
                                 :href="base_url+'?coupon_id='+coupon.id"
                                 :coupon_id="coupon.id"
                                 style="bottom:auto" 
                                  > 

                         <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Get Deal</span> 
                      </p>

                </a>

                <a  v-if="coupon.type=='coupon'"   target="_blank" 
                                     class="clipClass "
                                     :data-clipboard-text="coupon.coupon_code" 
                                     v-on:click="loadCouponAffilate(coupon)"
                                     :href="base_url+'?coupon_id='+coupon.id"
                                     :coupon_id="coupon.id"
                                     style="bottom:auto" 
                                      >


                   <p class="btn-code" data-type="deal"> 
                        <span class="btn-hover fix-btn">Copy Code</span> 
                      </p>  

                  <!-- {{coupon.coupon_code}} -->

                    </a>

 

                  </div></div>        
              </div>

    </div>
  </div>
</div>




 <div class="section newsletterbox   seperator-wrapper" >
    <div class="container">
        <div class="row">
            
        <div class="row text-center">
            <div class="col-md-12">
              <img width="90" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzIwMCcgd2lkdGg9JzIwMCcgIGZpbGw9IiNmZmZmZmYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA2NCA2NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjQgNjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj48cGF0aCBkPSJNNTYuNTcsOC4zNDdjLTMuNDUtMi44NTgtNy45NTUtNC4wMjItMTIuMzU4LTMuMTg4Yy0wLjAwNywwLjAwMS0wLjAxNCwwLjAwMi0wLjAyLDAuMDA0TDI1Ljc5NSw5LjAyMSAgYy0wLjA0NiwwLjAxLTAuMDg3LDAuMDMtMC4xMywwLjA0NmMtMi40MzcsMC4yMTYtNC43MDEsMS4wMjEtNi42NjUsMi4yNjZWOGgzYzAuNTUzLDAsMS0wLjQ0NywxLTFWM2MwLTAuNTUzLTAuNDQ3LTEtMS0xaC04ICBjLTAuNTUzLDAtMSwwLjQ0Ny0xLDF2MTUuNjU5Yy0wLjYzNiwxLjY2Mi0xLDMuNDU4LTEsNS4zNDF2M0gzYy0wLjU1MywwLTEsMC40NDctMSwxdjExYzAsMC41NTMsMC40NDcsMSwxLDFoOC40NDdsLTIuOTk0LDYuNTg2ICBjLTEuOTMxLDQuMjQ4LTEuOTUyLDguMzcxLTAuMDYsMTEuMzExQzEwLjA5OCw2MC41NDMsMTMuMTU0LDYyLDE3LDYyYzUuODI3LDAsMTIuNDA4LTMuNDE2LDE3LTguMzM2VjYxYzAsMC41NTMsMC40NDcsMSwxLDFoOWg1ICBjMC41NTMsMCwxLTAuNDQ3LDEtMVYzNi45MWwxMS4zMy0zLjk2NkM2MS43MzEsMzIuODA0LDYyLDMyLjQyNSw2MiwzMlYxOS44OTZDNjIsMTUuNDE2LDYwLjAyMSwxMS4yMDYsNTYuNTcsOC4zNDd6IE0xNSw0aDZ2MmgtMyAgYy0wLjU1MywwLTEsMC40NDctMSwxdjUuODI3Yy0wLjEwMywwLjA5Mi0wLjE5NCwwLjE5Ni0wLjI5NCwwLjI5MWMtMC4xODMsMC4xNzQtMC4zNjMsMC4zNS0wLjUzNywwLjUzMiAgYy0wLjE1MywwLjE2MS0wLjMwMSwwLjMyNS0wLjQ0NywwLjQ5MmMtMC4xODYsMC4yMTMtMC4zNjYsMC40My0wLjU0LDAuNjUzYy0wLjA1OCwwLjA3NS0wLjEyNCwwLjE0My0wLjE4MSwwLjIxOVY0eiBNMTQsMjQgIGMwLTEuNzA5LDAuMzQtMy4zMzgsMC45NDItNC44MzRjMC4zOC0wLjk0NywwLjg3Ni0xLjg0MywxLjQ2My0yLjY3MmMwLjA2NS0wLjA5MiwwLjEzNS0wLjE4LDAuMjAyLTAuMjcgIGMwLjIyNi0wLjMwMywwLjQ2Ni0wLjU5NCwwLjcxOC0wLjg3NmMwLjA5Ni0wLjEwNywwLjE5MS0wLjIxNSwwLjI5LTAuMzE5YzAuMjc0LTAuMjg3LDAuNTYzLTAuNTYsMC44NjItMC44MjIgIGMyLjA2OS0xLjgwMyw0LjcwNy0yLjk1Nyw3LjYwOS0zLjE2MWMwLjAwMiwwLDAuMDA0LDAuMDAxLDAuMDA2LDAuMDAxbDAuMDUxLTAuMDAzQzI2LjQyNywxMS4wMjUsMjYuNzExLDExLDI3LDExICBjNi4xMzQsMCwxMS4yNzcsNC4yNzYsMTIuNjM3LDEwaC0yLjgyMUMzNi45MjgsMjAuNjg2LDM3LDIwLjM1MiwzNywyMHYtMWMwLTEuNjU0LTEuMzQ2LTMtMy0zYy0yLjA4NiwwLTMuOTI0LDEuMDcxLTUsMi42OSAgYy0xLjA3Ni0xLjYyLTIuOTE0LTIuNjktNS0yLjY5Yy0xLjY1NCwwLTMsMS4zNDYtMywzdjAuNWMwLDAuNTM5LDAuMTMzLDEuMDQ0LDAuMzUxLDEuNUgxN2MtMC41NTMsMC0xLDAuNDQ3LTEsMXY0djFoLTJWMjR6IE0zMCwyNSAgdi0yaDRoNS45NDlDMzkuOTc1LDIzLjMzMSw0MCwyMy42NjIsNDAsMjR2MUgzMHogTTQwLDI3djExSDMwVjI3SDQweiBNMzAuMTI3LDIxYzAuNDQ0LTEuNzI0LDIuMDEzLTMsMy44NzMtM2MwLjU1MiwwLDEsMC40NDgsMSwxICB2MWMwLDAuNTUyLTAuNDQ4LDEtMSwxSDMwLjEyN3ogTTE4LDI1di0yaDYuNUgyOHYySDE4eiBNMjgsMjd2MTFIMThWMjh2LTFIMjh6IE0yMywxOS41VjE5YzAtMC41NTIsMC40NDgtMSwxLTEgIGMxLjg2LDAsMy40MjksMS4yNzYsMy44NzMsM0gyNC41QzIzLjY3MywyMSwyMywyMC4zMjcsMjMsMTkuNXogTTQsMzh2LTloOWgzdjloLTNINHogTTM1LjU5OCw0OC4yMjUgIGMtMC4xMTYsMC4yMDEtMC4yMzksMC4zOTgtMC4zNjIsMC41OTZjLTAuMzE5LDAuNTA5LTAuNjYsMS4wMTctMS4wMzYsMS41MjFjLTAuMDA0LDAuMDA1LTAuMDA1LDAuMDExLTAuMDA5LDAuMDE3ICBDMzAuMDM0LDU1LjkyMywyMy4wNTksNjAsMTcsNjBjLTMuMTQzLDAtNS42MDItMS4xMzItNi45MjUtMy4xODZjLTEuNTE4LTIuMzU3LTEuNDQ1LTUuNzg0LDAuMTk4LTkuNEwxMy42NDQsNDBIMTdoMjIuNDQ3ICBsLTAuOCwxLjc2bC0yLjE5NCw0LjgyNmMtMC4xOCwwLjM5Ni0wLjM4MywwLjc4NS0wLjU5MiwxLjE3MkMzNS43NzYsNDcuOTE0LDM1LjY4OCw0OC4wNywzNS41OTgsNDguMjI1eiBNNDMsNjBoLTd2LTguNzI5ICBjMC4xNzgtMC4yNDUsMC4zNDUtMC40OTEsMC41MTEtMC43MzhjMC4wNjEtMC4wOSwwLjEyNC0wLjE3OSwwLjE4My0wLjI3YzAuMjU2LTAuMzkyLDAuNDkyLTAuNzg2LDAuNzE3LTEuMTggIGMwLjA3LTAuMTIyLDAuMTM4LTAuMjQ1LDAuMjA1LTAuMzY4YzAuMjM2LTAuNDM0LDAuNDYxLTAuODY4LDAuNjU3LTEuMzAxbDMuNDYtNy42MTFMNDMsMzkuMzZWNjB6IE00OCw2MGgtM1YzOC42NmwxLjEyNS0wLjM5NCAgTDQ4LDM3LjYxVjYweiBNNjAsMzEuMjlsLTExLjMyOSwzLjk2NmMwLDAtMC4wMDEsMC0wLjAwMSwwTDQyLDM3LjU5VjI2di0yYzAtMC40NzMtMC4wMjgtMC45MzgtMC4wNzEtMS40ICBjLTAuMDEzLTAuMTQ0LTAuMDM1LTAuMjg1LTAuMDUyLTAuNDI4Yy0wLjAzOS0wLjMyMS0wLjA4Ny0wLjYzOS0wLjE0Ni0wLjk1M2MtMC4wMjktMC4xNTUtMC4wNi0wLjMwOS0wLjA5NC0wLjQ2MyAgYy0wLjA3LTAuMzE1LTAuMTUxLTAuNjI1LTAuMjQtMC45MzJjLTAuMDM4LTAuMTMtMC4wNzEtMC4yNi0wLjExMi0wLjM4OWMtMC4xMzctMC40MjYtMC4yODctMC44NDYtMC40Ni0xLjI1NSAgYy0wLjAxNS0wLjAzNi0wLjAzNC0wLjA3MS0wLjA1LTAuMTA3Yy0wLjE2MS0wLjM3Mi0wLjMzOC0wLjczNi0wLjUyNy0xLjA5MmMtMC4wNjctMC4xMjUtMC4xMzktMC4yNDctMC4yMDktMC4zNyAgYy0wLjE1Mi0wLjI2Ni0wLjMxLTAuNTI4LTAuNDc3LTAuNzg0Yy0wLjA4NC0wLjEyOC0wLjE2OC0wLjI1NS0wLjI1NS0wLjM4Yy0wLjE4MS0wLjI1OS0wLjM3MS0wLjUxMS0wLjU2Ny0wLjc1OCAgYy0wLjA3OS0wLjEtMC4xNTQtMC4yMDItMC4yMzYtMC4yOTljLTAuMjgxLTAuMzM2LTAuNTc0LTAuNjYxLTAuODgyLTAuOTcxYy0wLjA0NS0wLjA0NS0wLjA5NS0wLjA4Ni0wLjE0MS0wLjEzMSAgYy0wLjI2OC0wLjI2Mi0wLjU0NS0wLjUxNC0wLjgzMi0wLjc1NmMtMC4xMTEtMC4wOTMtMC4yMjUtMC4xODEtMC4zMzgtMC4yNzFjLTAuMjM2LTAuMTg4LTAuNDc3LTAuMzY5LTAuNzI1LTAuNTQyICBjLTAuMTI2LTAuMDg4LTAuMjUyLTAuMTc2LTAuMzgtMC4yNmMtMC4yNjYtMC4xNzUtMC41MzktMC4zMzgtMC44MTYtMC40OTZjLTAuMTEtMC4wNjItMC4yMTYtMC4xMjktMC4zMjctMC4xODkgIGMtMC4zODYtMC4yMDctMC43ODEtMC4zOTktMS4xODYtMC41NzJjLTAuMDg2LTAuMDM3LTAuMTc2LTAuMDY2LTAuMjYzLTAuMTAxYy0wLjI1OC0wLjEwNS0wLjUxNi0wLjIxLTAuNzgxLTAuMzAxbDEyLjc2MS0yLjY3OCAgYzMuODE2LTAuNzE2LDcuNzEzLDAuMjksMTAuNzAxLDIuNzY2QzU4LjI4NSwxMi4zNjQsNjAsMTYuMDEzLDYwLDE5Ljg5NlYzMS4yOXoiPjwvcGF0aD48cGF0aCBkPSJNMTUuMTA1LDQyLjU1M2wtMyw2bDEuNzg5LDAuODk1TDE2LjYxOCw0NEgzMXYtMkgxNkMxNS42MjEsNDIsMTUuMjc1LDQyLjIxNCwxNS4xMDUsNDIuNTUzeiI+PC9wYXRoPjxyZWN0IHg9IjYiIHk9IjMxIiB3aWR0aD0iOCIgaGVpZ2h0PSIyIj48L3JlY3Q+PHBvbHlnb24gcG9pbnRzPSI0LDggNiw4IDYsNiA4LDYgOCw0IDYsNCA2LDIgNCwyIDQsNCAyLDQgMiw2IDQsNiAiPjwvcG9seWdvbj48cmVjdCB4PSI3IiB5PSIxMiIgd2lkdGg9IjIiIGhlaWdodD0iMiI+PC9yZWN0PjxyZWN0IHg9IjIiIHk9IjE3IiB3aWR0aD0iMiIgaGVpZ2h0PSIyIj48L3JlY3Q+PHJlY3QgeD0iNjAiIHk9IjQ0IiB3aWR0aD0iMiIgaGVpZ2h0PSIyIj48L3JlY3Q+PHJlY3QgeD0iNTMiIHk9IjUxIiB3aWR0aD0iMiIgaGVpZ2h0PSIyIj48L3JlY3Q+PHBvbHlnb24gcG9pbnRzPSI2MCw1NiA1OCw1NiA1OCw1OCA1Niw1OCA1Niw2MCA1OCw2MCA1OCw2MiA2MCw2MiA2MCw2MCA2Miw2MCA2Miw1OCA2MCw1OCAiPjwvcG9seWdvbj48L3N2Zz4=" alt="Icon of Mailbox">
                <h2 style="color:white">Subscribe Our Newsletter !</h2>
            </div>
            <div class="col-md-12">
                <div id="mc_embed_signup" style="max-width:364px;padding:10px;margin-left: auto; margin-right: auto;"> <div  style="height: 43px; " class="row">
                      <input type="email" name="subscribe_email" class="email email col-xs-12 col-md-12 " id="email" placeholder="Enter Your Email" required="" style="     padding: 8px; height: 100%; background: #fffdfd; border: none; color: white; font-size: 24px; ">
                        <div class="col-xs-12"> <hr></div>
                      <span class="col-xs-12 col-md-12 " type="" onclick="subscribes_email();" name="action" style="padding: 8px;   height: 100%;cursor:pointer; background: white; border: none; color:var(--primary); font-size: 24px; ">
                        Subscribes
                      </span>
                    </div> </div>
            </div>
        </div>
    
        </div>
    </div>
</div>

<div class="row">
   <div class="row">
      <div class="col-lg-12">
        <div class="top-heading">
          <h3><span>Top Categories </span> </h3>
        </div>
      </div>
    </div>

      <div class="col-xs-6 col-sm-4 item col-md-1 item top_categories"  v-for="category in popular_categories"  >
            <a class="thumbnail custom-thumb"  :href="base_url+'category/'+category.slug" >
              <img class="img-responsive store-img owl-lazy"    v-bind:src="api_url+'/assets/uploads/categories/'+category.feature_image"   style="opacity: 1;">
            </a>
            <!-- <p class="pbname"><a href="store/bluebella-discount-codes">{{category.name}}</a></p> -->
          </div>
</div>


 
 


 
   </main>