<?php
namespace Himani\Table\Model\ResourceModel\Data;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Himani\Table\Model\Data','Himani\Table\Model\ResourceModel\Data');
    }
}
