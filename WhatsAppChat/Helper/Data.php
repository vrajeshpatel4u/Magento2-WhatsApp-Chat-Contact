<?php

namespace V4U\WhatsAppChat\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

	/**
     * Return status
     *
     * @return string
     */

	public function getStatus(){
		return $this->scopeConfig->getValue('v4u_whatsappchat/whatsappchat/enable',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

    /**
     * Return phone
     *
     * @return string
     */

    public function getPhone(){
        return $this->scopeConfig->getValue('v4u_whatsappchat/whatsappchat/mobilenumber',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Return message
     *
     * @return string
     */

    public function getMessage(){
        return $this->scopeConfig->getValue('v4u_whatsappchat/whatsappchat/message',\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}