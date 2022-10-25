<?php
namespace Be\Theme\Costumier\Section\Products;

/**
 * @BeConfig("产品轮播图", ordering="6", icon="bi-arrow-right-square")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("自动播放",
     *     driver = "FormItemSwitch")
     */
    public int $autoplay = 0;

    /**
     * @BeConfigItem("自动播放间隔（毫秒）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.autoplay === 1']];")
     */
    public int $delay = 3000;

    /**
     * @BeConfigItem("自动播放速度（毫秒）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.autoplay === 1']];")
     */
    public int $speed = 1000;

    /**
     * @BeConfigItem("循环",
     *     driver = "FormItemSwitch")
     */
    public int $loop = 1;

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
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Costumier\Section\Products\Item\Product::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        $this->items = [
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/1.jpeg',
                    'category' => 'Stiching',
                    'title' => 'Fabric Linean',
                    'link' => '#',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/2.jpeg',
                    'category' => 'Manufacture',
                    'title' => 'Wool Fabric',
                    'link' => '#',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/3.jpeg',
                    'category' => 'Printing',
                    'title' => 'Georgette Fabric',
                    'link' => '#',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/4.jpeg',
                    'category' => 'Hand Loom',
                    'title' => 'Leather Fabric',
                    'link' => '#',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/5.jpeg',
                    'category' => 'Dyeing',
                    'title' => 'Cotton Fabric',
                    'link' => '#',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/6.jpeg',
                    'category' => 'Machine Made',
                    'title' => 'Silk Fabric',
                    'link' => '#',
                ],
            ],
        ];
    }





}
