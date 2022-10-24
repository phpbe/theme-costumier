<?php
namespace Be\Theme\Costumier\Section\Feature123;

/**
 * @BeConfig("特色123", ordering="1", icon="bi-123")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("标题",
     *     driver="FormItemInput"
     * )
     */
    public string $title = 'WE GIVE TOP PRODUCTION FROM EVERY ANGLE.';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = '';

    /**
     * @BeConfigItem("背景颜色",
     *     driver="FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#fff';

    /**
     * @BeConfigItem("子项背景颜色",
     *     driver="FormItemColorPicker"
     * )
     */
    public string $itemBackgroundColor = '#f8fafb';

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
     *          \Be\Theme\Costumier\Section\Feature123\Item\Feature::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $this->items = [
            [
                'name' => 'Feature',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Choose For Many Fabrics and Textiles materials for your production',
                    'description' => 'We classified it on the basis of material, design and by craft.',
                ],
            ],
            [
                'name' => 'Feature',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-bricks',
                    'title' => 'Create Your Design Only for the Fabric Production and Natural Fabrics',
                    'description' => 'With its rapid growth over the last four decades, since 1970',
                ],
            ],
            [
                'name' => 'Feature',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-bounding-box',
                    'title' => 'Shoose from various fabric types that are stretchy and comfortable.',
                    'description' => 'Fabiflex is a leading export textile service globally.',
                ],
            ],
        ];
    }

}
