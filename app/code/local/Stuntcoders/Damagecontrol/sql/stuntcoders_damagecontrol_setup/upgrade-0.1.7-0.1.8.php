<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()
    ->modifyColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'sending_date', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DATETIME,
        'nullable' => true,
        'comment' => 'Sending date',
    ));

$installer->getConnection()
    ->modifyColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'reading_date', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DATETIME,
        'nullable' => true,
        'comment' => 'Reading date',
    ));

$installer->getConnection()
    ->modifyColumn($installer->getTable('stuntcoders_damagecontrol/email'), 'review_date', array(
        'type' => Varien_Db_Ddl_Table::TYPE_DATETIME,
        'nullable' => true,
        'comment' => 'Review date',
    ));

$installer->endSetup();
