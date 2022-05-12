<?php
namespace Perspective\Consultation\Model\ResourceModel\Extension;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Perspective\Consultation\Model\Extension',
            'Perspective\Consultation\Model\ResourceModel\Extension'
        );
    }
}
