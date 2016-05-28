<?php

$logger = new Hyph\Log(__DIR__);

echo $logger->getPath();
echo "\n";

$logger->log('WARNING', 'I am a logger wrtien with {language} by {author}', [
    'language' => 'Zephir',
    'author' => 'frostwong',
]);

$logger->debug('I am a logger wrtien with {language} by {author}', [
    'language' => 'Zephir',
    'author' => 'frostwong',
]);

//$logger->setPath(__DIR__ . '/WARNING.2016052812.log');

$logger->setPath(__DIR__ . '/google');
echo $logger->getPath();
echo "\n";
$logger->log('WARNING', 'I am a logger wrtien with {language} by {author}', [
    'language' => 'Zephir',
    'author' => 'frostwong',
]);

$logger->debug('I am a logger wrtien with {language} by {author}', [
    'language' => 'Zephir',
    'author' => 'frostwong',
]);
$logger->setPath(__DIR__ . '/microsoft/');
echo $logger->getPath();
echo "\n";
$logger->log('WARNING', 'I am a logger wrtien with {language} by {author}', [
    'language' => 'Zephir',
    'author' => 'frostwong',
]);

$logger->debug('I am a logger wrtien with {language} by {author}', [
    'language' => 'Zephir',
    'author' => 'frostwong',
]);
