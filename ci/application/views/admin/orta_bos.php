
        <div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Anasayfa <small>Konut Listesi</small>
                        </h1>
					
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Konutlarımız
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Adı</th>
                                            <th>Türü</th>
                                            <th>Fiyat</th>
											<th>Miktar</th>
											<th>Resim</th>
											<th>Düzenle</th>
											<th>Sil</th>
                                        </tr>
                                    </thead>
                            <?php
							foreach($veri as $rs)
							{
							?>
							 <tr>
						        <td><?=$rs->Id?></td>
						        <td><?=$rs->adi?></td>
						        <td><?=$rs->turu?></td>
								<td><?=$rs->fiyat?></td>
								<td><?=$rs->miktar?></td>
								<td><?=$rs->resim?></td>
								</tr>
							<?php 
							}
							?>
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
    
   


