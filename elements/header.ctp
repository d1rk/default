<?php
$nav = array();

$link = array('controller' => 'pages', 'action' => 'display', 'home');
$active = ($this->here == Router::url($link)) ? 'active' : '';
$nav[] = $this->Html->link( __('Startseite', true), $link, array('class' => $active));

$link = array('controller' => 'pages', 'action' => 'display', 'tour');
$active = (stristr($this->here, Router::url($link))) ? 'active' : '';
$nav[] = $this->Html->link( __("So funktionierts's", true), $link, array('class' => $active));

$link = array('controller' => 'pages', 'action' => 'display', 'lots');
$active = (stristr($this->here, Router::url($link))) ? 'active' : '';
$nav[] = $this->Html->link( __('Verlosungen', true), $link, array('class' => $active));

$link = array('controller' => 'tags', 'action' => 'index');
$active = (stristr($this->here, Router::url($link))) ? 'active' : '';
$nav[] = $this->Html->link( __('Tags', true), $link, array('class' => $active));

echo $this->Grid->open();

echo $this->Html->div('navbar', 
	$this->Html->nestedList($nav, array('class' => 'right')).
	$this->Html->nestedList($nav)

);

echo $this->Grid->close();
?>