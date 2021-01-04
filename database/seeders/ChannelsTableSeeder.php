<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Laravel 8',
            'slug' => Str::slug('Laravel 8')
        ]);

        Channel::create([
            'name' => 'React Js',
            'slug' => Str::slug('React Js')
        ]);

        Channel::create([
            'name' => 'Boostrap 5',
            'slug' => Str::slug('Boostrap 5')
        ]);

        Channel::create([
            'name' => 'NodeJS',
            'slug' => Str::slug('Node Js')
        ]);
    }
}
