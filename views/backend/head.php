<head><base href="">
                <meta charset="utf-8"/>
        <title><?=isset($title)?$title:'ITWORLD Coupons System'?></title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

                    <!--begin::Page Vendors Styles(used by this page)-->
                            <link href="<?=backend_base_url?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Page Vendors Styles-->


        <!--begin::Global Theme Styles(used by all pages)-->
                    <link href="<?=backend_base_url?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                    <link href="<?=backend_base_url?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
                    <link href="<?=backend_base_url?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
                <!--end::Layout Themes-->

        <link rel="shortcut icon" href="<?=backend_base_url?>/assets/media/logos/favicon.ico"/>
<script> 
    var api_base_url='<?=api_base_url?>';
    var backend_base_url='<?=backend_base_url?>';
    var base_url='<?=base_url()?>';
    var token='<?=$this->session->userdata("token")?>';
    var role='<?=$this->session->userdata('role')?>';
    var cookie='<?=$_COOKIE["ci_session"]?>';

</script>

            </head>