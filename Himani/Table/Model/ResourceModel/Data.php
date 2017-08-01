<?php
namespace Himani\Table\Model\ResourceModel;
class Data extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('himani_table','id');
    }
}
