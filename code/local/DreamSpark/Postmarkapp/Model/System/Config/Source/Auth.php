<?php
class DreamSpark_Postmarkapp_Model_System_Config_Source_Auth
{

    const AUTH_CRAMMD5 	= 'crammd5';
    const AUTH_LOGIN 	= 'login';
    const AUTH_PLAIN 	= 'plain';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::AUTH_CRAMMD5, 'label' => Mage::helper('postmarkapp')->__('crammd5')),
            array('value' => self::AUTH_LOGIN, 'label'=>Mage::helper('postmarkapp')->__('login')),
            array('value' => self::AUTH_PLAIN, 'label'=>Mage::helper('postmarkapp')->__('plain'))
        );
    }

}
