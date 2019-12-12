<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student_card}}`.
 */
class m191210_082022_create_student_card_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student_card}}', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'middlename' => $this->string()->notNull(),
            'lastname' => $this->string()->notNull(),
            'birthday' => $this->date()->notNull(),
            'city' => $this->string(),
            'adress' => $this->string(),
            'phone' => $this->bigInteger()->defaultValue(null),
            'university' => $this->string()->notNull(),
            'faculty' => $this->string()->notNull(),
            'course' => $this->integer()->notNull(),
        ]);
        $this->createIndex('idx-student_card-student_id','{{%student_card}}','student_id');
        $this->addForeignKey('fk-student_card-student_id','{{%student_card}}','student_id','user','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-student_card-student_id','{{%student_card}}');
        $this->dropForeignKey('fk-student_card-student_id','{{%student_card}}');
        $this->dropTable('{{%student_card}}');
    }
}
