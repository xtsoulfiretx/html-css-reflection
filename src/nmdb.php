<?php

$nlname = (!empty($_POST['NLName']) ? $_POST['NLName'] : '');
$nlemail = (!empty($_POST['NLEmail']) ? $_POST['NLEmail'] : '');
$nlcheck = (!empty($_POST['marketing-optin']) ? $_POST['marketing-optin'] : '');

try {
    // Connect to db
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set SQL
    $sql = 'INSERT INTO newsletter (NLName, NLEmail, marketing-optin) VALUES (:name, :email, :mrkt_info)';
    // Prepare query
    $query = $pdo->prepare($sql);
    // Execute query
    $query->execute(array(':name' => $nlname, ':email' => $nlemail, ':mrkt_info' => $nlcheck));
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>

