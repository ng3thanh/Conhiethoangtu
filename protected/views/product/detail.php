<div class="panel-heading" id="left-panel-heading">
	<span class="glyphicon glyphicon-pushpin">&nbsp;</span><span id="nameProduct"><?php echo $data->pro_name ?></span>
</div>
<div class="panel-body row" id="detailAll">
	<div class="col-md-12">
		<div class="col-sm-5">
			<img class="img-rounded img-responsive img-thumbnail" src="<?php echo Yii::app()->request->baseUrl."/".$data->image; ?>" alt="<?php echo $data->pro_name ?>"/>
		</div>
		<div class="col-sm-7">
			<div class="col-sm-12 panel panel-danger">
				<div class="panel-body" id="detailDescription">
					<span class="glyphicon glyphicon-pencil">&nbsp;</span><?php echo $data->description ?>
					<br /><br />
					<span class="glyphicon glyphicon-usd">&nbsp;</span><span>Giá: <?php echo $data->price ?></span>
				</div>
			</div>
			<div class="col-sm-12" id="detailPromotion">
				<span class="glyphicon glyphicon-tag">&nbsp;</span>Thông tin khuyến mãi: <?php echo $data->metadescription ?>
			</div>
			<div class="col-sm-12" id="detailSetup">
				<button class="btn btn-warning">
					<span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Đặt hàng
				</button>
			</div>
		</div>
	</div>
	<div class="col-md-12" id="detailUnder">
		<div class="panel-warning">
			<div class="panel-heading" id="detailHeader">Thông tin chi tiết</div>
			<div class="panel-body" id="detailContent">
				<?php echo $data->content ?>
			</div>
		</div>
	</div>
</div>