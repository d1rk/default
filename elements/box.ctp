<?php
$caption = (isset($caption))
	? $caption
	: '';

$description = (isset($description))
	? $description
	: '';

$content = (isset($content))
	? $content
	: '';

$footer = (isset($footer))
	? $footer
	: '';

if (!empty($caption))
{
	if(is_string($caption))
	{
		echo $this->Html->div('caption', $this->Html->tag('h2', $caption));
	}
	if(is_array($caption))
	{
		echo $this->Html->div('caption', $this->Html->nestedList($caption));
	}
}

echo $this->Html->div('box');

	echo (!empty($description))
		? $this->Html->para('description', $description)
		: null;

	echo (!empty($content))
		? $content
		: null;

	echo (!empty($footer))
		? $this->Html->div('footer', $footer)
		: null;

echo $this->Html->tag('/div'); //div.box
?>