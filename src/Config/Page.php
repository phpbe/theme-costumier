<?php
namespace Be\Theme\Costumier\Config;

class Page
{

    public int $north = 1;

    public int $middle = 0;

    public int $west = 25;

    public int $center = 50;

    public int $east = 25;

    public int $south = 1;

    public array $northSections = [
        [
            'name' => 'Theme.Costumier.HeaderTips',
        ],
        [
            'name' => 'Theme.Costumier.Header',
        ],
        [
            'name' => 'Theme.Costumier.PageTitle',
        ],
    ];

    public array $middleSections = [
        [
            'name' => 'Theme.Costumier.PageTitle',
        ],
        [
            'name' => 'Theme.System.PageContent',
        ],
    ];

    public array $westSections = [

    ];

    public array $centerSections = [
        [
            'name' => 'Theme.System.PageContent',
        ],
    ];

    public array $eastSections = [

    ];

    public array $southSections = [
        [
            'name' => 'Theme.Costumier.Footer',
        ],
    ];


    // 五方位间的间距
    public string $spacingMobile = '1.5rem';
    public string $spacingTablet = '1.75rem';
    public string $spacingDesktop = '2rem';


}
