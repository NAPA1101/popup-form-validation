<?php
namespace Perspective\Consultation\Model\ResourceModel;
class Extension extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('perspective_cons', 'cons_id');
    }
}
