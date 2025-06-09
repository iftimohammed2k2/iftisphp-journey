<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int|null $id
 * @property string $name
 * @property int|null $quantity
 * @property float|null $price
 */
class Product extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantity', 'price'], 'default', 'value' => null],
            [['name'], 'required'],
            [['name'], 'string'],
            [['quantity'], 'integer'],
            [['price'], 'number'],
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
            'quantity' => 'Quantity',
            'price' => 'Price',
        ];
    }

}
