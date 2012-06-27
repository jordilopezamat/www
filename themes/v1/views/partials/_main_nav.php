
<?php $this->widget('zii.widgets.CMenu',array(
	'htmlOptions' => array(
		'class' => 'sf-menu',
	),
	'items' => array(
		array('label' => 'Inicio', 'url' => array('/site/index')),
		array('label' => 'Noticias', 'url' => array('/news')),
		array('label' => 'Capacitación', 'url' => array('/training'), 'items' => array(
			array('label' => 'Symfony', 'url' => array('/training/symfony')),
			array('label' => 'Drupal', 'url' => array('/training/drupal')),
			array('label' => 'XHTML/CSS', 'url' => array('/training/xhtml-css')),
			array('label' => 'Servidores', 'url' => array('/training/servers')),
		)),
		array('label' => 'Servicios', 'url' => array('/services'), 'items' => array(
			array('label' => 'Desarrollo web', 'url' => array('/services/web-development')),
			array('label' => 'Actividades SUGAR', 'url' => array('/services/sugar-activities')),
			array('label' => 'Soporte técnico', 'url' => array('/services/tech-support')),
		)),
		array('label' => 'Nosotros', 'url' => array('/about-us')),
		array('label' => 'Contacto', 'url' => array('/contact')),
		//array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
		//array('label' => 'Logout ('.Yii::app()->user->name.')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
	),
)); ?>
