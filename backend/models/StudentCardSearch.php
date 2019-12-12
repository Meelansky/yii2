<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class StudentCardSearch extends StudentCard
{
    public function rules()
    {
        // только поля определенные в rules() будут доступны для поиска
        return [
            [['id'], 'integer'],
            [['university', 'city'], 'string'],
        ];
    }

    public function search($params)
    {
        $query = StudentCard::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'university', $this->university, false])
            ->andFilterWhere(['like', 'city', $this->city, false]);

        return $dataProvider;
    }
}
