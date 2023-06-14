<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = DB::select('SELECT table_name FROM information_schema.columns WHERE column_name = \'id\' AND data_type = \'uuid\'');
        foreach ($tables as $table) {
            DB::raw('ALTER TABLE ' . $table->table_name . ' ALTER COLUMN id SET DEFAULT uuid_generate_v4()');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = DB::select('SELECT table_name FROM information_schema.columns WHERE column_name = \'id\' AND data_type = \'uuid\'');
        foreach ($tables as $table) {
            DB::raw('ALTER TABLE ' . $table->table_name . ' ALTER COLUMN id DROP DEFAULT');
        }
    }
};
