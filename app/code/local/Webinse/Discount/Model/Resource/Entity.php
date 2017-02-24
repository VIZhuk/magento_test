<?php

class Webinse_Discount_Model_Resource_Entity extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('discount/entity', 'discount_id');
    }
}