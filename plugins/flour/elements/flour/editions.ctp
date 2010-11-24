<?php
if(empty($editions))
{
	return;
}

$caption = (isset($caption))
	? $caption
	: __('Editions', true);

$model = (isset($model))
	? $model
	: Inflector::singularize(Inflector::humanize($this->params['controller']));

$template = (isset($template))
	? $template
	: __(':name - :description', true);

$items = array();
foreach ($editions as $index => $item)
{
	$items[] = $this->Html->link(String::insert($template, $item[$model]), array('action' => 'edit', $item[$model]['id']));
	// $items[] = $this->Html->link($item[$model]['name'], array('action' => 'edit', $item[$model]['id']));
}

$content = $this->Html->nestedList($items, array('class' => 'editions'));

echo $this->element('flour/box', compact('caption', 'content'));
