<?php
require_once 'config.php'; 
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\OAuth;
        use PHPMailer\PHPMailer\POP3;
    if (isset($_POST['p_name']) && isset($_POST['amount']) && isset($_POST['email']) && isset($_POST['currency']) ) {
	        include_once 'db-connect.php'; 
            $amount = $_POST['amount'];
            $name = $_POST['p_name'];
            $email = $_POST['email'];
            $currency = $_POST['currency'];
            $packages ='';
            if(isset($_POST['package']) && $_POST['package'] != ''){
                $packages = implode(', ', $_POST['package']);
            }
            $sale_mail = $_POST['sales_mail'];
            $desc = $_POST['desc'];
            $sales_mail =$_POST['sales_mail'];
            $link_token = md5(uniqid(date('M-DD-YYYY-h-i-s-a'), true));
            $sql = "INSERT INTO orders(project_name,email,link_token,packages,description,item_price,sales_email,item_price_currency,created) VALUES('".$name."','".$email."','".$link_token."','".$packages."','".$desc."','".$amount."','".$sales_mail."','".$currency."',NOW())"; 
            $insert = $db->query($sql); 
            $payment_id = $db->insert_id; 

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            require 'PHPMailer/src/OAuth.php';
            require 'PHPMailer/src/POP3.php';

            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            // $mail->Username = 'mailer.webappsolution@gmail.com';
            // $mail->Password = 'Saif0101';
            $mail->Username = 'mail.webappsolution@gmail.com';
            $mail->Password = 'hkjhtohydncgaaqi';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;
           

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            if(isset($_POST['sales_mail'])){
            $mail->addcc($_POST['sales_mail']); 
            } 
            $mail->Subject = "New Payment Invoice Link - web app solution";
            $mail->Body = '<html><style>table, th, td {
			  border: 1px solid black;
			  border-collapse: collapse;
			}
			th {
			    font-size: 14px;
			    padding:5px 10px 5px 2px;
			}
			td{
			    padding:5px 10px 5px 2px;
			}
			</style><body><div><img src="https://www.webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div><h2>Invoice Details:</h2>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Client Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Project Description:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$desc.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Amount:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$amount.$currency.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Packages:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$packages.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Invoice Link :</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;"><a href="https://webappsolution.org/payment/paynow.php?token='.$link_token.'">https://webappsolution.org/payment/paynow.php?token='.$link_token.'</a></td></tr>';
            $mail->Body .= '</tbody></table><br>';
             $mail->Body .= '<p>Please feel free to send us an email at billing@webappsolution.org or call us at +1 212 684 6931 for billing related queries.</p>';
             $mail->Body .= '<p>Thank you for choosing <a href="https://webappsolution.org/"> web app solution</a>.</p>';
            
    //         $mail->Body .= '<a href="https://webappsolution.org/payment/paynow.php?token='.$link_token.'" style="color: #fff;
    // text-decoration: none;
    // background: #1f2c41;
    // padding: 10px;
    // border-radius: 7px;
    // display: block;
    // max-width: max-content;
    // margin-top: 10px;">Complete Invoice</a>';
            $mail->Body .= '</body></html>';
          //  echo $mail->Body;exit();
        if(!$mail->Send())
        {
            echo "Mailer Error: " . $mail->ErrorInfo;
            echo "email is not send";

        }
        else{  
            header('Location: https://webappsolution.org/payment/link-details.php?token='.$link_token);
         }
 
}
