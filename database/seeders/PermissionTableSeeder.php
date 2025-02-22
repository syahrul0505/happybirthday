<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // 'absen',
            // 'report-absen',
            'dashboard',
            'master-data',
            'shop',
            'toko-online',
            'inventory',
            'list-stock',
            'permit-edit',
            'report-penjualan',
            'departement-list',
            'departement-create',
            'departement-edit',
            'departement-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'material-list',
            'material-create',
            'material-edit',
            'material-delete',
            'tag-list',
            'tag-create',
            'tag-edit',
            'tag-delete',
            'supplier-list',
            'supplier-create',
            'supplier-edit',
            'supplier-delete',
            'add-on-list',
            'other-setting',
            'restaurant-list',
            'restaurant-create',
            'restaurant-edit',
            'restaurant-delete',
            'discount-list',
            'discount-create',
            'discount-edit',
            'discount-delete',
            'stock-in-list',
            'stock-in-create',
            'stock-in-edit',
            'stock-in-delete',
            'stock-out-list',
            'stock-out-create',
            'stock-out-edit',
            'stock-out-delete',
            'history-log-list',
            'history-log-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }
    }
}
