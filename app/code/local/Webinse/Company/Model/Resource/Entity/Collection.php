<?php

class Webinse_Company_Model_Resource_Entity_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('company/entity');
    }

}