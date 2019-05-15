<?php

use App\Ayar;
use Illuminate\Database\Seeder;

class AyarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ayar::create(["name" => "baslik", "value" =>"Yazilim Dünyası"]);
        Ayar::create(["name" => "author", "value" =>"Ali Topcan"]);
        Ayar::create(["name" => "aciklama", "value" =>"Az kod çok iş..."]);
        Ayar::create(["name" => "keywords", "value" =>"yazılım,php ,java"]);
        Ayar::create(["name" => "facebook", "value" =>"https://www.facebook.com"]);
        Ayar::create(["name" => "twitter", "value" =>"https://www.twitter.com"]);
        Ayar::create(["name" => "github", "value" =>"https://www.github.com"]);

    }
}
