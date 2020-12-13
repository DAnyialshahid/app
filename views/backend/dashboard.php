<div class=" container ">
							<!--begin::Dashboard-->
<!--begin::Row-->
<div class="row">
    <div class="col-xl-4">
        <!--begin::Mixed Widget 2-->
          <?php backend_page($this,'sections/widgets/sales')?>
        <!--end::Mixed Widget 2-->


    </div>
    <div class="col-xl-4">
        <!--begin::Mixed Widget 18-->
               <?php backend_page($this,'sections/widgets/sales2')?>
<!--end::Mixed Widget 18-->
    </div>
    <div class="col-xl-4">
        <!--begin::List Widget 7-->
             <?php backend_page($this,'sections/widgets/trend')?>
        <!--end::List Widget 7-->
    </div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
    <div class="col-xl-4">
        <!--begin::Stats Widget 1-->
           <?php backend_page($this,'sections/widgets/greeting_card',[
            'title'=>'Meeting Schedule 1',
            'sub_title'=>'100 -232',
            'description'=>'Testing my description<br> hello world',
        ])?>
<!--end::Stats Widget 1-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 2-->
          <?php backend_page($this,'sections/widgets/greeting_card',[
            'title'=>'Meeting Schedule 1',
            'sub_title'=>'100 -232',
            'description'=>'Testing my description<br> hello world',
        ])?>
<!--end::Stats Widget 2-->
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 3-->
          <?php backend_page($this,'sections/widgets/greeting_card',[
            'title'=>'Meeting Schedule 1',
            'sub_title'=>'100 -232',
            'description'=>'Testing my description<br> hello world',
        ])?>
<!--end::Stats Widget 3-->
    </div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
    <div class="col-xl-6">
        <!--begin::Base Table Widget 3-->
<div class="card card-custom gutter-b card-stretch">
	<!--begin::Header-->
	<div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Files</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
        </h3>
		<div class="card-toolbar">
            <a href="#" class="btn btn-light-primary btn-md py-2 font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <!--begin::Navigation-->
<ul class="navi navi-hover">
    <li class="navi-header pb-1">
        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
            <span class="navi-text">Order</span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
            <span class="navi-text">Event</span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
            <span class="navi-text">Report</span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
            <span class="navi-text">Post</span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-icon"><i class="flaticon2-writing"></i></span>
            <span class="navi-text">File</span>
        </a>
    </li>
</ul>
<!--end::Navigation-->
            </div>
		</div>
	</div>
	<!--end::Header-->

	<!--begin::Body-->
	<div class="card-body pt-2 pb-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center">
                <thead>
                    <tr>
						<th class="p-0" style="width: 50px"></th>
                        <th class="p-0" style="min-width: 150px"></th>
                        <th class="p-0" style="min-width: 140px"></th>
                        <th class="p-0" style="min-width: 100px"></th>
                        <th class="p-0" style="min-width: 40px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-45 symbol-light-success mr-2">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                ReactJs, HTML
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                4600 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <span class="text-dark-75 font-weight-bolder font-size-lg">
                                5.4MB
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-45 symbol-light-danger mr-2">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-danger"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                Python, MySQL
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                7200 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <span class="text-dark-75 font-weight-bolder font-size-lg">
                                2.8MB
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-45 symbol-light-info mr-2">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-info"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                Laravel, Metronic
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                890 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <span class="text-dark-75 font-weight-bolder font-size-lg">
                                1.5MB
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-45 symbol-light-warning mr-2">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-warning"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                AngularJS, C#
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                6370 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <span class="text-dark-75 font-weight-bolder font-size-lg">
                                890KB
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-45 symbol-light-primary mr-2">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-2x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"/>
        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                ReactJS, Ruby
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                354 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <span class="text-dark-75 font-weight-bolder font-size-lg">
                                500KB
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::table-->
	</div>
	<!--begin::Body-->
</div>
<!--end::Base Table Widget 3-->
    </div>
    <div class="col-xl-6">
        <!--begin::Base Table Widget 5-->
