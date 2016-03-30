<?php

$installer = $this;

$installer->startSetup();

$tableName = $installer->getTable('stuntcoders_damagecontroll/email');

$installer->getConnection()->changeColumn($tableName, 'link_id', 'code', array(
    'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
    'length' => 255,
    'nullable' => false,
    'comment' => 'Code',
));

$installer->getConnection()->addIndex(
    $tableName,
    $installer->getIdxName($tableName, array('code'), Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE),
    array('code'),
    Varien_Db_Adapter_Interface::INDEX_TYPE_UNIQUE
);

$installer->endSetup();