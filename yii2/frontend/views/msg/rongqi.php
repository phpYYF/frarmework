						<?php foreach($msgs as $msg):?>
						<li class="green bounceInDown">
							<h3>
								<img src="./message/logo100x100.jpg"><?=$msg->uname?><span><?=date('Y-m-d H:i:s',$msg->created_at)?></span>
									<div class="clr"></div>
							</h3>
							<dl>
								<dt class="hfinfo"><?=$msg->content?></dt>
							</dl>
						</li>
					<?php endforeach; ?>