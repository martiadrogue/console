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

class Core
{
    private $input;
    private $output;

    public function __construct(Input $input, Output $output)
    {
        $this->input = $input;
        $this->output = $output;
    }

    public function getInput()
    {
        return $this->input;
    }

    public function getOutput()
    {
        return $this->output;
    }

    protected function getCommandName()
    {
        $inputList = $this->input->parse();

        return (string) array_shift($inputList);
    }

    protected function selfArrayify()
    {
        return [$this, ];
    }
}
