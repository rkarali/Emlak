        <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Anasayfa <small>Konut Ekleme Sayfası</small>
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
                                    
        <form action="<?=base_url()?>admin/konutlar/kaydet"  method="POST" >
			Konut adı : <input class="form-control" name="adi" placeholder="Konut Adı"><br>
			Konut türü :
                                <select class="form-control" name="turu">
                                <option>1+1</option>
                                <option>2+1</option>
                                <option>3+1</option>
                                <option>Müstakil</option>
                                <option>Villa</option>
                                </select><br>
			Konut fiyatı :<input class="form-control" name="fiyat" placeholder="Fiyat"><br>
			Miktar : <input class="form-control" name="miktar" placeholder="Miktar"><br>
			Açıklama : <textarea class="form-control" name="aciklama" rows="10"></textarea><br>
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
    
   


