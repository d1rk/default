<?php
App::import('Lib', 'Flour.div_explode');

$caption = (isset($caption))
	? $caption
	: '';

$caption_tag = (isset($caption_tag))
	? $caption_tag
	: 'h3';

$btnbar = (isset($btnbar))
	? $btnbar
	: '';

$filters = (isset($filters))
	? $filters
	: '';

$actions = (isset($actions))
	? $actions
	: '';

$class = (isset($class))
	? $class
	: 'clearfix box';

$style = (isset($style))
	? $style
	: null;

$options = (isset($options))
	? $options
	: array('style' => $style);

$template = (isset($template))
	? $template
	: null;

$content = (isset($content))
	? $content
	: '';

$content = (!empty($template) && is_array($content))
	? $this->element('templates/'.$template, $content)
	: $content;

$content = (is_array($content))
	? div_explode($content)
	: $content;

$header = (isset($header))
	? $header
	: '';

$header = (is_array($header))
	? div_explode($header)
	: $header;

$footer = (isset($footer))
	? $footer
	: '';

$footer = (is_array($footer))
	? div_explode($footer)
	: $footer;

$before = (isset($before))
	? $before
	: '';

$after = (isset($after))
	? $after
	: '';

echo $this->Html->div($class, null, $options);
echo $before;

	if (!empty($caption) || !empty($btnbar) || !empty($filters) || !empty($actions))
	{
		echo $this->Html->div($class.'_caption caption');

			echo (!empty($btnbar) && is_string($btnbar))
				? $this->Html->div($class.'_btnbar btnbar', $btnbar)
				: null;

			echo (!empty($btnbar) && is_array($btnbar))
				? $this->Html->nestedList($btnbar)
				: null;

			echo (!empty($caption) && is_string($caption))
				? $this->Html->tag($caption_tag, $caption)
				: null;

			echo (!empty($caption) && is_array($caption))
				? $this->Html->nestedList($caption)
				: null;

			echo (!empty($actions) && is_string($actions))
				? $this->Html->div($class.'_actions actions', $actions)
				: null;

			echo (!empty($actions) && is_array($actions))
				? $this->Html->div($class.'_actions actions', $this->Html->nestedList($actions))
				: null;

			echo (!empty($filters) && is_string($filters))
				? $this->Html->div($class.'_filter filter', $filters)
				: null;

			echo (!empty($filters) && is_array($filters))
				? $this->Html->div($class.'_filter filter', $this->Html->nestedList($filters))
				: null;

		echo $this->Html->tag('/div'); //div.caption
	}

	echo $this->Html->div($class.'_wrapper wrapper');

		//HEADER
		echo (!empty($header) && is_string($header))
			? $this->Html->div($class.'_header header', $header)
			: null;

		echo (!empty($header) && is_array($header))
			? $this->Html->div($class.'_header header', implode($header))
			: null;

		//CONTENT
		echo (!empty($content) && is_string($content))
			? $this->Html->div($class.'_content', $content)
			: null;

		echo (!empty($content) && is_array($content))
			? $this->Html->div($class.'_content', implode($content))
			: null;

		//FOOTER
		echo (!empty($footer) && is_string($footer))
			? $this->Html->div($class.'_footer', $footer)
			: null;

		echo (!empty($footer) && is_array($footer))
			? $this->Html->div($class.'_footer', implode($footer))
			: null;

	echo $this->Html->tag('/div'); //div.box

echo $after;
echo $this->Html->tag('/div'); //div.box
