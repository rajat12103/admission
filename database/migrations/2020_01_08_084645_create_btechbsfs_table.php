<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBtechbsfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btechbsfs', function (Blueprint $table) {
            $table->increments('id');
             $table->string('userid');
             $table->string('regno');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('father_email')->nullable();
            $table->string('father_mob');
            $table->string('aadhar');
            $table->text('identification')->nullable();
            $table->text('image');


            $table->string('house');
            $table->string('street');
            $table->string('landmark');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('house1');
            $table->string('street1');
            $table->string('landmark1');
            $table->string('city1');
            $table->string('state1');
            $table->string('pincode1');


            $table->string('te_school');
            $table->string('te_board');
            $table->string('te_subject');
            $table->string('te_passing');
            $table->string('te_rollno');
            $table->string('te_system');
            $table->string('te_cgpa')->nullable();
            $table->string('te_percentage')->nullable();
             $table->text('te_marksheet');

            $table->string('tw_school');
            $table->string('tw_board');
            $table->string('tw_result');
            $table->string('tw_rollno');
            $table->string('tw_passing');
            $table->string('tw_system');
            $table->string('tw_cgpa')->nullable();
            $table->string('tw_percentage')->nullable();
            $table->text('tw_certificate')->nullable();;
            
            $table->string('eligibility')->nullable();
            $table->string('jee_roll_no')->nullable();
            $table->string('jee_rank')->nullable();
            $table->string('jee_perc')->nullable();
            $table->text('jee_certificate')->nullable();
            
            $table->string('nationality');
            $table->string('category');
            $table->string('religion');
            $table->string('otherrel')->nullable();
            $table->string('phy_hand');
            $table->string('pwd')->nullable();
            $table->string('jkresident');
            $table->text('domicile')->nullable();

           
            
            $table->string('orga');
            $table->string('bsf_rank')->nullable();
            $table->string('unit')->nullable();
            $table->string('unitadd')->nullable();
            $table->string('capf_org')->nullable();
            $table->text('ser_certificate');
            $table->string('rollno')->nullable();
            $table->string('roomno')->nullable();
            $table->string('attendance')->nullable();
            $table->string('tenth_doc_present')->nullable();
            $table->string('twe_doc_present')->nullable();
            $table->string('migration_present')->nullable();
            $table->string('service_present')->nullable();
            $table->string('branch')->nullable();


            
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
        Schema::dropIfExists('btechbsfs');
    }
}
