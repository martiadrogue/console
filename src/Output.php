<?php
/*
 * This file is part of Console package.
 *
 * (c) Martí Adrogué <marti.adrogue@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MartiAdrogue\Console;

class Output
{
    public function turnOnBuffering()
    {
        ob_start();
    }

    public function print($data)
    {
        if (ob_get_length()) {
            ob_end_clean();
        }
        echo $data.PHP_EOL;
    }
}
