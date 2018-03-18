<?php


/**
 * Class DigitalProducts_ProductsFieldType
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2016, Pixel & Tonic, Inc.
 */

namespace Craft;

 
class DigitalProducts_IsLicensedFieldType extends BaseFieldType{

    /*
    * Returns the fieldtype name
    * @return string
    */
    public function getName()
    {
        return Craft::t('Is licensed');
    }
    
    /*
    * Have html we do not
    * @return bool
    */
    public function getInputHtml($name, $value)
    {
        return false;
    }

    /*
    * Has a content table it does not
    * @return bool
    */
    public function defineContentAttribute()
    {
        return false;
    }
    
    /* 
    * Modifies the elements query to add an andWhere and make sure any elements are licensed to the product(s) entered in $value
    * @return nothing - but does modify the element query if necesary
    */
    public function modifyElementsQuery(DbCommand $query, $value)
    {
        if ($value !== null)
            craft()->digitalProducts_licenses->modifyQuery($query, $value);

        return $query;
    }

}
