<?php
namespace Be\Theme\Costumier\Section\Experience;

/**
 * @BeConfig("经验", ordering="2", icon="bi-stack-overflow")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

    /**
     * @BeConfigItem("杯签大头",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $tagHead = '25+';

    /**
     * @BeConfigItem("杯签内容",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $tag = 'Year experience in Fabiflex';

    /**
     * @BeConfigItem("小标题",
     *     description="",
     *     driver="FormItemInput"
     * )
     */
    public string $informTitle = 'GET INFORMED';

    /**
     * @BeConfigItem("标题",
     *     driver="FormItemInput"
     * )
     */
    public string $title = 'LET’S BUILD SOMETHING CREATIVE TOGETHER';

    /**
     * @BeConfigItem("图标",
     *     description = "bi图标名 或 svg 图像源码",
     *     driver="FormItemInput"
     * )
     */
    public string $icon = 'bi-shield-check';

    /**
     * @BeConfigItem("图标标题",
     *     description = "支持 span 标记，标记的文字将附加个性化下划线",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $iconTitle = 'We’re in this business <span>Since 1987</span> and we provide the best service';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'It is additionally connected with the production of clothes. The crude material of textiles is the fiber which might be regular regenerated.';

    /**
     * @BeConfigItem("列表项目",
     *     driver = "FormItemTinymce"
     * )
     */
    public string $lis = '<ul><li>It can be very well produced using fiber, yarn, texture, or mix.</li><li>It is one of the most extensive terms applied to the clothing industry.</li><li>It might be a finished or unfinished item. It has no particular use.</li></ul>';

    /**
     * @BeConfigItem("背景颜色",
     *     driver="FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#fff';

    /**
     * @BeConfigItem("背景图像（左）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $backgroundImage = '';

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
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        $this->image = $wwwUrl . '/images/experience/image.jpeg';
        $this->backgroundImage = $wwwUrl . '/images/experience/bg.png';

    }

}
