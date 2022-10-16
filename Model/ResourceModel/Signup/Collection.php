<?php

namespace Achi\Signup\Model\ResourceModel\Signup;

use Achi\Signup\Model\ResourceModel\Signup as ResourceModel;
use Achi\Signup\Model\Signup as Model;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'signup_id';
    protected $_eventPrefix = 'signup_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
