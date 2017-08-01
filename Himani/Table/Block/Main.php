<?php
namespace Himani\Table\Block;

use \Magento\Framework\Registry;

class Main extends \Magento\Framework\View\Element\Template
{
    protected $_dataFactory;
    protected $_registry;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Himani\Table\Model\DataFactory $dataFactory,
        Registry $registry
    )
    {
        $this->_registry = $registry;
        $this->_dataFactory = $dataFactory;
        parent::__construct($context);
    }

    protected function _prepareLayout()
    {
        return $this->_dataFactory->create();
    }
    public function getCollection()
    {
        return $this->_dataFactory->create()->getCollection();
    }
    public function getUpdatedData()
    {
        return $this->_registry->registry('updated_data');
    }
}