<?php

namespace Database\Seeders;

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
        //1 ===== CREATE ROLES  ===== 
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        //2 ===== CREATE PERMISSIONS AND ASSIGN THEM FOR EACH ROLE ===== 

        // === HOME PERMISSONS ===
        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver Area Administrativa',
            'icon' => 'fas fa-tachometer-alt fa-fw'
        ])->syncRoles([$role1,$role2]);
        // === USERS PERMISSONS ===
        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver Usuarios',
            'icon' => 'fas fa-users'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.create',
            'description' => 'Crear Usuario',
            'icon' => 'fas fa-users'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Editar Usuario',
            'icon' => 'fas fa-users'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.update',
            'description' => 'Actualizar Usuario',
            'icon' => 'fas fa-users'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.users.destroy',
            'description' => 'Eliminar Usuario',
            'icon' => 'fas fa-users'
        ])->syncRoles([$role1]);

        // === CATEGORIES PERMISSONS ===
        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver Categorias',
            'icon' => 'fab fa-fw fa-buffer'
        ])->syncRoles([$role1,$role2]);

        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear Categoria',
            'icon' => 'fab fa-fw fa-buffer'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Edita Categoria',
            'icon' => 'fab fa-fw fa-buffer'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.update',
            'description' => 'Actualizar Categoria',
            'icon' => 'fab fa-fw fa-buffer'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar Categoria',
            'icon' => 'fab fa-fw fa-buffer'
        ])->syncRoles([$role1]);

        // === TAGS PERMISSONS ===
        Permission::create([
            'name' => 'admin.tags.index',
            'description' => 'Ver Etiquetas',
            'icon' => 'fas fa-tags'
        ])->syncRoles([$role1,$role2]);

        Permission::create([
            'name' => 'admin.tags.create',
            'description' => 'Crear Etiqueta',
            'icon' => 'fas fa-tags'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tags.edit',
            'description' => 'Editar Etiqueta',
            'icon' => 'fas fa-tags'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tags.update',
            'description' => 'Actualizar Etiqueta',
            'icon' => 'fas fa-tags'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'admin.tags.destroy',
            'description' => 'Eliminar Etiqueta',
            'icon' => 'fas fa-tags'
        ])->syncRoles([$role1]);

        // === POSTS PERMISSONS ===
        Permission::create([
            'name' => 'admin.posts.index',
            'description' => 'Ver Publicaciones',
            'icon' => 'fas fa-file-signature'
        ])->syncRoles([$role1,$role2]);

        Permission::create([
            'name' => 'admin.posts.create',
            'description' => 'Crear Publicacion',
            'icon' => 'fas fa-file-signature'
        ])->syncRoles([$role1,$role2]);

        Permission::create([
            'name' => 'admin.posts.edit',
            'description' => 'Editar Publicacion',
            'icon' => 'fas fa-file-signature'
        ])->syncRoles([$role1,$role2]);

        Permission::create([
            'name' => 'admin.posts.update',
            'description' => 'Actualizar Publicacion',
            'icon' => 'fas fa-file-signature'
        ])->syncRoles([$role1,$role2]);

        Permission::create([
            'name' => 'admin.posts.destroy',
            'description' => 'Eliminar Publicacion',
            'icon' => 'fas fa-file-signature'
        ])->syncRoles([$role1,$role2]);

    }
}
