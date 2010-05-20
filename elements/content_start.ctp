<?php
$this->title = (isset($title))
	? $title
	: $this->title;

if(empty($this->description)) $this->description = '';

$description = (isset($description))
	? $description
	: $this->description;

$breadcrumb = (isset($breadcrumb))
	? $breadcrumb
	: true;

$btnbar = (isset($btnbar))
	? $btnbar
	: '';

$btnbar = (empty($btnbar) && !empty($this->Nav->cNavis['Primary']))
	? $this->Nav->show('Primary')
	: '';

$width = (isset($width))
	? $width
	: 'full';

$this->name = $this->title;


echo $this->Grid->open();

	if($width == 'full')
	{

		if (!empty($this->_crumbs) || !empty($btnbar))
		{
			echo $this->Html->div('bar');
				echo (!empty($btnbar) && is_string($btnbar))
					? $this->Html->div('btnbar', $btnbar)
					: null;

				echo (!empty($btnbar) && is_array($btnbar))
					? $this->Html->nestedList($btnbar)
					: null;

				echo (!empty($this->_crumbs))
					? $this->Html->nestedList($this->getCrumbs(), array('class' => 'bc'))
					: null;

			echo $this->Html->tag('/div'); //div.bc
		}

		echo $this->Html->div('box');
			if(!empty($this->title))
			{
				echo $this->Html->tag('h1', $this->title);
			}
			if(!empty($this->description))
			{
				echo $this->Html->para('description', $this->description);
			}
		echo $this->Html->tag('/div'); //div.box

	} else {
		
		echo $this->Grid->span($width);
			if(!empty($this->title))
			{
				echo $this->Html->tag('h1', $this->title);
			}
		echo $this->Grid->end();
	
		echo $this->Grid->span(24 - $width);

			if (!empty($this->_crumbs) || !empty($btnbar))
			{
				echo $this->Html->div('bar');
					echo (!empty($btnbar) && is_string($btnbar))
						? $this->Html->div('btnbar', $btnbar)
						: null;

					echo (!empty($btnbar) && is_array($btnbar))
						? $this->Html->nestedList($btnbar)
						: null;

					echo (!empty($this->_crumbs))
						? $this->Html->nestedList($this->getCrumbs(), array('class' => 'bc'))
						: null;

				echo $this->Html->tag('/div'); //div.bc
			}

		echo $this->Grid->end();
	}

//TODO: show description
/*	echo $this->Html->div('box');
		if(!empty($this->description))
		{
			echo $this->Html->para('description', $this->description);
		}
	echo $this->Html->tag('/div'); //div.box
*/
echo $this->Grid->close();
?>