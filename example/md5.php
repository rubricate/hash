<?php 

require dirname(dirname(__FILE__)) . '/vendor/autoload.php';


use Rubricate\Hash\CryptHash;
use Rubricate\Hash\AlgorithmHash;
use Rubricate\Hash\SaltHash;


$h = new CryptHash(
    
    new AlgorithmHash('md5'),
    new SaltHash('YOUR_SALT')
);

$password = 'your_secret_password';
$result   = $h->getStr($password);

var_dump($result);

