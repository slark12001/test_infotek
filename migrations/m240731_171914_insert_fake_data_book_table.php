<?php

use yii\db\Migration;

/**
 * Class m240731_171914_insert_fake_data_book_table
 */
class m240731_171914_insert_fake_data_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $faker = \Faker\Factory::create();
        $books = [];
        for ($i = 0; $i < 100; $i++) {
            $books[] = [
                'title' => $faker->sentence(rand(1, 6)),
                'year' => $faker->year(),
                'description' => $faker->paragraph(rand(3,6)),
                'isbn' => $faker->isbn13(),
                'main_photo' => $faker->imageUrl(),
                'created_at' => time(),
                'updated_at' => time(),
            ];
        }
        $this->batchInsert(\app\models\Book::tableName(), ['title', 'year', 'description', 'isbn', 'main_photo', 'created_at', 'updated_at'], $books);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240731_171914_insert_fake_data_book_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240731_171914_insert_fake_data_book_table cannot be reverted.\n";

        return false;
    }
    */
}
