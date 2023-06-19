# Chuck Norris Joke Generator

This is a library that spits out random chuck norris jokes. 

## Installation

Use the package manager  [composer](https://getcomposer.org/) to install doobie-droid/chuck_norris_joke_generator.

```bash
composer require doobie-droid/chuck_norris_joke_generator
```

## Usage

```php
use DoobieDroid\ChuckNorrisJokeGenerator\JokeFactory;

// initialise the joke class
$joke = new JokeFactory();

// get a new random joke
$joke->getRandomJoke();

```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

This project is covered under the [MIT](./LICENSE.md) license.