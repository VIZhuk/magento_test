<?php

class TZ_Stores_Block_Adminhtml_Stores_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'tzstores';
        $this->_controller = 'adminhtml_stores';

        // add button Save and Continue
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);
        $this->_formScripts[] = "
             function saveAndContinueEdit(){
                editForm.submit($('edit_form').action + 'back/edit/');
             }
             ";

    }

    public function getHeaderText()
    {
        $helper = Mage::helper('tzstores');
        $model = Mage::registry('current_stores');


        if ($model->getId()) {
            return $helper->__('Edit Store item %s', $this->escapeHtml($model->getName()));
        } else {
            return $helper->__('Add Store item');
        }
    }
}