<?php

$html = file_get_contents("https://www.zomato.com/ahmedabad/restaurants?luxury-dining=1");

preg_match_all(
    '/<h3 class="top-res-box-name ln24 left"><a class="result-title" href="(.*?)" title=".*?" data-result-type="ResCard_Name">(.*?)<\/a><\/h3>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

echo $html;
echo $posts;

foreach ($posts as $post) {
    $link = $post[1];
    $title = $post[2];

    echo "<a href='" . $link . "'>" . $title . "</a></br>";
}

echo "<p>" . count($posts) . " posts found</p>";
?>