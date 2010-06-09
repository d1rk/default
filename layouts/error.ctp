<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
	echo $this->Html->charset();
	echo $this->Html->meta('keywords', Configure::read('App.keywords'));
	echo $this->Html->meta('description', Configure::read('App.description'));
	echo $this->Html->tag('title', String::insert(Configure::read('App.title'), Set::flatten(array_merge(Configure::read('App'), array('title' => $title_for_layout)))));
	echo $this->Html->meta('icon');

	echo $this->Html->css(array(
		'/flour/css/blueprint',
		'/flour/css/cake.generic',
		'/flour/css/admin.form',
		'/flour/css/tipsy',
		'/flour/css/ui-lightness/jqueryui'
	));
	echo $this->Html->script(array(
		'/flour/js/jquery/jquery',
		'/flour/js/jquery/jqueryui',
		'/flour/js/jquery/form',
		'/flour/js/jquery/tipsy',
		'/flour/js/jquery/blockui',
		'/flour/js/init'
	));

	echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">

		</div>
		<div id="content">
			<?php
			echo $this->Session->flash();
			echo $content_for_layout;
			?>
		</div>
		<div id="footer">
			<?php echo $this->element('footer'); ?>
		</div>
		<div id="copyright">
			<?php echo $this->element('copyright'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>