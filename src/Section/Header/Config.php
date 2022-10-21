<?php
namespace Be\Theme\Costumier\Section\Header;

/**
 * @BeConfig("头部", ordering="2")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("Logo",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $logo = '';

    /**
     * @BeConfigItem("Logo最大宽度",
     *     driver="FormItemInputNumberInt"
     * )
     */
    public int $logoMaxWidth = 160;

    /**
     * @BeConfigItem("Logo最大高度",
     *     driver="FormItemInputNumberInt"
     * )
     */
    public int $logoMaxHeight = 0;

    /**
     * @BeConfigItem("电话标题",
     *     driver="FormItemInput"
     * )
     */
    public string $phoneTitle = '服务电话';

    /**
     * @BeConfigItem("电话",
     *     driver="FormItemInput"
     * )
     */
    public string $phone = '+0086-123456789';

    /**
     * @BeConfigItem("邮箱标题",
     *     driver="FormItemInput"
     * )
     */
    public string $emailTitle = '邮箱';

    /**
     * @BeConfigItem("邮箱",
     *     driver="FormItemInput"
     * )
     */
    public string $email = 'your@email.com';


    public function __icon() {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2.5V9h18V2.5A1.5 1.5 0 0 0 17.5 1h-15A1.5 1.5 0 0 0 1 2.5zM2 19a1 1 0 0 1-1-1v-2h2v1h1v2H2zm17-1a1 1 0 0 1-1 1h-2v-2h1v-1h2v2zM1 14v-3h2v3H1zm16-3v3h2v-3h-2zM6 17h3v2H6v-2zm8 0h-3v2h3v-2z"></path></svg>';
    }


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        $this->logo = $wwwUrl . '/images/logo-light.svg';
    }

}
