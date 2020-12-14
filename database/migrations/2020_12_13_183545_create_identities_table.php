<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('idc_number');
            $table->string('fc_number');
            $table->string('pob');
            $table->date('dob');
            $table->string('gender');
            $table->string('blood_type');
            $table->string('address');
            $table->unsignedBigInteger('hamlet_id');
            $table->string('village');
            $table->integer('postal_code');
            $table->unsignedBigInteger('district_id');
            $table->string('religion');
            $table->string('marital_status');
            $table->date('wedding_date');
            $table->unsignedBigInteger('job_id');
            $table->string('citizenship');
            $table->string('education');
            $table->string('relation_status');
            $table->string('passport')->nullable();;
            $table->string('tspc_or_pspc')->nullable();
            $table->string('father');
            $table->string('mother');
            $table->integer('phone');
            $table->string('idc_image');
            $table->string('fc_image');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('hamlet_id')->references('id')->on('hamlets')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('district_id')->references('id')->on('districts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
            $table->foreign('job_id')->references('id')->on('jobs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identities');
    }
}
