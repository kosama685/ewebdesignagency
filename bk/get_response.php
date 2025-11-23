<?php
header('Access-Control-Allow-Origin: *');
require_once("payment/config.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\POP3;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/OAuth.php';
require 'PHPMailer-master/src/POP3.php';
if((isset($_POST['action'])&& $_POST['action'] =='main-form'))
{

            $uploadDir = 'upload_file_folder/';
            $name           = $_POST['Name'];
            $email          = $_POST['Email'];
            $number         = $_POST['Number'];
            // $budget         = $_POST['budget'];
            $package        = $_POST['Package'];
            $message        = $_POST['Message'];
            $loaction_url   = $_POST['locationURL'];

            $uploadStatus = 1;

            // Upload file
            $uploadedFile = '';
            if(!empty($_FILES["wordfile"]["name"])){

                // File path config
                $fileName = basename($_FILES["wordfile"]["name"]);
                $targetFilePath = $uploadDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["wordfile"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $fileName;
                    }else{
                        $uploadStatus = 0;
                        $response['message'] = 'Sorry, there was an error uploading your file.';
                    }
                }else{
                    $uploadStatus = 0;
                    $response['message'] = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            // $to = 'mhamza.snt@gmail.com';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'mail.webappsolution.org';
            $mail->Port = 465;
            $mail->Username = 'sales@webappsolution.org';
            $mail->Password = 'admin123!@#';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;
            if($uploadStatus == 1){
            //print_r($_SERVER["HTTP_REFERER"].$uploadDir.$uploadedFile,$uploadedFile);exit();
                $mail->addAttachment($uploadDir.$uploadedFile,$uploadedFile);
            }

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            $mail->Subject = "Get a Quote";
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Email:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$email.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Phone Number:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$number.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Package:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$package.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Message:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$message.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Form Submit Location:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$loaction_url.'</td></tr>';
            $mail->Body .= '</tbody></table><br>';
            $mail->Body .= '</body></html>';
            $mail_to = new PHPMailer();
            $mail_to->IsSMTP($from, $to);
            $mail_to->CharSet="UTF-8";
            $mail_to->SMTPSecure = 'tls';
            $mail_to->Host = 'mail.webappsolution.org';
            $mail_to->Port = 465;
            $mail_to->Username = 'sales@webappsolution.org';
            $mail_to->Password = 'admin123!@#';
            $mail_to->SMTPAuth = true;
            //$mail_to->SMTPDebug = true;



            $mail_to->IsHTML(true);
            $mail_to->setFrom ($email, $from, $to);
            $mail_to->AddAddress($email);
            $mail_to->Subject = "Thank you for contacting web app solution";
            $mail_to->Body = '<html><style>table, th, td {
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
             $mail_to->Body .= '<p>Thank you for contacting web app solution. We have received your inquiry and one of our expert consultants will get back to you very shortly.</p>';
             $mail_to->Body .= '<p>For immediate assistance during the business hours please give is a call at +1 212-684-6931.</p>';
             $mail_to->Body .= '<p>Regards</p>';
             $mail_to->Body .= '<p>Team, web app solution</p>';
            $mail_to->Body .= '</body></html>';
            $mail_to->Send();
        if(!$mail->Send())
        {
            $response['status'] = 0;
            $response['message'] = 'Form data submitted Failed!';

        }
        else{

           $response['status'] = 1;
           $response['name'] = $_POST['name'];
           $response['email'] = $_POST['email'];
           $response['number'] = $_POST['number'];
           $response['Package'] = $_POST['Package'];
           $response['message'] = 'Form data submitted successfully!';
         }
        echo json_encode($response);
}
if(isset($_POST['action'])&& $_POST['action'] =='service-form'){
            $name           = $_POST['name'];
            $email          = $_POST['email'];
            $number         = $_POST['Number'];
            $budget         = $_POST['budget'];
            $message        = $_POST['Message'];
            $loaction_url   = $_POST['locationURL'];

            $uploadStatus = 1;
            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            // $to = 'mhamza.snt@gmail.com';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'mail.webappsolution.org';
            $mail->Port = 465;
            $mail->Username = 'sales@webappsolution.org';
            $mail->Password = 'admin123!@#';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            $mail->Subject = "Discuss Your Project";
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Email:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$email.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Phone Number:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$number.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Budget:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$budget.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Message:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$message.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Form Submit Location:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$loaction_url.'</td></tr>';
            $mail->Body .= '</tbody></table><br>';
            $mail->Body .= '</body></html>';

            $mail_to = new PHPMailer();
            $mail_to->IsSMTP($from, $to);
            $mail_to->CharSet="UTF-8";
            $mail_to->SMTPSecure = 'tls';
            $mail_to->Host = 'mail.webappsolution.org';
            $mail_to->Port = 465;
            $mail_to->Username = 'sales@webappsolution.org';
            $mail_to->Password = 'admin123!@#';
            $mail_to->SMTPAuth = true;



            $mail_to->IsHTML(true);
            $mail_to->setFrom ($email, $from, $to);
            $mail_to->AddAddress($email);
            $mail_to->Subject = "Thank you for contacting web app solution";
            $mail_to->Body = '<html><style>table, th, td {
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
             $mail_to->Body .= '<p>Thank you for contacting web app solution. We have received your inquiry and one of our expert consultants will get back to you very shortly.</p>';
             $mail_to->Body .= '<p>For immediate assistance during the business hours please give is a call at +1 212-684-6931.</p>';
             $mail_to->Body .= '<p>Regards</p>';
             $mail_to->Body .= '<p>Team, web app solution</p>';
            $mail_to->Body .= '</body></html>';
            $mail_to->Send();
        if(!$mail->Send())
        {
            $response['status'] = 0;
            $response['message'] = 'Form data submitted Failed!';

        }
        else{

               $response['status'] = 1;
           $response['name'] = $_POST['name'];
           $response['email'] = $_POST['email'];
           $response['number'] = $_POST['number'];
           $response['budget'] = $_POST['budget'];
           $response['message'] = 'Form data submitted successfully!';
         }
        echo json_encode($response);
}
if(isset($_POST['action'])&& $_POST['action'] =='contact-form'){
            $name           = $_POST['name'];
            $email          = $_POST['email'];
            $number         = $_POST['number'];
            $message        = $_POST['message'];

            $uploadStatus = 1;
            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            // $to = 'mhamza.snt@gmail.com';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'mail.webappsolution.org';
            $mail->Port = 465;
            $mail->Username = 'sales@webappsolution.org';
            $mail->Password = 'admin123!@#';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            $mail->Subject = "Contact Us Form";
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Email:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$email.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Phone Number:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$number.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Message:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$message.'</td></tr>';
            $mail->Body .= '</tbody></table><br>';
            $mail->Body .= '</body></html>';

            $mail_to = new PHPMailer();
            $mail_to->IsSMTP($from, $to);
            $mail_to->CharSet="UTF-8";
            $mail_to->SMTPSecure = 'tls';
            $mail_to->Host = 'mail.webappsolution.org';
            $mail_to->Port = 465;
            $mail_to->Username = 'sales@webappsolution.org';
            $mail_to->Password = 'admin123!@#';
            $mail_to->SMTPAuth = true;



            $mail_to->IsHTML(true);
            $mail_to->setFrom ($email, $from, $to);
            $mail_to->AddAddress($email);
            $mail_to->Subject = "Thank you for contacting web app solution";
            $mail_to->Body = '<html><style>table, th, td {
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
             $mail_to->Body .= '<p>Thank you for contacting web app solution. We have received your inquiry and one of our expert consultants will get back to you very shortly.</p>';
             $mail_to->Body .= '<p>For immediate assistance during the business hours please give is a call at +1 212-684-6931.</p>';
             $mail_to->Body .= '<p>Regards</p>';
             $mail_to->Body .= '<p>Team, web app solution</p>';
            $mail_to->Body .= '</body></html>';
            $mail_to->Send();
        if(!$mail->Send())
        {
            $response['status'] = 0;
            $response['message'] = 'Form data submitted Failed!';

        }
        else{

                $response['status'] = 1;
           $response['name'] = $_POST['name'];
           $response['email'] = $_POST['email'];
           $response['number'] = $_POST['number'];
           $response['message'] = 'Form data submitted successfully!';
         }
        echo json_encode($response);
}
if(isset($_POST['action'])&& $_POST['action'] =='get-a-free-quote'){
            $name           = $_POST['name'];
            $email          = $_POST['email'];
            $number         = $_POST['number'];
            $message        = $_POST['message'];
            $loaction_url   = $_POST['locationURL'];

            $uploadStatus = 1;
            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            // $to = 'mhamza.snt@gmail.com';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'mail.webappsolution.org';
            $mail->Port = 465;
            $mail->Username = 'sales@webappsolution.org';
            $mail->Password = 'admin123!@#';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            $mail->Subject = "Contact Us Form - New Landing Page";
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Email:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$email.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Phone Number:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$number.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Message:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$message.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Form Submit Location:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$loaction_url.'</td></tr>';
            $mail->Body .= '</tbody></table><br>';
            $mail->Body .= '</body></html>';

            $mail_to = new PHPMailer();
            $mail_to->IsSMTP($from, $to);
            $mail_to->CharSet="UTF-8";
            $mail_to->SMTPSecure = 'tls';
            $mail_to->Host = 'mail.webappsolution.org';
            $mail_to->Port = 465;
            $mail_to->Username = 'sales@webappsolution.org';
            $mail_to->Password = 'admin123!@#';
            $mail_to->SMTPAuth = true;



            $mail_to->IsHTML(true);
            $mail_to->setFrom ($email, $from, $to);
            $mail_to->AddAddress($email);
            $mail_to->Subject = "Thank you for contacting web app solution";
            $mail_to->Body = '<html><style>table, th, td {
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
             $mail_to->Body .= '<p>Thank you for contacting web app solution. We have received your inquiry and one of our expert consultants will get back to you very shortly.</p>';
             $mail_to->Body .= '<p>For immediate assistance during the business hours please give is a call at +1 212-684-6931.</p>';
             $mail_to->Body .= '<p>Regards</p>';
             $mail_to->Body .= '<p>Team, web app solution</p>';
            $mail_to->Body .= '</body></html>';
            $mail_to->Send();
        if(!$mail->Send())
        {
            $response['status'] = 0;
            $response['message'] = 'Form data submitted Failed!';

        }
        else{

        $response['status'] = 1;
           $response['name'] = $_POST['name'];
           $response['email'] = $_POST['email'];
           $response['number'] = $_POST['number'];
           $response['message'] = 'Form data submitted successfully!';
         }
        echo json_encode($response);
}
if(isset($_POST['action'])&& $_POST['action'] =='chat-with-us'){

            $name           = $_POST['name'];
            $email          = $_POST['email'];
            $number         = $_POST['number'];
            $message        = isset($_POST['message'])?$_POST['message']:'Banner form submitted';
            $loaction_url   = $_POST['locationURL'];

            $uploadStatus = 1;
            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            // $to = 'mhamza.snt@gmail.com';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'mail.webappsolution.org';
            $mail->Port = 465;
            $mail->Username = 'sales@webappsolution.org';
            $mail->Password = 'admin123!@#';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            $mail->Subject = "Chat With Us - New landing page";
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Email:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$email.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Phone Number:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$number.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Message:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$message.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Form Submit Location:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$loaction_url.'</td></tr>';
            $mail->Body .= '</tbody></table><br>';
            $mail->Body .= '</body></html>';

            $mail_to = new PHPMailer();
            $mail_to->IsSMTP($from, $to);
            $mail_to->CharSet="UTF-8";
            $mail_to->SMTPSecure = 'tls';
            $mail_to->Host = 'mail.webappsolution.org';
            $mail_to->Port = 465;
            $mail_to->Username = 'sales@webappsolution.org';
            $mail_to->Password = 'admin123!@#';
            $mail_to->SMTPAuth = true;



            $mail_to->IsHTML(true);
            $mail_to->setFrom ($email, $from, $to);
            $mail_to->AddAddress($email);
            $mail_to->Subject = "Thank you for contacting web app solution";
            $mail_to->Body = '<html><style>table, th, td {
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
             $mail_to->Body .= '<p>Thank you for contacting web app solution. We have received your inquiry and one of our expert consultants will get back to you very shortly.</p>';
             $mail_to->Body .= '<p>For immediate assistance during the business hours please give is a call at +1 212-684-6931.</p>';
             $mail_to->Body .= '<p>Regards</p>';
             $mail_to->Body .= '<p>Team, web app solution</p>';
            $mail_to->Body .= '</body></html>';
            $mail_to->Send();
        if(!$mail->Send())
        {
            $response['status'] = 0;
            $response['message'] = 'Form data submitted Failed!';

        }
        else{

           $response['status'] = 1;
           $response['name'] = $_POST['name'];
           $response['email'] = $_POST['email'];
           $response['number'] = $_POST['number'];
           $response['message'] = 'Form data submitted successfully!';
         }
        echo json_encode($response);
}
if(isset($_POST['action'])&& $_POST['action'] =='get-free-consultancy'){
            $name           = $_POST['name'];
            $email          = $_POST['email'];
            $number         = $_POST['number'];
            $budget         = $_POST['budget'];
            $country         = $_POST['country'];
            $interested         = $_POST['interested'];
            $message        = $_POST['message'];
            $loaction_url   = $_POST['locationURL'];

            $uploadStatus = 1;
            $mail = new PHPMailer();
            $to = 'sales@webappsolution.org';
            // $to = 'mhamza.snt@gmail.com';
            $from = ('web app solution');
            $mail->IsSMTP($from, $to);
            $mail->CharSet="UTF-8";
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'mail.webappsolution.org';
            $mail->Port = 465;
            $mail->Username = 'sales@webappsolution.org';
            $mail->Password = 'admin123!@#';
            $mail->SMTPAuth = true;
            //$mail->SMTPDebug = true;

            $mail->IsHTML(true);
            $mail->setFrom ($email, $from, $to);
            $mail->AddAddress($to);
            $mail->Subject = "Get Free consultancy - New landing page";
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
            $mail->Body .= '<table style="text-align:left; border: 1px solid black; border-collapse: collapse;">';
            $mail->Body .= '<tbody>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Name:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$name.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Email:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$email.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Phone Number:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$number.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Country:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$country.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Interested:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$interested.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Budget:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$budget.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Message:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$message.'</td></tr>';
            $mail->Body .= '<tr><th style="font-size: 14px; padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">Form Submit Location:</th><td style="padding:5px 10px 5px 2px; border: 1px solid black; border-collapse: collapse;">'.$loaction_url.'</td></tr>';
            $mail->Body .= '</tbody></table><br>';
            $mail->Body .= '</body></html>';

            $mail_to = new PHPMailer();
            $mail_to->IsSMTP($from, $to);
            $mail_to->CharSet="UTF-8";
            $mail_to->SMTPSecure = 'tls';
            $mail_to->Host = 'mail.webappsolution.org';
            $mail_to->Port = 465;
            $mail_to->Username = 'sales@webappsolution.org';
            $mail_to->Password = 'admin123!@#';
            $mail_to->SMTPAuth = true;



            $mail_to->IsHTML(true);
            $mail_to->setFrom ($email, $from, $to);
            $mail_to->AddAddress($email);
            $mail_to->Subject = "Thank you for contacting web app solution";
            $mail_to->Body = '<html><style>table, th, td {
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
            </style><body><div><img src="https://webappsolution.org/assets/images/black-logo.png" class="mb-4" style="width: 200px;"></div>';
             $mail_to->Body .= '<p>Thank you for contacting web app solution. We have received your inquiry and one of our expert consultants will get back to you very shortly.</p>';
             $mail_to->Body .= '<p>For immediate assistance during the business hours please give is a call at +1 212-684-6931.</p>';
             $mail_to->Body .= '<p>Regards</p>';
             $mail_to->Body .= '<p>Team, web app solution</p>';
            $mail_to->Body .= '</body></html>';
            $mail_to->Send();
        if(!$mail->Send())
        {
            $response['status'] = 0;
            $response['message'] = 'Form data submitted Failed!';

        }
        else{

         $response['status'] = 1;
           $response['name'] = $_POST['name'];
           $response['email'] = $_POST['email'];
           $response['number'] = $_POST['number'];
           $response['budget'] = $_POST['budget'];
            $response['budget'] = $_POST['country'];
           $response['message'] = 'Form data submitted successfully!';
         }
        echo json_encode($response);
}
?>



