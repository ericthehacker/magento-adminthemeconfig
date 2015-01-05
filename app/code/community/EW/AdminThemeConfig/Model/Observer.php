<?php

class EW_AdminThemeConfig_Model_Observer extends Mage_Core_Model_Abstract
{
    /**
     * Use configured admin package / theme, if provided.
     * Observes: adminhtml_controller_action_predispatch_start
     *
     * @param Varien_Event_Observer $observer
     */
    public function useConfigAdminTheme(Varien_Event_Observer $observer) {
        $adminPackage = Mage::helper('ew_adminthemeconfig')->getAdminPackage();
        $adminTheme = Mage::helper('ew_adminthemeconfig')->getAdminTheme();

        if(!empty($adminPackage)) {
            Mage::getDesign()->setPackageName($adminPackage);
        }

        if(!empty($adminTheme)) {
            Mage::getDesign()->setTheme($adminTheme);
        }
    }
}