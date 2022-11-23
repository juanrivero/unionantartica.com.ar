<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.1.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.1.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logoua-670x245.jpg" type="image/x-icon">
    <meta name="description" content="">


    <title>Settings</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section class="menu menu1 cid-sdbmUOHqA3" once="menu" id="menu1-44">


        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                    <a href="http://www.unionantartica.com.ar">
                        <img src="assets/images/logoua-670x245.jpg" alt="Unión Antártica" style="height: 8rem;">
                    </a>
                </span>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="index.html"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                            Inicio</a></li>

                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="contacto.html"><span class="mobi-mbri mobi-mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Contactenos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="page4.html"><span class="mobi-mbri mobi-mbri-help mbr-iconfont mbr-iconfont-btn"></span>Preguntas frecuentes</a></li>
                    </ul>


                </div>
            </div>
        </nav>
    </section>

    <section class="testimonials1 cid-sdbmUP6O02 mbr-parallax-background" id="testimonials1-45">


        <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(255, 255, 255);">
        </div>
        <div class="container">


        <?php
            // Scrap BNA para precio dolar
            $opts = array('http' => array('header' => "User-Agent:MyAgent/1.0\r\n"));
            $context = stream_context_create($opts);
            $header = file_get_contents('http://www.bna.com.ar', FALSE, $context);
            $mystring = $header;
            $findme = 'Dolar U.S.A';
            $pos = strpos($mystring, $findme);
            $cotizacionDolarW = substr ($mystring ,$pos+96,5);
            //echo $cotizacionDolar;
            $cotizacionDolar=str_replace(",", ".", $cotizacionDolarW);

            $findme = 'fechaCot';
            $pos = strpos($mystring, $findme);
            $fechaCotizaW = substr ($mystring ,$pos+10,10);
            //echo $fechaCotiza;
            $fechaCotiza = str_replace(">", "0", $fechaCotizaW);
            $fechaCotiza = str_replace('/', '', $fechaCotiza);
            //echo date('Y-m-d', strtotime($date));
            $fechaCotiza=$fechaCotiza[0].$fechaCotiza[1]."/".$fechaCotiza[2].$fechaCotiza[3]."/".$fechaCotiza[4].$fechaCotiza[5].$fechaCotiza[6].$fechaCotiza[7];
        

            echo "<div class='row align-items-center'>
                <div class='col-12 col-md-5'>
                    <div class='text-wrapper'>
                        <p class='mbr-text mbr-fonts-style mb-4 display-5'><strong>Cotización BNA Actual</strong><br>Fecha:" . $fechaCotiza . "<br>Valor USD: " . $cotizacionDolar . "</p>";
        ?>
                        <p class="name mbr-fonts-style mb-1 display-4">
                            <em>NOTA: Se recomienda verificar los datos aquí mostrados con la web oficial del Banco de la Nación Argentina.</em></p>
                        <p class="position mbr-fonts-style display-7">
                            <em><a href="http://www.bna.com.ar" class="text-primary" target="_blank">http://www.bna.com.ar</a></em></p>
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="text-wrapper">
                        
                        <?php
                            // Credenciales
                            $servername = "localhost";
                            $database = "unionantarticaco_settings";
                            $username = "unionant_mr";
                            $password = "6_YiV5{74vwk";
                            
                            // Create connection
                            $link = mysqli_connect($servername, $username, $password, $database);

                            // Check connection
                            if($link === false){
                                die("ERROR: Could not connect. " . mysqli_connect_error());
                            }

                            //Extrae ultima cotizacion y porcentaje
                            // Attempt select query execution
                            $sql = "SELECT * FROM parametrosweb order by id desc limit 1";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    //Cabecera tabla

                                    while($row = mysqli_fetch_array($result)){
                                        $laFecha=$row['fecha_cotizacion'];
                                        $laFecha=$laFecha[0].$laFecha[1]."/".$laFecha[2].$laFecha[3]."/".$laFecha[4].$laFecha[5].$laFecha[6].$laFecha[7];
                                        $CotizacionBNA=$row['valor_cotizacion'];
                                        $PorcentajeGanancia=$row['porcentaje'];
                                    }
                                    // Free result set
                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                            // Close connection
                            mysqli_close($link);
                        
                        
                        echo "<p class='mbr-text mbr-fonts-style mb-4 display-5'><strong>Cotización</strong> <strong>BNA usada en lista de precios UA</strong>";
                        echo "<br>Fecha:" . $laFecha;
                        echo "<br>Valor USD:" . $CotizacionBNA;
                        echo "<br>Porcentaje:" . $PorcentajeGanancia;
                        ?>
                        <br></p>
                        <p class="name mbr-fonts-style mb-1 display-4"></p>
                        <p class="position mbr-fonts-style display-4"></p>
                        <center>
                            
                            <form action="actualizacion.php" method="post">
                                <label >Porcentaje</label>
                                <input type="text" name="nuevoPorcentaje" placeholder="de 1 a 100">
                                <button type="submit" name="btnActualizaPorcentaje">Actualizar %</button>    
                                <button type="submit" name="btnActualizaCotizacion">Actualizar Cotización</button>
                            </form>

                        </center>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content1 cid-sdmbM1Oj18" id="custom-html-69">



        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-12">
                    <h2 class="mbr-fonts-style block-title align-center display-2">Lista de precios</h2>

                </div>
            </div>
        </div>
    </section>
    <center class="cid-sdmbM1Oj18" id="custom-html-69" data-rv-view="2941">
        <section id="middleSection">
            <h3>Calculo automático</h3>
            <table>
                <tbody>
                    <tr>
                        <td colspan="10" class="b1">Para uso interno exclusivo por parte de Unión Antártica</td>
                    </tr>

                    <tr>
                        <td class="b1">Código</td>
                        <td class="b1">Descripción</td>
                        <td class="b1">Precio USD</td>
                        <td class="b1">Cotización BNA</td>
                        <td class="b1">Recargo Proveedor 5%</td>
                        <td class="b1">Cotización Real Proveedor</td>
                        <td class="b1">Precio Proveedor $</td>
                        <td class="b1">Precio con descuento 10%</td>
                        <td class="b1">Recargo UA</td>
                        <td class="b1">Precio Venta UA</td>
                    </tr>


                    <?php
                            //Localizacion
                            //$cadena_numerica = 4239.57;
                            setlocale(LC_MONETARY,"es_AR");
                            //echo money_format("%.2n", $cadena_numerica);

                            // Credenciales
                            $servername = "localhost";
                            $database = "unionantarticaco_settings";
                            $username = "unionant_mr";
                            $password = "6_YiV5{74vwk";
                            
                            // Create connection
                            $link = mysqli_connect($servername, $username, $password, $database);

                            // Check connection
                            if($link === false){
                                die("ERROR: No se pudo conectar (Cotizacion y Porcentaje). " . mysqli_connect_error());
                            }
 
                            
                            //Extrae ultima cotizacion y porcentaje
                            // Attempt select query execution
                            $sql = "SELECT * FROM parametrosweb order by id desc limit 1";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    //Cabecera tabla

                                    while($row = mysqli_fetch_array($result)){
                                        $CotizacionBNA=$row['valor_cotizacion'];
                                        $PorcentajeGanancia=$row['porcentaje'];
                                    }
                                    // Free result set
                                    mysqli_free_result($result);
                                } else {
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }

                            // Close connection
                            mysqli_close($link);


                            // Credenciales
                            $servername = "localhost";
                            $database = "unionantarticaco_settings";
                            $username = "unionant_mr";
                            $password = "6_YiV5{74vwk";
                            
                            // Create connection
                            $link = mysqli_connect($servername, $username, $password, $database);

                            // Check connection
                            if($link === false){
                                die("ERROR: No se pudo conectar (Productos). " . mysqli_connect_error());
                            }
                             
                            
                            // Listar todos los productos
                            $sql = "SELECT * FROM productosUA";
                            if($result = mysqli_query($link, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    //Cabecera tabla

                                    while($row = mysqli_fetch_array($result)){
                                        //$CotizacionBNA=82;
                                        $Recargo5=$CotizacionBNA * .05;
                                        $CotizacionRecargo=$CotizacionBNA + $Recargo5;
                                        $PrecioProveedor=$CotizacionRecargo*$row['precioUSD'];
                                        $PrecioDescu10=$PrecioProveedor*.9;
                                        //$PorcentajeGanancia=35;
                                        $RecargoUA=($PorcentajeGanancia * $PrecioDescu10)/100;
                                        $PrecioVentaUA=$PrecioDescu10 + $RecargoUA;

                                        echo "<tr>";
                                        echo "<td>" . $row['codigo'] . "</td>";
                                        echo "<td>" . $row['descripcion'] . "</td>";
                                        echo "<td>" . $row['precioUSD'] . "</td>";
                                        echo "<td>" . money_format("%.2n",$CotizacionBNA) . "</td>";
                                        echo "<td>" . money_format("%.2n",$Recargo5) . "</td>";
                                        echo "<td>" . money_format("%.2n",$CotizacionRecargo) . "</td>";
                                        echo "<td>" . money_format("%.2n",$PrecioProveedor) . "</td>";
                                        echo "<td>" . money_format("%.2n",$PrecioDescu10) . "</td>";
                                        echo "<td>" . money_format("%.2n",$RecargoUA) . "</td>";
                                        echo "<td>" . money_format("%.2n",$PrecioVentaUA) . "</td>";
                                        echo "</tr>";
                                    }
                                    //echo "</table>";
                                    // Free result set
                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
 
                            // Close connection
                            mysqli_close($link);
                        ?>

                    <tr>
                        <td colspan="10" class="b1">Para uso interno exclusivo por parte de Unión Antártica</td>
                    </tr>


                </tbody>
            </table>
        </section>
    </center>

    <section class="contacts2 cid-sdbmUPqIda" id="contacts2-46">
        <!---->


        <div class="container">

            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mbri-mobile2"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-7"><strong>Contáctenos&nbsp;de 8 a 22 al celular&nbsp;</strong></h6>
                            <p class="mbr-text mbr-fonts-style display-7"><a href="tel:+12345678910" class="text-primary">(54 11)&nbsp;3473-2615</a></p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper">
                        <div class="image-wrapper">
                            <a href="https://api.whatsapp.com/send?phone=5491134732615&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20UnionAntartica%202"><span class="mbr-iconfont socicon-whatsapp socicon"></span></a>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-7">
                                <strong>Mensaje vía Whatsapp</strong></h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="https://api.whatsapp.com/send?phone=5491134732615&text=Buenos%20días%20Sres%20Union%20Antartica." "=" " class="text-primary ">Enviar mensaje</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>


<section class="footer3 cid-sdbmUPRGts mbr-reveal " once="footers " id="footer3-47 ">

    <div class="container-fluid ">
        <div class="media-container-row align-center mbr-white ">
            
            
            <div class="row row-copirayt ">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7 ">
                    © Unión Antártica (2020) - Av. Amancio Alcorta 1800 - Ciudad Autónoma de Buenos Aires (C1283AAQ) - Tel. (54 11)4304-0668
                    <link rel="stylesheet " href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css ">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202. " class="float " target="_blank "></a><a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.
                                    " class="text-primary " target="_blank ">
</a><i class="fa fa-whatsapp my-float "></i><a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202. " class="text-primary " target="_blank ">
</a>
                    
                    
            </p></div>
        </div>
    </div>
</section>
<script src="assets/web/assets/jquery/jquery.min.js "></script>  
<script src="assets/popper/popper.min.js "></script>  
<script src="assets/tether/tether.min.js "></script>  
<script src="assets/bootstrap/js/bootstrap.min.js "></script>  
<script src="assets/smoothscroll/smooth-scroll.js "></script>  
<script src="assets/dropdown/js/nav-dropdown.js ">
</script>  <script src="assets/dropdown/js/navbar-dropdown.js "></script>  
<script src="assets/touchswipe/jquery.touch-swipe.min.js "></script>  
<script src="assets/parallax/jarallax.min.js "></script>  <script src="assets/theme/js/script.js "></script>    
</body>
</html>
