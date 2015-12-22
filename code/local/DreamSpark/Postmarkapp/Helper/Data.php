<?php
class DreamSpark_Postmarkapp_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_POSTMARK_ENABLE = 'postmarkapp/general/enable';
    const XML_PATH_POSTMARK_TOKEN = 'postmarkapp/general/token';

    const XML_PATH_POSTMARK_SMTP_ENABLE = 'postmarkapp/smtp/enable';
    const XML_PATH_POSTMARK_SMTP_HOST = 'postmarkapp/smtp/host';
    const XML_PATH_POSTMARK_SMTP_PORT = 'postmarkapp/smtp/port';
    const XML_PATH_POSTMARK_SMTP_USERNAME = 'postmarkapp/smtp/username';
    const XML_PATH_POSTMARK_SMTP_PASSWORD = 'postmarkapp/smtp/password';
    const XML_PATH_POSTMARK_SMTP_SSL = 'postmarkapp/smtp/ssl';
    const XML_PATH_POSTMARK_SMTP_AUTH = 'postmarkapp/smtp/auth';

    public function setPostmarkAsDefaultTransport()
    {
        if($this->isPostmarkEnabled()){
            $_username = Mage::getStoreConfig(self::XML_PATH_POSTMARK_TOKEN);
            $_password = Mage::getStoreConfig(self::XML_PATH_POSTMARK_TOKEN);
        }else{
            $_username = Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_USERNAME);
            $_password = Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_PASSWORD);
        }

        $authDetails = array('port' => Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_PORT),
            'auth' => Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_AUTH),
            'username' => $_username,
            'password' => $_password);
        if (Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_SSL) != DreamSpark_Postmarkapp_Model_System_Config_Source_Ssl::SSL_NO) {
            $authDetails['ssl'] = Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_SSL);
        }
        $transport = new Zend_Mail_Transport_Smtp(
            Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_HOST),
            $authDetails
        );
        Zend_Mail::setDefaultTransport($transport);
    }

    public function isPostmarkEnabled(){
        if(Mage::getStoreConfig(self::XML_PATH_POSTMARK_ENABLE)){
            return true;
        }else{
            return false;
        }
    }
    public function isSMTPEnabled(){
        if(Mage::getStoreConfig(self::XML_PATH_POSTMARK_SMTP_ENABLE)){
            return true;
        }else{
            return false;
        }
    }
}
	 