<?php declare( strict_types = 1 );

namespace PiotrPress\Elementor;

class Attributes {
    private array $data;

    public function __construct( array $data ) {
        $this->data = $data;
    }

    public function __toString() : string {
        $data = $this->data;
        \array_walk( $data, function( &$value, $key ) {
            $value = \is_int( $key )
                ? (string)$value
                : \sprintf( '%s="%s"', $key, \htmlspecialchars( \implode( ' ', \array_filter( (array)$value, function( $value ) {
                    return ! empty( $value ) || \is_numeric( $value );
                }) ) ) );
        } );
        return \implode( ' ', $data );
    }
}