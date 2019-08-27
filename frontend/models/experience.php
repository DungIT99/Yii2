<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use backend\models\Experiences;

/**
 * Signup form
 */
class experience extends Model
{
   
    public $namecompany;
    public $start_at;
    public $end_at;
    public $aboutjob;
    public $userId;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namecompany', 'start_at', 'end_at', 'aboutjob'], 'required'],
            [['userId'],'integer'],
            [['namecompany', 'start_at', 'end_at', 'aboutjob'], 'string', 'min' => 2, 'max' => 255],
            ];
      
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function experience($id)
    { 
    
        $experience = new Experiences();
     
        $experience->start_at = $this->start_at;
        $experience->userId = $id;
        $experience->end_at = $this->end_at;
        $experience->namecompany = $this->namecompany;
        $experience->aboutjob = $this->aboutjob;
     
        return $experience->save() ;

    }

 public function getExperiences($id){
    $experience = new Experiences();
$ex = $experience::find()->where(['userId'=>$id])->all();
return $ex;
 }
}
