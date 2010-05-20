<?php
$nav = array();
$user = Authsome::get();

if(!empty($user))
{
	$nav[] = $this->Html->link( __('logout', true), array('controller' => 'users', 'action' => 'logout'));	
} else {
	$nav[] = $this->Html->link( __('login', true), array('controller' => 'users', 'action' => 'login'));	
	$nav[] = $this->Html->link( __('register', true), array('controller' => 'users', 'action' => 'register'));	
}

echo $this->Html->nestedList($nav);
?>