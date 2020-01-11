<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>PharmaChimia</title>

    <!-- Favicon  -->
    <link rel="icon" href="https://i.imgur.com/SeXsUSW.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    $servername = "localhost";
	$username = "ukke0o7tdmnd";
	$password = "Bigpene123!";
	$database = "db_pharmachimia";

	 // Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

    ?>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="#">Artículos</a>
                                </li>-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artículos</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                	<?php
                                	$sql = "SELECT * FROM categoria";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = $result->fetch_assoc()) {
									        /*echo "id: " . $row["id_categoria"]. " - Nombre: " . $row["nombre"]."<br>" ;*/

									        echo "<a class='dropdown-item' href='categoria.php?id_categoria=".$row["id_categoria"]."'>".$row["nombre"]."</a>";
									    }
									} else {
									    echo "0 results";
									}
                                	?>

                                        <!--<a class="dropdown-item" href="index.html">Farmacia</a>
                                        <a class="dropdown-item" href="catagory.html">Química</a>
                                        <a class="dropdown-item" href="single-blog.html">Medicina</a>
                                        <a class="dropdown-item" href="regular-page.html">Salud</a>-->
                                    </div>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="#">Videos</a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.php">Contactános</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="busqueda.php" method="get">
                                    <input type="text" id="search" name="parametro" pattern=".{3,}" required title = "Por favor ingresar un mínimo de 3 caracteres." placeholder="Buscar articulos...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(https://i.imgur.com/lhC7wmA.jpg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(https://i.imgur.com/vTMJWMh.jpg);"></div>
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(https://i.imgur.com/XLjdDXJ.jpg);"></div>
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(https://i.imgur.com/OWjQymk.jpg);"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <!--Loop con PHP/JSP(JAVA)-->
                            <?php 
                            //SELECT * FROM `articulo` ORDER BY fecha desc limit 4

                            $sql = "SELECT * FROM articulo ORDER BY fecha desc limit 4";
							$result = $conn->query($sql);
							$contador = 1;

                            if ($result->num_rows > 0) {


									    // output data of each row
						    while($row = $result->fetch_assoc()) {
							        /*echo "id: " . $row["id_categoria"]. " - Nombre: " . $row["nombre"]."<br>" ;*/

							        echo 
							        "<div class='single-slide d-flex align-items-center'>
		                                <div class='post-number'>
		                                    <p>".$contador."</p>
		                                </div>
		                                <div class='post-title'>
		                                    <a href='articulo.php?id_articulo=".$row["id_articulo"]."'>".$row["titulo"]."</a>
		                                </div>
		                            </div>";

		                            $contador = $contador + 1;

							    }
							} else {
							    echo "0 results";
							}

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Artículos</li>

                                <?php
	                                $sql = "SELECT * FROM categoria";
									$result = $conn->query($sql);
									$contador = 1;
									$arr_categorias_id = array();

									if ($result->num_rows > 0) {
									    while($row = $result->fetch_assoc()) {
								    		if($contador == 1){
								    			echo 
										        "<li class='nav-item'>
	                                    			<a class='nav-link active' id='tab".$contador."' data-toggle='tab' href='#world-tab-".$contador."' role='tab' aria-controls='world-tab-".$contador."' aria-selected='true'>".$row["nombre"]."</a>
	                                			</li>";}
								    		else{
								    			echo 
										        "<li class='nav-item'>
	                                    			<a class='nav-link' id='tab".$contador."' data-toggle='tab' href='#world-tab-".$contador."' role='tab' aria-controls='world-tab-".$contador."' aria-selected='true'>".$row["nombre"]."</a>
	                                			</li>";}

                                			$contador = $contador + 1;
                                			array_push($arr_categorias_id,$row["id_categoria"]);
									    }
									} else {
									    echo "0 results";
									}
                                ?>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                            	<?php
                            		$contador = 1;
									foreach ($arr_categorias_id as &$value) {

										$sql = "select a.id_articulo,a.titulo,a.mensaje,
												a.imagen_portada,a.imagen_pequena,
												a.fecha,c.nombre,c.id_categoria 
												from categoria as c 
												inner join articulo_categoria as ac 
												on ac.id_categoria = c.id_categoria 
												inner join articulo as a 
												on a.id_articulo = ac.id_articulo 
												where c.id_categoria = ".$value."
												ORDER BY a.fecha desc limit 7";

										$result = $conn->query($sql);
										$num_rows = mysqli_num_rows($result);

										if($num_rows == 1)
										{
											if ($result->num_rows > 0) {

												if($contador == 1){
													echo "<div class='tab-pane fade show active' id='world-tab-1' role='tabpanel' aria-labelledby='tab1'>";
												}
												else{
													echo "<div class='tab-pane fade' id='world-tab-".$contador."' role='tabpanel' aria-labelledby='tab".$contador."'>";
												}

												echo "<div class='row'>

                                    						<div class='col-12 col-md-6'>";
											    while($row = $result->fetch_assoc()) {
											    	/*echo "<script type='text/javascript'>alert('SRC:".$row["imagen_pequena"]."');</script>";*/
    															echo "<div class='single-blog-post'>
					                                                    <!-- Post Thumbnail -->
					                                                    <div class='post-thumbnail'>
					                                                        <img src='".$row["imagen_portada"]."' alt=''>
					                                                        <!-- Catagory -->
					                                                        <div class='post-cta'><a href='categoria.php?id_categoria=".$row["id_categoria"]."'>".$row["nombre"]."</a></div>
					                                                    </div>
					                                                    <!-- Post Content -->
					                                                    <div class='post-content'>
					                                                        <a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
					                                                            <h5>".$row["titulo"]."</h5>
					                                                        </a>
					                                                    </div>
					                                                </div>";
											    }
											    
											    echo 		"</div>

								    	 			  		<div class='col-12 col-md-6'>

									    	 		  		</div>

									    	 	 	</div>
											    </div>";
											} 
										}
										else if($num_rows > 1 && $num_rows <= 3)
										{
											/*echo "<script type='text/javascript'>alert('Contador: ".$contador."');</script>";
											echo "<script type='text/javascript'>alert('No. de Rows: ".$num_rows."');</script>";*/
											if ($result->num_rows > 0) {

												if($contador == 1){
													echo "<div class='tab-pane fade show active' id='world-tab-1' role='tabpanel' aria-labelledby='tab1'>";
												}
												else{
													echo "<div class='tab-pane fade' id='world-tab-".$contador."' role='tabpanel' aria-labelledby='tab".$contador."'>";
												}

													echo "<div class='row'>";


													echo "<div class='col-12 col-md-6'>";

											    while($row = $result->fetch_assoc()) {
												    			echo "<div class='single-blog-post'>
					                                                    <!-- Post Thumbnail -->
					                                                    <div class='post-thumbnail'>
					                                                        <img src='".$row["imagen_portada"]."' alt=''>
					                                                        <!-- Catagory -->
					                                                        <div class='post-cta'><a href='categoria.php?id_categoria=".$row["id_categoria"]."'>".$row["nombre"]."</a></div>
					                                                    </div>
					                                                    <!-- Post Content -->
					                                                    <div class='post-content'>
					                                                        <a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
					                                                            <h5>".$row["titulo"]."</h5>
					                                                        </a>
					                                                    </div>
					                                                </div>";
											    }
											    	echo "</div>";

									    		echo "<div class='col-12 col-md-6'>

								    				 </div>";

											    echo "</div>
											    </div>";
											} 
										}
										else if($num_rows > 3)
										{
											$contador_articulo = 1;


											if ($result->num_rows > 0) {

											    while($row = $result->fetch_assoc()) {

											    	if($contador_articulo == 1){
											    		if($contador == 1){
															echo "<div class='tab-pane fade show active' id='world-tab-1' role='tabpanel' aria-labelledby='tab1'>";
														}
														else{
															echo "<div class='tab-pane fade' id='world-tab-".$contador."' role='tabpanel' aria-labelledby='tab".$contador."'>";
														}

															echo "<div class='row'>
																	<div class='col-12 col-md-6'>
																      <div class='single-blog-post'>
					                                                    <!-- Post Thumbnail -->
					                                                    <div class='post-thumbnail'>
					                                                        <img src='".$row["imagen_portada"]."' alt=''>
					                                                        <!-- Catagory -->
					                                                        <div class='post-cta'><a href='categoria.php?id_categoria=".$row["id_categoria"]."'>".$row["nombre"]."</a></div>
					                                                    </div>
					                                                    <!-- Post Content -->
					                                                    <div class='post-content'>
					                                                        <a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
					                                                            <h5>".$row["titulo"]."</h5>
					                                                        </a>
					                                                    </div>
					                                                </div>";


											    	}
											    	else if($contador_articulo == 2){
											    		echo "<div class='single-blog-post'>
					                                                    <!-- Post Thumbnail -->
					                                                    <div class='post-thumbnail'>
					                                                        <img src='".$row["imagen_portada"]."' alt=''>
					                                                        <!-- Catagory -->
					                                                        <div class='post-cta'><a href='categoria.php?id_categoria=".$row["id_categoria"]."'>".$row["nombre"]."</a></div>
					                                                    </div>
					                                                    <!-- Post Content -->
					                                                    <div class='post-content'>
					                                                        <a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
					                                                            <h5>".$row["titulo"]."</h5>
					                                                        </a>
					                                                    </div>
					                                                </div>";

											    	}
											    	else if($contador_articulo == 3){
											    		echo "<div class='single-blog-post'>
					                                                    <!-- Post Thumbnail -->
					                                                    <div class='post-thumbnail'>
					                                                        <img src='".$row["imagen_portada"]."' alt=''>
					                                                        <!-- Catagory -->
					                                                        <div class='post-cta'><a href='categoria.php?id_categoria=".$row["id_categoria"]."'>".$row["nombre"]."</a></div>
					                                                    </div>
					                                                    <!-- Post Content -->
					                                                    <div class='post-content'>
					                                                        <a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
					                                                            <h5>".$row["titulo"]."</h5>
					                                                        </a>
					                                                    </div>
					                                                </div>
					                                              </div>";

											    	}
											    	else if($contador_articulo == 4){
											    		echo "<div class='col-12 col-md-6'>
																<div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
																	<div class='post-thumbnail'>
																		<img src='".$row["imagen_pequena"]."' alt=''>
																	</div>
																	<div class='post-content'>
																		<a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
																			<h5>".$row["titulo"]."</h5>
																		</a>
																	</div>
																</div>";

											    	}
											    	else if($contador_articulo == 5 || $contador_articulo == 6){
											    		echo "<div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
																	<div class='post-thumbnail'>
																		<img src='".$row["imagen_pequena"]."' alt=''>
																	</div>
																	<div class='post-content'>
																		<a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
																			<h5>".$row["titulo"]."</h5>
																		</a>
																	</div>
																</div>";

											    	}
											    	else if($contador_articulo == 7){
														echo "<div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
																	<div class='post-thumbnail'>
																		<img src='".$row["imagen_pequena"]."' alt=''>
																	</div>
																	<div class='post-content'>
																		<a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
																			<h5>".$row["titulo"]."</h5>
																		</a>
																	</div>
																</div>
															</div>
								    			 		</div>
								    				</div>";
											    	}
											    	
											    	if($contador_articulo == $num_rows){
											    		echo "<div class='single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig' data-wow-delay='0.2s'>
																	<div class='post-thumbnail'>
																		<img src='".$row["imagen_pequena"]."' alt=''>
																	</div>
																	<div class='post-content'>
																		<a href='articulo.php?id_articulo=".$row["id_articulo"]."' class='headline'>
																			<h5>".$row["titulo"]."</h5>
																		</a>
																	</div>
																</div>
															</div>
								    			 		</div>
								    				</div>";
											    	}

											    	/*echo "<script type='text/javascript'>alert('Contador de Articulo: ".$contador_articulo." - No. de Rows: ".$num_rows."');</script>";*/
												    			
									    			$contador_articulo = $contador_articulo + 1;
											    }
											} 
										}

										$contador = $contador + 1;
									}
                            	?>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Nosotros</h5>
                            <div class="widget-content">
                                <p>Nuestro objetivo es compartir conocimiento, reseñas científicas, notas científicas, noticias del área, documentos para aprendizaje, creando una comunidad científica interesada en la química, remedios naturales a nivel químico explicando todas las propiedades de los preparados, tratamientos alopáticos y educar a cerca del consumo de estos remedios y la importancia de la visita medica antes del consumo de estos remedios. Contáctanos para dar feedback, puedes compartirnos documentos para su revisión.</p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Redes Sociales</h5>
                            <div class="widget-content">
                                <div class="">
                                    <a href="https://twitter.com/PharmaChimia" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/pharmachimia/" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCYArLF-ZIZ_lEpHyqUqMfnQ?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i></a>
                                    
                                    <!--<a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>-->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>