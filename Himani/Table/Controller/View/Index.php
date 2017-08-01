<?php
 
namespace Himani\Table\Controller\View;

use Himani\Table\Model\DataFactory;
 
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $_dataFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
     
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}