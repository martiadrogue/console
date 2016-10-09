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

use MartiAdrogue\Console\Command;

class ErrorCommand extends Command
{
    public function configure()
    {
    }

    public function execute()
    {
        $output = $this->core->getOutput();
        $output->print('Something go wrong during command\'s inflation.');
    }
}
