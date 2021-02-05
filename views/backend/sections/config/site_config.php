<!--begin::Container-->
<div class="container">
    <form action="#" method="post" id="default" enctype="multipart/form-data">
        <?php $csrf = array(  'name' =>
        $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()) ?>
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <input type="hidden" name="id" value="<?=isset($id)?$id:''?>" id="id" />

        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label" id="card_label">
                        Site Configrations
                        <span class="d-block text-muted pt-2 font-size-sm" id="site_id"> management made easy</span>
                    </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->

                    <!--end::Button-->
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body row">
                <div class="card card-custom gutter-b col-xl-12 col-md-12 col-lg-12">
                    <div class="card-header card-header-tabs-line">
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#basic">
                                        <span class="nav-icon"><i class="la la-credit-card-alt"></i></span>
                                        <span class="nav-text">Basic</span>
                                    </a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#site_config">
                                        <span class="nav-icon"><i class="la la-gear"></i></span>
                                        <span class="nav-text">Site Config</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#SEO">
                                        <span class="nav-icon"><i class="fab la-google"></i></span>
                                        <span class="nav-text">SEO</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tracking">
                                        <span class="nav-icon"><i class="la la-code"></i></span>
                                        <span class="nav-text">Tracking</span>
                                    </a>
                                </li>   

                                 <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#adwords">
                                        <span class="nav-icon"><i class="fab la-buysellads"></i></span>
                                        <span class="nav-text">Adwords Accounts</span>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#networks">
                                        <span class="nav-icon"><i class="fab la-neos"></i></span>
                                        <span class="nav-text">Network Accounts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            


<div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic">
    <div class="row">
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <h5 class="text-dark font-weight-bold mb-10">Social Details:</h5>
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Facebook Link</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="facebook" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->

            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Youtube Link</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="youtube" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Instagram Link</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="instagram" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Twitter Link</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="twitter" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Pintrest Link</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="pintrest" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Wizard Form-->
            <h5 class="text-dark font-weight-bold mb-10">Contact Details:</h5>
            <!--begin::Group-->

            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Mobile Number</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="contact_number" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->

            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="contact_address" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->

            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Country</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="contact_country" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->

            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Flag</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="contact_flag" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->

            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">--</label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="---" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>
    <!--end row-->

    <!--end::Wizard Form-->
</div>
<div class="tab-pane fade " id="site_config" role="tabpanel" aria-labelledby="site_config">
     <div class="row">
     <div class="col-md-6 col-xl-6 col-xxl-6">
    <h5 class="text-dark font-weight-bold mb-10">Site Config:</h5>
    <!--begin::Wizard Form-->
    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">Sitename Name</label>
        <div class="col-lg-9 col-xl-9">
            <input class="form-control form-control-solid form-control-lg" name="site_name" type="text" value="" />
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">Domain</label>
        <div class="col-lg-9 col-xl-9">
            <input class="form-control form-control-solid form-control-lg" disabled name="domain" type="text" value="" />
        </div>
    </div>
    <!--end::Group-->

    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">Theme</label>
        <div class="col-lg-9 col-xl-9">
            <input class="form-control form-control-solid form-control-lg" disabled name="theme" type="text" value="" />
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label text-left">Logo</label>
        <div class="col-lg-3 col-xl-3">
            <div class="image-input image-input-outline" id="kt_image_1">
                <div class="image-input-wrapper" style="background-image: url('<?=backend_base_url?>/assets/media/users/blank.png');"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="profile_avatar_remove" />
                </label>

                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>

        <label class="col-xl-3 col-lg-3 col-form-label text-left">Favicon</label>
        <div class="col-lg-3 col-xl-3">
            <div class="image-input image-input-outline" id="kt_image_2">
                <div class="image-input-wrapper" style="background-image: url('<?=backend_base_url?>/assets/media/users/blank.png'); width: 50px; height: 50px;"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="favicon" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="profile_avatar_remove" />
                </label>

                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>
    </div>
    <!--end::Group-->
</div> <div class="col-md-6 col-xl-6 col-xxl-6">
    <h5 class="text-dark font-weight-bold mb-10">Appearance</h5>

    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
        <div class="col-lg-9 col-xl-9">
            <select class="form-control selectpicker" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <span class="form-text text-muted">Current Status of store active / deactive</span>
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->

    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
        <div class="col-lg-9 col-xl-9">
            <textarea name="description" id="kt-ckeditor-1"></textarea>
        </div>
    </div>
    <!--end::Group-->
</div>
</div>
</div>

<div class="tab-pane fade" id="SEO" role="tabpanel" aria-labelledby="SEO">
    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Home SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Home Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_home_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Home Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_home_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Home Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_home_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>

    <!--end::Wizard Form-->

    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">All Store SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> All Store Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_all_store_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> All Store Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_all_store_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">All Store Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_all_store_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>

    <!--end::Wizard Form-->

    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Store SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Store Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_store_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Store Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_store_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Store Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_store_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>

    <!--end::Wizard Form-->

    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">All Category SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">All Category Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_all_category_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">All Category Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_all_category_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">All Category Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_all_category_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>
    <!--end::Wizard Form-->

    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Category SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Category Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_category_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Category Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_category_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Category Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_category_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>
    <!--end::Wizard Form-->

    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Seasonal SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Seasonal Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_seasonal_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Seasonal Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_seasonal_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Seasonal Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_seasonal_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>
    <!--end::Wizard Form-->

    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Coupon SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Coupon Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_coupon_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Coupon Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_coupon_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Coupon Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_coupon_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>
    <!--end::Wizard Form-->


    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">All Pages SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> All Pages Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_page_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> All Pages Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_page_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">All Pages Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_page_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>
    <!--end::Wizard Form-->
