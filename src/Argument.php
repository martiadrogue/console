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

class Argument
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function castAsOption()
    {
        $cleanName = ltrim($this->name, '-');

        return new Option($cleanName);
    }

    public function __toString()
    {
        return $this->name;
    }
}
