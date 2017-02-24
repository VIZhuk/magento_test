<?php

class Webinse_Company_Block_Adminhtml_Company extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('company');
        $this->_blockGroup = 'company';
        $this->_controller = 'adminhtml_company';

        $this->_headerText = $helper->__('Company Management');
        $this->_addButtonLabel = $helper->__('Add Company');
    }
}