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
            'name' => 'Assistance',
            'slug' => Str::slug('Code Review')
        ]);

        Channel::create([
            'name' => 'Eloquent',
            'slug' => Str::slug('Eloquent')
        ]);

        Channel::create([
            'name' => 'Envoyer',
            'slug' => Str::slug('Envoyer')
        ]);

        Channel::create([
            'name' => 'Feedback',
            'slug' => Str::slug('Site Improvements')
        ]);

        Channel::create([
            'name' => 'Forge',
            'slug' => Str::slug('Forge')
        ]);

        Channel::create([
            'name' => 'General',
            'slug' => Str::slug('General Discussion')
        ]);

        Channel::create([
            'name' => 'Guides',
            'slug' => Str::slug('Guides')
        ]);

        Channel::create([
            'name' => 'JavaScript',
            'slug' => Str::slug('JavaScript')
        ]);

        Channel::create([
            'name' => 'Laravel',
            'slug' => Str::slug('Laravel')
        ]);

        Channel::create([
            'name' => 'Livewire',
            'slug' => Str::slug('Livewire')
        ]);

        Channel::create([
            'name' => 'Lumen',
            'slug' => Str::slug('Lumen')
        ]);

        Channel::create([
            'name' => 'Mix',
            'slug' => Str::slug('Elixir')
        ]);

        Channel::create([
            'name' => 'Nova',
            'slug' => Str::slug('Nova')
        ]);

        Channel::create([
            'name' => 'Requests',
            'slug' => Str::slug('Requests')
        ]);

        Channel::create([
            'name' => 'Servers',
            'slug' => Str::slug('Servers')
        ]);

        Channel::create([
            'name' => 'Spark',
            'slug' => Str::slug('Spark')
        ]);

        Channel::create([
            'name' => 'Testing',
            'slug' => Str::slug('Testing')
        ]);

        Channel::create([
            'name' => 'Tips',
            'slug' => Str::slug('Tips')
        ]);

        Channel::create([
            'name' => 'Vapor',
            'slug' => Str::slug('Vapor')
        ]);

        Channel::create([
            'name' => 'Vue',
            'slug' => Str::slug('Vue')
        ]);
    }
}
