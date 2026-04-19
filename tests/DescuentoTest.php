<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Descuento;

class DescuentoTest extends TestCase {

    public function testSinDescuento() {
        $d = new Descuento();
        $this->assertEquals(50, $d->aplicar(50));
    }

    public function testConDescuento() {
        $d = new Descuento();
        $this->assertEquals(90, $d->aplicar(100)); // 🔥 caso límite interesante
    }
}