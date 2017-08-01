<?php
namespace Himani\Table\Model;

class Data extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'himani_table';
    protected function _construct()
    {
        $this->_init('Himani\Table\Model\ResourceModel\Data');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function operation($id,$data)
    {  
       if(!empty($id) && empty($data)){ 
            $this->load($id);
            $this->getData(); 
            return $this;
        }elseif(!empty($data)){ 
            $this->setData($data);
            $this->save();
            return $this;
        }
    }
    public function deletedData($id)
    {   
        $this->load($id)->delete();
        return $this;
    }
}