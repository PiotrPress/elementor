# Elementor

This library simplifies HTML elements rendering.

## Installation

```shell
$ composer require piotrpress/elementor
```

## Example

```php
require __DIR__ . '/vendor/autoload.php';

use PiotrPress\Elementor;
use PiotrPress\Elementor\Element;
use PiotrPress\Elementor\Attributes;

// Example #1
echo new Elementor( [
    [ 'div',
        [ 'class' => 'main' ],
        [
            [ 'input',
                [
                    'type' => 'submit',
                    'required'
                ]
            ],
            [ 'a',
                [
                    'href' => 'https://piotr.press',
                    'class' => [ 'red', 'border' ]
                ],
                'Click'
            ]
        ]
    ]
] );
// <div class="main"><input type="submit" required /><a href="https://piotr.press" class="red border">Click</a></div>

// Example #2
echo new Element( 'a', [
    'href' => 'https://piotr.press',
    'class' => [ 'red', 'border' ]
], 'Click' );
// <a href="https://piotr.press" class="red border">Click</a>

// Example #3
echo new Element( 'input', [
    'type' => 'submit',
    'required'
] );
// <input type="submit" required />

// Example #4
echo new Attributes( [
    'href' => 'https://piotr.press',
    'class' => [ 'red', 'border' ]
] );
// href="https://piotr.press" class="red border"
```

## Requirements

PHP >= `7.4` version.

## License

[MIT](license.txt)