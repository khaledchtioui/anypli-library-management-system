<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);

        Book::factory()->count(50)->create();
        $this->call(CategorySeeder::class);
        $this->call(BookTabelSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(BooksTypeSeeder::class);

      // $this->call(RoleSeeder::class);
        $this->call(CreateAdminUserSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
