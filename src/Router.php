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

use ReflectionClass;
use ReflectionException;

class Router
{
    private $dependencySet;
    private $configPath;

    public function __construct($commandName, array $dependencySet)
    {
        $this->commandName = $commandName ?: 'Regular';
        $this->dependencySet = $dependencySet;
    }

    public function dispatch()
    {
        $routePath = CoreConstant::CONFIG_PATH;
        $routeMap = new RouteMap($routePath);
        $routeMap->normalizeRouteMap();

        $route = $this->findRoute($routeMap);
        $commandReflector = $this->getReflector($route['defaults']);

        return $commandReflector->newInstanceArgs($this->dependencySet);
    }

    private function getReflector($namespace)
    {
        try {
            return new ReflectionClass($namespace);
        } catch (LogicException $e) {
            return new ReflectionClass(self::ERROR_CMD);
        } catch (ReflectionException $e) {
            return new ReflectionClass(self::ERROR_CMD);
        }
    }

    private function findRoute(RouteMap $routeMap)
    {
        $commandAvailableSet = $routeMap->getCommands();
        $command = in_array($this->commandName, $commandAvailableSet) ? $this->commandName : 'NotFound';
        $index = array_search($command, $commandAvailableSet);

        return $routeMap->getRoute($index);
    }
}
