<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessTemplate;

class BusinessTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BusinessTemplate::create([
            'title' => 'Organic Café Franchise',
            'content' => 'Start your own café using our eco-friendly model...',
            'image_url' => 'https://via.placeholder.com/300x150',
        ]);
    }
}
