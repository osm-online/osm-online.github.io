<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oms_db.payment".
 *
 * @property int $transaction_id
 * @property int $lease_id
 * @property int $tenant_id
 * @property string $date
 * @property int $amount
 * @property int $receipt_number
 * @property int $establishment_id
 * @property string $payee_fname
 * @property string $payee_mname
 * @property string $payee_lname
 * @property string $payee_suffix
 */
class Payment extends \app\models\PaymentBase
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oms_db.payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lease_id', 'tenant_id', 'date', 'amount', 'receipt_number', 'payee_fname', 'payee_mname', 'payee_lname',], 'required'],
            [[ 'amount', 'receipt_number'], 'integer'],
            [['date'], 'safe'],
            [['payee_fname', 'payee_mname', 'payee_lname', 'payee_suffix'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transaction_id' => 'Transaction ID',
            'lease_id' => 'Lease ID',
            'tenant_id' => 'Tenant ID',
            'date' => 'Date',
            'amount' => 'Amount',
            'receipt_number' => 'Receipt Number',
            'establishment_id' => 'Establishment ID',
            'payee_fname' => 'First Name',
            'payee_mname' => 'Middle Name',
            'payee_lname' => 'Last Name',
            'payee_suffix' => 'Suffix',
        ];
    }
}
