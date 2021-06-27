<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio N Santos <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io/hash
 * 
 */

namespace Rubricate\Hash;


interface IPasswordHash
{
    public function getPassword($password);
}    

