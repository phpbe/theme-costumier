<?php
namespace Be\Theme\Costumier\Section\Faq;

/**
 * @BeConfig("常见问题", ordering="7", icon="bi-question-square")
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
     * @BeConfigItem("图标",
     *     description = "bi图标名（图标库：https://www.phpbe.com/ui/icons）或 svg 图像源码",
     *     driver="FormItemInputTextArea"
     * )
     */
    public string $icon = 'bi-shield-check';

    /**
     * @BeConfigItem("图标标题",
     *     description = "支持 span 标记，标记的文字将附加个性化下划线",
     *     driver="FormItemInputTextArea"
     * )
     */
    public string $iconTitle = 'We Bringing A Revolutionary Change In The Textile Industry Product';

    /**
     * @BeConfigItem("杯签大头",
     *     driver="FormItemInput"
     * )
     */
    public string $tagHead = '80<sup>%</sup>';

    /**
     * @BeConfigItem("杯签内容",
     *     driver="FormItemInputTextArea"
     * )
     */
    public string $tagDescription = 'We are continually looking to improve all aspects of the manufacturing process -from our entire cycle manufacturing  to packaging and shipping.';

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
    public string $linkText = 'VIEW MORE DETIALS <i class="bi-plus"></i>';

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
    public string $title = 'POPULAR QUESTIONS';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'If you work in the fashion industry, chances are you work with textiles almost constantly. Whether you’re shopping for, printing on, or working with textiles, they never seem to differ much from any fabric you’ve worked with.';

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

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Costumier\Section\Faq\Item\Question::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        $this->image = $wwwUrl . '/images/faq/image.jpeg';

        $this->items = [
            [
                'name' => 'Question',
                'config' => (object)[
                    'enable' => 1,
                    'question' => 'The curse of Fabric Products & Accessories !!',
                    'answer' => 'We have built a strong alliance with some of industry tech giants to build a most efficient data analysis and processing.',
                ],
            ],
            [
                'name' => 'Question',
                'config' => (object)[
                    'enable' => 1,
                    'question' => 'Top Rayon Fabric Materials are made of ?',
                    'answer' => 'We have recently launched the ability to shop fabrics online and shop poles & tracks online from our website too.',
                ],
            ],
            [
                'name' => 'Question',
                'config' => (object)[
                    'enable' => 1,
                    'question' => 'The Global Fabrics Distributor must be professional !!',
                    'answer' => 'Choose from many fabrics and design your. Create and print only the fabric you need aqueous solution for fiber surface .',
                ],
            ],
        ];
    }





}
