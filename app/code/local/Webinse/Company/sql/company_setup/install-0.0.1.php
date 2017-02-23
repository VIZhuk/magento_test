<?php

$installer = $this;
$tableCompany = $installer->getTable('company/table_company');

//die($tableCompany);

$installer->startSetup();

$installer->getConnection()->dropTable($tableCompany);
$table = $installer->getConnection()
    ->newTable($tableCompany)
    ->addColumn('company_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ))
    ->addColumn('domains', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('contact_name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('office_phone', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('mobile_phone', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('street', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('city', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('state', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('zip', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ));

$installer->getConnection()->createTable($table);

$installer->endSetup();