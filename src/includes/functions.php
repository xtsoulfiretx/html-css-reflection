<?php

//A list of functions used for the site.

function getLatestArticles() {
    try {
        include __DIR__ . "/../connection.php";

        $result = $db->query("SELECT * FROM articles ORDER BY article_id ASC LIMIT 3");
        $result->execute();
    } catch (Exception $e) {
        return false;
    }

    return $result->fetchAll(PDO::FETCH_ASSOC);
}

function getArticleHtml(array $article){

    // create date/ time object
    $date_published = new DateTime($article["date"]);
    $formatted_date = $date_published->format("jS F Y");
    //

    //Generate article HTML

    $output = <<<EOD
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
              <p class="art_body">{$article["body"]}<br class="visible-md-ab"> &nbsp;</p>
              <a class="article-btn-web" href="#">Read More</a>
              <div class="user n">
                <div class="avatar n">
                  <picture><img src="images/{$article["author_img"]}" alt="netmatters profile">
                  </picture>
                </div>
                <div class="details">
                  <strong>Posted by {$article["author"]}</strong>
                  <br>
                  <p>{$formatted_date}</p>
                </div>
              </div>
            </div>
          </div>
      </div>\n
EOD;

return $output;
}

function createSubscription(array $newsletterData) {
  include __DIR__ . "/connection.php";
  
  $subscription = new NewsletterSubmission($newsletterData);
  
  return $subscription;
}