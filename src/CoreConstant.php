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

class CoreConstant
{
    const CONFIG_PATH = '../config/routing.php';

    /**
     *  Class constants are allocated once per class, and not for each class
     *  instance. Thus, the caller should be prevented from constructing objects
     *  of this class, by declaring this private constructor.
     */
    public function __construct()
    {
        throw new Exception('The class isn\'t made for this.');
    }
}
