<?php
$servername = "localhost";
$username = "alexi";
$password = "Password12";
$dbname = "alexi";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection Succesful <br />\n";

  $stmt = $pdo->query("SELECT * FROM articles");

 
while ($row = $stmt->fetch()) {
    echo $row['title']."<br />\n";
}

} catch(PDOException $e) {
  echo $e->getMessage();
  throw new ErrorException;
  echo "It worked!!";
}

/*
$placeholder = <<<EOD
      <div class="column-{$article["article_id"]}"> 
        <div class="item {$article["subcategory"]}">
          <div class="image-container">
            <a href="{$article["link"]}" class="category tooltip">News</a>
            <a class="img bordered" href="{$article["link"]}">
              <img src="images/{$article["img"]}" class="img-responsive" alt="{$article["title"]}">
            </a>
          </div>
            <div class="block">
              <span>{$article["title"]}</span>
              <p>{$article["body"]}<br class="visible-md-ab"> &nbsp;</p>
              <a class="article-btn-web" href="#">Read More</a>
              <div class="user n">
                <div class="avatar n">
                  <picture><img src="images/{$article["author_img"]}" alt="netmatters profile">
                  </picture>
                </div>
                <div class="details">
                  <strong>Posted by {$articles["author"]}}</strong>
                  <br>
                  <p>{$date}</p>
                </div>
              </div>
            </div>
          </div>
      </div>\n
EOD;

*/

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

