<?php

return [
    [
        'key' => 'pwa',
        'name' => 'pwa::app.admin.system.pwa',
        'sort' => 1
    ], [
        'key' => 'pwa.settings',
        'name' => 'pwa::app.admin.system.settings',
        'sort' => 1,
    ],[
        'key' => 'pwa.settings.general',
        'name' => 'pwa::app.admin.system.general',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'name',
                'title' => 'pwa::app.admin.system.name',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true,
                'locale_based' => false
            ], [
                'name' => 'short_name',
                'title' => 'pwa::app.admin.system.short-name',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true,
                'locale_based' => false
            ], [
                'name' => 'theme_color',
                'title' => 'pwa::app.admin.system.theme-color',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true,
                'locale_based' => false
            ], [
                'name' => 'background_color',
                'title' => 'pwa::app.admin.system.background-color',
                'type' => 'text',
                'validation' => 'required',
                'channel_based' => true,
                'locale_based' => false
            ]
        ]
    ], [
        'key' => 'pwa.settings.media',
        'name' => 'pwa::app.admin.system.media',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'small',
                'title' => 'pwa::app.admin.system.small',
                'type' => 'image',
                'validation' => 'ext:jpeg,jpg,png',
                'channel_based' => false,
                'locale_based' => false
            ], [
                'name' => 'medium',
                'title' => 'pwa::app.admin.system.medium',
                'type' => 'image',
                'validation' => 'ext:jpeg,jpg,png',
                'channel_based' => false,
                'locale_based' => false
            ], [
                'name' => 'large',
                'title' => 'pwa::app.admin.system.large',
                'type' => 'image',
                'validation' => 'ext:jpeg,jpg,png',
                'channel_based' => false,
                'locale_based' => false
            ], [
                'name' => 'extra_large',
                'title' => 'pwa::app.admin.system.extra-large',
                'type' => 'image',
                'validation' => 'ext:jpeg,jpg,png',
                'channel_based' => false,
                'locale_based' => false
            ]
        ]
    ], [
        'key' => 'pwa.settings.push-notification',
        'name' => 'pwa::app.admin.system.push-notification',
        'sort' => 1,
        'fields' => [
            [
                'name' => 'topic',
                'title' => 'pwa::app.admin.system.topic',
                'type' => 'text',
                'default' => 'bagisto',
                'validation' => 'alpha_num',
                'channel_based' => true,
                'locale_based' => true
            ],  [
                'name' => 'api-key',
                'title' => 'pwa::app.admin.system.api-key',
                'type' => 'password',
                'channel_based' => true,
                'locale_based' => false
            ]
        ]
    ]

];