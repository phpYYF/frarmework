<?php if (!defined('THINK_PATH')) exit();?>						<?php if(is_array($msgs)): foreach($msgs as $key=>$msg): ?><li class="green bounceInDown">
							<h3>
								<img src="/tp322/Public/message/logo100x100.jpg"> 
								<?php echo ($msg['uname']); ?>
								<span><?php echo date('Y-m-d H:i:s',$msg['created_at']);?></span>
								<div class="clr"></div>
							</h3>
							<dl>
								<dt class="hfinfo"><?php echo ($msg['content']); ?></dt>
							</dl>
						</li><?php endforeach; endif; ?>