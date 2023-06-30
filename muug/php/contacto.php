<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $productos = $_POST['productos'];
    $mensaje = $_POST['mensaje'];

    $destino = "romina.aliquintero@gmail.com";

    $fecha = date('d-m-Y');

    $contenidomail = "
    <html>
        <body style='width:100%; max-width:1000px; margin: 0 auto;'>
            <img src='https://institutoccti.com/img/iconoheader-02.svg' style='width:20%; margin:5% 40%; float:left;'>
            
            <p style='font-family:sans-serif; font-size:12px;'> 
                Gracias por comunicarte con nosotros. <br> Te contestaremos a la brevedad. 
            </p>

            <div style='width:100%; float:left; background:black;'>
                <a href='https://institutoccti.com'>WWW.INSTITUTOCCTI.COM</a>
            </div>
        </body>
    </html>";

    $contenidomail2 = "
    <html>
        <body style='width:100%; max-width:1000px; margin: 0 auto;'>
            <img src='https://institutoccti.com/img/iconoheader-02.svg' style='width:20%; margin:5% 40%; float:left;'>
            
            <p style='font-family:sans-serif; font-size:12px;'> 
                <b>Nombre:</b> " . $nombre . " <br>
                <b>Apellido:</b> " . $apellido . " <br>
                <b>Correo:</b> " . $correo . " <br>
                <b>Productos:</b> " . $productos . " <br>
                <b>Mensaje:</b> " . $mensaje . " <br>
                <b>Fecha:</b> " . $fecha . " <br>
            </p>

            <div style='width:100%; float:left; background:black;'>
                <a href='https://institutoccti.com'>WWW.INSTITUTOCCTI.COM</a>
            </div>
        </body>
    </html>";

    mail($destino, "Correo de página web", $contenidomail2);
    mail($correo, "NOMBRE DE LA PAGINA", $contenidomail);

    header("Location:../index.php?me=si");
?>