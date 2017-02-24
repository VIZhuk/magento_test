<?php

class TZ_Stores_Block_Stores extends Mage_Core_Block_Template
{
    public function getStoresCollection()
    {
        $storesCollection = Mage::getModel('tzstores/stores')->getCollection()->addFieldToFilter('status','enabled');
        $storesCollection->setOrder('position', 'ASC');
        return $storesCollection;
    }
}