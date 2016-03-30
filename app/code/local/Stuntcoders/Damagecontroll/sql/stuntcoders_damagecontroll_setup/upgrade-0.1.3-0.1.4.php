<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->modifyColumn($installer->getTable('stuntcoders_damagecontroll/email'), 'mark', array(
        'type' => Varien_Db_Ddl_Table::TYPE_INTEGER,
        'nullable' => false,
        'default' => '0',
        'comment' => 'Mark',
    ));

$installer->getConnection()
    ->modifyColumn($installer->getTable('stuntcoders_damagecontroll/email'), 'comment', array(
        'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable' => false,
        'default' => '',
        'comment' => 'Comment',
    ));

$installer->endSetup();