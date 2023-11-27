<?php

namespace Database\Seeders;

use App\Models\settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Menjalankan seed database
     *
     * @return void
     */
    public function run()
    {
        if (settings::count() == 0) {
            settings::factory(1)->create();
        }
    }
}
