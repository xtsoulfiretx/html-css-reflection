<?php

ob_start();

include __DIR__ . "/src/includes/bootstrap.php";
include __DIR__ . "/src/includes/header.php";

session_start();

if (!isset($_SESSION["referral"])) {
    header("location: index.php");
} else {
    $redirectPage = $_SESSION["referral"];
    echo <<<EOD
    <div id="thanks">
        <i class="far fa-check-circle"></i>
        <h1>Thanks for your Enquiry!</h1>
    </div>
    EOD;
    header("refresh:2; url=" . $redirectPage);
    session_unset();
}
?>