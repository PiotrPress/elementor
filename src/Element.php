<?php declare( strict_types = 1 );

namespace PiotrPress\Elementor;

class Element {
    private string $name;
    private ?Attributes $attributes;
    private ?string $content;

    public function __construct( string $name, array $attributes = [], ?string $content = null ) {
        $this->name = $name;
        $this->attributes = $attributes ? new Attributes( $attributes ) : null;
        $this->content = $content;
    }

    public function __toString() : string {
        $attributes = $this->attributes ? " $this->attributes" : '';

        return \is_null( $this->content )
            ? "<$this->name$attributes />"
            : "<$this->name$attributes>$this->content</$this->name>";
    }
}