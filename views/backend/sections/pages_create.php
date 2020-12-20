  <!--begin::Container-->
        <div class="container">
          <form action="#" method="post" id="default" enctype="multipart/form-data">
          <?php $csrf = array(  'name' => $this->security->get_csrf_token_name(), 'hash' => $this->security->get_csrf_hash()) ?>
          <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
          <input type="hidden" name="id" value="<?=isset($id)?$id:''?>" id="id" />

                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label" id="card_label">
                                -------------
                                <span class="d-block text-muted pt-2 font-size-sm"> management made easy</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="<?=base_url()?>admin/pages/list" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Text\Bullet-list.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z"
                                                fill="#000000"
                                            />
                                            <path
                                                d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z"
                                                fill="#000000"
                                                opacity="0.3"
                                            />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                Goto List
                            </a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body row">
                        <div class="col-md-12 col-xl-12 col-xxl-12"> 
                            <!--begin::Wizard Form-->
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Page Title</label>
                                <div class="col-lg-9 col-xl-9">
                                    <input class="form-control form-control-solid form-control-lg"  name="name" id="name" type="text" value="" />
                                </div>
                            </div>
                            <!--end::Group-->  

                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Slug</label>
                                <div class="col-lg-9 col-xl-9">
                                    <input class="form-control form-control-solid form-control-lg  " name="slug"  id="slug" type="text" value="" />
                                </div>
                            </div>
                            <!--end::Group-->
                            
                            <!--begin::Group--> 
                            <div class="form-group row"> 
                                <div class="col-lg-12 col-xl-12">
                                    <textarea name="description" id="kt-ckeditor-1"></textarea>
                                </div>
                            </div>
                           <!--end::Group-->  

                        
                          

                           
                            <!--end::Wizard Form-->
                        </div>


                         <div class="col-md-12 col-xl-12 col-xxl-12 row">
        <h5 class="col-md-12 col-xl-12 col-xxl-12 text-dark font-weight-bold mb-10">page SEO</h5>
        <!--begin::Group-->

        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> page Meta title </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_page_meta_title" type="text" value="" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label"> page Meta Keywords </label>
                <div class="col-lg-9 col-xl-9">
                    <input class="form-control form-control-solid form-control-lg" name="seo_page_meta_keywords" type="text" value="" />
                </div>
            </div>
            <!--end::Group-->
        </div>
        <div class="col-md-6 col-xl-6 col-xxl-6">
            <!--begin::Group-->
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label">page Meta Description</label>
                <div class="col-lg-9 col-xl-9">
                    <textarea name="seo_page_meta_description" style="width: 100%; height: 130px;"></textarea>
                </div>
            </div>
            <!--end::Group-->
        </div>
    </div>

                         
                            <!--end::Wizard Form-->
                        </div>
                    </div>
                    <!--end::Body-->

                    <div class="card-footer d-flex justify-content-end">
                        <div>
                            <!--begin::Button-->
                            <a href="#"  onclick="Main.submit('<?=base_url()?>admin/pages/list')"  class="btn btn-light-primary font-weight-bolder pulse pulse-primary">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo7\dist/../src/media/svg/icons\Navigation\Arrow-to-left.svg-->
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-14.000000, -12.000000) " x="13" y="5" width="2" height="14" rx="1" />
                                            <rect fill="#000000" opacity="0.3" x="3" y="3" width="2" height="18" rx="1" />
                                            <path
                                                d="M5.7071045,15.7071045 C5.3165802,16.0976288 4.68341522,16.0976288 4.29289093,15.7071045 C3.90236664,15.3165802 3.90236664,14.6834152 4.29289093,14.2928909 L10.2928909,8.29289093 C10.6714699,7.914312 11.2810563,7.90106637 11.6757223,8.26284357 L17.6757223,13.7628436 C18.0828413,14.136036 18.1103443,14.7686034 17.7371519,15.1757223 C17.3639594,15.5828413 16.7313921,15.6103443 16.3242731,15.2371519 L11.0300735,10.3841355 L5.7071045,15.7071045 Z"
                                                fill="#000000"
                                                fill-rule="nonzero"
                                                transform="translate(11.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-11.000001, -11.999997) "
                                            />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                              
                                    <span id="submit_btn_1"> ----------</span>
                            </a>
                            <!--end::Button-->

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
                                <span id="submit_btn_2">---------</span>
                            </a>
                            <!--end::Button-->
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Card-->
        </div>
        <!--end::Container-->