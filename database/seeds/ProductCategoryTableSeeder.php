<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                "category_name" => "Electronic Devices",
                "slug" => Str::slug("Electronic Devices"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Mobiles",
                "slug" => Str::slug("Mobiles"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 1,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Realme Phones",
                "slug" => Str::slug("Realme Phones"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 2,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Samsung Phones",
                "slug" => Str::slug("Samsung Phones"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 2,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Xiaomi Phones",
                "slug" => Str::slug("Xiaomi Phones"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 2,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Huawei Phones",
                "slug" => Str::slug("Huawei Phones"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 2,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Electronic Accessories",
                "slug" => Str::slug("Electronic Accessories"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Mobile Accessories",
                "slug" => Str::slug("Mobile Accessories"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 7,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Phone Cases",
                "slug" => Str::slug("Phone Cases"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 8,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Power Banks",
                "slug" => Str::slug("Power Banks"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 8,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Audio",
                "slug" => Str::slug("Audio"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 7,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Wearable",
                "slug" => Str::slug("Wearable"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 7,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Health & Beauty",
                "slug" => Str::slug("Health & Beauty"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Male",
                "slug" => Str::slug("Male"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Female",
                "slug" => Str::slug("Female"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Kids",
                "slug" => Str::slug("Kids"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ],[
                "category_name" => "Others",
                "slug" => Str::slug("Others"),
                "user_id" => 1,
                "is_top_menu" => 1,
                "parent_id" => 0,
                "created_at" => Carbon::now()->toDateTimeLocalString(),
            ]
        ]);
    }
}
