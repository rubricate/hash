<?php 

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        http://rubricate.github.io
 * @copyright   2017 
 * 
 */

namespace Rubricate\Hash;


class CryptHash implements ICryptHash
{

    private $algorithm;
    private $salt;



    public function __construct(
        IGetAlgorithmHash   $algorithm, 
        IGetSaltHash        $salt
    ) 
    {
        $this->algorithm = $algorithm;
        $this->salt      = $salt;
    } 





    public function getStr($str)
    {
        $initHash = hash_init(
            $this->algorithm->getAlgorithm(), HASH_HMAC, 
            $this->salt->getSalt()
        );

        hash_update($initHash, $str);

        return hash_final($initHash);
    } 





}    


