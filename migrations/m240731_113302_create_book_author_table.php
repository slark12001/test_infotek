<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_author}}`.
 */
class m240731_113302_create_book_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_author}}', [
            'book_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'PRIMARY KEY(book_id, author_id)'
        ]);

        $this->addForeignKey(
            'fk_book_author_book_id',
            '{{%book_author}}',
            'book_id',
            '{{%book}}',
            'id'
        );

        $this->addForeignKey(
            'fk_book_author_author_id',
            '{{%book_author}}',
            'author_id',
            '{{%author}}',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_book_author_book_id', '{{%book_author}}');
        $this->dropForeignKey('fk_book_author_author_id', '{{%book_author}}');
        $this->dropTable('{{%book_author}}');
    }
}
