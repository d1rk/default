<?php
//TODO: find better solution
if($this->name == 'CakeError') return;

echo $this->Html->div('container');
	echo $this->element('nav.main');
echo $this->Html->tag('/div'); //div.container
?>