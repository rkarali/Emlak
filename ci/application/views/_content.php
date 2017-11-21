<div class="main">  
	   <div class="wrap">  		 
	       <div class="sidebar">
	          <div class="sidebar_right_top">
	      	     <h3>Haberler</h3>
     	   <div class="latestnews">
		     <div class="latestnews_desc">
		     	<h4>Hürriyet Emlak'ın 'chat bot'u yayında</h4>
		     	<p>Hürriyet Emlak kullanıcıları artık Facebook Messenger üzerinden çalışan chat bot ile sohbet ederek gayrimenkul arayabilecek.</p>
		     	<span><a href="http://www.hurriyetemlak.com/hurriyet-emlak-in--chat-bot-u-yayinda/emlak-yasam-sektorden-haberler/GjKecmWSGFI=">Devamını Oku</a></span>
		     </div>
		     	 <div class="latestnews_desc">
		     		<h4>Emlak Konut GYO’nun 6 aylık karı açıklandı</h4>
		     		<p>Emlak Konut GYO, 01 Ocak – 30 Haziran 2016 tarihleri arasında 630 milyon 769 bin TL kar açıkladı.</p>
		     		<span><a href="http://www.hurriyetemlak.com//emlak-konut-gyo-nun-6-aylik-kari-aciklandi/emlak-yasam-sektorden-haberler/73zve3gfsMc=">Devamını Oku</a></span>
		     	</div>
		     	<div class="view-all"><a href="#">Tamamını Gör</a></div>
          </div>
	 		</div>
	    	
	  		</div> 
       <div class="content">
		      <div class="content_bottom">
	
		
		      
			  <?php 
	
	 foreach ($veri as $rs)
	 {
		 ?>
		         			<div class="image group marketing">
									<div class="grid images_3_of_1">
										<a href="#"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""></a>
									</div>
										<div class="grid blog-desc">
											<h4><?=$rs->adi?></h4>
											<p><?=$rs->kisaaciklama?></p>
											<div class="view-all"><a href="<?=base_url()?>home/konutdetay/<?=$rs->Id?>">Daha Fazla</a></div>
									 </div>
		  				      </div>
							  <?php
	 }
	 ?>
							  
		 
     
		      </div>
    	</div>
    
    <div class="clear"></div>
 </div>
</div>