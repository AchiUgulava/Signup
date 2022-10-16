<?php

namespace Achi\Signup\Setup;

use Achi\Signup\Model\SignupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_signupFactory;
	public function __construct(SignupFactory $signupFactory)
	{
		$this->_signupFactory = $signupFactory;
	}
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$table = $setup->getTable('achi_signup_signup');
		$data = [
			'name' => "Magento name",
			'date' => "Magento date",
		];

		$setup->getConnection()->insertForce($table, $data);
	}
}
