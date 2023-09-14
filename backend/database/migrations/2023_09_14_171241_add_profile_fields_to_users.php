<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'name')) {
                $table->string('name')->nullable();
            }
    
            if (!Schema::hasColumn('users', 'bio')) {
                $table->text('bio')->nullable();
            }
    
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable();
            }
    
            if (!Schema::hasColumn('users', 'photo')) {
                $table->string('photo')->nullable();
            }
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
