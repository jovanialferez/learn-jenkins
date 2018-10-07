<?php

class ValidatePassword
{
    public function validLength($password)
    {
        $passLength = strlen($password);
        return $passLength >= 6 && $passLength <= 20;
    }
}