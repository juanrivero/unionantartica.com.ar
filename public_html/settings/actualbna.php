<?php
    $servername = "localhost";
    $database = "unionantarticaco_settings";
    $username = "unionant_mr";
    $password = "6_YiV5{74vwk";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
     
    //echo "Connected successfully";
     
    
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
    $fechaCotizaW = substr ($mystring ,$pos+9,10);
    //echo $fechaCotiza;
    $fechaCotiza = str_replace(">", "0", $fechaCotizaW);
    $fechaCotiza = str_replace('/', '', $fechaCotiza);
    //echo date('Y-m-d', strtotime($date));


    
    $sql = "INSERT INTO parametrosweb (id,fecha, fecha_cotizacion, valor_cotizacion, porcentaje) VALUES (0, Now(), $fechaCotiza, $cotizacionDolar, 100)";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
