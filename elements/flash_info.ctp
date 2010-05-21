<div class="flasher info">
	<?php echo $message; ?>
</div>
<?php
echo $this->Html->scriptBlock('$().ready(function(){ $("div.flasher, div#flashMessage").hide().slideDown(); }); $("div.flasher, #flashMessage").bind("click", function(){ $("div.flasher, #flashMessage").slideUp()});');
?>
