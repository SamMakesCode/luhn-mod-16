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
        $data = [
            ['check' => '5', 'string' => '0A0417347000000005B2'],
            ['check' => '1', 'string' => '0A0417347000000005CB'],
            ['check' => 'F', 'string' => '0A0417347000000005CC'],
            ['check' => 'B', 'string' => '0A0417347000000005CD'],
            ['check' => 'A', 'string' => '0A0417347000000005CE'],
            ['check' => '9', 'string' => '0A0417347000000005CF'],
            ['check' => '7', 'string' => '0A0417347000000005D0'],
            ['check' => '5', 'string' => '0A0417347000000005D1'],
            ['check' => '3', 'string' => '0A0417347000000005D2'],
            ['check' => '1', 'string' => '0A0417347000000005D3'],
            ['check' => 'F', 'string' => '0A0417347000000005D4'],
            ['check' => '2', 'string' => '0A0417347000000005D5'],
            ['check' => '1', 'string' => '0A0417347000000005D6'],
        ];
        
        foreach($data as $row) {
            $this->assertEquals($row['check'], \LuhnMod16\LuhnMod16::calculate($row['string']));
        }
    }
}
