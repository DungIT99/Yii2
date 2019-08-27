<?php 
namespace console\controllers;
use yii\console\Controller;
use Yii;
class  RbacController extends Controller{


     public function actionInit(){
         $auth = Yii::$app->authManager;
        //  $createcategory = $auth->createPermission('create-category');
        //   $auth->add($createcategory);
        //  $indexcategory = $auth->createPermission('index-category');
        
        //  $auth->add($indexcategory);
        //  $updatecategory = $auth->createPermission('update-category');
        //  $auth->add($updatecategory);
        //  $deletecategory = $auth->createPermission('delete-category');
        //  $auth->add($deletecategory);
        $categoryManager = $auth->createRole('manager-category');
        $productManager = $auth->createRole('manager-post');

        // --tạo nhóm quyền
        $admin = $auth->createRole('admin');
        // $auth->add(  $admin);


        $categoryManager = $auth->createRole('manager-category');
        // $auth->addChild($admin,  $categoryManager);
        // $auth->addChild($admin, $productManager );
       $auth->assign($admin,2);
    //    $auth->assign($productManager,5);

    
     }
}


?>