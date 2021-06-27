<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io/hash
 * 
 */

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

