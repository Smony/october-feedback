<?php namespace Smony\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSmonyFeedbackCalls extends Migration
{
    public function up()
    {
        Schema::create('smony_feedback_calls', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('phone');
            $table->string('name');
            $table->integer('active')->default(0);
            $table->string('ip');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('smony_feedback_calls');
    }
}
