<?php

namespace App;

class Descuento {
    public function aplicar($precio) {
        if ($precio > 100) {
            return $precio * 0.9;
        }
        return $precio;
    }
}