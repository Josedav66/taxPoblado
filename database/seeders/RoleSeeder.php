<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $cajero = Role::create(['name' => 'cajero']);
        $bodega = Role::create(['name' => 'bodega']);
        $developer = Role::create(['name' => 'developer']);


      //  Permission::create(['name' => 'preguntas'])->syncRoles([$admin,$cajero,$bodega,$developer]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.index'])->syncRoles([$admin,$cajero,$bodega]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.store'])->syncRoles([$admin,$cajero]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.create'])->syncRoles([$admin,$cajero]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.edit'])->syncRoles([$admin,$cajero]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.update'])->syncRoles([$admin,$cajero]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.delete'])->syncRoles([$admin,$cajero]);//->assignRole($admin);

      Permission::create(['name' => 'planillas.consultar'])->syncRoles([$admin,$bodega]);//->assignRole($admin);
      Permission::create(['name' => 'planillas.restar'])->syncRoles([$admin,$bodega]);//->assignRole($admin);




    }


}
