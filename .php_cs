<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude(['build', 'vendor'])
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setUsingCache(false)
    ->setRules([
        '@Symfony' => true,
        'phpdoc_align' => false,
        'phpdoc_order' => true,
        'ordered_imports' => true,
        'array_syntax' => ['syntax' => 'short'],
    ]);