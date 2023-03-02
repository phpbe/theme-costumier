<?php

namespace Be\Theme\Costumier\Config\Page\Cms\Article;

/**
 * @BeConfig("最新文章")
 */
class latest
{

    public int $west = 0;
    public int $center = 66;
    public int $east = 34;


    public array $centerSections = [
        [
            'name' => 'Theme.Costumier.AppCmsArticles',
        ],
    ];

    public array $eastSections = [
        [
            'name' => 'Theme.Costumier.AppCmsSearch',
        ],
        [
            'name' => 'Theme.Costumier.AppCmsHottestSide',
        ],
        [
            'name' => 'Theme.Costumier.AppCmsTags',
        ],
    ];

    /**
     * @BeConfigItem("HEAD头标题",
     *     description="HEAD头标题，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Recently blogs';

    /**
     * @BeConfigItem("Meta描述",
     *     description="填写页面内容的简单描述，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $metaDescription = 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.';

    /**
     * @BeConfigItem("Meta关键词",
     *     description="填写页面内容的关键词，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $metaKeywords = 'Blog';

    /**
     * @BeConfigItem("页面标题",
     *     description="展示在页面内容中的标题，一般与HEAD头标题一致，两者相同时可不填写此项",
     *     driver = "FormItemInput"
     * )
     */
    public string $pageTitle = 'Recently blogs';

}
