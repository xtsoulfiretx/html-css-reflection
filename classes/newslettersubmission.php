<?php 

class NewsletterSubmission extends Formsubmit {

    public $name;
    public $email;
    public $accept_marketing;


    public function getName()
    {
        return $this->name;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function getMrktInfo() 
    {
        return $this->accept_marketing;
    }

    public function __construct($newsletterData) {
        $this->name = $newsletterData["name"];
        $this->email = $newsletterData["email"];
        $this->accept_marketing = $newsletterData["accept_marketing"];
      }
    
    public function submitForm() {
        try {
            include_once __DIR__ . "/../src/includes/connection.php";

            $stmt = $db->prepare("INSERT INTO newsletter (name, email, accept_marketing) VALUES (:name, :email, :accept_marketing)");
            $stmt->bindValue(":name", $this->name, PDO::PARAM_STR);
            $stmt->bindValue(":email", $this->email, PDO::PARAM_STR);
            $stmt->bindValue(":accept_marketing", $this->accept_marketing, PDO::PARAM_INT);
            $stmt->execute();

        } catch (Exception $e) {
            throw $e;
        }
        return true;
    }    
}