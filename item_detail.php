<div id='custom_attributes'>
<?php 
if(!empty($fields)) {
	include 'item_detail_fields.php';			
}
foreach ($groups as $group) {
	$group_id = $group['pk_i_id'];
	$heading = $group['s_heading'];
	$order_type = $group['s_order_type'];
	$fields = Attributes::newInstance()->getFields($group_id, $order_type);			
	if(!empty($fields)) {
		if (!empty($heading)) {
?>
	<h3 class='heading'><?php _e($heading, PLUGIN_NAME); ?></h3>
<?php
		}	
		include 'item_detail_fields.php';
	}
}
?>
</div>
<?php //END