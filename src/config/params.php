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
    'organization.contact' => [
        'name'                  => 'WAVE BUSINESS DECISIONS LTD.',
        'phone'                 => 'Tel.: +972772238823',
    ],

    'supportEmail'      => $supportEmail,
    'adminEmail'        => $supportEmail,
    'abuseEmail'        => 'abuse@qq.domains',
    'salesEmail'        => 'sale@qq.domains',
    'gdprEmail'         => 'dpo@danesconames.com',

    'logo.image'                => '@qq/assets/qq/assets/img/alt-logo.png',
    'logo.imageOptions'         => ['style' => 'width: 100px;'],
    'logo.smallImage'           => '@qq/assets/qq/assets/img/alt-logo.png',
    'logo.smallImageOptions'    => ['style' => 'width: 50px'],

    'socialLinks.links'  => [
        'email'     => 'mailto:' . $supportEmail,
        'twitter'   => 'https://twitter.com/rutld',
        'facebook'  => 'https://www.facebook.com/groups/230254030432488/',
    ],

    'module.server.order.redirect.url' => "https://ru-tld.ru/{language}/virtual-servers/",
];
