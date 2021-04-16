<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Course;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->enum('status', [Course::BORRADOR, Course::REVISION, Course::PUBLICADO])->default(Course::BORRADOR);
            //1 borrador 2 revision 3 publicado para que no olvidarlo lo defino en el modelo como constante
            $table->string('slug');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('level_id')->nullable(); //Para poder hacer el set null en la relación el campo tiene que ser nullable
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('price_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //Si un usuario se elimina los cursos relacionados se eliminan
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('set null');
            //Si un nivel se elimina el campo level_id queda nulo y no se elimina el curso
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            //Si una categoria se elimina el campo category_id queda nulo y no se elimina el curso
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('set null');
            //Si un precio se elimina el campo price_id queda nulo y no se elimina el curso


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
