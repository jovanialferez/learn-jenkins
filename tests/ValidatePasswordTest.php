<?php

use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase
{
    public function testValidLength()
    {
        $validator = new ValidatePassword();
        $this->assertFalse($validator->validLength('1234'));
    }
}