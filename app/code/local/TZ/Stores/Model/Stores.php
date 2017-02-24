<?php

class TZ_Stores_Model_Stores extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('tzstores/stores');
    }

    protected function _afterDelete()
    {
        $helper = Mage::helper('tzstores');
        @unlink($helper->getImagePath($this->getId()));
        return parent::_afterDelete();
    }

    public function getImageUrl()
    {
        $helper = Mage::helper('tzstores');
        if ($this->getId() && file_exists($helper->getImagePath($this->getId()))) {
            return $helper->getImageUrl($this->getId());
        }
        return null;
    }
}