<?php 

namespace Rubricate\Hash;

class InitHash implements IPasswordHash
{
    private $a, $s, $i;

    public function __construct(
        IGetAlgorithmHash $a, 
        IGetSaltHash      $s
    ) { 
        $this->a = $a;
        $this->s = $s;

        self::init();
    } 

    public function getPassword($password)
    {
        hash_update($this->i, $password);

        return hash_final($this->i);
    } 

    private function init()
    {
        $i = hash_init(
            $this->a->getAlgorithm(), HASH_HMAC, 
            $this->s->getSalt()
        );

        $this->i = $i;
    } 

}    

