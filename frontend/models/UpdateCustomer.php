<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\customers;

/**
 * ContactForm is the model behind the contact form.
 */
class UpdateCustomer extends Model
{
    public $firstname;
    public $lastname;
    public $phone;
    public $birthday;
    public $image;
    public $email;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'phone', 'birthday','image'], 'required'],
            ['email', 'email'],
            [['firstname', 'lastname', 'phone',"birthday"], 'string', 'min' => 2, 'max' => 255],
            [['image'], 'file', 'extensions' => ' png,jpg'],
        ];
    }
    public function updateCus($id)
    {
       $customer = new customers();
    
        Yii::$app->db->createCommand("UPDATE customers SET firstname = '$this->firstname', lastname='$this->lastname', phone='$this->phone' 
        , birthday='$this->birthday', image='$this->image', email ='$this->email' WHERE id=$id")
        ->execute();
      
    }
    public function getCus($id){
        $customer = new customers();
        $cus = $customer::find()->where(['id'=>$id])->all();
        return $cus;
    }
   public function insertCus($session){
    $customer = new customers();
    $customer->email = $session['email'];
    $customer->firstname = $session['name'];
    return $customer->save();
   }
}
