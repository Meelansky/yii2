<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_card".
 *
 * @property int $id
 * @property int $student_id
 * @property string $name
 * @property string $middlename
 * @property string $lastname
 * @property string $birthday
 * @property string|null $city
 * @property string|null $adress
 * @property int|null $phone
 * @property string $university
 * @property string $faculty
 * @property int $course
 *
 * @property User $student
 */
class StudentCard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student_card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'middlename', 'lastname', 'birthday', 'university', 'faculty', 'course'], 'required'],
            [['student_id', 'phone', 'course'], 'default', 'value' => null],
            [['student_id', 'phone', 'course'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'middlename', 'lastname', 'city', 'adress', 'university', 'faculty'], 'string', 'max' => 255],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'name' => 'Name',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'birthday' => 'Birthday',
            'city' => 'City',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'university' => 'University',
            'faculty' => 'Faculty',
            'course' => 'Course',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(User::className(), ['id' => 'student_id']);
    }

    public function beforeSave($insert)
    {
        $this->student_id = Yii::$app->user->id;
        return parent::beforeSave($insert);
    }

}
