<?php
namespace Be\Theme\Costumier\Section\HeaderSlider;


/**
 * @BeConfig("头部轮播图", icon="el-icon-video-play", ordering="1")
 */
class Config
{
    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("切换效果",
     *     driver = "FormItemSelect",
     *     keyValues = "return ['slide' => '位移', 'fade' => '淡入淡出', 'cube' => '方块', 'coverflow' => '3D流', 'flip' => '3D翻转', 'cards' => '卡片式', 'creative' => '创意性'];"
     * )
     */
    public string $effect = 'fade';

    /**
     * @BeConfigItem("自动播放",
     *     driver = "FormItemSwitch")
     */
    public int $autoplay = 1;

    /**
     * @BeConfigItem("自动播放间隔（毫秒）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.autoplay === 1']];")
     */
    public int $delay = 5000;

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
     * @BeConfigItem("显示分页器",
     *     driver = "FormItemSwitch")
     */
    public int $pagination = 0;

    /**
     * @BeConfigItem("显示前进后退按钮",
     *     driver = "FormItemSwitch")
     */
    public int $navigation = 1;

    /**
     * @BeConfigItem("前进后退按钮大小（像素）",
     *     driver = "FormItemInputNumberInt",
     *     ui="return ['form-item' => ['v-show' => 'formData.navigation === 1']];")
     */
    public int $navigationSize = 30;

    /**
     * @BeConfigItem("背景颜色",
     *     driver="FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#FFFFFF';

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
     *     driver = "FormItemsMixedConfigs",
     *     items = "return [
     *          \Be\Theme\System\Section\Slider\Item\Image::class,
     *          \Be\Theme\System\Section\Slider\Item\ImageWithTextOverlay::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();
        $this->items = [
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-sliders/1.jpeg',
                    'imageMobile' => $wwwUrl . '/images/header-sliders/1.jpeg',
                    'link' => '',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-sliders/2.jpeg',
                    'imageMobile' => $wwwUrl . '/images/header-sliders/2.jpeg',
                    'link' => '',
                ],
            ],
        ];

    }

}
