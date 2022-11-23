<?php
    echo "Se estan actualizando lo valores solicitados" . "<BR>";
    
    if (isset($_POST['btnActualizaPorcentaje'])) {  
            echo "Actualizando PORCENTAJE a: " . $_POST['nuevoPorcentaje'] . "<BR>";
            // Credenciales
            $servername = "localhost";
            $database = "unionantarticaco_settings";
            $username = "unionant_mr";
            $password = "6_YiV5{74vwk";
        
            //Conexion con la base
            mysql_connect($servername,$username,$password);

            //selección de la base de datos con la que vamos a trabajar 
            mysql_select_db($database); 
            //Creamos la sentencia SQL y la ejecutamos
            $sSQL="UPDATE parametrosweb set porcentaje=".$_POST['nuevoPorcentaje'];
            mysql_query($sSQL);
            echo "PORCENTAJE ACTUALIZADO". "<BR>";
    }


    if (isset($_POST['btnActualizaCotizacion'])) {  
        echo "Actualizando COTIZACION BNA a: " . "<BR>";
        
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
        $fechaCotiza = str_replace(">", "0", $fechaCotizaW);
        $fechaCotiza = str_replace('/', '', $fechaCotiza);
        //$fechaCotiza=$fechaCotiza[0].$fechaCotiza[1]."/".$fechaCotiza[2].$fechaCotiza[3]."/".$fechaCotiza[4].$fechaCotiza[5].$fechaCotiza[6].$fechaCotiza[7];
        
        echo "Nueva Cotizacion Dolar BNA: ".$cotizacionDolar."<BR>";
        echo "Fecha de la nueva cotizacion BNA: ".$fechaCotiza."<BR>";
        date_default_timezone_set('GMT');
        $fechaActual = date("Y-m-d,h:m:s");
        
        // Credenciales
        $servername = "localhost";
        $database = "unionantarticaco_settings";
        $username = "unionant_mr";
        $password = "6_YiV5{74vwk";
    
        
        //Conexion con la base
        mysql_connect($servername,$username,$password);

        //selección de la base de datos con la que vamos a trabajar 
        mysql_select_db($database); 
        //Creamos la sentencia SQL y la ejecutamos
        $sSQL="UPDATE parametrosweb set valor_cotizacion=".$cotizacionDolar.",fecha_cotizacion='".$fechaCotiza."'".",fecha='".$fechaActual."'";
        mysql_query($sSQL);
        echo "COTIZACION ACTUALIZADA". "<BR>";
        
    }

?>