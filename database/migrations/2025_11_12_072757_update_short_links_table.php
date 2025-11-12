<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('short_links', function (Blueprint $table) {
            // Make code column exactly 6 characters and add unique constraint
            $table->string('code', 6)->change();
            $table->unique('code');
            $table->index('code');

            // Change link column to text for longer URLs
            $table->text('link')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('short_links', function (Blueprint $table) {
            // Remove constraints (be careful with existing data)
            $table->dropUnique(['code']);
            $table->dropIndex(['code']);

            // Revert to string (you may lose data if URLs are too long)
            $table->string('code')->change();
            $table->string('link')->change();
        });
    }
};
