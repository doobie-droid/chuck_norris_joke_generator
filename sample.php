<?php

//note that I ran composer dump before I was able to add the autoloading file in the require statement below
require 'vendor/autoload.php';
use DoobieDroid\ChuckNorrisJokeGenerator\JokeFactory;

$joke = new JokeFactory();

$printed_joke = $joke->getRandomJoke();
echo $printed_joke.PHP_EOL;
