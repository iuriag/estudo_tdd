<?php
require_once 'class/NumeroRomano.php';
class NumeroRomanoTest extends PHPUnit_Framework_TestCase {

    /*
     * - Converter I para 1(ok)
     * - Convertor II para 2 (ok)
     * - Converter V para 5(ok)
     * - Converter IV para 4(ok)
     * - Converter VI para 6(ok)
     * - Converter X para 10(ok)
     * -  Converter XI para 11(ok)
     * - Converter L para 50(ok)
     * - Converter C para 100(ok)
     * - Converter D para 500(ok)
     * - Converter M para 1000(ok)
     * - Converter MD para 1500(ok)
     * - Valor Invalido (ok)
     */
 
    
    public function testConverter_I_para_1() {
        
        $oNumeroRomano = new NumeroRomano('I');
        self::assertEquals(1, $oNumeroRomano->toInt());
    }
    public function testConverter_V_para_5() {
    
        $oNumeroRomano = new NumeroRomano('V');
        self::assertEquals(5, $oNumeroRomano->toInt());
    }
    
    public function testConverter_X_para_10() {
    
        $oNumeroRomano = new NumeroRomano('X');
        self::assertEquals(10, $oNumeroRomano->toInt());
    }
    
    public function testConverter_L_para_50() {
    
        $oNumeroRomano = new NumeroRomano('L');
        self::assertEquals(50, $oNumeroRomano->toInt());
    }
    
    public function testConverter_C_para_100() {
    
        $oNumeroRomano = new NumeroRomano('L');
        self::assertEquals(50, $oNumeroRomano->toInt());
    }
    
    public function testConverter_D_para_500() {
    
        $oNumeroRomano = new NumeroRomano('L');
        self::assertEquals(50, $oNumeroRomano->toInt());
    }
    
    public function testConverter_M_para_1000() {
    
        $oNumeroRomano = new NumeroRomano('L');
        self::assertEquals(50, $oNumeroRomano->toInt());
    }
    
    public function testGetValorRomano() {
        
        $oNumeroRomano = new NumeroRomano('I');
        self::assertEquals("I", $oNumeroRomano->getNumero());
    }
    
    public function test_converter_II_para_2() {
    
        $oNumeroRomano = new NumeroRomano('II');
        self::assertEquals(2, $oNumeroRomano->toInt());
    }
    
    public function test_converter_VI_para_6() {
    
        $oNumeroRomano = new NumeroRomano('VI');
        self::assertEquals(6, $oNumeroRomano->toInt());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testValorInvalido() {
    
        $oNumeroRomano = new NumeroRomano("R");
    }
    
    public function testConverter_XI_para_11() {
    
        $oNumeroRomano = new NumeroRomano('XI');
        self::assertEquals(11, $oNumeroRomano->toInt());
    }
    
    public function testConverter_MD_para_1500() {
    
        $oNumeroRomano = new NumeroRomano('MD');
        self::assertEquals(1500, $oNumeroRomano->toInt());
    }
    
    public function testConverter_IV_para_4() {
    
        $oNumeroRomano = new NumeroRomano('IV');
        self::assertEquals(4, $oNumeroRomano->toInt());
    }
    
    public function testConverter_IX_para_9() {
    
        $oNumeroRomano = new NumeroRomano('IX');
        self::assertEquals(9, $oNumeroRomano->toInt());
    }
    public function testConverter_MCMXLIV_para_1994() {
    
        $oNumeroRomano = new NumeroRomano('MCMXLIV');
        self::assertEquals(1944, $oNumeroRomano->toInt());
    }
}