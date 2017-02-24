<?php

$installer = $this;
$tableStores = $installer->getTable('tzstores/table_stores');

$installer->startSetup();

$installer->getConnection()->dropTable($tableStores);
$table = $installer->getConnection()
    ->newTable($tableStores)
    ->addColumn('stores_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('short_description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('position', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('country', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('state', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>true,
    ))
    ->addColumn('city', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('street', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('zip', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('phone', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>true,
    ))
    ->addColumn('latitude', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ))
    ->addColumn('longitude', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  =>false,
    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();
