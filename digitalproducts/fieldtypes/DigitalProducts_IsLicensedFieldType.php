<?php
/**
 * Created by PhpStorm.
 * User: Giel Tettelaar PC
 * Date: 3/14/2018
 * Time: 3:56 PM
 */

namespace Craft;


class DigitalProducts_IsLicensedFieldType extends BaseFieldType{

    public function getName()
    {
        return Craft::t('Is licensed');
    }
    public function getInputHtml($name, $value)
    {
        return false;
    }

    public function defineContentAttribute()
    {
        return false;
    }

    public function modifyElementsQuery(DbCommand $query, $value)
    {
        if ($value !== null)
            craft()->digitalProducts_licenses->modifyQuery($query, $value);

        return $query;
    }

}