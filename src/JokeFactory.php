<?php

namespace DoobieDroid\ChuckNorrisJokeGenerator;

use DoobieDroid\ChuckNorrisJokeGenerator\Jokes\Joke;

class JokeFactory
{
    public $jokes;
    public function __construct(array $jokes= null)
    {
        $this->jokes = $jokes;
    }
    public function getRandomJoke()
    {
        if (empty($this->jokes)) {
            $this->jokes = [
                "Chuck Norris invented airplanes because he was tired of being the only person that could fly.",
                "Chuck Norris's belly button is actually a power outlet.",
                "Freddy Krueger has nightmares about Chuck Norris.",
                "Chuck Norris is the only man who can fight himself and win.",
                "Chuck Norris's cowboy boots are made from real cowboys.",
                "Chuck Norris can start a fire with an ice cube.",
                "The flu gets a Chuck Norris shot every year.",
                "This is the version one release",
                "This is the version two release"
            ];
        }
        return $this->jokes[array_rand($this->jokes)];
        // return 'yeah';
        //Note that any changes whatsoever that you make to this file would automaticallly be reflected in the vendor file as if you had made the changes in the vendor file itself.
    }
}
