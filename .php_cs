<?php

$header = <<<EOF
QQ.domains asset files: images, configs and more

@link      https://github.com/ru-tld/yii2-asset-qq
@package   yii2-asset-qq
@license   proprietary
@copyright Copyright (c) 2017, RU-TLD (https://ru-tld.ru/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
