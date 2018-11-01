<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180924_135432_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->char(200)->notNull(),
            'text' => $this->text()->notNull(),
            'annotation' => $this->char(200)->notNull(),
            'pubday' => $this->date()->notNull(),
            'picref' => $this->char(200),
            'fordetail' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
