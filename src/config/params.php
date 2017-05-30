<?php
/**
 * QQ.domains asset files: images, configs and more
 *
 * @link      https://github.com/ru-tld/yii2-asset-qq
 * @package   yii2-asset-qq
 * @license   proprietary
 * @copyright Copyright (c) 2017, RU-TLD (https://ru-tld.ru/)
 */


$supportEmail = 'support@qq.domains';

return [
    'favicon.ico'       => '@qq/assets/qq/assets/img/favicon.ico',

    'organization.name' => 'QQ.domains',
    'organization.url'  => 'https://qq.domains/',

    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,
    'abuseEmail'        => 'abuse@qq.domains',
    'salesEmail'        => 'sale@qq.domains',

    'logo.image'                => '@qq/assets/qq/assets/img/alt-logo.png',
    'logo.imageOptions'         => ['style' => 'width: 100px;'],
    'logo.smallImage'           => '@qq/assets/qq/assets/img/alt-logo.png',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links'  => [
        'email'     => 'mailto:' . $supportEmail,
    ],
];
