<div class="col-md-12 center-block" id="logIn">
	<div class="panel">
		<div class="panel-heading" id="headingLogin">
			<span class="glyphicon glyphicon-log-in">&nbsp;</span>
			Đăng Nhập
		</div>
		<div class="form_dn">
            <?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
				'validateOnSubmit'=>true,
				),
			)); ?>
				<div class="form-group" id="form-group">
					<label for="account">Tên đăng nhập:</label>
					<?php echo $form->textField($model,'username',array("class"=>"form-control","placeholder"=>"Tên đăng nhập")); ?>
					<?php echo $form->error($model,'username'); ?>
                    <!--<input type="text" class="form-control" id="account" placeholder="Tên đăng nhập">-->
				</div>
				<div class="form-group" id="form-group">
					<label for="pwd">Mật khẩu:</label>
                    <?php echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"Mật khẩu")); ?>
					<?php echo $form->error($model,'password'); ?>
                    <!--<input type="password" class="form-control" id="pwd" placeholder="Mật khẩu">-->
				</div>
				<div class="center-block" id="buttonLogin">
                	<?php echo CHtml::submitButton('Login',array("id"=>"btnSubmit","class"=>"btn btn-default")); ?>
					<!--<button type="submit" id="btnSubmit" class="btn btn-default">Login</button>-->
					<button type="reset" class="btn btn-default">Reset</button>
				</div>
            <?php $this->endWidget(); ?>
		</div>
	</div>
</div>