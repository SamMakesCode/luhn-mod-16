<?php

class LuhnModNTest extends \PHPUnit\Framework\TestCase
{
    /*
     * The nature of this checksum means that it's wrong 1/16 times. What kind of
     * checksum is that, huh? Please include new tests if you get a chance, so
     * that we can continue to prove the effectiveness of this library.
    */
    public function testCalculatesCorrectly()
    {
        $test_value = '0B012722900021AC35B2';
        $checksum = \LuhnMod16\LuhnMod16::calculate($test_value);
        $this->assertEquals($checksum, '1');
    }
}
