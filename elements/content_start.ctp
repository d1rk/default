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

$width = (isset($width))
	? $width
	: 'full';

$this->name = $this->title;


echo $this->Grid->open();

	if($width == 'full')
	{

		if($breadcrumb)
		{
			echo $this->Html->div('bc', $this->Html->nestedList($this->getCrumbs()));
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

			if($breadcrumb)
			{
				echo $this->Html->div('bc', $this->Html->nestedList($this->getCrumbs()));
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