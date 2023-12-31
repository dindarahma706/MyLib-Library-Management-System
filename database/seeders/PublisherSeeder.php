<?php

namespace Database\Seeders;

use App\Models\publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Menjalankan seed database.
     *
     * @return void
     */
    public function run()
    {
        if (publisher::count() == 0) {
            publisher::factory(10)->create();
        }
    }
}
