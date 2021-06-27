<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io/hash
 */

namespace Rubricate\Hash;


class AlgorithmHash implements IGetAlgorithmHash
{
    private $algorithm;

    public function __construct($algorithm)
    {
        $this->algorithm = $algorithm;
    }

    
    public function getAlgorithm()
    {
        return $this->algorithm;
    }


}    

