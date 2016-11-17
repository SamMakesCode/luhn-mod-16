<?php

class LuhnModNTest extends \PHPUnit\Framework\TestCase
{
    /*
     * The nature of this checksum means that 1/16 times it'll be correct anyway.
     * What kind of checksum is that, huh? Please provide more tests if you get the
     * chance so that we can continue to prove the effectiveness of the this library.
     */
    public function testCalculatesCorrectly()
    {
        $test_value = '0B012722900021AC35B2';
        $checksum = \LuhnMod16\LuhnMod16::calculate($test_value);
        $this->assertEquals($checksum, '1');
    }
}
