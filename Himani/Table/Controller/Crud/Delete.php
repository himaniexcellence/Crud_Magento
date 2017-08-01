<?php
 
namespace Himani\Table\Controller\Crud;
 
use Magento\Framework\App\Action\Context;
use Himani\Table\Model\DataFactory;
 
class Delete extends \Magento\Framework\App\Action\Action
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
        $id = $this->getRequest()->getParam('id');
        if($id){
            $model = $this->_dataFactory->create();
            $model->deletedData($id);
            $this->messageManager->addSuccess(__('You deleted the row.'));
            return $resultRedirect->setPath('himani/view');
        }else{
            $this->messageManager->addError(__('We can\'t delete.'));
            return $resultRedirect->setPath('himani/view');
        }
    }
}