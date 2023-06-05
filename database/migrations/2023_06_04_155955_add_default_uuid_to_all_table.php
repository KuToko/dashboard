<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            // alter table id to default uuid v4
            // get all tables postgresql
            $tables = DB::select('SELECT tablename FROM pg_catalog.pg_tables WHERE schemaname = ?', ['public']);
            foreach ($tables as $table) {
                DB::raw("ALTER TABLE {$table->tablename} ALTER COLUMN id SET DEFAULT uuid_generate_v4()");
            }
            // dd($tables);
            
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // alter table id to default uuid v4
        // get all tables postgresql
        $tables = DB::select('SELECT tablename FROM pg_catalog.pg_tables WHERE schemaname = ?', ['public']);
        foreach ($tables as $table) {
            DB::raw("ALTER TABLE {$table->tablename} ALTER COLUMN id SET DEFAULT uuid_generate_v4()");
        }
        // dd($tables);
    }
};
