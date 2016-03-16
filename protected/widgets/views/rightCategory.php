<div class="panel-heading" id="right-panel-heading">
	<span class="glyphicon glyphicon-th-list">&nbsp;</span>DANH MỤC SẢN PHẨM
</div>
<div class="panel-body">
   <?php
		foreach ($data as $row){
	?>
	<li id="right-li-menu">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/product/listProduct/<?php echo $row->cat_id ?>">
			<span class="glyphicon glyphicon-star-empty">&nbsp;</span><?php echo $row->cat_name ?>
		</a>
	</li>
	<?php	
		}
	?>                 	
</div>

