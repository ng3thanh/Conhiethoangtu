<div class="panel panel-heading">
	<?php foreach($data as $row) { ?>
		<a id="tag-a-new-topic" href="<?php echo Yii::app()->request->baseUrl; ?>/news/listNews/<?php echo $row->news_category_id ?>">
			<span class="glyphicon glyphicon-stats">&nbsp;</span> <?php echo $row->news_category_topic ?>
    	</a>
        <?php } ?>
</div>
<?php foreach($data2 as $row2) { ?>
<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-12">
			<a href="<?php echo Yii::app()->request->baseUrl."/news/detailNews/".$row2->news_id ?>" id="titleNews">
				<?php echo $row2->news_title ?>
			</a>
		</div>
		<div class="col-sm-12" id="timeNews">
			<span class="glyphicon glyphicon-time">&nbsp;</span><?php echo $row2->datecreate ?>
		</div>
	</div>
	<div class="col-sm-12" id="hrTitleNews"></div>
	<div class="col-sm-12" id="allNews">
		<div class="col-lg-5">
			<center>
				<img src="<?php echo Yii::app()->request->baseUrl."/".$row2->image; ?>" class="img-responsive img-thumbnail" alt="Image"/>
			</center>
		</div>
		<div class="col-lg-7" id="INews">
			<span class="glyphicon glyphicon-text-color">&nbsp;</span>	
			<?php echo $row2->description ?>
		</div>
	</div>
	<div class="col-sm-12">
		<a href="<?php echo Yii::app()->request->baseUrl."/news/detailNews/".$row2->news_id ?>" id="continueRead">Xem chi tiết</a>
	</div>
</div>
<div class=""><hr id="endNews"/></div>
<?php } ?>