<div class="card card-custom gutter-b card-stretch">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
        </h3>
        <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_4_1">Month</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_4_2">Week</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_4_3">Day</a>
                </li>
            </ul>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-2 pb-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center">
                <thead>
                    <tr>
                        <th class="p-0" style="width: 50px"></th>
                        <th class="p-0" style="min-width: 150px"></th>
                        <th class="p-0" style="min-width: 140px"></th>
                        <th class="p-0" style="min-width: 110px"></th>
                        <th class="p-0" style="min-width: 50px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-5 pl-0">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                            <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                ReactJs, HTML
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-primary label-inline">Approved</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                            <span class="text-muted font-weight-bold d-block">Most Successful</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                Python, MySQL
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-warning label-inline">In Progress</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-5 pl-0">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                            <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                Laravel,Metronic
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-success label-inline">Success</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-5 pl-0">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                            <span class="text-muted font-weight-bold d-block">Best Customers</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                            AngularJS, C#
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-danger label-inline">Rejected</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-5 pl-0">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                            <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-500">
                                ReactJS, Ruby
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="label label-lg label-light-warning label-inline">In Progress</span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Tablet-->
    </div>
    <!--end::Body-->
</div>
<!--end::Base Table Widget 5-->
    </div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
    <div class="col-xl-4">
        <!--begin::Mixed Widget 10-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Body-->
    <div class="card-body d-flex flex-column">
        <div class="flex-grow-1 pb-5">
            <!--begin::Info-->
            <div class="d-flex align-items-center pr-2 mb-6">
                <span class="text-muted font-weight-bold font-size-lg flex-grow-1">
                    7 Hours Ago
                </span>
                <div class="symbol symbol-50">
                    <span class="symbol-label bg-light-light">
                        <img src="<?=backend_base_url?>/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt=""/>
                    </span>
                </div>
            </div>
            <!--end::Info-->

            <!--begin::Link-->
            <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">
                PitStop - Multiple Email<br/>
                Generator
            </a>
            <!--end::Link-->

            <!--begin::Desc-->
            <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                Pitstop creates quick email campaigns.<br/>
                We help to strengthen your brand<br/>
                for your every purpose.
            </p>
            <!--end::Desc-->
        </div>
        <!--begin::Team-->
        <div class="d-flex align-items-center">
            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->

            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->

            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->
        </div>
        <!--end::Team-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 10-->
    </div>
    <div class="col-xl-4">
        <!--begin::Mixed Widget 11-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Body-->
    <div class="card-body d-flex flex-column">
        <div class="flex-grow-1 pb-5">
            <!--begin::Info-->
            <div class="d-flex align-items-center pr-2 mb-6">
                <span class="text-muted font-weight-bold font-size-lg flex-grow-1">
                    2 Days Ago
                </span>
                <div class="symbol symbol-50">
                    <span class="symbol-label bg-light-light">
                        <img src="<?=backend_base_url?>/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt=""/>
                    </span>
                </div>
            </div>
            <!--end::Info-->

            <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">
                Craft - ReactJS Admin<br/>
                Theme
            </a>

            <!--begin::Desc-->
            <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                Craft uses the latest and greatest frameworks<br/>
                with ReactJS for complete modernization and<br/>
                future proofing your business operations<br/>
                and sales opportunities
            </p>
            <!--end::Desc-->
        </div>

        <!--begin::Team-->
        <div class="d-flex align-items-center">
            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->

            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->

            <!--begin: Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->

            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/005-girl-2.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->
        </div>
        <!--end::Team-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 11-->
    </div>
    <div class="col-xl-4">
        <!--begin::Mixed Widget 12-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Body-->
    <div class="card-body d-flex flex-column">
        <div class="flex-grow-1 pb-5">
            <!--begin::Info-->
            <div class="d-flex align-items-center pr-2 mb-6">
                <span class="text-muted font-weight-bold font-size-lg flex-grow-1">
                    5 Weeks Ago
                </span>
                <div class="symbol symbol-50">
                    <span class="symbol-label bg-light-light">
                        <img src="<?=backend_base_url?>/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt=""/>
                    </span>
                </div>
            </div>
            <!--end::Info-->

            <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h4">
                KT.com - High Quality<br/>
                Templates
            </a>

            <!--begin::Desc-->
            <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                Easy to use, incredibly flexible and secure<br/>
                with in-depth documentation that outlines<br/>
                everything for you
            </p>
            <!--end::Desc-->
        </div>

        <!--begin::Team-->
        <div class="d-flex align-items-center">
            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a href="#">
            <!--end::Pic-->

            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light mr-3">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/028-girl-16.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->

            <!--begin::Pic-->
            <a href="#" class="symbol symbol-45 symbol-light">
                <div class="symbol-label">
                    <img src="<?=backend_base_url?>/assets/media/svg/avatars/024-boy-9.svg" class="h-75 align-self-end" alt=""/>
                </div>
            </a>
            <!--end::Pic-->
        </div>
        <!--end::Team-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 12-->
    </div>
