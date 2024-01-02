<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use App\Models\Permission;
use App\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // general role permissions
        // membuat permission untuk role general(guest)
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-material'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-resume'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-question'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-chat'
        ]);
        // end general role permissions

        // member role permissions
        // membuat permission untuk role member
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'ask-ustadz'
        ]);
        // end member role permissions

        // admin role permissions
        // membuat permission untuk role admin

        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-material'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-material'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-material'
        ]);

        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-resume'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-resume'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-resume'
        ]);


        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-question'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-question'
        ]);

        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-chat'
        ]);

        // pertanyaan
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-answers-question'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-answers-question'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-answers-question'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-answers-question'
        ]);

        // kitab
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-kitab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-kitab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-kitab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-kitab'
        ]);

        // bab
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-bab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-bab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-bab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-bab'
        ]);

        // sub bab
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-sub-bab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-sub-bab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-sub-bab'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-sub-bab'
        ]);

        // judul
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-title'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-title'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-title'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-title'
        ]);

        // episode
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-episode'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-episode'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-episode'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-episode'
        ]);
        // end admin role permissions

        // ustadz role permissions
        // membuat permission untuk role ustadz
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'answer-chat-question'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'create-article'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'read-article'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'edit-article'
        ]);
        Permission::create([
            'id' => Uuid::uuid4(),
            'name' => 'delete-article'
        ]);
        // end ustadz role permissions


        // membuat role
        Role::create([
            'id' => Uuid::uuid4(),
            'name' => 'guest'
        ]);
        Role::create([
            'id' => Uuid::uuid4(),
            'name' => 'member'
        ]);
        Role::create([
            'id' => Uuid::uuid4(),
            'name' => 'ustadz'
        ]);
        Role::create([
            'id' => Uuid::uuid4(),
            'name' => 'admin'
        ]);

        // memberikan permission ke role guest
        $roleGuest = Role::findByName('guest');
        $roleGuest->givePermissionTo('read-material');
        $roleGuest->givePermissionTo('read-resume');
        $roleGuest->givePermissionTo('read-question');
        $roleGuest->givePermissionTo('read-chat');

        // memberikan permission ke role member
        $roleMember = Role::findByName('member');
        $roleMember->givePermissionTo('read-material');
        $roleMember->givePermissionTo('read-resume');
        $roleMember->givePermissionTo('read-question');
        $roleMember->givePermissionTo('read-chat');
        $roleMember->givePermissionTo('ask-ustadz');

        // memberikan permission ke role admin
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('create-material');
        $roleAdmin->givePermissionTo('read-material');
        $roleAdmin->givePermissionTo('edit-material');
        $roleAdmin->givePermissionTo('delete-material');

        $roleAdmin->givePermissionTo('create-resume');
        $roleAdmin->givePermissionTo('read-resume');
        $roleAdmin->givePermissionTo('edit-resume');
        $roleAdmin->givePermissionTo('delete-resume');

        $roleAdmin->givePermissionTo('delete-question');

        $roleAdmin->givePermissionTo('read-chat');
        $roleAdmin->givePermissionTo('delete-chat');

        $roleAdmin->givePermissionTo('create-answers-question');
        $roleAdmin->givePermissionTo('read-answers-question');
        $roleAdmin->givePermissionTo('edit-answers-question');
        $roleAdmin->givePermissionTo('delete-answers-question');

        // kitab
        $roleAdmin->givePermissionTo('create-kitab');
        $roleAdmin->givePermissionTo('read-kitab');
        $roleAdmin->givePermissionTo('edit-kitab');
        $roleAdmin->givePermissionTo('delete-kitab');

        // bab
        $roleAdmin->givePermissionTo('create-bab');
        $roleAdmin->givePermissionTo('read-bab');
        $roleAdmin->givePermissionTo('edit-bab');
        $roleAdmin->givePermissionTo('delete-bab');

        // sub bab
        $roleAdmin->givePermissionTo('create-sub-bab');
        $roleAdmin->givePermissionTo('read-sub-bab');
        $roleAdmin->givePermissionTo('edit-sub-bab');
        $roleAdmin->givePermissionTo('delete-sub-bab');

        // judul
        $roleAdmin->givePermissionTo('create-title');
        $roleAdmin->givePermissionTo('read-title');
        $roleAdmin->givePermissionTo('edit-title');
        $roleAdmin->givePermissionTo('delete-title');

        // episode
        $roleAdmin->givePermissionTo('create-episode');
        $roleAdmin->givePermissionTo('read-episode');
        $roleAdmin->givePermissionTo('edit-episode');
        $roleAdmin->givePermissionTo('delete-episode');


        $roleUstadz = Role::findByName('ustadz');
        $roleUstadz->givePermissionTo('answer-chat-question');
        $roleUstadz->givePermissionTo('create-article');
        $roleUstadz->givePermissionTo('read-article');
        $roleUstadz->givePermissionTo('edit-article');
        $roleUstadz->givePermissionTo('delete-article');

    }
}
