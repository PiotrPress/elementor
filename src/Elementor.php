<?php declare( strict_types = 1 );

namespace PiotrPress;

class Elementor {
    protected string $name;
    protected array $attributes;
    protected ?string $content;

    public function __construct( string $name, array $attributes = [], ?string $content = null ) {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    public function __toString() : string {
        $attributes = $this->attributes;
        \array_walk( $attributes, function( &$value, $key ) {
            $value = \is_int( $key )
                ? (string)$value
                : \sprintf( '%s="%s"', $key, \htmlspecialchars( \implode( ' ', (array)$value ) ) );
        } );
        $attributes = \implode( ' ', $attributes );
        $attributes = $attributes
            ? " $attributes"
            : '';

        return \is_null( $this->content )
            ? "<$this->name$attributes />"
            : "<$this->name$attributes>$this->content</$this->name>";
    }
}