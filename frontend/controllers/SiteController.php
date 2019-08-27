<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
// use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\CustomerSingup;
use common\models\LoginCustomer;
use frontend\models\UpdateCustomer;
use common\models\Customers;
use yii\web\UploadedFile;
use backend\models\Content;
use frontend\models\experience;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $successUrl='Success';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth'=>[
                'class'=>'yii\authclient\AuthAction',
                'successCallback' =>[$this,'successCallback']
            ]
        ];
    }
    public function successCallback($client){
        $customer = new Customers();
        $cus = new UpdateCustomer();
        $attributes = $client->getUserAttributes();
        $user = $customer::find()->where(['email'=>$attributes['email']])->one();
        if(!empty($user)){
             Yii::$app->user->login($user);
        }else{
            $session = Yii::$app->session;
            $session['attributes']=$attributes;
            $customer = $cus->insertCus($session['attributes']);
           
        }
    }
    

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $cus = new UpdateCustomer();

       if(Yii::$app->user->identity){
    $ex = $cus->getCus(Yii::$app->user->identity->id);
    if($cus->load(Yii::$app->request->post()) ){
     
            $cus->image = UploadedFile::getInstance($cus, 'image');
            if( $cus->image){
            $cus->image->saveAs('public/'.$cus->image->name);
            $model = $cus->updateCus(Yii::$app->user->identity->id);
           
            return $this->render('index',['model'=> $cus,'ex'=>$ex]);
}
      
    }
    return $this->render('index',['model'=>$cus,'ex'=> $ex]);
}
return $this->render('index',['model'=>$cus,'ex'=>'']);
    }
    

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogincustomer()
    { 
   
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginCustomer();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('logincustomer', [
                'model' => $model,
            ]);
        }
       
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
       
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {

    
        $model = new CustomerSingup();
       
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            $model->created_at = time();
            $model->updated_at = time();
            Yii::$app->session->setFlash('success', 'Chào mừng đến với trang Tìm việc IT');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
    public function actionContent(){
       
        $con = new Content();
        if(Yii::$app->user->identity){
            $id = Yii::$app->user->identity->id;
            $content = $con->getContent($id);
        if($con->load(Yii::$app->request->post())){
      
            $con->file = UploadedFile::getInstance($con, 'file');
            
            if($con->file){
                $con->file->saveAs('public/'.$con->file->name);
             $con->upload($id);
            
              return $this->render('content',['model'=>$con,'content'=>$content]);
             }
           
            }
            return $this->render('content',['model'=>$con ,'content'=>$content]);
        }
      
        return $this->render('content',['model'=>$con,'content'=>'']);
    }

    public function actionExperience(){
        $experience = new experience();
        if(Yii::$app->user->identity){
            $id = Yii::$app->user->identity->id;
            $ex = $experience->getExperiences($id);
         if ($experience->load(Yii::$app->request->post()) ){    
             $experience->experience($id);
              return $this->render('experience',['model'=>$experience,'ex'=>$ex]);
         }
        
        
         return $this->render('experience',['model'=>$experience,'ex'=>$ex]);
    }
    return $this->render('experience',['model'=>$experience,'ex'=>'']);
}
}