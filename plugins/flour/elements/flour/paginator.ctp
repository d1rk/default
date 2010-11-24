<?php
$info = array();
$options = (isset($options))
	? $options
	: array('tag' => 'span', 'escape' => false);

if($this->Paginator->hasPage(null, 2))
{
	$info[] = '<div class="btnbar">';
	$info[] = '<ul class="pager">';
	$info[] = '<li class="img">'.$this->Paginator->first($this->Html->image('ico/resultset_first.png'), $options).'</li>';
	$info[] = '<li class="img">'.$this->Paginator->prev($this->Html->image('ico/resultset_previous.png'), $options).'</li>';
	$info[] = $this->Paginator->numbers(array('separator' => '', 'tag' => 'li'));
	$info[] = '<li class="img">'.$this->Paginator->next($this->Html->image('ico/resultset_next.png'), $options).'</li>';
	$info[] = '<li class="img">'.$this->Paginator->last($this->Html->image('ico/resultset_last.png'), $options).'</li>';
	$info[] = '</ul>';
	$info[] = '</div>';
}

$info[] = '<span>';

if(!empty($search))
{
	$search = (!is_array($search))
		? array($search)
		: $search;

	$keywords = (isset($this->Text) && is_object($this->Text))
		? $this->Text->toList($search, __('</strong> and <strong>', true))
		: implode($search);

	$info[] = __('Your search for <strong>'.$keywords.'</strong> resulted in ', true);
}

switch($paginator->counter(array('format' => '%count%')))
{
	case 0:
		$info[] = __('no results, at all.', true);
		break;
	case 1:
		$info[] = $this->Paginator->counter(array('format' => __('only <strong>one</strong> hit.', true)));
		break;
	case 2:
		$info[] = $this->Paginator->counter(array('format' => __('just <strong>two</strong> hits, showing both.', true)));
		break;
	case 3:
		$info[] = $this->Paginator->counter(array('format' => __('at least <strong>three</strong> hits, showing all three.', true)));
		break;
	default:
		$info[] = $this->Paginator->counter(array('format' => __('<strong>%count%</strong> hits. Showing <strong>%start%</strong> to <strong>%end%</strong>.', true)));
}
$info[] = '</span>';

echo $this->Html->div('paginator', join("\n", $info));
