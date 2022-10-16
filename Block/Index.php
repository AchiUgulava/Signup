<?php

namespace Achi\Signup\Block;

use Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Magento\Store\Model\StoreManagerInterface;

class Index extends Template
{
    public function __construct(Context $context, StoreManagerInterface $storeManager,array $data = [])
        {    
            $this->_storeManager = $storeManager;
            parent::__construct($context,$data);
        }
}
