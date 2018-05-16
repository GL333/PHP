<?php
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="to">Email:</label>
                    <input type="email" class="form-control" name="to" id="to" placeholder="name@example.com" value="tavo_pastas@pasto_adreas.lt">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="ivesti antraste">
                </div>
                <div class="form-group">
                    <label for="content">Enter email body here:</label>
                    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                </div>
                <input type="submit" name="send" class="btn btn-primary" value="Send Email">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_POST['send'])){
    if(!empty($_POST['to']) && !empty($_POST['content']) && !empty($_POST['subject'])  ){
        $data['content'] = $_POST['content'];
        $data['to'] = $_POST['to'];
        $data['subject'] = $_POST['subject'];

        $result = sendMail($data);
        if(!$result): ?>
            <div class="alert alert-danger" role="alert">
                Neišskrido balandis :-(.
            </div>
        <?php endif; ?>
        <div class="alert alert-success" role="alert">
            Laiškas sėkimingai iškeliavo!
        </div>
        <?php
    }
}
function sendMail(Array $data){
    $mail = new PHPMailer(true);
    try {
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = '';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '';                 // SMTP username
        $mail->Password = '';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;

        //$mail->SMTPDebug = 2;                                   // TCP port to connect to
        //is kur laiskas
        $mail->setFrom('');

        //Kam laiskas
        $mail->addAddress($data['to']);
        //Kam atsakyti
        $mail->addReplyTo('noreply@noreply.re', 'No reply');
        //Content
        $mail->isHTML(true);
        $mail->AltBody = 'Cia nera htmlo, nes ne visi EMAIL klientai ji palaiko';

        $mail->Subject = $data['subject'];
        $mail->Body    = $data['content'];

        //send mail
        $mail->send();
        return true;

    } catch (Exception $e) {
        return false;
    }
}