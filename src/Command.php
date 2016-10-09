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

abstract class Command
{
    private $core;
    private $name;
    private $description;
    private $help;

    public function __construct(Core $core)
    {
        $this->core = $core;
        $this->name = null;
        $this->description = null;
        $this->help = null;
        $this->configure();
    }

    public function blast()
    {
        $statusCode = $this->execute();

        return is_numeric($statusCode) ? (int) $statusCode : 0;
    }

    protected function setName($alias)
    {
        $this->name = $alias;
    }

    protected function setDescription($brief)
    {
        $this->description = $brief;
    }

    protected function setHelp($manual)
    {
        $this->help = $manual;
    }

    abstract public function configure();

    abstract public function execute();
}
