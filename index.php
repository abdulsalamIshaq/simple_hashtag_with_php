<?php

$text = 'Simple #hashtag with #php';

// Replace hashtags with links
$text = preg_replace('/#(\w+)/', '<a href="http://localhost/hashtag/$1">#$1</a>', $text);

echo $text;
