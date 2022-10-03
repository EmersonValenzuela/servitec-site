	<?php
	
	if(isset($_POST['enviar'])){
            
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];



        $to = 'beto1perk@gmail.com,gerencia@servitecperu.com'; 
        $from = ''.$email.'';  
        $fromName = 'Cliente SEO'; 
         
        $subject = "Correo desde 'PESTAÑA CONTACTANOS'"; 
         
        $htmlContent = ' 
            <html> 
            <head><meta charset="gb18030"> 
                <title>Agencia Servitec</title> 
            </head> 
            <body> 
                <h1>Correo desde "CONSULTA PARA PUNTUACIÓN SEO"</h1> 
                <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 

                    <tr> 
                        <th>Nombre:</th><td>'.$name.'</td> 
                    </tr>  
                    <tr style="background-color: #e0e0e0;"> 
                        <th>Correo:</th><td>'.$email.'</td> 
                    </tr>
                    <tr> 
                        <th>Telefono:</th><td>'.$phone.'</td> 
                    </tr>
                    <tr> 
                        <th>Descripción:</th><td>'.$message.'</td> 
                    </tr> 
                </table> 
            </body> 
            </html>'; 
         
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
         
        // Additional headers 
        $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
        
        // Send email 
        if(mail($to, $subject, $htmlContent, $headers)){
            echo "<script>
                alert('Se envio correctamente');
                location.href:'https://servitec.site/';
            </script>";
        }
        
	}
        ?>
        