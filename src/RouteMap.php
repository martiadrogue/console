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

use MartiAdrogue\Console\AidCommand\RegularCommand;
use MartiAdrogue\Console\AidCommand\ErrorCommand;
use MartiAdrogue\Console\AidCommand\NotFoundCommand;

/**
 *
 */
class RouteMap
{
    const NOT_FOUND_CMD = NotFoundCommand::class;
    const ERROR_CMD = ErrorCommand::class;
    const REGULAR_CMD = RegularCommand::class;

    private $map;

    public function __construct($path)
    {
        $this->map = require $path;
    }

    /**
     * Adds default actions if there aren't
     */
    public function normalizeRouteMap()
    {
        $commandAvailableSet = $this->getCommands();

        if (!in_array('NotFound', $commandAvailableSet)) {
            $this->map[] = [
                'command' => 'NotFound',
                'defaults' => self::NOT_FOUND_CMD,
            ];
        }

        if (!in_array('Error', $commandAvailableSet)) {
            $this->map[] = [
                'command' => 'Error',
                'defaults' => self::ERROR_CMD,
               ];
        }

        if (!in_array('Regular', $commandAvailableSet)) {
            $this->map[] = [
                'command' => 'Regular',
                'defaults' => self::REGULAR_CMD,
              ];
        }
    }

    public function getRoute($index)
    {
        return $this->map[$index];
    }

    public function getCommands()
    {
        return array_map(function ($route) {
            return $route['command'];
        }, $this->map);
    }

}
