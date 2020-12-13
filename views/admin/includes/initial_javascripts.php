

<script> 
$(function(){

$('.datepicker').datepicker();

 $('#table_list').DataTable({
	 
	  "bSort": false,
	  "bSortCellsTop": false,
	  "bSortClasses": false,
	  "autoWidth": false
	 
 })
 
$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();
	
})


<?php if($page == 'add_coupon' || $page == 'update_coupon' || $page == 'edit_page'): ?>
 var quill = new Quill('#editor', {
    theme: 'snow',
	height: 200
});
<?php endif; ?>

//alert(quill.root.innerHTML)


</script>