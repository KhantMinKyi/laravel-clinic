<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->integer('Gender');
            $table->integer('Age');
            $table->string('father_name');
            $table->string('nationality');
            $table->string('nrc')->nullable();
            $table->string('passport')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->string('first_product_name');
            $table->string('first_product_no');
            $table->date('first_vaccination_appointment');
            $table->date('first_vaccination_date');
            $table->string('first_vaccinator');
            $table->string('first_vaccination_stte');
            $table->string('first_remark')->nullable();
            $table->integer('first_completed')->nullable();
            $table->string('second_product_name')->nullable();
            $table->string('second_product_no')->nullable();
            $table->date('second_vaccination_appointment')->nullable();
            $table->date('second_vaccination_date')->nullable();
            $table->string('second_vaccinator')->nullable();
            $table->string('second_vaccination_stte')->nullable();
            $table->string('second_remark')->nullable();
            $table->integer('second_completed')->nullable();
            $table->string('booster_product_name')->nullable();
            $table->string('booster_product_no')->nullable();
            $table->date('booster_vaccination_appointment')->nullable();
            $table->date('booster_vaccination_date')->nullable();
            $table->string('booster_vaccinator')->nullable();
            $table->string('booster_vaccination_stte')->nullable();
            $table->string('booster_remark')->nullable();
            $table->integer('booster_completed')->nullable();
            $table->string('second_booster_product_name')->nullable();
            $table->string('second_booster_product_no')->nullable();
            $table->date('second_booster_vaccination_appointment')->nullable();
            $table->date('second_booster_vaccination_date')->nullable();
            $table->string('second_booster_vaccinator')->nullable();
            $table->string('second_booster_vaccination_stte')->nullable();
            $table->string('second_booster_remark')->nullable();
            $table->integer('second_booster_completed')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
