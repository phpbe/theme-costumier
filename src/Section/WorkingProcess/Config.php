<?php
namespace Be\Theme\Costumier\Section\WorkingProcess;

/**
 * @BeConfig("工作流程", ordering="5", icon="bi-arrow-right-square")
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
    public string $title = 'OUR WORKING PROCESS!';

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
     *          \Be\Theme\Costumier\Section\WorkingProcess\Item\Process::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $this->items = [
            [
                'name' => 'Process',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-border-all',
                    'title' => 'Production of Fabric',
                    'description' => 'Most fabrics are presently produced by interlacing.',
                ],
            ],
            [
                'name' => 'Process',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-puzzle',
                    'title' => 'Exportation Globally',
                    'description' => 'Global exports is trade whereby goods and services.',
                ],
            ],
            [
                'name' => 'Process',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-slack',
                    'title' => 'Digital Shop Available',
                    'description' => 'It manages business inventory and transactions via internet.',
                ],
            ],
            [
                'name' => 'Process',
                'config' => (object)[
                    'enable' => 1,
                    'icon' => 'bi-flower1',
                    'title' => 'Great Client Support',
                    'description' => 'Customer services to assist in making cost effective.',
                ],
            ],
        ];
    }





}
