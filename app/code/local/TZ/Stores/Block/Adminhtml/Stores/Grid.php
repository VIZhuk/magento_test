<?php

class TZ_Stores_Block_Adminhtml_Stores_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('tzstores/stores')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('tzstores');
        $countries = Mage::getResourceModel('directory/country_collection')
            ->loadData()
            ->toOptionArray(false);

        $this->addColumn('stores_id', array(
            'header' => $helper->__('Stores ID'),
            'index' => 'stores_id'
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text'
        ));

        $this->addColumn('country', array(
            'header' => $helper->__('Country'),
            'index' => 'country',
            'type' => 'text'
        ));

        $this->addColumn('city', array(
            'header' => $helper->__('City'),
            'index' => 'city',
            'type' => 'text'
        ));

        $this->addColumn('street', array(
            'header' => $helper->__('Street'),
            'index' => 'street',
            'type' => 'text'
        ));

        $this->addColumn('position', array(
            'header' => $helper->__('Position'),
            'index' => 'position',
            'type' => 'text'
        ));

        $this->addColumn('status', array(
            'header' => $helper->__('Status'),
            'index' => 'status',
            'type' => 'text'
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $model->getId(),
        ));
    }

}