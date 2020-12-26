<?php

$text = '<p>1st Sample comment.</p><2nd Sample comment> <a>3rd Sample comment</a>';

echo strip_tags($text);

echo "\n";


echo strip_tags($text, '<p><a>');
