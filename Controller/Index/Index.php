<?php

namespace Achi\Signup\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
use Achi\Signup\Helper\Data;

/**
 * Class Index
 * @package Achi\Signup\Controller\Controller\Index
 */
class Index extends Action
{


    /**
     * Index resultPageFactory
     * @var PageFactory
     */
    protected $resultPageFactory;
    protected $helperData;
    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, Data $helperData, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    /**
     * Function execute
     * @return Page
     */
    public function execute()
    {
        // if (!$this->helperData->getGeneralConfig('enable')) {
        //     $this->messageManager->addErrorMessage(__("Sign up form diasbled"));
        // }
        return $this->resultPageFactory->create();
    }
}
