<?php namespace Smony\Feedback\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSmonyFeedbackCalls extends Migration
{
    public function up()
    {
        Schema::table('smony_feedback_calls', function($table)
        {
            $table->string('name', 191)->default('нет')->change();
            $table->string('ip', 191)->default('0')->change();
        });
    }
    
    public function down()
    {
        Schema::table('smony_feedback_calls', function($table)
        {
            $table->string('name', 191)->default(null)->change();
            $table->string('ip', 191)->default(null)->change();
        });
    }
}
