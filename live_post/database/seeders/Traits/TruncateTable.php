<?php 

namespace Database\Seeders\Traits;

use Illuminate\Support\Facades\DB;

trait TruncateTable
{
    /**
     * Truncate a database table.
     *
     * @param string $table The name of the table to truncate.
     */
    protected function truncate(string $table): void
    {
        DB::table($table)->truncate();
    }
    
}
