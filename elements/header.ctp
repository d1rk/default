<?php
//TODO: find better solution
if($this->name == 'CakeError') return;

echo $this->Grid->open();
	echo $this->element('nav.main');
echo $this->Grid->close();
?>