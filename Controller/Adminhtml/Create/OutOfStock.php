<?php
namespace Task\StockData\Controller\Adminhtml\Create;

class OutOfStock extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Task_StockData::stockdata');
        $resultPage->getConfig()->getTitle()->prepend(__('Out of stock items'));
        return $resultPage;
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Task_StockData::stockdata');
    }
}
