<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingWeb;

class SettingWebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SettingWeb::factory()->create([
            'key'=> 'hero-section',
            'status'=> true,
            'value' => array(
                ['type' => 'desc', 'data' => ['desc' => 'Tailwind CSS.']]),
        ]);
        SettingWeb::factory()->create([
            'key'=> 'section-1',
            'status'=> true,
            'value' => array(
                [
                    'type' => 'heading',
                    'data' => [
                        'content' => 'Tailwind CSS.',
                        'sub_content' => 'Tailwind CSS.',
                        ]
            ]),
        ]);
    }
}
