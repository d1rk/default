<?php
echo $html->div('modalbox');
	echo $html->div('btnbar', null, array('style' => 'position: relative; top: -6px; right: -8px;'));
		echo $html->link($html->image('global/close.gif', array('alt' => __('schliepen', true), 'title' => __('schliepen', true), )), '#', array('class' => 'jqmClose', 'escape' => false));
	echo $html->tag('/div')."\n"; //div.btnbar
	echo $content_for_layout;
echo $html->tag('/div')."\n"; //div.
?>
