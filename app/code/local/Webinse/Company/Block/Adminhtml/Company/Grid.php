<?php

class Webinse_Company_Block_Adminhtml_Company_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('company/entity')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('company');

        $this->addColumn('company_id', array(
            'header' => $helper->__('Company ID'),
            'index' => 'company_id'
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text'
        ));

        $this->addColumn('contact_name', array(
            'header' => $helper->__('Contact Name'),
            'index' => 'contact_name',
            'type' => 'text'
        ));

        $this->addColumn('office_phone', array(
            'header' => $helper->__('Office Phone'),
            'index' => 'office_phone',
            'type' => 'text'
        ));

        $this->addColumn('mobile_phone', array(
            'header' => $helper->__('Mobile Phone'),
            'index' => 'mobile_phone',
            'type' => 'text'
        ));

        $this->addColumn('company_address', array(
            'header' => $helper->__('Company Address'),
            'index' => array('street','city','state','zip'),
            'type' => 'concat',
            'separator' => ','
        ));
        return parent::_prepareColumns();
    }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('company_id');
        $this->getMassactionBlock()->setFormFieldName('company');

        $this->getMassactionBlock()->addItem('delete', array(
            'label' => $this->__('Delete'),
            'url' => $this->getUrl('*/*/massDelete'),
            'confirm' => Mage::helper('company')->__('Are you sure you want to delete the selected company(s)?')
        ));
        return $this;

    }
}