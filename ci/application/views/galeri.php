	  <div class="main">  
	   <div class="wrap">  		 	       
         <div class="services_grid">
		      <div class="content_bottom">
			  <?php 
	 foreach ($veri as $rs)
	 {
		 ?>
		         			<div class="image group marketing">
							
									<div class="grid images_3_of_1">
										<a href="#"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" ></a>
									</div>
										<div class="grid blog-desc">
											<h4><?=$rs->adi?></h4>
											<p>Türü:<?=$rs->turu?></p>
											<p><?=$rs->aciklama?></p>
											<p>Fiyat:<?=$rs->fiyat?></p>
											
											
									 </div>
		
		  				      </div>
		  <?php							 
	 }
	 ?>
		      			 </div>
						 
    				</div>
    		<div class="sidebar">
	       
	    		
	  		</div> 
    <div class="clear"></div>
 </div><br><br><br>