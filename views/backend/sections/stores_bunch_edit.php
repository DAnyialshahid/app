    <input type="hidden" name="id" value="<?=isset($id)?$id:''?>" id="id" />
<div class="content ddddd" id="kt_content">
											<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
      
        <!--end::Details-->
 
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->
 
					<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class=" container ">
							<!--begin::Card-->
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				Edit All   Coupons
				<span class="d-block text-muted pt-2 font-size-sm"> Sort your store coupons</span>
			</h3>

		</div>
		<div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="#" onclick="Main.saveAll()" class="btn btn-primary font-weight-bolder">
                                 <i class="la la-check"></i>
                               Save All
                            </a>
                            <!--end::Button-->
                        </div>
		 
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="card-body">
 
 


	<form  action="#" method="post" id="default" enctype="multipart/form-data">
		   <input type="hidden" name="store_id" value="" id="store_id" />
		<div id="coupon_list" class="d-none">
		 
		</div>  

                            <!--begin::Button-->
                            <a href="#" onclick="Main.submit()" class="btn btn-light-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path
                                                d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z"
                                                fill="#000000"
                                                fill-rule="nonzero"
                                            />
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5" rx="0.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span >Update All </span>
                            </a>
                            <!--end::Button-->      

                            <!--begin::Button-->
                            <button  onclick="Main.addMore()" class="btn btn-light-primary  float-right">
                                 <span class="la la-plus"></span>
                                <span >Add More </span>
                            </button>
                            <!--end::Button-->
	 </form>


     
	</div>
	<!--end::Body-->
</div>
<!--end::Card-->
					</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>

<style type="text/css">
	.noborder{
		border: none;
	}	
	.noborder:hover{
		border: 1px solid #f97f7f  !important;
	}	
	.noborder:focus-visible{
		border: 1px solid #7facf9  !important;
		background-color: none;
	}
	.coupon_templete > .border:hover{
		border: 1px solid #f97f7f  !important;
	}
	.coupon_templete > .border:focus-within{
		border: 1px solid #7facf9 !important;
	}
</style>
<!---templete--->
		<div  style="display: none">
		<div class="coupon_templete" >
			<input type="hidden" class="coupon_id" name="" value="">
        	 <div class="mb-6 border row "> 

        	 <div class="col-md-12">
        	 	  <label class="float-left">
        	 	  			
        	 	  </label>
        	 	  <label class="checkbox checkbox-danger float-right">
                                            <input type="checkbox" class="coupon_delete" name="delete_this" value='1' />
                                            <span ></span>
                                            <div class="la la-trash"></div>
                                            Delete 
                                        </label>
        	 </div>
        	 <div class="col-md-4">

				
					<small>Title</small>
						<input type="text"  style="width: 100%" name="coupon_title" class="coupon_title noborder" value=""/>	

					<small>Description</small>
								<textarea  style="width: 100%" class="coupon_description noborder" value=""> </textarea> 
					<small>Affiliate Link</small>
						<input type="text"  style="width: 100%" class="coupon_affiliate_link noborder" value=""/>
			 

        	</div>
			<div class="col-md-3">
					<small>Short Title</small>
						<input type="text"  style="width: 100%" class="coupon_short_title noborder"  />	

					<small>Code</small>
							<input type="text"  style="width: 100%" class="coupon_code noborder" />	
					<small>Expire Date</small>
							<input type="date"  style="width: 100%" class="coupon_expire_date noborder" />	



	        	</div>
	        	<div class="col-md-3">
	        				<small>Category</small>
	        	<div class="col-md-12 mb-1">
	        				<select class="coupon_category">
	        					<option>asd</option>
	        					<option>asd</option>
	        					<option>asd</option>
	        					<option>asd</option>
	        				</select> 
	        	</div>
	        		<small>Labels</small>
	        	<div class="col-md-12">
                                    <div class="coupon_checkboxes checkbox-inline" >
                                       
                                        <label class="checkbox checkbox-success">
                                            <input type="checkbox" class="coupon_check_verified" name="check_verified" value='1' />
                                            <span></span>
                                            Verified 
                                        </label>

                                        <label class="checkbox checkbox-warning  ">
                                            <input type="checkbox" class="coupon_check_featured" name="check_featured"  value='1' />
                                            <span></span>
                                            Featured 
                                        </label>
                                       
                                         <label class="checkbox checkbox-danger">
                                            <input type="checkbox" class="coupon_check_exclusive" name="check_exclusive" value='1' />
                                            <span></span>
                                            Exclusive 
                                        </label>
                                    </div><br>
                                    <div class="checkbox-inline">
                                      
                                         <label class="checkbox checkbox-success">
                                            <input type="checkbox" class="coupon_check_popular" name="check_popular" value='1' />
                                            <span></span>
                                            Popular
                                        </label>
                                        <label class="checkbox checkbox-warning">
                                            <input type="checkbox" class="coupon_check_show_in_home" name="check_show_in_home"  value='1'  />
                                            <span></span>
                                            Home
                                        </label>
                                        <label class="checkbox checkbox-danger  ">
                                            <input type="checkbox" class="coupon_check_top" name="check_top"  value='1' />
                                            <span></span>
                                            Top  
                                        </label>
                                    </div>
                                    
                                </div>
                </div>
        	</div>
        	
        </div>
        </div>
<!---/templete--->