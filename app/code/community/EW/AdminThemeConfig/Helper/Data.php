<?php

class EW_AdminThemeConfig_Helper_Data extends Mage_Core_Helper_Abstract
{
    const CONFIG_PATH_ADMIN_PACKAGE = 'design/package/admin_name';
    const CONFIG_PATH_ADMIN_THEME = 'design/theme/admin_default';

    /**
     * Get configured admin package.
     *
     * @return string
     */
    public function getAdminPackage() {
        return (string)Mage::getStoreConfig(self::CONFIG_PATH_ADMIN_PACKAGE);
    }

    /**
     * Get configured admin theme.
     *
     * @return string
     */
    public function getAdminTheme() {
        return (string)Mage::getStoreConfig(self::CONFIG_PATH_ADMIN_THEME);
    }
}