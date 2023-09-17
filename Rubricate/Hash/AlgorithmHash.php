<?php 

declare(strict_types=1);

namespace Rubricate\Hash;

class AlgorithmHash implements IGetAlgorithmHash
{
    private $algorithm;

    public function __construct($algorithm)
    {
        $this->algorithm = $algorithm;
    }

    
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

}    

