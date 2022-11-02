<?php

namespace Be\Theme\Costumier\Config\Page\Cms\Article;

use Be\Be;

class search
{

    public int $west = 0;
    public int $center = 100;
    public int $east = 0;


    public array $centerSections = [
        [
            'name' => 'Theme.System.PageContent',
        ],
    ];

    public function __construct()
    {
        $northMenu = Be::getMenu('North');
        $menuActiveId = null;
        foreach ($northMenu->getItems() as $item) {
            if (substr($item->route, 0, 11) === 'Cms.Article') {
                $menuActiveId = $item->id;
                break;
            }
        }

        if ($menuActiveId !== null) {
            $northMenu->setActiveId($menuActiveId);
        }
    }

}
