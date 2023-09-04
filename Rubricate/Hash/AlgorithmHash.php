<?php 

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

