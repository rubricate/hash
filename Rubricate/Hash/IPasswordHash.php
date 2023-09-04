<?php 

namespace Rubricate\Hash;

interface IPasswordHash
{
    public function getPassword($password);
}    

