<?php

namespace Achi\Signup\Model;

use Achi\Signup\Model\ResourceModel\Signup as ResourceModel;
use Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
class Signup extends AbstractModel implements IdentityInterface
{
    /**
     * @var string
     */
    const CACHE_TAG = 'achi_signup_signup';
	protected $_cacheTag = 'achi_signup_signup';
    protected $_eventPrefix = 'signup_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
    public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}
	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}
