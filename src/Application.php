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

class Application
{
    private $input;

    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    public function run()
    {
        $router = new Router($this->input);
        $command = $router->launch();

        return $command->blast();
    }
}
