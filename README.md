# vaahcms


   <VhField label="Amount">
                    <InputNumber class="w-full"
                               name="books-name"
                               data-testid="books-name"
                                 @input="store.enterAmount($event)"
                                 v-model="store.item.amount"
                                 minFractionDigits="2"
                    />
                </VhField>


                <VhField label="Tax">
                <InputNumber class="w-full"
                           name="books-name"
                           data-testid="books-name"
                           v-model="store.item.tax"/>
            </VhField>


                <VhField label="Total Amount">
                <InputNumber class="w-full"
                           name="books-name"
                           data-testid="books-name"
                           @input="store.enterTotalAmount($event)"
                           v-model="store.item.total_amount"
                           minFractionDigits="2"
                />

 extract($_POST);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'anilyadav2211@gmail.com';                     //SMTP username
    $mail->Password   = 'pixsnjxpfarnuykp
';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('anilyadav2211@gmail.com', 'Anil');
    $mail->addAddress('anilyadav2211@gmail.com', $username);     //Add a recipient //pass email who want get
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = 'Name :'.$username.'<br>'.'Email :'.$email.'<br>'.'Message :'.$message.'<br>'.'Subject : '.$subject;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("location: contact.php");

}
