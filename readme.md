# Elementor

This library simplifies HTML elements rendering.

## Installation

```shell
$ composer require piotrpress/elementor
```

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

use PiotrPress\Elementor;

echo ( new Elementor( 'a', [ 
    'href' => 'https://piotr.press',
    'class' => [ 'red', 'border' ]
], 'Click' ) );
// <a href="https://piotr.press" class="red border">Click</a>

echo ( new Elementor( 'input', [
    'type' => 'submit',
    'required'
] ) );
// <input type="submit" required />
```

## Requirements

PHP >= `7.4` version.

## License

[MIT](license.txt)