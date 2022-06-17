<?php

namespace Hissey\BrowserTabs\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class BrowserTabs extends Template
{

    private const MODULE_ENABLED = "browsertabs/setting/enabled";
    private const MODULE_MESSAGE = "browsertabs/setting/browsertab_message";
    private const MODULE_TIMEOUT = "browsertabs/setting/browsertab_timeout";

    protected ScopeConfigInterface $scopeConfig;

    /**
     * @param  Context  $context
     * @param  ScopeConfigInterface  $scopeConfig
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function getModuleEnabled(): bool
    {
        return $this->scopeConfig->getValue(self::MODULE_ENABLED);
    }

    public function getMessageText(): string
    {
        return $this->scopeConfig->getValue(self::MODULE_MESSAGE);
    }

    public function getMessageTimeout(): string
    {
        return $this->scopeConfig->getValue(self::MODULE_TIMEOUT);
    }
}
