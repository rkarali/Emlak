        <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Anasayfa <small>İletişim Ekleme Sayfası</small>
                        </h1>
					
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            İletişim:
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    
            <form action="<?=base_url()?>admin/home/iletisim_guncelle/<?=$veri[0]->Id?>" method="POST" >
			<textarea class="form-control" name="aciklama" rows="20"></textarea><br>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'aciklama' );
            </script>
			<button type="submit" class="btn btn-success">KAYDET</button>
			<button type="reset" class="btn btn-default">SIFIRLA</button>
            
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
    <script src="../assets/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../assets/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/admin/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/admin/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/admin/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="../assets/admin/js/custom-scripts.js"></script>
    
   


