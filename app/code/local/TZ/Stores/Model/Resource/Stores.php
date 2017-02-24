<?php

class TZ_Stores_Model_Resource_Stores extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('tzstores/table_stores', 'stores_id');
    }
}