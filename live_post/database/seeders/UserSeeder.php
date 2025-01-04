<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeySetStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Traits\TruncateTable;

class UserSeeder extends Seeder
{
    use TruncateTable,  ForeignKeySetStatus;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $this->disableForeignKeys();
        $this->truncate('users');

        // Seed the users table with 10 fake records
        \App\Models\User::factory(10)->create();
        $this->enableForeignKeys();

        
    }
}
