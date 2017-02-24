<?php

class TZ_Stores_Block_Adminhtml_Stores_Edit_Tabs_Address extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $helper = Mage::helper('tzstores');
        $model = Mage::registry('current_stores');

        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('general_form', array(
            'legend' => $helper->__('General Information')
        ));

        $fieldset->addField('country', 'select', array(
            'name'	=> 'country',
            'label' 	=> $helper->__('Country'),
            'required' => true,
            'values'	=> Mage::getModel('adminhtml/system_config_source_country')->toOptionArray(),
        ));

        $fieldset->addField('state', 'text', array(
            'label' => $helper->__('State/Province'),
            'required' => false,
            'name' => 'state',
        ));

        $fieldset->addField('city', 'text', array(
            'label' => $helper->__('City'),
            'required' => true,
            'name' => 'city',
        ));
        $fieldset->addField('street', 'text', array(
            'label' => $helper->__('Street'),
            'required' => true,
            'name' => 'street',
        ));
        $fieldset->addField('zip', 'text', array(
            'label' => $helper->__('Zip Code'),
            'required' => true,
            'name' => 'zip',
        ));
        $fieldset->addField('phone', 'text', array(
            'label' => $helper->__('Telephone'),
            'required' => false,
            'name' => 'phone',
        ));
        $fieldset->addField('latitude', 'text', array(
            'label' => $helper->__('Latitude'),
            'required' => true,
            'name' => 'latitude',
        ));
        $fieldset->addField('longitude', 'text', array(
            'label' => $helper->__('Longitude'),
            'required' => true,
            'name' => 'longitude',
        ));
        
        $form->setValues($model->getData());
        $this->setForm($form);

        return parent::_prepareForm();    }
}