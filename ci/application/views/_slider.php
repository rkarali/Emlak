<div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <?php 
	                foreach ($veri as $rs)
	                {
		             ?>
	                   <a href="<?=base_url()?>home/konutdetay/<?=$rs->Id?>">
					   <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
					   </a>
	                 <?php
	                }
	                ?>
	            </div>
	        </div>
</div>
</div>
		