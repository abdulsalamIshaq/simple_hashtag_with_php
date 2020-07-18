# simple_hashtag_with_php
This is a simple process in creating hashtags with php using Regular Expression

Store your text in a variable
``` PHP
$text = 'Simple #hashtag with #php';
```
Use preg_replace() function to replce all words with #

there is two ways in doing this, is either using this regEx ``` /#(\w+)/  ``` or ``` /(#)([a-zA-Z0-9_]+)/``` i prefer to use the first one
```PHP
$pattern = '/#(\w+)/';

$text = preg_replace($pattern, '<a href="http://localhost/hashtag/$1">#$1</a>', $text);
```

And lastely replace all 
