Yii::$app->db->createCommand()->update('payment_advice', ['UTR_NUMBER' => $utrNumber,'TotalCreditedAmount' => $totCreditAmnt], 'file_name LIKE \'%'.$fileName.'%\'')->execute();
