<?php

return [
    [
        'command' => 'Dummy',
        'defaults' => 'MartiAdrogue\Console\DummyCommand',
    ],
    [
        'command' => 'NotFound',
        'defaults' => 'MartiAdrogue\Console\AidCommand\NotFoundCommand',
    ],
    [
        'command' => 'Error',
        'defaults' => 'MartiAdrogue\Console\AidCommand\ErrorCommand',
    ],
];
