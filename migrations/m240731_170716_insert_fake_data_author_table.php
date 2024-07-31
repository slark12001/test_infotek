<?php

use yii\db\Migration;

/**
 * Class m240731_170716_insert_fake_data_author_table
 */
class m240731_170716_insert_fake_data_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            $gender = ['male', 'female'][rand(0, 1)];
            $author = new \app\models\Author([
               'first_name' => $faker->firstName($gender),
               'surname' => $faker->firstName($gender),
               'last_name' => $faker->lastName($gender)
            ]);
            $author->save();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240731_170716_insert_fake_data_author_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240731_170716_insert_fake_data_author_table cannot be reverted.\n";

        return false;
    }
    */
}