</div>
<!--end::Row-->

<!--begin::Row-->
<div class="row">
	<div class="col-lg-4">
		<!--begin::Mixed Widget 16-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <div class="card-title">
            <div class="card-label">
                <div class="font-weight-bolder">Weekly Sales Stats</div>
                <div class="font-size-sm text-muted mt-2">890,344 Sales</div>
            </div>
        </div>
        <div class="card-toolbar">
            <div class="dropdown dropdown-inline">
                <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-hor"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                    <!--begin::Navigation-->
<ul class="navi navi-hover">
    <li class="navi-header font-weight-bold py-4">
        <span class="font-size-lg">Choose Label:</span>
        <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
    </li>
    <li class="navi-separator mb-3 opacity-70"></li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-success">Customer</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-danger">Partner</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-warning">Suplier</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-primary">Member</span>
            </span>
        </a>
    </li>
    <li class="navi-item">
        <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-dark">Staff</span>
            </span>
        </a>
    </li>
    <li class="navi-separator mt-3 opacity-70"></li>
    <li class="navi-footer py-4">
        <a class="btn btn-clean font-weight-bold btn-sm" href="#">
            <i class="ki ki-plus icon-sm"></i>
            Add new
        </a>
    </li>
</ul>
<!--end::Navigation-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body d-flex flex-column">
        <!--begin::Chart-->
        <div class="flex-grow-1">
            <div id="kt_mixed_widget_16_chart" style="height: 200px"></div>
        </div>
        <!--end::Chart-->

        <!--begin::Items-->
        <div class="mt-10 mb-5">
            <div class="row row-paddingless mb-10">
                <!--begin::Item-->
                <div class="col">
                    <div class="d-flex align-items-center mr-2">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45 symbol-light-info mr-4 flex-shrink-0">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-info"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">$2,034</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">Author Sales</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="col">
                    <div class="d-flex align-items-center mr-2">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-danger"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">$706</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">Commission</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Item-->
            </div>

            <div class="row row-paddingless">
                <!--begin::Item-->
                <div class="col">
                    <div class="d-flex align-items-center mr-2">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">$49</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">Average Bid</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="col">
                    <div class="d-flex align-items-center mr-2">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-45 symbol-light-primary mr-4 flex-shrink-0">
                            <div class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16"/>
        <path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                            </div>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div>
                            <div class="font-size-h4 text-dark-75 font-weight-bolder">$5.8M</div>
                            <div class="font-size-sm text-muted font-weight-bold mt-1">All Time Sales</div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Items-->
    </div>
    <!--end::Body-->
</div>
<!--end::Mixed Widget 16-->
	</div>
	<div class="col-lg-8">
		<!--begin::Base Table Widget 2-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
        </h3>
        <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_1">Month</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_2">Week</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_2_3">Day</a>
                </li>
            </ul>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body pt-2 pb-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table table-borderless table-vertical-center">
                <thead>
                    <tr>
                        <th class="p-0" style="width: 50px"></th>
                        <th class="p-0" style="min-width: 150px"></th>
                        <th class="p-0" style="min-width: 140px"></th>
                        <th class="p-0" style="min-width: 120px"></th>
                        <th class="p-0" style="min-width: 40px"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                            <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                ReactJs, HTML
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                4600 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                            <span class="text-muted font-weight-bold d-block">Most Successful</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                Python, MySQL
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                7200 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                            <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                Laravel, Metronic
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                890 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                            <span class="text-muted font-weight-bold d-block">Best Customers</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                AngularJS, C#
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                6370 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pl-0 py-5">
                            <div class="symbol symbol-50 symbol-light mr-2">
                                <span class="symbol-label">
                                    <img src="<?=backend_base_url?>/assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt=""/>
                                </span>
                            </div>
                        </td>
                        <td class="pl-0">
                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                            <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                ReactJS, Ruby
                            </span>
                        </td>
                        <td class="text-right">
                            <span class="text-muted font-weight-bold">
                                354 Users
                            </span>
                        </td>
                        <td class="text-right pr-0">
                            <a href="#" class="btn btn-icon btn-light btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
<!--end::Base Table Widget 2-->
	</div>
</div>
<!--end::Row-->
<!--end::Dashboard-->
					</div>