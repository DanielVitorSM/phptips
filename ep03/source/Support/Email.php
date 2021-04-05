<?php
namespace Source\Support;

use stdClass;
use Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Email{
    /** @var PHPMailer */
    private $mail;
    /** @var stdClass */
    public $data;
    /** @var Exception */
    public $error;

    public function __construct(){
        $this->mail = new PHPMailer();
        $this->data = new stdClass();

        $this->mail->isSMTP();
        $this->mail->isHTML();
        $this->mail->setLanguage("br");
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "tsl";
        $this->mail->CharSet = "utf-8";

        $this->mail->Host = CONF_SMTP_MAIL["host"];
        $this->mail->Port = CONF_SMTP_MAIL["port"];
        $this->mail->Username = CONF_SMTP_MAIL["user"];
        $this->mail->Password = CONF_SMTP_MAIL["password"];
    }

    public function add(string $subject, string $body, string $recipient_name, string $recipient_email) : Email{
        $this->data->subject = $subject;
        $this->data->body = $body;
        $this->data->recipient_name = $recipient_name;
        $this->data->recipient_email = $recipient_email; 
        return $this;
    }

    public function attach(string $filePath, string $fileName) : Email{
        $this->data->attach[$filePath] = $fileName;
        return $this;
    }

    public function send(string $fromName = CONF_SMTP_MAIL["from_name"], string $fromEmail = CONF_SMTP_MAIL["from_email"]) : bool{
        try{
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->body);
            $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
            $this->mail->setFrom($fromEmail, $fromName);
            $this->mail->send();

            if(!empty($this->data->attach)){
                foreach ($this->data->attach as $path => $name) {
                    $this->mail->addAttachment($path, $name);
                }
            }

            return true;
        }catch(Exception $e){
            $this->error = $e;
            return false;
        }
    }

    public function error() : ?Exception{
        return $this->error;
    }
}