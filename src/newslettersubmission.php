<?php 

class NewsletterSubmission extends Formsubmit {

    public function submitForm() {
        try {
            require __DIR__ . "/connection.php";

            $stmt = $db->prepare("INSERT INTO newsletter(name, email, mrkt_info) VALUES(:name, :email, :accept_marketing)");
            $stmt->bindValue(":name", $this->getValue("NLName"), PDO::PARAM_STR);
            $stmt->bindValue(":email", $this->getValue("NLEmail"), PDO::PARAM_STR);
            $stmt->bindValue(":accept_marketing", $this->getValue("accept-marketin"), PDO::PARAM_INT);
            $stmt->execute();
        } catch (ErrorException $e) {
            return false;
        }

        return true;
    }    
}