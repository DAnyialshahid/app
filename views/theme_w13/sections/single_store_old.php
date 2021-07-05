<script type="text/javascript">
    var slug='<?=$slug?>';
    var type='<?=$type?>';
</script>
<div class="container main-container" id="d_single_store">
    <div class="row">
        <div class="col-md-9 col-xs-12 main pull-md-right clearfix">
            <h1>
                {{row.name}} Coupon &amp; Discount Codes 
            </h1>
            <div id="categories-coupons" class="clearfix">
            	
            	<?php  add_page($this,'sections/single-coupons');?>

            </div>
        </div>

        <div class="col-md-3 col-xs-12 sidebar-menu clearfix">
        		<?php  add_page($this,'sections/single-sidebar');?> 

           
        </div>
    </div>
</div>
