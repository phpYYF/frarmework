<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php echo ($data1); ?>
 	<hr>
 	<?php if($data2['sex'] == '男'): ?>强大
 	<?php else: ?>
 		弱小<?php endif; ?>

 	<hr>
 	<?php if(is_array($data3)): foreach($data3 as $key=>$v): echo ($v['name']); ?>__<?php echo ($v['age']); ?>__<?php echo ($v['sex']); ?> <hr><?php endforeach; endif; ?>
 </body>
 </html>