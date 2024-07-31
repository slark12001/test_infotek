<?php

use yii\db\Migration;

/**
 * Class m240731_174237_insert_fake_data_book_author_table
 */
class m240731_174237_insert_fake_data_book_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $authorIds = \app\models\Author::find()->select('id')->column();
        $bookIds = \app\models\Book::find()->select('id')->column();
        foreach ($bookIds as $bookId) {
            $bookAuthor = new \app\models\BookAuthor([
                'book_id' => $bookId,
                'author_id' => $authorIds[rand(0,count($authorIds) - 1)]
            ]);
            $bookAuthor->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240731_174237_insert_fake_data_book_author_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240731_174237_insert_fake_data_book_author_table cannot be reverted.\n";

        return false;
    }
    */
}
