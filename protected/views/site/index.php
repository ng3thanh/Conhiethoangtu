<div class="panel-heading" id="left-panel-heading">
	<span class="glyphicon glyphicon-wrench">&nbsp;</span>SẢN PHẨM LẮP ĐẶT
</div>
<div class="panel-body row">
	<?php 
	foreach($data as $value){ ?>
	<div class="col-lg-4">
		<div class="panel panel-group" id="product">
			<div class="panel-heading" id="panel-product">
				<a href="<?php echo Yii::app()->request->baseUrl."/product/detail/".$value->pro_id ?>">
					<span class="glyphicon glyphicon-paperclip">&nbsp;</span>
                    <?php echo $value->pro_name; ?>
				</a>
				<hr id="hrProduct"/>
			</div>
			<div class="panel-body" id="image-product">
				<img src="<?php echo Yii::app()->request->baseUrl.$value->image; ?>" class="img-responsive" style="width:100%" alt="Image">
			</div>
			<div class="panel-body">
            	<span class="glyphicon glyphicon-equalizer">&nbsp;</span> <?php echo $value->description; ?>
            </div>
			<div class="panel-footer">
            	<span class="glyphicon glyphicon-usd">&nbsp;</span>Giá cả: <?php echo $value->price; ?>
            </div>
		</div>
	</div>
    <?php } ?>
</div>
