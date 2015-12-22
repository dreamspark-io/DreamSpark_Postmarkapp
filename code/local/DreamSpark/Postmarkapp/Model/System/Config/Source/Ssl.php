<?php
class DreamSpark_Postmarkapp_Model_System_Config_Source_Ssl
{

    const SSL_NO = 'no';
    const SSL_TLS = 'tls';
    const SSL_SSL = 'ssl';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::SSL_NO, 'label' => Mage::helper('postmarkapp')->__('no')),
            array('value' => self::SSL_TLS, 'label'=>Mage::helper('postmarkapp')->__('tls')),
            array('value' => self::SSL_SSL, 'label'=>Mage::helper('postmarkapp')->__('ssl'))
        );
    }

}
