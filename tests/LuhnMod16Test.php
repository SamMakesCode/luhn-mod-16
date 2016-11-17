<?php

class LuhnModNTest extends \PHPUnit\Framework\TestCase
{
    public function testCalculatesCorrectly()
    {
        $test_value = '0B012722900021AC35B2';
        $checksum = \LuhnMod16\LuhnMod16::calculate($test_value, 16);
        $this->assertEquals($checksum, '1');
    }
}
