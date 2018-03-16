<?php

namespace Craft;

class m180316_180000_digitalProducts_licenseExpiryDate extends BaseMigration{
    public function safeUp()
    {
        // Add the licenses expiration column
        $this->addColumnAfter('digitalproducts_licenses', 'expiryDate', 'DATETIME', 'userId');

        // Add the product selector fields
        $this->addColumnAfter('digitalproducts_products', 'requireLicenseExpiration', 'BOOLEAN', 'price');
        $this->addColumnAfter('digitalproducts_products', 'licenseDurationTime', 'INT', 'price');

    }
}