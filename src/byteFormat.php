<?php

namespace Mrstench\ComposerTest;

class byteFormat
{
    /**
     * @param  int  $size
     * @return string
     */
    public static function getUnit(int $size): string
    {
        $units = [
            '0' => 'B',
            '1' => 'KB',
            '2' => 'MB',
            '3' => 'GB',
            '4' => 'TB',
            '5' => 'PB'
        ];

        if ($size < 1) {
            return '0B';
        } elseif ($size < 1024) {
            return $size.'B';
        }

        for ($i = 0; $size >= 1024 && $i < 5; $i++) {
            $size /= 1024;
        }
        return round($size, 2).$units[$i];
    }
}
