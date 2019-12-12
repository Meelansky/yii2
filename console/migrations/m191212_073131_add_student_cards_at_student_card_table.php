<?php

use yii\db\Migration;

/**
 * Class m191212_073131_add_student_cards_at_student_card_table
 */
class m191212_073131_add_student_cards_at_student_card_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%student_card}}',['id','student_id','name','middlename','lastname','birthday','city','adress','phone','university','faculty','course'],[
            [1,2,'Test','Student','For Example','2019-03-03','Omsk','Test Adress',81234567890,'OmSU','IMIT',1],
            [2,3,'Test2','Student2','For Example2','2019-03-03','Moscow','Test Adress2',81234567980,'OmSU','IMIT',2],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191212_073131_add_student_cards_at_student_card_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191212_073131_add_student_cards_at_student_card_table cannot be reverted.\n";

        return false;
    }
    */
}
