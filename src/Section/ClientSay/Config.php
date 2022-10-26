<?php
namespace Be\Theme\Costumier\Section\ClientSay;

/**
 * @BeConfig("客户说", ordering="8", icon="bi-quote")
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
    public string $informTitle = 'GET INFORMED';

    /**
     * @BeConfigItem("标题",
     *     driver="FormItemInput"
     * )
     */
    public string $title = 'What Our Clients Say!';

    /**
     * @BeConfigItem("左侧北景图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $leftBg = '';

    /**
     * @BeConfigItem("右侧北景图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $rightBg = '';

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

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Costumier\Section\ClientSay\Item\Feedback::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        $this->leftBg = $wwwUrl . '/images/client-say/left-bg.png';
        $this->rightBg = $wwwUrl . '/images/client-say/right-bg.png';

        $this->items = [
            [
                'name' => 'Feedback',
                'config' => (object)[
                    'enable' => 1,
                    'avatar' => $wwwUrl . '/images/client-say/1.jpeg',
                    'name' => 'Alex Albert Belle',
                    'job' => 'CEO-Textile',
                    'content' => 'I realized after I sent in my order that I had ordered a larger quantity than I needed. I emailed and received a quick response, adjustment to my order and a refund. Product was shipped out  in a timely manner. FABLIO is great!',
                ],
            ],
            [
                'name' => 'Feedback',
                'config' => (object)[
                    'enable' => 1,
                    'avatar' => $wwwUrl . '/images/client-say/2.jpeg',
                    'name' => 'Michal Wincent',
                    'job' => 'Customer',
                    'content' => 'Fablio\'s customer service is great. I was searching & found exactly what I wanted, was delivered quickly. Very good transaction. Fast shipping. Great blankets fabric and I am planning to buy it in bulk order.',
                ],
            ],
            [
                'name' => 'Feedback',
                'config' => (object)[
                    'enable' => 1,
                    'avatar' => $wwwUrl . '/images/client-say/3.jpeg',
                    'name' => 'Elic Semules',
                    'job' => 'Manager',
                    'content' => 'The culture is the best at Fablio. You can tell that they truly care about the happiness of their employees. It\'s a really relaxed and calm environment and their quality of product is always best. I refer them for the future.',
                ],
            ],
        ];
    }





}
