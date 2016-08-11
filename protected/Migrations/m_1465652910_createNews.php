<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1465652910_createNews
    extends Migration
{

    public function up()
    {
        $this->createTable('news', [
            'title' => ['type' => 'text'],
            'text' => ['type' => 'text'],
            'author' => ['type' => 'text'],
            'published' => ['type' => 'date'],
        ]);
    }

    public function down()
    {
        $this->dropTable('news');
    }
    
}