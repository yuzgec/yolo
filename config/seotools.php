<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Karşıyaka Yolo Fitness - Yoga - Kick Box - Pilates Studyosu", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'İş Kazası Avukatı  - Dashboard'
            'description'  => "İzmir Karşıyaka'da 300 m2 alanda fitness, yoga, kick box, yoga, pilates hizmetleri sunan bir spor salonudur.", // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'GGd6yIrDiyu0AOXeh2Wnx8EfGyOSMbVeNaDPFMpOBcg',
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "Karşıyaka Yolo Fitness - Yoga - Kick Box - Pilates Studyosu", // set false to total remove
            'description'  => "İzmir Karşıyaka'da 300 m2 alanda fitness, yoga, kick box, yoga, pilates hizmetleri sunan bir spor salonudur.", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'        => "Karşıyaka Yolo Fitness - Yoga - Kick Box - Pilates Studyosu", // set false to total remove
            'description'  => "İzmir Karşıyaka'da 300 m2 alanda fitness, yoga, kick box, yoga, pilates hizmetleri sunan bir spor salonudur.", // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
