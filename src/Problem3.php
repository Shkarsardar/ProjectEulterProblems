<?php

namespace ProjectEuler;

class Problem3
{   
    public static function solve(int $n):int
    {
        $factors = [];
        $counter = 2;
        while ($counter < 10000) {
            if ($n % $counter == 0) {
                $factors[] = $counter;

                $n = $n / $counter;
            } else {
                $counter++;
            }
        }

        return max($factors);
    }

}




?>