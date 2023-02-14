<?php
namespace Database\Seeders;
use App\Models\Listing;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // php artisan db:seed 
        /* Will create these two registrations on the Listing table in the DB */
        Listing::create([
            'title' => 'Laravel Senior Develop',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus purus sollicitudin diam ultricies vulputate. Sed et odio volutpat magna tincidunt dictum eget nec enim.',
        ]);
        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus purus sollicitudin diam ultricies vulputate. Sed et odio volutpat magna tincidunt dictum eget nec enim.',
        ]);
    }
}
