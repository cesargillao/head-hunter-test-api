<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Apple',
            'corp_name' => 'Apple Inc.',
            'fundators' => 'Steve Jobs, Steve Wozniak, Ronald Wayne',
            'fundation_date' => '1976-04-01',
            'campus' => 'Apple Park, Cupertino, California, EE.UU.',
            'website' => 'https://www.apple.com',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/120px-Apple_logo_black.svg.png'
        ]);

        Brand::create([
            'name' => 'Samsung',
            'corp_name' => 'Samsung Electronics',
            'fundators' => 'Lee Byung-chul',
            'fundation_date' => '1938-03-01',
            'campus' => 'Samsung Town, Seúl, Corea del Sur',
            'website' => 'https://www.samsung.com/',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Samsung_wordmark.svg/245px-Samsung_wordmark.svg.png'
        ]);

        Brand::create([
            'name' => 'Xiaomi',
            'corp_name' => 'Beijing Xiaomi Technology Co., Ltd',
            'fundators' => 'Lei Jun, Lin Bin',
            'fundation_date' => '2010-04-06',
            'campus' => 'Beijing , China',
            'website' => 'https://www.mi.com/',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Xiaomi_logo.svg/125px-Xiaomi_logo.svg.png'
        ]);

        Brand::create([
            'name' => 'Huawei',
            'corp_name' => 'Huawei Technologies Co., Ltd.',
            'fundators' => 'Ren Zhengfei',
            'fundation_date' => '1987-09-15',
            'campus' => 'Shenzhen , China',
            'website' => 'www.huaweidevice.com',
            'logo' => 'https://cdn-files.kimovil.com/brands/0001/07/thumb_6891_brands_medium.png'
        ]);
    }
}
