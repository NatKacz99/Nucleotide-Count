<?php

declare(strict_types=1);

class DNA {
   public static function nucleotideCount(string $input): array
    {
        return[
            'A' => substr_count($input, 'A'),
            'C' => substr_count($input, 'C'),
            'G' => substr_count($input, 'G'),
            'T' => substr_count($input, 'T')
        ];
    }
}
