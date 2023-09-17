<?php 

declare(strict_types=1);

namespace Rubricate\Hash;

class SaltHash implements IGetSaltHash
{
    private $salt;

    public function __construct($salt)
    {
        $this->salt = $salt;
    }

    public function getSalt(): string
    {
        return $this->salt;
    }

}    

