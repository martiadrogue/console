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

use ReflectionException;
use ReflectionClass;

class Router
{
    private $input;
    private $configPath;
    private $notFoundCommand;
    private $errorCommand;

    public function __construct(Input $input)
    {
        $this->input = $input;
        $this->configPath = '../config';
        $this->notFoundCommand = NotFoundCommand::class;
        $this->errorCommand = ErrorCommand::class;
    }

    public function launch()
    {
        $inputList = $this->input->parse();
        $commandName = array_shift($inputList);
        $routeMap = require $this->configPath.'/routing.php';
        $commandSet = array_map(function ($route) {
            return $route['command'];
        }, $routeMap);
        $command = in_array($commandName, $commandSet) ? $commandName : $this->notFoundCommand;
        $commandReflector = $this->getReflector($command);

        return $commandReflector->newInstance();
    }

    private function getReflector($command)
    {
        try {
            return new ReflectionClass($command);
        } catch (LogicException $e) {
            return new ReflectionClass($this->errorCommand);
        } catch (ReflectionException $e) {
            return new ReflectionClass($this->errorCommand);
        }
    }
}
