<?php
    
    $titulo = 'Enviando email';
    $mensaje = 'Primer email';
    $cabecera = 'From: Mi nombre';

    $para = 'ivonne.mtz.manzo@gmail.com';

    $enviado = mail($para, $titulo, $mensaje, $cabecera);

    if ($enviado)
      echo 'Email enviado correctamente';
    else
      echo 'Error en el envío del email';

?>