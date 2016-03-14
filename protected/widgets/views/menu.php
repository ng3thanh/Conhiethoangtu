<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">
      	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_1.png" alt="Cơ nhiệt Hoàng Tú" width="140px" height="40px" id="logoCompany"/>
      </a>
      
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo Yii::app()->request->baseUrl; ?>"><span class="glyphicon glyphicon-home">&nbsp;</span>Trang chủ</a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/about"><span class="glyphicon glyphicon-info-sign">&nbsp;</span>Giới thiệu</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          	<span class="glyphicon glyphicon-gift">&nbsp;</span>Sản phẩm <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" id="dropdown-menu">
          <?php
		  	foreach ($data as $row){
		  ?>
          	<li>
            	<a href="<?php echo Yii::app()->request->baseUrl; ?>/product/listProduct/<?php echo $row->cat_id ?>">
            		<span class="glyphicon glyphicon-star-empty">&nbsp;</span><?php echo $row->cat_name ?>
            	</a>
          	</li>
          <?php	
			}
		  ?>
            
          </ul>
        </li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/guide">
        	<span class="glyphicon glyphicon-book">&nbsp;</span>Hướng dẫn
        </a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/contact">
        	<span class="glyphicon glyphicon-link">&nbsp;</span>Liên hệ
        </a></li>
        <li><a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Đặt hàng </a></li>
        <li>
        	<?php if(Yii::app()->user->isGuest){ ?>
        		<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/login">
            		<span class="glyphicon glyphicon-user"></span>
            	</a>
            <?php }else{ ?>
            	<a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">
            		<span class="glyphicon glyphicon-log-out"></span>
            	</a>
            <?php } ?>
        </li>
      </ul>
    </div>
  </div>
</nav>