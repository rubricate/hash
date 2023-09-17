<?php 

declare(strict_types=1);

namespace Rubricate\Hash;

class PasswordHash implements IPasswordHash
{
    private $a;

    public function __construct( IGetAlgorithmHash $a)
    { 
        $this->a = $a;
    } 

    public function getPassword($password): string
    {
        return password_hash(
            $password, 
            $this->a->getAlgorithm()
        ); 
    } 

    public function isPassword($password, $hash): bool
    {
       return password_verify($password, $hash);
    } 

}    

