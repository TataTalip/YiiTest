<?php
namespace  frontend\components;

use yii\base\Component;

class Common extends Component{
    public static function sendMail($email, $subject, $body, $name=''){
       \ Yii::$app->mail->compose()
            ->setFrom(['noreply@example.com' => 'My Example Site'])
            ->setTo([$email => $name])
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();
    }
}
