<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?> - Curso Yii</title>
</head>

<body>

<div class="container" id="page">
	<div >
		<?php 
				
		$this->widget(
        'booster.widgets.TbNavbar',
        array(
            'brand' => 'YiiTwitter',
            'fixed' => false,
            'fluid' => true,
            'items' => array(
                array(
                    'class' => 'booster.widgets.TbMenu',
                	'type' => 'navbar',
                    'items' => array(
                        array('label' => 'Usuarios', 'url' => array('/usuario/admin2')),
                        array('label' => 'Seguidor', 'url' => array('/seguidor')),
                        array('label' => 'Tweet', 'url' => array('/tweet')),
                        array('label' => 'Salir', 'url' => array('site/logout')),
                    )
                )
            )
        )
    );
		
		
		?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> en Software Libre.<br/>
		Algunos Derechos Reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
