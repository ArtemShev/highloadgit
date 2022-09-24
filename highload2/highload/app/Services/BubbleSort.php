<?php

namespace App\Services;

use function PHPUnit\Framework\countOf;

class BubbleSort implements BubbleSortInterface
{
    public function sort(array $elements): array
    {
        $count = count($elements);

        if($count<=1){
            return $elements;
        }

        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $elements ) - 1; $i < $c; $i++ )
            {
                if( $elements[$i] > $elements[$i + 1] )
                {
                    list( $elements[$i + 1], $elements[$i] ) = array( $elements[$i], $elements[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
        return $elements;

    }
}
