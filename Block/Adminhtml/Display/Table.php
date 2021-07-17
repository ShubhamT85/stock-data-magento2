<?php
namespace Task\StockData\Block\Adminhtml\Display;

use Task\StockData\Helper\Data;

class Table extends \Magento\Backend\Block\Template
{
    protected $helper;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        Data $helperData,
        array $data = []
    ) {
        $this->helper = $helperData;
        parent::__construct($context, $data);
    }

    public function fetchForMoreThanHundred()
    {
        return $this->helper->fetchMoreThanHundred();
    }

    public function fetchForFiftyToHundred()
    {
        return $this->helper->fetchFiftyToHundred();
    }

    public function fetchForTenToFifty()
    {
        return $this->helper->fetchTenToFifty();
    }

    public function fetchForLessThanTen()
    {
        return $this->helper->fetchLessThanTen();
    }

    public function fetchForOutOfStock()
    {
        return $this->helper->fetchOutOfStock();
    }

}
