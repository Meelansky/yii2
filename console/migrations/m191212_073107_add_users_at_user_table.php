<?php

use yii\db\Migration;

/**
 * Class m191212_073107_add_users_at_user_table
 */
class m191212_073107_add_users_at_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%user}}', ['id','username','auth_key','password_hash','password_reset_token','email','status','created_at','updated_at'], [
            ['1', 'TestAdmin','UsyKGRSO0usKXGYILSG3PM_eEx_RMYuF','$2y$13$owgCPXMu8gpQboYoMrhT5ugl6/CvRaH9/MqgrOcCAqqRCnK.Plri.','1','t@t.t',10,111111,111111],
            ['2', 'TestStudent1','RMllbf4AiKdqXjoG0IjJyCZqMpSlDJUi','$2y$13$KG09jBamN5k/UrCbk1nb..nm3K9h8o/hKG6pk3piY0WayXUi0VAW6','2','t2@t.t',10,1111111,11111],
            ['3', 'TestStudent2','DmBGHep4-tZOP94agxCgapWzpgMdRsXC','$2y$13$ZTyOMD0Fw4thS/uZCRuMEeqJsRGhB/k.ite3hvByfWqV0GTYvamQ6','3','t3@t.t',10,1111111,11111111],
            ['4', 'TestStudent3','NgWqVryHGJqyjPhl3Z9Ye4fm4-3QE6Y9','$2y$13$HiDAmQhLYWEMBaqWY.dcJudYf2PFXp185t4./89Cs45RjhmzEx9Y.','4','t4@t.t',10,111111111,11111111]
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191212_073107_add_users_at_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191212_073107_add_users_at_user_table cannot be reverted.\n";

        return false;
    }
    */
}
