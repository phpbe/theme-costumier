<?php

namespace Be\Theme\Costumier\Config\Page\Cms\Article;

use Be\Be;

class detail
{

    public int $west = 0;
    public int $center = 66;
    public int $east = 34;


    public array $centerSections = [
        [
            'name' => 'Theme.Costumier.AppCmsArticleDetail',
        ],
    ];

    public array $eastSections = [
        [
            'name' => 'Theme.Costumier.AppCmsSearch',
        ],
        [
            'name' => 'Theme.Costumier.AppCmsLatestSide',
        ],
        [
            'name' => 'Theme.Costumier.AppCmsTags',
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
