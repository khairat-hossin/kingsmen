<?php

namespace App\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * Default Permissions of the Application.
     */
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',
            'restore_users',
            'block_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',
            'restore_roles',

            'view_backups',
            'add_backups',
            'create_backups',
            'download_backups',
            'delete_backups',

            'view_crowdfundings',
            'add_crowdfundings',
            'edit_crowdfundings',
            'delete_crowdfundings',
            'restore_crowdfundings',
            'block_crowdfundings',

            'view_private_investments',
            'add_private_investments',
            'edit_private_investments',
            'delete_private_investments',
            'restore_private_investments',
            'block_private_investments',

            'view_projects',
            'add_projects',
            'edit_projects',
            'delete_projects',
            'restore_projects',
            'block_projects',

            'view_contacts',
            'add_contacts',
            'edit_contacts',
            'delete_contacts',
            'restore_contacts',
            'block_contacts',

            'view_teams',
            'add_teams',
            'edit_teams',
            'delete_teams',
            'restore_teams',
            'block_teams',

            'view_brokers',
            'add_brokers',
            'edit_brokers',
            'delete_brokers',
            'restore_brokers',
            'block_brokers',

        ];
    }

    /**
     * Name should be lowercase.
     *
     * @param  string  $value  Name value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
