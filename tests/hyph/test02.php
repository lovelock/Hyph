<?php

$config = [
    'logger' => [
        'class' => Hyph\Log::class,
        'arguments' => [
            __DIR__,
        ],
    ],
];
$c = new Hyph\Container($config);

echo $c->has('logger');
echo "\n";

$c->get('logger')->debug('I am a debug info named {name}.', [
        'name' => 'wangqingchun',
]);

$c->logger->warning('I am a warning info named {name}.', [
        'name' => 'wangqingchun',
]);


echo spl_object_hash($c->logger);
echo "\n";
echo spl_object_hash($c->logger);
echo "\n";
