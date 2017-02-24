<?php

class TZ_Stores_Block_Pagination extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $collection = Mage::getModel('tzstores/stores')->getCollection()->addFieldToFilter('status','enabled');
        $collection->setOrder('position', 'ASC');
        $this->setCollection($collection);
    }
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $shopsPerPage = Mage::getStoreConfig('stores_options/tzstores_group/tzstores_input');

        $toolbar = $this->getLayout()->createBlock('tzstores/toolbar');
        $collection = Mage::getModel('tzstores/stores')->getCollection()->addFieldToFilter('status','enabled');
        $toolbar->setAvailableLimit(array(5=>5,10=>10,20=>20,'all'=>'all'));
        $toolbar->setDefaultOrder('position');
        $toolbar->setDefaultDirection("asc");
        $toolbar->setCollection($collection);
        $this->setChild('toolbar', $toolbar);
        $this->getCollection()->load();
        return $this;
    }

    public function getToolbarHtml()
    {
        return $this->getChildHtml('toolbar');
    }

}