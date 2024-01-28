<?php
    include_once('./env.php' );
    require_once('./PHPMailer-master/src/PHPMailer.php');
    require_once('./PHPMailer-master/src/Exception.php');
    require_once('./PHPMailer-master/src/SMTP.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if($_POST && $_FILES) {
        $email = new PHPMailer(true);
        $email->isSMTP();
        $email->SMTPDebug = 4;                                // Enable verbose debug output
        $email->CharSet = "utf-8";                                   // Set mailer to use SMTP
        // $email->Host = 'localhost';  // Specify main and backup SMTP servers
        $email->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $email->SMTPAuth = true;                               // Enable SMTP authentication
        $email->Username = 'nikhilesh.ganvir29@gmail.com';                 // SMTP username
        $email->Password = 'Nicks2989##@';                           // SMTP password
        $email->SMTPSecure = 'tls';

        $email->Port = 25;//587//25;
        $email->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $fromEmail = $_POST['email'];
        $resume = $_FILES['resume'];

        $email->SetFrom($fromEmail, $firstName.' '.$lastName);
        $email->addAddress( 'nikhilesh.ganvir29@gmail.com' );
        $email->isHTML(true);
        $email->Subject = 'A resume is received';
        $email->Body = "A resume is received with a document attached herewith the mail. The candidate's name is: ". $firstName . ' ' . $lastName;

        if( is_dir($baseRoot.'/uploads/resumes')) {
            $destinationFile = $baseRoot.'/uploads/resumes/'.$resume['name'];
            if(move_uploaded_file($resume['tmp_name'], $destinationFile)) {

                // $email->AddAttachment( $destinationFile );

                $email->send();
                header('Location: ./career.php');

            } else {
                echo 'Could not upload the file. Please try again';
            }
        } else {
            echo 'No such directory presents';
        }

    }
?>