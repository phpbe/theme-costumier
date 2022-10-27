<?php
namespace Be\Theme\Costumier\Section\Team;

/**
 * @BeConfig("团队", ordering="9", icon="bi-people")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("布局",
     *     driver = "FormItemSelect",
     *     keyValues = "return ['left' => '团队列表居左', 'right' => '团队列表居右']"
     * )
     */
    public string $layout = 'left';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Our Leadership Team';

    /**
     * @BeConfigItem("描述",
     *     driver = "FormItemInput"
     * )
     */
    public string $description = 'Unbeatable and more talented team work is the pillar of success & we’re thankful to the each member belongs to Fablio.';

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
    public string $linkText = 'Meet our team';

    /**
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

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

        $this->image = $wwwUrl . '/images/team/image.jpeg';
    }





}
