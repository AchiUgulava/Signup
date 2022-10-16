<?php

namespace Achi\Signup\Setup;

use Achi\Signup\Model\SignupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_signupFactory;
	public function __construct(SignupFactory $signupFactory)
	{
		$this->_signupFactory = $signupFactory;
	}
	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();
		if ($context->getVersion() && version_compare($context->getVersion(), '1.2.0') < 0) {

			$table = $setup->getTable('achi_signup_signup');
			$data = [
				'name' => "Magento name",
				'date' => "Magento date",
			];

			$setup->getConnection()->insertForce($table, $data);
		}
		$setup->endSetup();
	}
}
