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
        Schema::create('abouts', function (Blueprint $table) {
        //   the content big
            $table->id();
            $table->string('bigtitle_en');
            $table->string('bigtitle_ar');
            $table->text('bigcontent_en');
            $table->text('bigcontent_ar');
            $table->string('bigimage');
//           the content sambel
            $table->string('stitle_en');
            $table->string('stitle_ar');
            $table->string('stitle_en1');
            $table->string('stitle_ar1');

            $table->string('scontent_en');
            $table->string('scontent_ar');

            $table->string('scontent_en1');
            $table->string('scontent_ar1');

            $table->string('simage');
            $table->string('simage1');



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
