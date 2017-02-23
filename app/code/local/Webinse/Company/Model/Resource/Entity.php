<?php

class Webinse_Company_Model_Resource_Entity extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('company/entity', 'company_id');
    }

}