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

class Application extends Core
{
    public function __construct(Input $input, Output $output)
    {
        parent::__construct($input, $output);
    }

    public function run()
    {
        $commandName = $this->getCommandName();
        $dependencySet = $this->selfArrayify();
        $router = new Router($commandName, $dependencySet);
        $command = $router->launch();

        return $command->blast();
    }
}
