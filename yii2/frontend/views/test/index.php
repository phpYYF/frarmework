hello
<hr>
<?php echo $username?>
<br>
<?=$username?>
<hr>
<?php 
	foreach($order as $k=>$v){
		echo $v."<br>";
	}
?>

<hr>

<?php foreach($order as $k=>$v): ?>

	<?=$k ?>__<?=$v ?><br>

<?php endforeach?>
