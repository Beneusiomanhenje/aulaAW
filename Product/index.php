<?php
	include_once("../db.php");
include_once("../header.php");
?>







    <div class="content-wrap">
        <div class="main">
            
               
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Tabela </h4>
                                    <a href="product/add.php"><button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Add Produtos</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>cod</th>
                                                    <th>Nome</th>
                                                    <th>Preço</th>
                                                    <th>Acção</th>
                                                </tr>
                                            </thead>
                                            <?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM products");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
							/* PDO
								$stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
								$stmt->execute();
								$values = $stmt->fetchAll();
								
								foreach($values as $value) {
							*/	
											
							?>	
					  
                      <tbody>
                      
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['cod'] ?> </td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['price'] ?></td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>	
                      </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /# row -->

                    
                </section>
            </div>
  

<?php

include_once("../footer.php");
?>
        </div>
    </div>
