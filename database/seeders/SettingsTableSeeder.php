<?php

namespace Database\Seeders;
use App\Models\Setting;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'E-Commerce',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'E-Commerce Application',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'admin@example.com',
        ],
        [
            'key'                       =>  'phone_number',
            'value'                     =>  '(+81)0987654321',
        ],
        [
            'key'                       =>  'fax_number',
            'value'                     =>  '(+81)0987654322',
        ],
        [
            'key'                       =>  'currency_code',
            'value'                     =>  'JPY',
        ],
        [
            'key'                       =>  'currency_symbol',
            'value'                     =>  '￥',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  'settings/logobook.png',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  'settings/faviconbook.ico',
        ],
        [
            'key'                       =>  'footer_copyright_text',
            'value'                     =>  'All rights reserved',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_facebook',
            'value'                     =>  'http://localhost/',
        ],
        [
            'key'                       =>  'social_twitter',
            'value'                     =>  'http://localhost/',
        ],
        [
            'key'                       =>  'social_instagram',
            'value'                     =>  'http://localhost/',
        ],
        [
            'key'                       =>  'social_linkedin',
            'value'                     =>  'http://localhost/',
        ],
        [
            'key'                       =>  'google_analytics',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'facebook_pixels',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_payment_method',
            'value'                     =>  1,
        ],
        [
            'key'                       =>  'stripe_key',
            'value'                     =>  'pk_test_51JSupyDq7S3lTZH24ldmwoyzE4gq5fU4NvsuBmH9wh3B3zOcabL0LoOIcGroKw9b7t9caQItr4cOCCFSTqiDMRBn00Q4WwgC8K',
        ],
        [
            'key'                       =>  'stripe_secret_key',
            'value'                     =>  'sk_test_51JSupyDq7S3lTZH2FASQIZqoJJnwISYmx4Ow7ktKg08hThVPAIPOVnE3nZC8TjZLboR2UuQJMyEQB9szuVMcuA600027B3dR9e',
        ],
        [
            'key'                       =>  'paypal_payment_method',
            'value'                     =>  0,
        ],
        [
            'key'                       =>  'paypal_client_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_secret_id',
            'value'                     =>  '',
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
