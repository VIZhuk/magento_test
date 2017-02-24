<?php

class Webinse_Company_Adminhtml_CompanyController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('company');

        $contentBlock = $this->getLayout()->createBlock('company/adminhtml_company');
        $this->_addContent($contentBlock);
        $this->renderLayout();

    }

    public function massDeleteAction()
    {
        $companies = $this->getRequest()->getParam('company', null);

        if (is_array($companies) && sizeof($companies) > 0 ) {
            try {
                foreach ($companies as $company) {
                    Mage::getModel('company/entity')->setId($company)->delete();
                }
                $this->_getSession()->addSuccess($this->__('Total of %d companies have been deleted', sizeof($companies)));

            } catch (Exception $e) {
                $this->_getSession()->addError($this->__('Please select companies'));
            }
        }
        $this->_redirect('*/*');

    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('company/adminhtml_company_grid')->toHtml()
        );

    }

}