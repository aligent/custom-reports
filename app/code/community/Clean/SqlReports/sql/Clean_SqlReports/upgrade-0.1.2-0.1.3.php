<?php

/** @var $this Mage_Core_Model_Resource_Setup */
$this->startSetup();

$this->getConnection()
    ->addColumn($this->getTable('cleansql/report'), 'report_code', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'length'    => '255',
        'comment'   => 'Report Code',
    ));

$this->endSetup();