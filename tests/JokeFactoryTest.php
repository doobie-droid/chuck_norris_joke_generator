<?php

namespace DoobieDroid\ChuckNorrisJokeGenerator\Tests;

use DoobieDroid\ChuckNorrisJokeGenerator\JokeFactory;

use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /**  @test */
    public function it_returns_a_random_number()
    {
        $joke = new JokeFactory(['This is a Chuck Norris Joke']);
        $response = $joke->getRandomJoke();
        $this->assertSame('This is a Chuck Norris Joke', $response);
    }
}
