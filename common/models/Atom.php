<?php

namespace common\models;

use yii\db\ActiveRecord;

/**
 * Class Atom
 * @property int ID
 * @property int ID_ELEMENT
 * @property int IONIZATION
 * @property float IONIZATION_POTENCIAL
 * @property int DESCRIPTION
 * @property string XML
 * @property string LIMITS
 * @property string BREAKS
 * @property int CHANGED
 * @property string SPECTRUM
 * @property string SPECTRUM_IMG
 * @property object periodicTable
 * @property object interfaceContent
 * @package common\models
 */
class Atom extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{ATOMS}}';
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodicTable()
    {
        return $this->hasOne(PeriodicTable::className(), ['ID' => 'ID_ELEMENT']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterfaceContent()
    {
        return $this->hasOne(InterfaceContent::className(), ['ID' => 'DESCRIPTION']);
    }
}