<?php
//
//$installer = $this;
//$tableDiscount = $installer->getTable('discount/entity');
//
//die($tableDiscount);
//
//$installer->startSetup();
//
//$installer->getConnection()->dropTable($tableDiscount);
//$table = $installer->getConnection()
//    ->newTable($tableDiscount)
//    ->addColumn('discount_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
//        'identity'  => true,
//        'nullable'  => false,
//        'primary'   => true,
//    ))
//    ->addColumn('product_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
//        'identity'  => true,
//        'foreign'   =>
//    ))
//    ->addColumn('qty_products', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
//        'identity'  => true,
//    ))
//    ->addColumn('item_price', Varien_Db_Ddl_Table::TYPE_FLOAT, null, array(
//        'identity'  => true,
//    ))
//    ->addColumn('subtotal', Varien_Db_Ddl_Table::TYPE_FLOAT, null, array(
//        'identity'  => true,
//    ));
//
//
////    ->addColumn('domains', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('contact_name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('office_phone', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('mobile_phone', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('street', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('city', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('state', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ))
////    ->addColumn('zip', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
////        'nullable'  => true,
////    ));
////
////$installer->getConnection()->createTable($table);
////
////$installer->endSetup();