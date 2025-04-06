<?php

namespace App\Service\Menu\MenuFactories;

use App\Service\Menu\MenuInterfaces\MenuInterface;
use App\Service\Menu\ListService;
use App\Service\Menu\PageService;

class MenuFactory
{
    public static function make($type): MenuInterface
    {
       switch ($type) {
           case 'list':
               return new ListService();
               break;
           case 'page':
               return new PageService();
               break;
            // case 'link':
            //     return abort(404);
            //     break;
           default:
               throw new \Exception('Menu type not found');
               break;
       }
    }
}
