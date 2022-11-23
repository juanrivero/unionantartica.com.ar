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


    <title>listaprecios</title>
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

    <section class="menu menu1 cid-sf8SEFbOyn" once="menu" id="menu1-6c">


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

    <section class="content4 cid-sf8SEFSzSg" id="content4-6d">

        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-md-12 col-lg-10">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Lista de precios</strong></h3>
                    <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5">Por compras de mayor cantidad comunicarse al (54 11) 3473-2615.</h4>

                </div>
            </div>
        </div>
    </section>

    <section class="content8 cid-sf8SEGLZ8e" id="content8-6f">

        <div class="container">
            <div class="row justify-content-center">
                <div class="counter-container col-md-12 col-lg-10">

                    <div class="mbr-text mbr-fonts-style display-7">
                        <ul>
                            <li><strong>Hasta 85% de ahorro económico&nbsp;</strong>Los sistemas solares térmicos ofreces un alto porcentaje de ahorro, entre el 65% y el 85% de nuestra factura de gas o electricidad.</li>
                            <li><strong>Resistencia al granizo. </strong>Los tubos de vidrio resisten granizos de hasta 25mm de diámetro, aún así se recomienda protegerlos con lonas protectoras fabricadas a medida, y así evitar roturas.</li>
                            <li><strong>Garantía total. </strong>Ofrecemos hasta 2 años de garantía sobre nuestros productos.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section article content1 cid-sf8SEHsySx" id="custom-html-6h">



        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-12">
                    <h2 class="mbr-fonts-style block-title align-center display-2">Precios para todos nuestros productos</h2>

                </div>
            </div>
        </div>
    </section>
    <center class="cid-sf8SEHsySx" id="custom-html-6h" data-rv-view="1140">
        <section id="middleSection">
            <h3></h3>
            <table>
                <tbody>
                    <tr>
                        <td colspan="10" class="b1">Antes de realizar cualquier operación consulte la vigencia de la presente lista de precios</td>
                    </tr>

                    <tr>
                        <td class="b1">Código</td>
                        <td class="b1">Descripción</td>
                        <td class="b1">Precio Venta</td>
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
                                        $Mensaje="Quisiera+consultar+por+el+" . $row['descripcion'];
                                        echo $Mensaje;
                                        // echo "<td>" . money_format("%.2n",$PrecioVentaUA) . "</td>";
                                        echo "<td><a href='https://wa.me/5491134732615?text=" . $Mensaje . "'>Consulte acá</a></td>";
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
                        <td colspan="10" class="b1">Antes de realizar cualquier operación consulte la vigencia de la presente lista de precios</td>
                    </tr>


                </tbody>
            </table>
        </section>
    </center>

    <section class="content7 cid-sf8VlqqFjb" id="content7-6p">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <blockquote class="mbr-fonts-style display-4">
                        <h5 class="mbr-section-title mbr-fonts-style mb-2"><strong>Nota: <span style="font-size: 17.6px;"><em>Valor por unidad para pagos al contado, expresado en pesos argentinos con IVA incluido, según la cotización del dólar. Por compras de mayor cantidad comunicarse al (54 11) 3473-2615.</em></span></strong></h5>
                    </blockquote>
                </div>
            </div>

        </div>
    </section>

    <section class="content11 cid-sf8WETSmzi" id="content11-6q">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6">
                    <div class="mbr-section-btn align-center">

                        <center><input type="button" class="btn btn-primary" value="Volver" onclick="history.go(-1);"></center>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content10 cid-sf8SEI6a0P" id="content10-6j">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md">

                    <h6 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">
                        Agua caliente incluso en días nublados</h6>
                </div>
                <div class="col-md-12 col-lg-6">
                    <p class="mbr-text mbr-fonts-style display-7">Los tubos colectores al vacío, están diseñados para recoger la energía que se genera con el sol y convertirla en energía térmica. Este vacío evita que el calor que ha ingresado al tubo interno vuelva escapar al exterior, permitiéndole
                        a este sistema elevar el agua a temperaturas que pueden llegar a alcanzar los 100°C.Lo importante, es que absorben no solo los rayos solares directos sino que también la radiación solar difusa permitiendo calentar el agua aún en
                        días nublados.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts2 cid-sf8SEIno7b" id="contacts2-6k">
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

<section class="footer3 cid-sf8SEIQGWL mbr-reveal " once="footers " id="footer3-6l ">

    

    

    <div class="container-fluid ">
        <div class="media-container-row align-center mbr-white ">
            
            
            <div class="row row-copirayt ">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7 ">
                    © Unión Antártica (2020) - Av. Amancio Alcorta 1800 - Ciudad Autónoma de Buenos Aires (C1283AAQ) - Tel. (54 11)4304-0668
                    <link rel="stylesheet " href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css ">
                    
            </p></div>
        </div>
    </div>
</section><script src="assets/web/assets/jquery/jquery.min.js "></script>  <script src="assets/popper/popper.min.js "></script>  <script src="assets/tether/tether.min.js "></script>  <script src="assets/bootstrap/js/bootstrap.min.js
                                    "></script>  <script src="assets/smoothscroll/smooth-scroll.js "></script>  <script src="assets/dropdown/js/nav-dropdown.js "></script>  <script src="assets/dropdown/js/navbar-dropdown.js "></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js
                                    "></script>  <script src="assets/theme/js/script.js "></script>  
  
  
</body>
</html>