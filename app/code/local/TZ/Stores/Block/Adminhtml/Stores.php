<?php

class TZ_Stores_Block_Adminhtml_Stores extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('tzstores');
        $this->_blockGroup = 'tzstores';
        $this->_controller = 'adminhtml_stores';

        $this->_headerText = $helper->__('Offline Stores Management');
        $this->_addButtonLabel = $helper->__('Add Offline Store');
    }

}