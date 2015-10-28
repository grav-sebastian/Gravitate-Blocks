<?php

if($heading = get_sub_field('heading')){ ?>
	<div class="block-inner">
		<div class="<?php echo GRAV_BLOCKS::css()->row()->get();?>">
			<div class="<?php echo GRAV_BLOCKS::css()->col()->get();?>">
				<h2<?php if(get_sub_field('center')){?> style="text-align:center;"<?php } ?>>
					<?php echo $heading; ?>
				</h2>
				<?php if($sub_heading = get_sub_field('sub-heading')){ ?>
					<h3<?php if(get_sub_field('center')){?> style="text-align:center;"<?php } ?>>
						<?php echo $sub_heading; ?>
					</h3>
				<?php } ?>
			</div>
		</div>
	</div>
<?php
}