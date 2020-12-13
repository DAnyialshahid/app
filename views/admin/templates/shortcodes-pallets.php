<div class="shortcodes-pallets">

	<ul class="palletsUList">
	
		<li>%website-name%</li>
		
		<?php if(!empty($storescount) && $storescount == 'true'): ?>
		
		<li>%stores-count%</li>
		<?php endif; ?>
		
		<?php if(!empty($allcouponscount) && $allcouponscount == 'true'): ?>
		<li>%all-coupons-count%</li>
		<?php endif; ?>
		
		<?php if(!empty($storename) && $storename == 'true'): ?>
			<li>%store-name%</li>
		<?php endif; ?>
		
		<?php if(!empty($storecouponcount) && $storecouponcount == 'true'): ?>
			<li>%post-count%</li>
		<?php endif; ?>
		
		<?php if(!empty($pagemetatitle) && $pagemetatitle == 'true'): ?>
			<li>%page-title%</li>
		<?php endif; ?>
		
		<?php if(!empty($categorytitle) && $categorytitle == 'true'): ?>
			<li>%category-title%</li>
		<?php endif; ?>
		
	</ul>
	
</div>