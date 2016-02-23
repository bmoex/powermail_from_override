<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Powermail: Static From in Mails',
    'description' => 'Use reply-to as default from address, set static value when configured',
    'category' => 'module',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadFolder' => false,
    'clearCacheOnLoad' => true,
    'author' => 'Benjamin Serfhos',
    'author_email' => 'benjamin@serfhos.com',
    'author_company' => 'Rotterdam School of Management, Erasmus University',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-7.99.99',
            'powermail' => '2.6.0-2.99.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Serfhos\\PowermailFromOverride\\' => 'Classes'
        )
    ),
);

