<?php

namespace Task\StockData\Helper;

use \Magento\Catalog\Model\ProductFactory;
use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Helper\Context;
use \Magento\Framework\App\ResourceConnection;

class Data extends AbstractHelper
{
    protected $resourceConnection;
    protected $product;

    public function __construct(
        Context $context,
        ResourceConnection $resourceConnection,
        ProductFactory $product
    ) {
        $this->resourceConnection = $resourceConnection;
        $this->product = $product;
        parent::__construct($context);
    }

    public function fetchMoreThanHundred()
    {
        $connection = $this->resourceConnection->getConnection();
        $table = $connection->getTableName('cataloginventory_stock_status');
        $check_sql = "SELECT product_id,qty FROM `" . $table . "` WHERE qty >= 100 AND stock_status = 1";
        if ($connection->fetchAll($check_sql)) {
            $results = $connection->fetchAll($check_sql);
            $main_array = $data = array();
            foreach ($results as $key => $value) {
                $main_array[$value['product_id']] = $value['qty'];
            }
            foreach ($main_array as $pro_id => $qty) {
                $product = $this->product->create()->load($pro_id);
                $name = $product->getName();
                $sku = $product->getSku();
                $data[$pro_id][] = $sku;
                $data[$pro_id][] = $name;
                $data[$pro_id][] = $qty;
            }
        }
        if (isset($data)) {
            return $data;
        } else {
            echo "<strong>No data available</strong> <br>";
        }
    }

    public function fetchFiftyToHundred()
    {
        $connection = $this->resourceConnection->getConnection();
        $table = $connection->getTableName('cataloginventory_stock_status');
        $check_sql = "SELECT product_id,qty FROM `" . $table . "` WHERE qty BETWEEN 50 AND 99 AND stock_status = 1";
        if ($connection->fetchAll($check_sql)) {
            $results = $connection->fetchAll($check_sql);
            $main_array = $data = array();
            foreach ($results as $key => $value) {
                $main_array[$value['product_id']] = $value['qty'];
            }
            foreach ($main_array as $pro_id => $qty) {
                $product = $this->product->create()->load($pro_id);
                $name = $product->getName();
                $sku = $product->getSku();
                $data[$pro_id][] = $sku;
                $data[$pro_id][] = $name;
                $data[$pro_id][] = $qty;
            }
        }
        if (isset($data)) {
            return $data;
        } else {
            echo "<strong>No data available</strong> <br>";
        }
    }

    public function fetchTenToFifty()
    {
        $connection = $this->resourceConnection->getConnection();
        $table = $connection->getTableName('cataloginventory_stock_status');
        $check_sql = "SELECT product_id,qty FROM `" . $table . "` WHERE qty BETWEEN 10 AND 49 AND stock_status = 1";
        if ($connection->fetchAll($check_sql)) {
            $results = $connection->fetchAll($check_sql);
            $main_array = $data = array();
            foreach ($results as $key => $value) {
                $main_array[$value['product_id']] = $value['qty'];
            }
            foreach ($main_array as $pro_id => $qty) {
                $product = $this->product->create()->load($pro_id);
                $name = $product->getName();
                $sku = $product->getSku();
                $data[$pro_id][] = $sku;
                $data[$pro_id][] = $name;
                $data[$pro_id][] = $qty;
            }
        }
        if (isset($data)) {
            return $data;
        } else {
            echo "<strong>No data available</strong> <br>";
        }
    }

    public function fetchLessThanTen()
    {
        $connection = $this->resourceConnection->getConnection();
        $table = $connection->getTableName('cataloginventory_stock_status');
        $check_sql = "SELECT product_id,qty FROM `" . $table . "` WHERE qty BETWEEN 1 AND 10 AND stock_status = 1";
        if ($connection->fetchAll($check_sql)) {
            $results = $connection->fetchAll($check_sql);
            $main_array = $data = array();
            foreach ($results as $key => $value) {
                $main_array[$value['product_id']] = $value['qty'];
            }
            foreach ($main_array as $pro_id => $qty) {
                $product = $this->product->create()->load($pro_id);
                $name = $product->getName();
                $sku = $product->getSku();
                $data[$pro_id][] = $sku;
                $data[$pro_id][] = $name;
                $data[$pro_id][] = $qty;
            }
        }
        if (isset($data)) {
            return $data;
        } else {
            echo "<strong>No data available</strong> <br>";
        }
    }

    public function fetchOutOfStock()
    {
        $connection = $this->resourceConnection->getConnection();
        $table = $connection->getTableName('cataloginventory_stock_status');
        $check_sql = "SELECT product_id,qty FROM `" . $table . "` WHERE qty = 0 AND stock_status = 1";
        if ($connection->fetchAll($check_sql)) {
            $results = $connection->fetchAll($check_sql);
            $main_array = $data = array();
            foreach ($results as $key => $value) {
                $main_array[$value['product_id']] = $value['qty'];
            }
            foreach ($main_array as $pro_id => $qty) {
                $product = $this->product->create()->load($pro_id);
                $name = $product->getName();
                $sku = $product->getSku();
                $data[$pro_id][] = $sku;
                $data[$pro_id][] = $name;
                $data[$pro_id][] = $qty;
            }
        }
        if (isset($data)) {
            return $data;
        } else {
            echo "<strong>No data available</strong> <br>";
        }
    }

}
