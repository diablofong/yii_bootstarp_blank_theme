<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $this->pageTitle ?></title>
		<!-- bootstarp css -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap.min.css" />
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/font-awesome.min.css" />
		<!-- jquery core js -->
		<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-1.11.0.js"></script>
		<!-- bootstarp core js -->
		<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap.min.js"></script>
		<style type="text/css">
			body{
				padding-top: 60px;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div class="collapse navbar-collapse">
					<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions'=>array('class'=>'nav navbar-nav'),
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					)); ?>
					</div><!--/.nav-collapse -->
				</div>
			</div>
			<div  class="container">
				<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
				<?php endif?>
				<?php echo $content; ?>
				</div><!-- end container -->
				<hr>
				<div id="footer">
					<div align="center">
						Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
						All Rights Reserved.<br/>
						<?php echo Yii::powered(); ?>
					</div>
					</div><!-- footer -->
				</body>
			</html>