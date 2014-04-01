<?php

class Sandfox_Index_Model_CatalogInventory_Index_Action_Refresh_Changelog extends Enterprise_CatalogInventory_Model_Index_Action_Refresh_Changelog
{
    protected function _selectChangedIds($maxVersion = null)
    {
        $entity_ids = parent::_selectChangedIds($maxVersion);

        return array_map('intval', $entity_ids);
    }
}