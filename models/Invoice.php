<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "invoice".
 *
 * @property int $id
 * @property int $invoice_no
 * @property string $item
 * @property string $description
 * @property float $unit_price
 * @property int $quantity
 * @property float $total_price
 * @property string $date
 */
class Invoice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_no', 'item', 'description', 'unit_price', 'quantity', 'total_price'], 'required'],
            [['invoice_no', 'quantity'], 'integer'],
            [['unit_price', 'total_price'], 'number'],
            [['date'], 'safe'],
            [['item'], 'string', 'max' => 60],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invoice_no' => 'Invoice No',
            'item' => 'Item',
            'description' => 'Description',
            'unit_price' => 'Unit Price',
            'quantity' => 'Quantity',
            'total_price' => 'Total Price',
            'date' => 'Date',
        ];
    }
}
