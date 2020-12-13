<div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white w-lg-auto d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <div class="d-flex flex-column text-right pr-lg-3">
                                        <?php  $profile=getUserProfile();?>
                            <span class="text-white opacity-50 font-weight-bold font-size-sm d-none d-md-inline"><?= $profile->row->first_name?></span>
                            <span class="text-white font-weight-bolder font-size-sm d-none d-md-inline"><?= $profile->role?></span>
                        </div>
                        <span class="symbol symbol-35">
                            <span class="symbol-label font-size-h5 font-weight-bold text-white bg-white-o-30"><?= $profile->name[0]?></span>
                        </span>
                    </div>
                </div>


             