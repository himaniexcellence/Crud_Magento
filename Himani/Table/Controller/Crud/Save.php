<?php
 
namespace Himani\Table\Controller\Crud;
 
use Magento\Framework\App\Action\Context;
use Himani\Table\Model\DataFactory;
use \Magento\Framework\Registry;
 
class Save extends \Magento\Framework\App\Action\Action
{
    protected $_dataFactory;
    
    public function __construct(
        Context $context,
        DataFactory $dataFactory
    )
    {   
        $this->_dataFactory = $dataFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getParams();
        if($data){ 
            $model = $this->_dataFactory->create();
            $model->operation($data);
        }
        return $resultRedirect->setPath('himani/view');
    }
}