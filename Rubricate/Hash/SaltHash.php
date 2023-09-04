<?php 

namespace Rubricate\Hash;

class SaltHash implements IGetSaltHash
{
    private $salt;

    public function __construct($salt)
    {
        $this->salt = $salt;
    }

    public function getSalt()
    {
        return $this->salt;
    }

}    

