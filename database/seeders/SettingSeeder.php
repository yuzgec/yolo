<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $data =
            [
                [
                    'item' => 'siteName',
                    'value' => '',
                    'isType' => 'Genel',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteDescription',
                    'value' => '',
                    'isType' => 'Genel',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteSlogan',
                    'value' => 'Slogan',
                    'isType' => 'Genel',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'facebook',
                    'value' => 'facebook',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'instagram',
                    'value' => 'instagram',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'youtube',
                    'value' => 'youtube',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'linkedin',
                    'value' => 'linkedin',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'pinterest',
                    'value' => 'pinterest',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'twitter',
                    'value' => 'twitter',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'whatsapp',
                    'value' => 'whatsapp',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'discord',
                    'value' => 'discord',
                    'isType' => 'Sosyal',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'telefon1',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'telefon2',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'telefon3',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'email1',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'email2',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'email3',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'adres1',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'adres2',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'adres3',
                    'value' => '',
                    'isType' => 'İletişim',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'googleanaltycs',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'googleTagManager',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'facebookPixel',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'chat',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteTitle',
                    'value' => config('app.name'),
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteDescription',
                    'value' => config('app.name'),
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteKeywords',
                    'value' => config('app.name'),
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteAuthor',
                    'value' => config('app.name'),
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteAuthor',
                    'value' => config('app.name'),
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteLanguage',
                    'value' => 'Turkish',
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'googleSiteVerification',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'yandexSiteVerification',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'facebookDomainVerification',
                    'value' => '',
                    'isType' => 'Plugin',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'googleRobots',
                    'value' => 'index,follow',
                    'isType' => 'Seo',
                    'isImage' => '',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()

                ],
                [
                    'item' => 'siteLogo',
                    'value' => '',
                    'isType' => 'Image',
                    'isImage' => 'Image',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'item' => 'siteMobilLogo',
                    'value' => '',
                    'isType' => 'Image',
                    'isImage' => 'Image',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'item' => 'siteFooterLogo',
                    'value' => '',
                    'isType' => 'Image',
                    'isImage' => 'Image',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],
                [
                    'item' => 'siteFavIcon',
                    'value' => '',
                    'isType' => 'Image',
                    'isImage' => 'Image',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
            ];
        DB::table('setting')->insert($data);
    }
}
