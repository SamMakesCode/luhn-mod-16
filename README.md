luhn-mod-16
-
A library for calculating Luhn Mod 16 checksums in PHP. Especially useful for those dealing with Royal Mail labels.

## Installation

Download with composer by using:

    composer require samlittler/luhn-mod-16
    
## Usage

Usage is simple.

    $checksum = \LuhnMod16\LuhnMod16::calculate($your_test_value);