<?php

namespace backend\models;
use backend\models\Content;
use Yii;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property int $userId
 * @property string $file
 * @property string $description
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'file', 'description'], 'required'],
            [['userId'], 'integer'],
            [[ 'description'], 'string',  'max' => 255],
            [['file'], 'file', 'extensions' => 'docx,jpeg, png,pdf','maxFiles' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'file' => 'File',
            'description' => 'Description',
        ];
    }
    public function upload($id)
    {
     
       $con = new Content();

 $con->userId = $id;
 $con->file = $this->file->name;
 $con->description = $this->description;
  return   $con->save();
      
    }

public function getContent($id){
    $content = content::find()->where(['userId'=>$id])->all();
    return $content;
}
}