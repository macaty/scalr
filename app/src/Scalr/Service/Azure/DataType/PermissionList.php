<?php

namespace Scalr\Service\Azure\DataType;

/**
 * PermissionList
 *
 * @author    Vlad Dobrovolskiy   <v.dobrovolskiy@scalr.com>
 * @since     5.6.8
 *
 */
class PermissionList extends AbstractListDataType
{
    /**
     * {@inheritdoc}
     * @see Scalr\Service\Azure\DataType.AbstractListDataType::getClass()
     */
    public function getClass()
    {
        return __NAMESPACE__ . '\\PermissionData';
    }

}