<?php

use Bitfumes\Multiauth\Model\Permission;
use Bitfumes\Multiauth\Model\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['Admin', 'Role', 'Permission', 'User'];
        
        $role      = Role::whereName('super')->first();
        if (!$role) {
            $role = Role::create(['name' => 'super']);
        }
        
        $models        = ['Admin', 'Role'];
        $tasks         = ['Create', 'Read', 'Update', 'Delete'];
        foreach ($tasks as $task) {
            foreach ($datas as $data) {
                $name       = "{$task}{$data}";
                $permission = Permission::create(['name' => $name, 'parent'=>$data ]);
                $role->addPermission([$permission->id]);
            }
        }

        
    }
}
