

<!--   Metodo Envio Formulario       -->
<!--  Metodo en PHP para enviar el formulario de contacto a un correo electronico predefinido -->

<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {


    $email_to = "alejx_11@hotmail.com";
    $email_subject = "Contacto desde el sitio web";
    

  
    if(!isset($_POST['nombre']) ||
    !isset($_POST['email']) || 
    !isset($_POST['asunto']) ||
    !isset($_POST['mensaje'])) {
    
    echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
    echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
    die();
    }
    
    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Asunto: " . $_POST['asunto'] . "\n";
    $email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";
    
    
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    
    echo "¡El formulario se ha enviado con éxito!";
    }
    

?>