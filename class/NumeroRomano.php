<?php 
/**
 * Classe para conversao de Numeros Romanos em Decimais
 * @author iuri iuri@gmail.com
 * Implementacao baseada em http://en.wikipedia.org/wiki/Roman_numerals
 * @license MIT
 */
class NumeroRomano {
    
    protected $sNumeroRomano = null;
    protected $aValues       = null;
    public function __construct($sNumeroRomano) {
        
        $this->sNumeroRomano = $sNumeroRomano;  
        if (!$this->isNumeroRomano()) {
            throw new InvalidArgumentException($sNumeroRomano);
        }
        $this->aValues['I']  = 1;
        $this->aValues['V']  = 5;
        $this->aValues['X']  = 10;
        $this->aValues['L']  = 50;
        $this->aValues['C']  = 100;
        $this->aValues['D']  = 500;
        $this->aValues['M']  = 1000;
    }
    
    /**
     * Converte o Numero romando para int
     * @return int
     */
    public function toInt() {
        
        $iTotalNumero    = 0;
        $iTamanhoNumero  = strlen($this->sNumeroRomano);
        $iNumeroAnterior = 0;
        $nValorSomar     = 0;
        for ($iParte = 0; $iParte < $iTamanhoNumero; $iParte++) {
        
            $iValorAtual     = $this->aValues[$this->sNumeroRomano[$iParte]];
            $iProximoNumero = null;
            /**
             * Verificamos se existe o mais algum numero para realizar o calculo 
             */
            if (isset($this->sNumeroRomano[$iParte +1])) {
                $iProximoNumero =  $this->aValues[$this->sNumeroRomano[$iParte +1]];
            }
            
            $nValorParaSerCalculado = $iValorAtual;
            
            /**
             * Realizamos o calculo do Numero.
             * Caso o valor do proximo algarimos tenha um peso maior que o peso do valor atual, 
             * devemos diminuir o valor a ser calculo (multiplicamos por -1) 
             */
            if (!is_null($iProximoNumero) && $iProximoNumero > $iValorAtual) {
                $nValorParaSerCalculado *= - 1;
            }
            $iTotalNumero += $nValorParaSerCalculado;
        }
        return $iTotalNumero;
    }
    
    /**
     * Retorna o numero Romano
     * @return string
     */
    public function getNumero() {
       return $this->sNumeroRomano;
    }
    
    /**
     * Valida se o número é um numero romano
     */
    protected function isNumeroRomano () {
        
        $sRegExp = '/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/';
        if (preg_match($sRegExp, $this->sNumeroRomano) > 0) {
            return true;
        }
        return false;
    }
}
?>