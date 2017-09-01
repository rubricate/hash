<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io
 * @copyright   2017 
 * 
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


