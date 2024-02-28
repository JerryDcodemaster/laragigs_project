<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
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
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user  ->id
        ]);

        // Listing::factory(15)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet 
        //     consectetur, adipisicing elit. Vero, iste reprehenderit! 
        //     Pariatur ipsa iusto commodi ullam aliquam blanditiis 
        //     est delectus expedita laboriosam officia. Cum possimus 
        //     quod commodi corporis illo a explicabo placeat deserunt, 
        //     laborum nisi consequuntur tenetur neque suscipit est quisquam 
        //     ad sed, nesciunt facilis. Cum corrupti et ut cupiditate.'
        // ]);
 
        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet 
        //     consectetur, adipisicing elit. Vero, iste reprehenderit! 
        //     Pariatur ipsa iusto commodi ullam aliquam blanditiis 
        //     est delectus expedita laboriosam officia. Cum possimus 
        //     quod commodi corporis illo a explicabo placeat deserunt, 
        //     laborum nisi consequuntur tenetur neque suscipit est quisquam 
        //     ad sed, nesciunt facilis. Cum corrupti et ut cupiditate.',
        // ]);
    }
}
