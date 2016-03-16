<div class="panel-heading" id="left-panel-heading">
	<span class="glyphicon glyphicon-pushpin">&nbsp;</span><span id="nameProduct"><?php echo $data->news_title ?></span>
</div>
<div class="panel-body row" id="detailAll">
	<div class="col-md-12">
		<div class="col-sm-5">
			<img class="img-rounded img-responsive img-thumbnail" src="<?php echo Yii::app()->request->baseUrl."/".$data->image; ?>" alt="<?php echo "123" ?>"/>
		</div>
		<div class="col-sm-7">
        	<div class="col-sm-12" id="timeNews">
				<span class="glyphicon glyphicon-time">&nbsp;</span><?php echo $data->datecreate ?>
			</div>
			<div class="col-sm-12 panel panel-danger">
				<div class="panel-body" id="detailDescription">
					<span class="glyphicon glyphicon-pencil">&nbsp;</span><?php echo $data->description ?>
				</div>
			</div>
		</div>
	</div>
    <div class="col-lg-12" id="hr">
        	<hr id="hrstyle" />
        </div>
	<div class="col-md-12" id="detailUnder">
		<div class="panel-warning">
			<div class="panel-body" id="detailContent">
				<?php echo $data->content ?>
			</div>
		</div>
	</div>
</div>
