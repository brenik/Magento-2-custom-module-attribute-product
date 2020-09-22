<?php
/**
 * Copyright © Elogic.
 * 2020.09.22
 */
namespace Elogic\Vendor\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Vendor extends AbstractDb {

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('elogic_vendors', 'id');
    }
}
