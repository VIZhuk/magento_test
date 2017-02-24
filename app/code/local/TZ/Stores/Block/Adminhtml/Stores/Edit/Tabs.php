<?php

class TZ_Stores_Block_Adminhtml_Stores_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct(array $args)
    {
        $helper = Mage::helper('tzstores');

        parent::__construct();
        $this->setId('stores_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle($helper->__('Store Information'));
    }

    protected function _prepareLayout()
    {
        $helper = Mage::helper('tzstores');

        $this->addTab('general_section', array(
            'label' => $helper->__('General Information'),
            'title' => $helper->__('General Information'),
            'content' => $this->getLayout()->createBlock('tzstores/adminhtml_stores_edit_tabs_general')->toHtml(),
        ));
        $this->addTab('address_section', array(
            'label' => $helper->__('Address Information'),
            'title' => $helper->__('Address Information'),
            'content' => $this->getLayout()->createBlock('tzstores/adminhtml_stores_edit_tabs_address')->toHtml(),
        ));

//        parent::_prepareLayout();
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
        return parent::_prepareLayout();
    }
}