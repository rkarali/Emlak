
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Anasayfa <small>Konut Resim Ekleme Sayfası</small>
                        </h1>
					
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Konutlar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    
        <form action="<?=base_url()?>admin/konutlar/resim_upload/<?=$id?>"method="post" enctype="multipart/form-data">
			Yükleyeceğiniz resmi seçiniz:
			<a href="#" class="btn btn-warning"><input type="file" name="dosyaadi" id="dosyaadi"></a> <br>
			<button class="btn btn-default"><i class=" fa fa-refresh "></i> Resmi Güncelle </button>
		</form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
                <!-- /. ROW  -->
        </div>
               <footer><p>All right reserved. Template by: <a href="http://www.facebook.com/rkarali">Ramazan KARALI</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?=base_url()?>/assets/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="<?=base_url()?>/assets/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/admin/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?=base_url()?>/assets/admin/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>/assets/admin/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="<?=base_url()?>/assets/admin/js/custom-scripts.js"></script>
    
   


