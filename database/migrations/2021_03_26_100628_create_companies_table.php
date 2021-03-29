<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('Company_Name');
			$table->string('Company_Sector');
            $table->string('Company_Email')->unique();
            $table->string('Company_Phone')->unique();
            $table->string('Company_Website')->unique();
			$table->integer('Company_NBStudent')->default(0);
			$table->float('Company_TutorConfidence')->nullable();
			$table->boolean('Invisibility')->default(false);
			$table->BigInteger('ID_City')->unsigned();
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
        Schema::dropIfExists('companies');
    }
}
