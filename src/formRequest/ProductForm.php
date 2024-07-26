<?php

namespace src\formRequest;

use yii\base\Model;

class ProductCreate extends Model
{
    public $name;
    public $description;
    public $created_at;
    public $ticketPrice;
    public $consultationPrice;

    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['created_at'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 1000],
            [['ticketPrice', 'consultationPrice'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_at' => 'Created At',
            'ticketPrice' => 'Цена билета',
            'consultationPrice' => 'Цена консультации'
        ];
    }
}