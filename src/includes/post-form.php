<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] === "contact-form") {
    //Add form fields
    $contactData["name"] = trim(filter_input(INPUT_POST, "contact-name", FILTER_SANITIZE_STRING));
    $contactData["email"] = trim(filter_input(INPUT_POST, "contact-email", FILTER_SANITIZE_EMAIL));
    $contactData["phone"] = trim(filter_input(INPUT_POST, "contact-telephone", FILTER_SANITIZE_STRING));
    $contactData["subject"] = trim(filter_input(INPUT_POST, "contact-subject", FILTER_SANITIZE_SPECIAL_CHARS));
    $contactData["message"] = trim(filter_input(INPUT_POST, "contact-message", FILTER_SANITIZE_SPECIAL_CHARS));
    $contactData["accept_marketing"] = trim(filter_input(INPUT_POST, "contact-cb", FILTER_SANITIZE_NUMBER_INT));

    // if no post data was received from checkbox, set its value to 0 (false)
    if (empty($contactData["accept_marketing"])) {
        $contactData["accept_marketing"] = 0;
    }
    // create enquiry and store return value
    $response = createEnquiry($contactData);
    // if createEnquiry returns an array, form is invalid
    if (is_array($response)) {
        $invalidContactFields = $response;
    // if createEnquiry returns true, form was submitted 
    } elseif ($response) {
        header("Location:success.php");
        exit;
    } else {
        
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["action"] === "newsletter") {
    // Add each form field to array 
    $newsletterData["name"] = trim(filter_input(INPUT_POST, "NLName", FILTER_SANITIZE_STRING));
    $newsletterData["email"] = trim(filter_input(INPUT_POST, "NLEmail", FILTER_SANITIZE_EMAIL));
    $newsletterData["accept_marketing"] = trim(filter_input(INPUT_POST, "accept-marketing", FILTER_SANITIZE_NUMBER_INT));

    //if no post data was received from checkbox, set its value to 0. e.g.(false)
    if (empty($newsletterData["accept_marketing"])) {
        $newsletterData["accept_marketing"] = 0;
    }
    $reponse = createSubscription($newsletterData);
}
