<?php

namespace App\Helpers;

use App\Models\Apartment;
use App\Models\GlobalConfig;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use DB;

class Helper
{
    /**
     * Get all navigations.
     *
     * @return Collection
     */
    public static function getNavItems()
    {
        $navs = [
            [
                'title' => 'Home',
                'icon'  => '<i class="material-icons">home </i>',
                'bg'    => 'bg-danger',
                'route' => 'dashboard',
                'name'  => 'home',
                'role' => ['Super Admin', 'Admin', 'QCer']
            ],
            [
                'title'   => 'My Skills',
                'icon'    => '<i class="material-icons">home </i>',
                'bg'      => 'bg-success',
                'name'    => 'base-file-qa',
                'role' => ['Super Admin', 'Admin'],
                'routes' => ['skill.index', 'skill.create'],
                'submenu' => [
                    [
                        'title' => 'List',
                        'name'  => 'subway',
                        'route' => 'skill.index',
                        'role'  => ['Super Admin', 'Admin'],
                    ],
                    [
                        'title' => 'Compare File',
                        'name'  => 'compare',
                        'route' => 'skill.create',
                        'role'  => ['Super Admin', 'Admin'],
                    ],
                ],
            ],
            [
                'title' => 'User',
                'icon'  => '<i class="material-icons">swap_calls</i>',
                'bg'    => 'bg-primary',
                'route' => 'skill.create',
                'name'  => 'user',
                'role' => ['Super Admin', 'Admin']
            ],



        ];

        return $navs;
    }

}
