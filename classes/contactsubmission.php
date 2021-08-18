<?php 

class ContactSubmission extends Formsubmit {

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $accept_marketing;


    public function getName()
    {
        return $this->name;
    }

    public function getEmail() 
    {
        return $this->email;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getMrktInfo() 
    {
        return $this->accept_marketing;
    }

    public function __construct($contactData) {
        $this->name = $contactData["name"];
        $this->email = $contactData["email"];
        $this->phone = $contactData["phone"];
        $this->subject = $contactData["subject"];
        $this->message = $contactData["message"];
        $this->accept_marketing = $contactData["accept_marketing"];
      }
    
    public function submitForm() {
        try {
            require __DIR__ . "/../src/includes/connection.php";

            $stmt = $db->prepare("INSERT INTO enquiries (name, email, phone, subject, message, accept_marketing) VALUES (:name, :email, :phone, :subject, :message, :accept_marketing)");
            $stmt->bindValue(":name", $this->name, PDO::PARAM_STR);
            $stmt->bindValue(":email", $this->email, PDO::PARAM_STR);
            $stmt->bindValue(":phone", $this->phone, PDO::PARAM_INT);
            $stmt->bindValue(":subject", $this->subject, PDO::PARAM_STR);
            $stmt->bindValue(":message", $this->message, PDO::PARAM_STR);
            $stmt->bindValue(":accept_marketing", $this->accept_marketing, PDO::PARAM_INT);
            $stmt->execute();

        } catch (Exception $e) {
            
        }
        // return true;
    }    
}