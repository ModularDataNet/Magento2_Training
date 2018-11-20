<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 11/18/18
 * Time: 11:33 PM
 */

namespace Training\S4v1\Model\ResourceModel\Vendor;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = \Training\S4v1\Model\Vendor::ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Training\S4v1\Model\Vendor', 'Training\S4v1\Model\ResourceModel\Vendor');
    }

    public function load($printQuery = false, $logQuery = false)
    {
        return parent::load($printQuery, $logQuery); // TODO: Change the autogenerated stub
    }

}