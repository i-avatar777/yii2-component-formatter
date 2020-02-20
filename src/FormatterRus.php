<?php
namespace iAvatar777\components\FormatterRus;

use iAvatar777\services\DateRus\DateRus;
use yii\base\Component;
use yii\helpers\StringHelper;
use yii\helpers\VarDumper;
use yii\i18n\Formatter;

class FormatterRus extends Formatter
{

    public function asDate($value, $format = null)
    {
        if (is_null($format)) {
            $format = $this->dateFormat;
        }
        if (StringHelper::startsWith($format,'php:')) {
            $format1 = substr($format,4);
            if (is_string($value)) {
                if (is_integer($value)) {

                } else {
                    $value = (int)((new \DateTime($value))->format('U'));
                }
            }
            $f1 = DateRus::format($format1, $value);
            $format = 'php:' . $f1;
            return $f1;
        }

        return parent::asDate($value, $format);
    }

    public function asDatetime($value, $format = null)
    {
        if (is_null($format)) {
            $format = $this->datetimeFormat;
        }
        if (StringHelper::startsWith($format,'php:')) {
            $format1 = substr($format,4);
            $f1 = DateRus::format($format1, $value);
            $format = 'php:' . $f1;
        }

        return parent::asDatetime($value, $format);
    }

}