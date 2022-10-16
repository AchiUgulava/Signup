<?php

namespace Achi\Signup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Signup extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'signup_resource_model';

    /**
     * Initialize resource model.
     */
    public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}
    protected function _construct()
    {
        $this->_init('achi_signup_signup', 'signup_id');
        $this->_useIsObjectNew = true;
    }
}
