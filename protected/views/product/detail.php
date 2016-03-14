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
				<a class="btn btn-warning" data-toggle="modal" data-target="#myModal">
					<span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Đặt hàng
				</a>
                
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Thông tin đặt hàng sản phẩm</h4>
      </div>
      <div class="modal-body">
		Mọi sản phẩm và dịch vụ sửa chữa quý khách yêu cầu, vui lòng liên hệ qua số điện thoại 0904.301.325.
        Hoặc gửi mail về địa chỉ: hoangdinhluanlohoi@gmail.com.
        Xin cảm ơn quý khách!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="buttonModal">Close</button>
      </div>
    </div>
  </div>
</div>