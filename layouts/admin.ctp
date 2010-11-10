<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
	echo $this->Html->charset();
	echo $this->Html->tag('title', String::insert(Configure::read('App.title'), Set::flatten(array_merge(Configure::read('App'), array('title' => $title_for_layout)))));
	echo $this->Html->meta('icon');

	echo $this->Html->css(array(
		'/flour/css/blueprint',
		'default.css',
		'theme.css',
		'admin.css',
		'admin.form.css',
		'admin.table.css',
		'tipsy',
		'ibutton',
		'ui-lightness/jqueryui'
	));
	echo $this->Html->script(array(
		'/flour/js/jquery',
		'/flour/js/jquery.ui',
		'/flour/js/jquery.form',
		'/flour/js/jquery.tipsy',
		'/flour/js/jquery.blockui',
		'ibutton',
		'init'
	));

	echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->element('header'); ?>
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