luhn-mod-16
-
A library for calculating Luhn Mod 16 checksums in PHP. Especially useful for those dealing with Royal Mail labels.

Usage is simple.

    $checksum = \LuhnMod16\LuhnMod16::calculate($test_value, 16);
