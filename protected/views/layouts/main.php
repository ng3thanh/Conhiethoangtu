 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/local-css.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
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
        	<div class="col-lg-9 panel-default">
            	<?php echo $content ?>
            </div>
            <div class="col-lg-3">
            	<div class="row" id="search-box">
                	<div class="col-lg-12">
            			<div id="imaginary_container"> 
                			<div class="input-group stylish-input-group">
                    			<input type="text" class="form-control"  placeholder="Search" >
                    			<span class="input-group-addon">
                        			<button type="submit">
                            			<span class="glyphicon glyphicon-search"></span>
                        			</button>  
                    			</span>
                			</div>
            			</div>
        			</div>
                </div>
      			<div class="panel panel-default">
        			<div class="panel-heading" id="right-panel-heading">
                    	<span class="glyphicon glyphicon-th-list">&nbsp;</span>DANH MỤC SẢN PHẨM
                    </div>
        			<div class="panel-body">
                    	<span class="glyphicon glyphicon-star-empty">&nbsp;</span> List danh mục
                	</div>
      			</div>
                <div class="panel panel-default">
        			<div class="panel-heading" id="right-panel-heading">
                    	<span class="glyphicon glyphicon-phone-alt">&nbsp;</span>HỖ TRỢ KHÁCH HÀNG
                    </div>
        			<div class="panel-body">
                    	<p><span class="glyphicon glyphicon-phone">&nbsp;</span>0904.301.325</p>
                        <p><span class="glyphicon glyphicon-envelope">&nbsp;</span>hoangdinhluanlohoi@gmail.com</p>
                	</div>
      			</div>
                <div class="panel panel-default">
        			<div class="panel-heading" id="right-panel-heading">
                    	<span class="glyphicon glyphicon-fire">&nbsp;</span>SẢN PHẨM MỚI
                    </div>
        			<div class="panel-body">
                    	Chạy sản phẩm
                	</div>
      			</div>
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
        <div class="col-lg-12 container" id="hr">
        	<hr id="hrstyle" />
        </div>
		<div class="col-lg-12">
        	<div class="col-lg-4">
            	<div class="panel panel-heading"><span class="glyphicon glyphicon-stats">&nbsp;</span>Tin tức sản phẩm</div>
                <div class="row">
                	<div class="col-sm-12">
                    	<div class="col-sm-12">
                        	<a href="chitiettintuc.php" id="titleNews">
                        		Ngừng lò - Sử dụng nồi hơi đốt than
                        	</a>
                        </div>
                        <div class="col-sm-12" id="timeNews">
                        	<span class="glyphicon glyphicon-time">&nbsp;</span>20/10/2015
                        </div>
                    </div>
                    <div class="col-sm-12" id="hrTitleNews"></div>
                    <div class="col-sm-12" id="allNews">
                    	<div class="col-lg-5">
                        	<center>
                            	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/image-test-2.png" class="img-responsive img-thumbnail" alt="Image"/>
                        	</center>
                        </div>
                        <div class="col-lg-7" id="INews">
                        	<span class="glyphicon glyphicon-text-color">&nbsp;</span>	
							Khi ngừng lò bình thường, ta cần làm theo cách trình tự sau: <br />
							Trình tự 1 - Trình tự 2 - Trình tự 3 - Trình tự n
                        </div>
                    </div>
                    <div class="col-sm-12">
                    	<a href="chitiettintuc.php" id="continueRead">Xem chi tiết</a>
                    </div>
                </div>
                <div class=""><hr id="endNews"/></div>
            </div>
            <div class="col-lg-4">
            	<div class="panel panel-heading"><span class="glyphicon glyphicon-globe">&nbsp;</span>Tin tức đó đây</div>
                <div class="row">
                	<div class="col-sm-12">
                    	<div class="col-sm-12">
                        	<a href="chitiettintuc.php" id="titleNews">
                        		Ngừng lò - Sử dụng nồi hơi đốt than
                        	</a>
                        </div>
                        <div class="col-sm-12" id="timeNews">
                        	<span class="glyphicon glyphicon-time">&nbsp;</span>20/10/2015
                        </div>
                    </div>
                    <div class="col-sm-12" id="hrTitleNews"></div>
                    <div class="col-sm-12" id="allNews">
                    	<div class="col-lg-5">
                        	<center>
                            	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/image-test-2.png" class="img-responsive img-thumbnail" alt="Image"/>
                        	</center>
                        </div>
                        <div class="col-lg-7" id="INews">
                        	<span class="glyphicon glyphicon-text-color">&nbsp;</span>	
							Khi ngừng lò bình thường, ta cần làm theo cách trình tự sau: <br />
							Trình tự 1 - Trình tự 2 - Trình tự 3 - Trình tự n
                        </div>
                    </div>
                    <div class="col-sm-12">
                    	<a href="chitiettintuc.php" id="continueRead">Xem chi tiết</a>
                    </div>
                </div>
                <div class=""><hr id="endNews"/></div>
            </div>
            <div class="col-lg-4">
            	<div class="panel panel-heading"><span class="glyphicon glyphicon-usd">&nbsp;</span>Tin khuyến mãi</div>
                <div class="row">
                	<div class="col-sm-12">
                    	<div class="col-sm-12">
                        	<a href="chitiettintuc.php" id="titleNews">
                        		Ngừng lò - Sử dụng nồi hơi đốt than
                        	</a>
                        </div>
                        <div class="col-sm-12" id="timeNews">
                        	<span class="glyphicon glyphicon-time">&nbsp;</span>20/10/2015
                        </div>
                    </div>
                    <div class="col-sm-12" id="hrTitleNews"></div>
                    <div class="col-sm-12" id="allNews">
                    	<div class="col-lg-5">
                        	<center>
                            	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/image-test-2.png" class="img-responsive img-thumbnail" alt="Image"/>
                        	</center>
                        </div>
                        <div class="col-lg-7" id="INews">
                        	<span class="glyphicon glyphicon-text-color">&nbsp;</span>	
							Khi ngừng lò bình thường, ta cần làm theo cách trình tự sau: <br />
							Trình tự 1 - Trình tự 2 - Trình tự 3 - Trình tự n
                        </div>
                    </div>
                    <div class="col-sm-12">
                    	<a href="chitiettintuc.php" id="continueRead">Xem chi tiết</a>
                    </div>
                </div>
                <div class=""><hr id="endNews"/></div>
            </div>
        </div>
    </div>
	<footer class="footer-distributed row">
    <div class="row col-lg-12">
		<div class="footer-left">
			<img src="images/logo_1.png" width="" height="70" alt="Công ty cơ nhiệt Hoàng Tú"/>
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