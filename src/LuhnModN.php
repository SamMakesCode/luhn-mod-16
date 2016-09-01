<?php

namespace LuhnModN;

class LuhnModN
{
    public static function calculate($data, $n)
    {
        if (!is_string($data)) {
            throw new \Exception('Data with value "' . $data . '" is not a string.');
        }
        if (!is_int($n)) {
            throw new \Exception('N with value "' . $n . '" is not an int.');
        }

        // Split the data into individual characters
        $characters = str_split($data);

        // Create an array to put the final characters into
        $character_list = [];

        // From right to left...
        for ($i = count($characters) - 1; $i >= 0; $i--) {
            // Convert character to decimal
            $character_list[$i] = hexdec($characters[$i]);

            // For every other character
            if ($i % 2 !== 0) {
                // Double it
                $doubled = $characters[$i] * 2;
                // Convert it to hex
                $hexed = dechex($doubled);
                // If it's still a number (not a hex 'letter')
                if (ctype_digit($hexed)) {
                    $character_list[$i] = $hexed; // Keep it
                }

                // If it's more than one character
                if (strlen($character_list[$i]) > 1) {
                    $summed_value = 0;
                    foreach (str_split($character_list[$i]) as $character) {
                        $summed_value = $summed_value + $character;
                    }
                    $character_list[$i] = $summed_value; // Keep it
                }
            }
        }

        // Add them all up
        $total = array_sum($character_list);

        // Find the next multiple of n
        $next_multiple_of_n = (round($total) % $n === 0)
            ? round($total)
            : round(($total + $n / 2) / $n) * $n;

        // Get the difference
        $difference = $next_multiple_of_n - $total;

        // Convert to hex
        $hex = dechex($difference);

        return $hex;
    }
}
