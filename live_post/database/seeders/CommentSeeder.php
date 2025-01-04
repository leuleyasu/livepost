<?php

namespace Database\Seeders;

use Database\Seeders\Traits\ForeignKeySetStatus;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
class CommentSeeder extends Seeder
{

    use TruncateTable, ForeignKeySetStatus;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();


        Comment::factory(3)->create();
        $this->enableForeignKeys();

        //
    }
}
