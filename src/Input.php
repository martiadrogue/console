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

class Input
{
    private $argumentSet;

    public function __construct(array $argumentSet)
    {
        array_shift($argumentSet);
        $this->argumentSet = $argumentSet;
    }

    public function parse()
    {
        $inputSet = [];
        foreach ($this->argumentSet as $parameter) {
            $arg = new Argument($parameter);
            if ('-' === $parameter[0]) {
                $arg = $arg->castAsOption();
            }
            $inputSet[] = $arg;
        }

        return $inputSet;
    }
}
