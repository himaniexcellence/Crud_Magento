<?php
 
namespace Himani\Table\Controller\Update;

use Himani\Table\Model\DataFactory;
use \Magento\Framework\Registry;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $_registry;
    protected $_dataFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        Registry $registry,
        DataFactory $dataFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_dataFactory = $dataFactory;
        $this->_registry = $registry;
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultPageFactory->create(); 
        if($id){
            $model = $this->_dataFactory->create();
            $data = $model->operation($id);
            $this->_registry->register('updated_data',$data);
        }
        return $resultRedirect;
    } 
}