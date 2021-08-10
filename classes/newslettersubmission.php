<?php 

class NewsletterSubmission extends Formsubmit {

    private $name;
    private $email;
    private $accept_marketing;


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


    public function __construct($name, $email, $accept_marketing){
        $this->name = $name;
        $this->email = $email;
        $this->accept_marketing = $accept_marketing;
      }
    
    public function submitForm() {
        try {
            require __DIR__ . "/connection.php";

            $stmt = $query->prepare("INSERT INTO newsletter(name, email, mrkt_info) VALUES(:name, :email, :accept_marketing)");
            $stmt->bindValue(":name", $this->$name, PDO::PARAM_STR);
            $stmt->bindValue(":email", $this->$email, PDO::PARAM_STR);
            $stmt->bindValue(":accept_marketing", $this->$accept_marketing, PDO::PARAM_INT);
            $stmt->execute();

        } catch (ErrorException $e) {
            return false;
        }
        return true;
    }    
}