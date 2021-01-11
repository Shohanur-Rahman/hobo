<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\EcomSetting::class,1)->create();
        $this->call(CurrenciesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(UserSeeder::class);
        factory(App\Models\ProductTags::class,10)->create();
        factory(App\Models\User\UserProfile::class,7)->create();
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(SiteSettingTableSeeder::class);
    }
}
