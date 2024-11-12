<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('movies', function (Blueprint $table) {
        $table->decimal('rating', 3, 2)->nullable();
    });
}

public function down()
{
    Schema::table('movies', function (Blueprint $table) {
        $table->dropColumn('rating');
    });
}
};
