<?php
namespace Perspective\Consultation\Model;
use Magento\Framework\Model\AbstractModel;
class Extension extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Perspective\Consultation\Model\ResourceModel\Extension');
    }
}
