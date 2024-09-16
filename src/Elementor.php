<?php declare( strict_types = 1 );

namespace PiotrPress;

use PiotrPress\Elementor\Element;

class Elementor {
    private array $data;

    public function __construct( array $data ) {
        $this->data = $data;
    }

    public function __toString() : string {
        return self::render( $this->data );
    }

    protected static function render( $data ) : string {
        $output = '';
        foreach( $data as $content )
            switch( true ) {
                case \is_string( $content[ 2 ] ?? null ) :
                case \is_null( $content[ 2 ] ?? null ) :
                    $output .= new Element( $content[ 0 ], $content[ 1 ] ?? [], $content[ 2 ] ?? null );
                    break;
                case \is_array( $content[ 2 ] ) :
                    $output .= new Element( $content[ 0 ], $content[ 1 ] ?? [], self::render( $content[ 2 ] ) );
                    break;
                default : throw new \InvalidArgumentException( 'Invalid content type' );
            }
        return $output;
    }
}