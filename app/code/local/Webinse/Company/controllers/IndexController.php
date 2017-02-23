<?php

class Webinse_Company_IndexController extends Mage_Core_Controller_Front_Action
{
     public function testModelAction()
     {
//         $company = Mage::getModel('company/entity');
//         echo get_class($company);
         $params = $this->getRequest()->getParams();
         $company = Mage::getModel('company/entity');
         echo("Loading the company with an ID of ".$params['id']);
         $company->load($params['id']);
         $data = $company->getData();
         var_dump($data);
     }

     public function createNewCompanyAction()
     {
         $company = Mage::getModel('company/entity');
         $company->setName('Vladislav');
         $company->save();
         echo 'Company created';
     }

     public function editFirstCompanyAction()
     {
         $company = Mage::getModel('company/entity');
         $company->load(1);
         $company->setName('Test Edit');
         $company->save();
         echo 'Company edit test complete';
     }

     public function deleteFirstCompanyAction()
     {
         $company = Mage::getModel('company/entity');
         $company->load(1);
         $company->delete();
         echo 'Company delete test complete';
     }

     public function showAllCompanyAction()
     {
         $companies = Mage::getModel('company/entity')->getCollection();
         foreach ($companies as $company) {
             echo '<h3>'.$company->getName().'</h3>';
             echo nl2br($company->getPost());
         }
     }


}