<?php
namespace Be\Theme\Costumier\Section\Production;

/**
 * @BeConfig("服务&产品", ordering="3", icon="bi-grid-3x2-gap")
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
    public string $title = 'TAKE LOOK INTO OUR <BR>BEST SERVICES AND PRODUCTION';

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
    public string $paddingMobile = '0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '0';

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
     * @BeConfigItem("间距 （手机端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingMobile = '1rem';

    /**
     * @BeConfigItem("间距 （平板端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingTablet = '1.5rem';

    /**
     * @BeConfigItem("间距 （电脑端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingDesktop = '2rem';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Costumier\Section\Production\Item\Production::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $this->items = [
            [
                'name' => 'Production',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Fabric Design',
                    'subTitle' => 'Manufacture',
                    'description' => 'It is the process of transfer dyes from the aqueous solution to the fiber surface',
                    'link' => '#',
                    'linkText' => 'READ MORE <i class="bi-plus"></i>',
                ],
            ],
            [
                'name' => 'Production',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Fabric Design',
                    'subTitle' => 'Manufacture',
                    'description' => 'It is the process of transfer dyes from the aqueous solution to the fiber surface',
                    'link' => '#',
                    'linkText' => 'READ MORE <i class="bi-plus"></i>',
                ],
            ],
            [
                'name' => 'Production',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Fabric Design',
                    'subTitle' => 'Manufacture',
                    'description' => 'It is the process of transfer dyes from the aqueous solution to the fiber surface',
                    'link' => '#',
                    'linkText' => 'READ MORE <i class="bi-plus"></i>',
                ],
            ],
            [
                'name' => 'Production',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Fabric Design',
                    'subTitle' => 'Manufacture',
                    'description' => 'It is the process of transfer dyes from the aqueous solution to the fiber surface',
                    'link' => '#',
                    'linkText' => 'READ MORE <i class="bi-plus"></i>',
                ],
            ],
            [
                'name' => 'Production',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Fabric Design',
                    'subTitle' => 'Manufacture',
                    'description' => 'It is the process of transfer dyes from the aqueous solution to the fiber surface',
                    'link' => '#',
                    'linkText' => 'READ MORE <i class="bi-plus"></i>',
                ],
            ],
            [
                'name' => 'Production',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Fabric Design',
                    'subTitle' => 'Manufacture',
                    'description' => 'It is the process of transfer dyes from the aqueous solution to the fiber surface',
                    'link' => '#',
                    'linkText' => 'READ MORE <i class="bi-plus"></i>',
                ],
            ],
        ];
    }

}
