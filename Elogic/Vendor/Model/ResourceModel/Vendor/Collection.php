<?php
/**
 * Copyright © Elogic.
 * 2020.09.22
 */
namespace Elogic\Vendor\Model\ResourceModel\Vendor;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = \Elogic\Vendor\Model\Vendor::VENDOR_ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Elogic\Vendor\Model\Vendor', 'Elogic\Vendor\Model\ResourceModel\Vendor');
    }

}