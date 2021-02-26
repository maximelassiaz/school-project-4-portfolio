<?php
    function sanitize_input($input) {
        return htmlspecialchars(stripslashes(trim($input)));
    }

    if (!isset($_POST['form-submit'])) {
        header("Location: index.php");
        exit();
    } else {
        
        $name = sanitize_input($_POST['name-form']);
        $subject = sanitize_input($_POST['subject-form']);
        $email = filter_var(sanitize_input($_POST['email-form']),FILTER_SANITIZE_EMAIL);
        $message = sanitize_input($_POST['message-form']);
        
        if (empty($name) || empty($subject) || empty($email) || empty($message)) {
            header("Location: index.php?error=emptyfields#contact");
            exit();
        } else {
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                header("Location: index.php?error=errname#contact");
                exit();
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: index.php?error=erremail#contact");
                exit();
            }
            
            $receiver = "randomemail1234@gmail.com";
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            $headers[] = "From: $email";
            $message = wordwrap($message, 70);
            $msg = "<!DOCTYPE html>
            <html lang='fr'>
                <head> 
                    <meta http-equiv='Content-Type' content='text/html'>
                    <meta charset='UTF-8'>
                    <title>Email from " . htmlspecialchars($name) . "</title>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                </head>
                <body>
                    <table style='border: 2px solid black; width= 80% ; margin: 0 auto; border-collaspe: collapse;'>
                        <tr>                        
                            <td style='padding : 10px'>Sender's name : " . htmlspecialchars($name) . "</td>
                            <td style='padding : 10px'>Sender's email : " . htmlspecialchars($email) . "</td>
                            <td style='padding : 10px'>Subject : " . htmlspecialchars($subject) . "</td>
                            <td style='padding : 10px'>Message : " . htmlspecialchars($message) . "</td>
                        </tr>
                    </table>
                </body>
        </html>";

            if ($sendMail = mail($receiver, $subject, $msg, implode("\r\n", $headers))) {
                header("Location: index.php?mail=sent#contact");
                exit();
            } else {
                header("Location: index.php?mail=err#contact");
                exit();
            }
        }
    }

?>