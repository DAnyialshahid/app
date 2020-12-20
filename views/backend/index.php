
<!DOCTYPE html>

<html lang="en" >
    <!--begin::Head-->
    <?php backend_page($this,'head')?>
    <!--end::Head-->
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0" />
    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed page-loading"  > 
    	<!--begin::Main-->

	<!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile bg-primary  header-mobile-fixed " >
	<!--begin::Logo-->
	<a href="index.html">
		<img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="max-h-30px"/>
	</a>
	<!--end::Logo-->

	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">

					<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
				<span></span>
			</button>

		<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>		</button>
	</div>
	<!--end::Toolbar-->
</div>


<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
				<?php backend_page($this,'header_menu')?>
			<!--end::Header-->

				<!--begin::Content-->
				<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

					<!--begin::Entry-->
	<div class="d-flex flex-column-fluid" id="content_page">
		<!--begin::Container-->
					<?php //backend_page($this,'dashboard')?>
                     <?php backend_page($this,$content_page)?>
		<!--end::Container-->
	</div>
<!--end::Entry-->
				</div>
				<!--end::Content-->

				<!--begin::Footer-->
					<?php backend_page($this,'footer')?>

		<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>

	<!--end::Header Mobile-->
	
<!--end::Main-->





                    		<!-- begin::User Panel-->
					 		  <?php backend_page($this,'header_sidepanel')?>
							<!-- end::User Panel--> 

							<?php backend_page($this,'header_purchase')?>
                   			 <!--begin::Quick Panel-->
								 <?php backend_page($this,'header_sidepaneltabs')?> 
							 <!--end::Quick Panel-->

                            <!--begin::Chat Panel-->
 									<?php backend_page($this,'header_chat')?> 
							<!--end::Chat Panel-->

                            <!--begin::Scrolltop-->
							<?php backend_page($this,'header_scroll_to_top')?> 
						    <!--end::Scrolltop-->

						     <!--begin::Sticky Toolbar-->
							<?php backend_page($this,'header_stickey_buttons')?> 
							<!--end::Sticky Toolbar-->
           



        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src="<?=backend_base_url?>/assets/plugins/global/plugins.bundle.js"></script>
		    	   <script src="<?=backend_base_url?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		    	   <script src="<?=backend_base_url?>/assets/js/scripts.bundle.js"></script>
				<!--end::Global Theme Bundle-->

                    <!--begin::Page Vendors(used by this page)-->
                            <script src="<?=backend_base_url?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
                        <!--end::Page Vendors-->

                    <!--begin::Page Scripts(used by this page)-->
                            <script src="<?=backend_base_url?>/assets/js/pages/widgets.js"></script>
                        <!--end::Page Scripts-->



                           <!--begin::Page Scripts(used by this page)-->
                        
                              <script src="<?=backend_script_attach(backend_base_url,'/assets/js/d_custom/custom_global.js')?>"></script>
                           <?php if(isset($js)):?>
                            <script src="<?=backend_script_attach(backend_base_url,'/assets/js/d_custom/'.$js.'.js')?>"></script>
                           <?php endif;?>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>