</div>

<div class="tab-pane fade" id="tracking" role="tabpanel" aria-labelledby="tracking">
    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Tracking Info</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Header</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="header" style="width: 100%; height: 200px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">Footer</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="footer" style="width: 100%; height: 200px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>

    <!--end::Wizard Form-->
</div>



<div class="tab-pane fade" id="adwords" role="tabpanel" aria-labelledby="adwords">
    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        
        <div class="card card-custom col-md-6 col-xl-6 col-xxl-6 " id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">  <span class="la la-list"></span> Accounts List</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
            <i class="ki ki-arrow-down icon-nm"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="Reload Card">
            <i class="ki ki-reload icon-nm"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="Remove Card">
            <i class="ki ki-close icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body">
        ...
    </div>
</div>

        <div class="card card-custom col-md-6 col-xl-6 col-xxl-6 " id="kt_card_1">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label"> <span class="la la-plus"></span> Connect New</h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle" data-toggle="tooltip" data-placement="top" title="Toggle Card">
            <i class="ki ki-arrow-down icon-nm"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="reload" data-toggle="tooltip" data-placement="top" title="Reload Card">
            <i class="ki ki-reload icon-nm"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary" data-card-tool="remove" data-toggle="tooltip" data-placement="top" title="Remove Card">
            <i class="ki ki-close icon-nm"></i>
            </a>
        </div>
    </div>
    <div class="card-body" id="network_add">
        
              <div class="form-group row">
                    <label class="col-12 col-form-label">Select Network</label>
                    <div class="col-12 col-form-label">
                        <div class="radio-inline">
                            <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="webgain"/>
                                <span></span>
                               <img style="width:20px;padding:2px"   src="<?=backend_base_url?>/assets/media/networks/webgains.png" />  Webgains
                            </label>
                            <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="skimlinks"   />
                                <span></span>
                                 <img style="width:20px;padding:2px"     src="<?=backend_base_url?>/assets/media/networks/skimlinks.png" /> Skimlinks
                            </label>
                              <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="ganet"/>
                                <span></span>
                                 <img style="width:20px;padding:2px"     src="<?=backend_base_url?>/assets/media/networks/Shareasale.png" />  Ganet
                            </label>

                            <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="awin"   />
                                <span></span>
                                 <img style="width:20px;padding:2px"     src="<?=backend_base_url?>/assets/media/networks/awin.png" />   Awin
                            </label>
                         
                        </div>
                  
                    </div>

                     <div class="col-12 col-form-label">
                        <div class="radio-inline">

                            <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="chinesean"  />
                                <span></span>
                                     <img style="width:20px;padding:2px"     src="<?=backend_base_url?>/assets/media/networks/chinesean.ico" />  Chinesean
                            </label>
                            <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="admitad"/>
                                <span></span>
                                 <img style="width:20px;padding:2px"     src="<?=backend_base_url?>/assets/media/networks/admitad.png" />   admitad
                            </label> 
                               <label class="radio radio-success">
                                <input type="radio" name="add_network_network" value="shareasale"  />
                                <span></span>
                                      <img style="width:20px;padding:2px"    src="<?=backend_base_url?>/assets/media/networks/Shareasale.png" />  Shareasale
                            </label>
                        </div>
                  
                    </div>
                </div>

  <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Username </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="add_network_username" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Password </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="add_network_password" type="password" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> Set Title  </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="add_network_title" type="text" value="" placeholder="Optional" />
                </div>
            </div>
            <!--end::Group-->
 

    </div>
    <div class="card-footer d-flex justify-content-end">
                <div>
                    <!--begin::Button-->
                    <button  onclick="return Main.addNetwork()" class="btn btn-light-primary font-weight-bolder bb">   
                     <span >Login</span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
</div>


        
    </div>

    <!--end::Wizard Form-->
</div>

           <div class="tab-pane fade" id="networks" role="tabpanel" aria-labelledby="networks">
    <!--begin::Wizard Form-->
    <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">Network Accounts</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
        

        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            

        </div>
    </div>

    <!--end::Wizard Form-->
</div>

                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-6 col-xxl-6"></div>
            </div>
            <!--end::Body-->

            <div class="card-footer d-flex justify-content-end">
                <div>
                    <!--begin::Button-->
                    <a href="#" onclick="Main.submit()" class="btn btn-light-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\General\Save.svg-->
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
                        <span id="submit_btn_2">Update</span>
                    </a>
                    <!--end::Button-->
                </div>
            </div>
        </div>
    </form>
    <!--end::Card-->
</div>
<!--end::Container-->
