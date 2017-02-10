<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;


/**
 * ContactForm is the model behind the contact form.
 */
class AddNoteForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('/web1/yii2/runtime/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

}