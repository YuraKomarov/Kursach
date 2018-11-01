<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery`.
 */
class m180926_115649_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallery', [
            'id' => $this->primaryKey(),
            'name' => $this->char(200),
            'path' => $this->char(200),
            'respath' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('gallery');
    }
}
