<?php
namespace Be\Theme\Costumier\Section\LatestArticles;

/**
 * @BeConfig("联系我们", ordering="11", icon="bi-card-heading")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("小标题",
     *     description="",
     *     driver="FormItemInput"
     * )
     */
    public string $informTitle = 'DIRECTLY FROM THE BLOG';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'WE BELIEVE IN COUNTING NUMBERS';

    /**
     * @BeConfigItem("链接",
     *     driver = "FormItemInput"
     * )
     */
    public string $link = '#';

    /**
     * @BeConfigItem("链接文字",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkText = 'MORE ARTICLES <i class="bi-plus"></i>';

    /**
     * @BeConfigItem("布局",
     *     driver = "FormItemSelect",
     *     keyValues = "return ['5' => '三加二', '3' => '三列']"
     * )
     */
    public string $layout = '5';

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '2rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '3rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '4rem 0';

    /**
     * @BeConfigItem("外边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS margin 语法）"
     * )
     */
    public string $marginMobile = '0';

    /**
     * @BeConfigItem("外边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS margin 语法）"
     * )
     */
    public string $marginTablet = '0';

    /**
     * @BeConfigItem("外边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS margin 语法）"
     * )
     */
    public string $marginDesktop = '0';


    public function __construct()
    {
        $this->link = beUrl('Cms.Article.latest');
    }

}
