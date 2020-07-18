<?php

$text = 'Simple #hashtag with #php';

// find hashtags from text if any with regEx
preg_match_all('/#(\w+)/', $text);

// Replace hashtags with links
$text = preg_replace('/#(\w+)/', '<a href="http://localhost/hashtag/$1">#$1</a>', $text);

echo $text;
