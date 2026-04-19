<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase {

    public function testSuma() {
        $calc = new Calculadora();
        $this->assertEquals(4, $calc->sumar(2, 2));
    }

    public function testDivision() {
        $calc = new Calculadora();
        $this->assertEquals(2, $calc->dividir(4, 2));
    }

    public function testDivisionPorCero() {
        $this->expectException(\Exception::class);

        $calc = new Calculadora();
        $calc->dividir(4, 0);
    }
}