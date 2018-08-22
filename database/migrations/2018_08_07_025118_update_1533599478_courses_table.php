<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1533599478CoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            if(Schema::hasColumn('courses', 'image')) {
                $table->dropColumn('image');
            }
            
        });
Schema::table('courses', function (Blueprint $table) {
            
if (!Schema::hasColumn('courses', 'image')) {
                $table->string('image')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('image');
            
        });
Schema::table('courses', function (Blueprint $table) {
                        $table->string('image')->nullable();
                
        });

    }
}
