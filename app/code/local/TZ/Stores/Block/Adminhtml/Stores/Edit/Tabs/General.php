<?php

class TZ_Stores_Block_Adminhtml_Stores_Edit_Tabs_General extends Mage_Adminhtml_Block_Widget_Form
{
    
    protected function _prepareForm()
    {
        $helper = Mage::helper('tzstores');
        $model = Mage::registry('current_stores');

        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('general_form', array(
            'legend' => $helper->__('General Information')
        ));

        $fieldset->addField('name', 'text', array(
            'label' => $helper->__('Name'),
            'required' => true,
            'name' => 'name',
        ));

        $fieldset->addField('image', 'image', array(
            'label' => $helper->__('Image'),
            'name' => 'image',
        ));

        $fieldset->addField('short_description', 'textarea', array(
            'label' => $helper->__('Short description'),
            'required' => true,
            'name' => 'short_description',
        ));

        $wysiwygConfig = Mage::getSingleton('cms/wysiwyg_config');
        $fieldset->addField('description', 'editor', array(
            'name'      => 'description',
            'label'     => $helper->__('Description'),
            'title'     => $helper->__('Description'),
            'style'     => 'height: 200px;',
            'wysiwyg'   => true,
            'required'  => false,
            'config'    => $wysiwygConfig
        ));

        $fieldset->addField('position', 'text', array(
            'label' => $helper->__('Position'),
            'required' => true,
            'name' => 'position',
        ));

        $fieldset->addField('status', 'select', array(
            'label' => $helper->__('Status'),
            'name' => 'status',
            'required' => true,
            'options' => array(
                'enabled' => 'Enabled',
                'disabled' => 'Disabled',
            ),
        ));
//        $fieldset->addField('status', 'text', array(
//            'label' => $helper->__('Status'),
//            'required' => true,
//            'name' => 'status',
//        ));

        $formData = array_merge($model->getData(), array('image' => $model->getImageUrl()));
        $form->setValues($formData);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}