<?php

include 'connection.php';

$results = $db->prepare("SELECT * FROM news_posts ORDER BY date DESC LIMIT 3");
$results->execute();

$news_array = $results->fetchAll();

foreach($news_array as &$article) {

    if (empty($article["thumbnail_path"])) {
        $article["thumbnail_path"] = "img/netmatters-ltd-VXAv.webp";
    }

    if (strlen($article["description"]) > 98) {
        $article["description"] = substr($article["description"], 0, 98);
        if (substr($article["description"], -1) == " ") {
            $article["description"] = substr($article["description"], 0, 97);
        }
        $article["description"] .= "...";
    }
    $article["date"] = date("jS F Y", strtotime($article["date"]));
    
}

unset($article);




