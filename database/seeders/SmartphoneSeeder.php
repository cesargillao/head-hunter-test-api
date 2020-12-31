<?php

namespace Database\Seeders;

use App\Models\Smartphone;
use Illuminate\Database\Seeder;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Smartphone::create([
            'brand_id' => 1,
            'name' => 'iPhone 12',
            'release_date' => '2020-10-23',
            'size' => '71.5 x 146.7 x 7.4 (mm)',
            'weight' => '162 g',
            'screen_size' => '6.1',
            'processor' => 'Apple A14 Bionic',
            'image' => 'https://cdn-files.kimovil.com/devicerender/0005/31/thumb_430068_devicerender_small.jpeg'
        ]);

        Smartphone::create([
            'brand_id' => 2,
            'name' => 'Samsung Galaxy Note 20',
            'release_date' => '2020-09-15',
            'size' => '75.2 x 161.6 x 8.3 (mm)',
            'weight' => '194 g',
            'screen_size' => '6.7',
            'processor' => 'Samsung Exynos 990',
            'image' => 'https://cdn-files.kimovil.com/devicerender/0005/06/thumb_405376_devicerender_small.jpeg'
        ]);

        Smartphone::create([
            'brand_id' => 3,
            'name' => 'Xiaomi Mi 11',
            'release_date' => '2020-12-28',
            'size' => '74.6 x 164.3 x 8.1 (mm)',
            'weight' => '196 g',
            'screen_size' => '6.81',
            'processor' => 'Qualcomm Snapdragon 888',
            'image' => 'https://cdn-files.kimovil.com/phone_front/0005/57/thumb_456128_phone_front_medium.jpeg'
        ]);

        Smartphone::create([
            'brand_id' => 4,
            'name' => 'Huawei Mate 40',
            'release_date' => '2020-10-22',
            'size' => '72.5 x 158.6 x 8.8 (mm)',
            'weight' => '188 g',
            'screen_size' => '6.5',
            'processor' => 'Huawei HiSilicon KIRIN 9000E',
            'image' => 'https://cdn-files.kimovil.com/phone_front/0005/30/thumb_429964_phone_front_medium.jpeg'
        ]);
    }
}
