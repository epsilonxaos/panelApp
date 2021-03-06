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
        $this->call(PermissionSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(WebsiteSeeder::class);
        // $this->call(RegistrosSeeder::class);
        // $this->call(SettingsSeeder::class);
    }
}
