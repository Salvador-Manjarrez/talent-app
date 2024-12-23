<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class);
            $table->string('title');
            $table->string('type');
            $table->string('url')->nullable();
            $table->string('salary')->nullable();
            $table->text('description');
            $table->string('location');
            $table->string('img')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();

            $table->string('nationality')->nullable();
            $table->string('contact')->nullable();
            $table->string('p_talent')->nullable(); /* Select all that apply: Actor, Dancer, Voice Actor"*/
            $table->string('p_roles')->nullable(); /*All that apply from: Director, Writer, Editor, Composer*/ 
            $table->string('t_eye_color')->nullable();
            $table->string('t_hair_color')->nullable();
            $table->string('t_hair_length')->nullable();
            $table->string('t_weight')->nullable();
            $table->string('t_height')->nullable();
            $table->string('t_appearance')->nullable();
            $table->string('t_age_range')->nullable();
            $table->json('t_type')->nullable();
            $table->json('c_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('insta')->nullable();
            $table->string('fb')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
