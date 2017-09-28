<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail: Static From in Mails',
    'description' => 'Use reply-to as default from address, set static value when configured',
    'category' => 'module',
    'version' => '1.0.1',
    'state' => 'stable',
    'uploadFolder' => false,
    'clearCacheOnLoad' => true,
    'createDirs' => '',
    'author' => 'Benjamin Serfhos',
    'author_email' => 'benjamin@serfhos.com',
    'author_company' => 'Rotterdam School of Management, Erasmus University',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.7.99',
            'powermail' => '2.6.0-4.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Serfhos\\PowermailFromOverride\\' => 'Classes',
        ],
    ],
];

