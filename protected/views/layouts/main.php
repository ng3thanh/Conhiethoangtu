<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/conhiet-favicon.ico" type="image/x-icon" />
  <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/conhiet-favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/local-css.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.12.1.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
  <title>Cơ nhiệt Hoàng Tú</title>
</head>

<body>

<div class="container" id="all">
	<header class="row" id="header">
		<?php $this->widget('application.widgets.menu'); ?>
		<?php $this->widget('application.widgets.slideShow'); ?>
	</header>
    
    
    <div class="row">	
		<div class="row" id="middle">
        	<div class="col-lg-9 panel-default" id="productIndex">
            	<?php echo $content ?>
            </div>
            <div class="col-lg-3" id="rightInfo">
            	<div class="row">
            	<div class="col-lg-12" id="search-box">
            		<div id="imaginary_container"> 
                    	<form action="<?php echo Yii::app()->request->baseUrl;?>/search/listSearch" method="get">
                		<div class="input-group stylish-input-group">
                    		<input type="text" class="form-control" name="keyword"  placeholder="Search" >
                    		<span class="input-group-addon">
                        		<button type="submit">
                            		<span class="glyphicon glyphicon-search"></span>
                        		</button>  
                    		</span>  
                		</div>
                        </form>
            		</div>
                </div>
                </div>
                <div class="row" id="allInfoRight">
                <div class="col-lg-12">
      			<div class="panel panel-default">
                	<?php $this->widget('application.widgets.rightCategory'); ?>
      			</div>
                </div>
                <div class="col-lg-12">
                <div class="panel panel-default">
        			<div class="panel-heading" id="right-panel-heading">
                    	<span class="glyphicon glyphicon-phone-alt">&nbsp;</span>HỖ TRỢ KHÁCH HÀNG
                    </div>
        			<div class="panel-body">
                    	<p><span class="glyphicon glyphicon-phone">&nbsp;</span>0904.301.325</p>
                        <p><span class="glyphicon glyphicon-envelope">&nbsp;</span><a id="mail-to" href="mailto:hoangdinhluanlohoi@gmail.com">hoangdinhluanlohoi@gmail.com</a></p>
                	</div>
      			</div>
                </div>
                <div class="col-lg-12">
                <div class="panel panel-default">
        			<div class="panel-heading" id="right-panel-heading">
                    	<span class="glyphicon glyphicon-fire">&nbsp;</span>SẢN PHẨM MỚI
                    </div>
        			<div class="panel-body">
                    	Chạy sản phẩm
                	</div>
      			</div>
                </div>
                <div class="col-lg-12">
                <div class="panel panel-default">
        			<div class="panel-heading" id="right-panel-heading">
                    	<span class="glyphicon glyphicon-bookmark">&nbsp;</span>THỐNG KÊ
                    </div>
        			<div class="panel-body">
                    	<p><span class="glyphicon glyphicon-bell">&nbsp;</span>Đang online: 10</p>
                        <p><span class="glyphicon glyphicon-user">&nbsp;</span>Lượt truy cập: 3420</p>
                        <p><span class="glyphicon glyphicon-signal">&nbsp;</span>Tổng số sản phẩm: 20</p>
                	</div>
      			</div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12" id="hr">
        	<hr id="hrstyle" />
        </div>
		<div class="col-lg-12" id="newAll">
        	<div class="col-lg-4">
            	<?php $this->widget('application.widgets.leftNews'); ?>
            </div>
            <div class="col-lg-4">
            	<?php $this->widget('application.widgets.centerNews'); ?>
            </div>
            <div class="col-lg-4">
            	<?php $this->widget('application.widgets.rightNews'); ?>
            </div>
        </div>
    </div>
	<footer class="footer-distributed row">
    <div class="row col-lg-12">
		<div class="footer-left">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_1.png" width="" height="70" alt="Công ty cơ nhiệt Hoàng Tú"/>
		</div>
		<div class="footer-center">
        	<div class="footer-company-about"><span>Thông tin liên hệ</span></div>
			
		</div>
		<div class="footer-right">
			<p class="footer-company-about">
				<span>Giới thiệu công ty</span>
				Công ty cơ nhiệt Hoàng Tú được thành lập vào ngày 12/01/2015. Chuyên cung ứng, lắp đặt, sửa chữa các loại nồi hơi và các sản phẩm liên quan.
			</p>
		</div>
    </div>
    <div class="row col-lg-12">
    	<p class="footer-company-name">Designed by N3T &copy; 2016</p>
    </div>
	</footer>
</div>
</body>
</html>