<?php 

include 'latest_news_retrieve.php';

?>

<!-- Latest News -->
<section class="grey">
    <div class="head latest-news__head width">
      <h1 class="head--item">Latest News</h1>
      <a href="#" class="head--item is-visible-large-screen">View All<span class="icon"></span></a>
    </div>
    <div class="latest-news width">

    <?php foreach ($news_array as $article) { ?>
      <a href="#" class="latest-news__item <?php echo $article["color"]; ?>-news">
        <img src="<?php echo $article["img_path"]; ?>" alt="<?php echo $article["title"]; ?>" class="lastest-news__item--content">
        <h3 class="padding lastest-news__item--content"><?php echo $article["title"]; ?></h3>
        <p class="padding lastest-news__item--content"><?php echo $article["description"]; ?></p>
        <div class="padding button lastest-news__item--content">Read More</div>
        <div class="user padding lastest-news__item--content">
          <img class="user__item" src="<?php echo $article["thumbnail_path"]; ?>" alt="Author Image">
          <div class="user__item"><p style="font-weight: 600;">Posted by <?php echo $article["author"]; ?></p><p><?php echo $article["date"]; ?></p></div>
        </div>
        <div class="absolute"><?php echo $article["topic"]; ?></div>
      </a>
    <?php 
    } 

    unset($article);
    ?>

    <div class="head latest-news__head" style="justify-content: center;">
      <a href="#" class="head--item is-collapsed-large-screen">View All<span class="icon"></span></a>
    </div>
    
  </section>