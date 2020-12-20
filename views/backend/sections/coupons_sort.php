    <input type="hidden" name="id" value="<?=isset($id)?$id:''?>" id="id" />
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
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
				Sort  Coupons
				<span class="d-block text-muted pt-2 font-size-sm"> Sort your store coupons</span>
			</h3>

		</div>
		<div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="#" onclick="Main.done()" class="btn btn-primary font-weight-bolder">
                                 <i class="la la-check"></i>
                               Done
                            </a>
                            <!--end::Button-->
                        </div>
		 
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="card-body">
 

                                 <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Stores</label>
                                    <div class="col-lg-9 col-xl-9">
                                        <select class="form-control " name="store_id" data-live-search="true" id="select_store">
                                           
                                        </select>
                                    </div>
                                </div>
                            <!--end::Group-->



		<ul id="sortable" class="d-none">
		 
		</ul>  
 
     
	</div>
	<!--end::Body-->
</div>
<!--end::Card-->
					</div>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>

