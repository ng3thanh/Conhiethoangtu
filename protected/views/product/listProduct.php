<div class="panel-heading" id="right-panel-heading">
	<span class="glyphicon glyphicon-wrench">&nbsp;</span>SẢN PHẨM LẮP ĐẶT
</div>
<div class="panel-body row">

	<?php 
	foreach($data as $value){ ?>
	<div class="col-lg-4">
		<div class="panel panel-group" id="product">
			<div class="panel-heading" id="panel-product">
				<a href="chitietsanpham.php">
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
                    
	<div class="col-lg-12">
		<section class="archive-pages">
			<ul>
				<li class="first"><a href="#" title="first page">first page</a></li>
				<li class="previous"><a href="#" title="previous page">previous page</a></li>
				<li class="selected">1</li>
				<li><a href="#" title="Pagina 2">2</a></li>
				<li><a href="#" title="Pagina 3">3</a></li>
				<li><a href="#" title="Pagina 4">4</a></li>
				<li><a href="#" title="Pagina 5">5</a></li>
				<li class="next"><a href="#" title="next page">next page</a></li>
				<li class="last"><a href="#" title="last page">last page</a></li>
			</ul>
		</section>
	</div>
</div>