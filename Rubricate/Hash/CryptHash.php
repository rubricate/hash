<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io
 * @copyright   2017 
 * 
 */

namespace Rubricate\Hash;


class CryptHash
{

    private $algorithm;
    private $salt;



    public function __construct($algorithm, $salt = '1') 
    {
        $this->algorithm = $algorithm;
        $this->salt      = $salt;
    } 





    public function getStr($str)
    {
        $initHash = hash_init(
            $this->algorithm, HASH_HMAC, 
            $this->salt
        );

        hash_update($initHash, $str);

        return hash_final($initHash);
    } 





}    

