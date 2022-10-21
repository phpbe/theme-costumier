<?php
namespace Be\Theme\Costumier\Section\Footer;

/**
 * @BeConfig("底部")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("LOGO",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $logo = '';

    /**
     * @BeConfigItem("Logo最大宽度",
     *     driver="FormItemInputNumberInt"
     * )
     */
    public int $logoMaxWidth = 180;

    /**
     * @BeConfigItem("Logo最大高度",
     *     driver="FormItemInputNumberInt"
     * )
     */
    public int $logoMaxHeight = 0;

    /**
     * @BeConfigItem("描述",
     *     driver="FormItemInputTinymce"
     * )
     */
    public string $description = '服务供应商作为制造商和贸易商，在纺织市场开展业务。随着时间的推移，生产的纺织品的种类增加了。';

    /**
     * @BeConfigItem("社交账号 - Facebook",,
     *     description="填写 Facebook 账号，留空时不显示"
     *     driver="FormItemInput"
     * )
     */
    public string $socialFacebook = '#';

    /**
     * @BeConfigItem("社交账号 - Twitter",
     *     description="填写 Twitter 账号，留空时不显示",
     *     driver="FormItemInput"
     * )
     */
    public string $socialTwitter = '#';

    /**
     * @BeConfigItem("社交账号 - Linkedin",
     *     description="填写 Linkedin 账号，留空时不显示",
     *     driver="FormItemInput"
     * )
     */
    public string $socialLinkedin = '#';

    /**
     * @BeConfigItem("社交账号 - Instagram",
     *     description="填写 Instagram 账号，留空时不显示",
     *     driver="FormItemInput"
     * )
     */
    public string $socialInstagram = '#';

    /**
     * @BeConfigItem("版权所有",
     *     driver="FormItemTinymce"
     * )
     */
    public string $copyright = 'Copyright &copy; 2022 版权所有 服装供应商';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Costumier\Section\Footer\Item\RichText::class,
     *          \Be\Theme\Costumier\Section\Footer\Item\Menu::class,
     *          \Be\Theme\Costumier\Section\Footer\Item\ContactUs::class,
     *     ]"
     * )
     */
    public array $items = [
        ['name' => 'RichText'],
        ['name' => 'Menu'],
        ['name' => 'ContactUs'],
    ];

    public function __icon() {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2a1 1 0 0 1 1-1h2v2H3v1H1V2zm17-1a1 1 0 0 1 1 1v2h-2V3h-1V1h2zm1 16.5V11H1v6.5A1.5 1.5 0 0 0 2.5 19h15a1.5 1.5 0 0 0 1.5-1.5zM19 6v3h-2V6h2zM3 9V6H1v3h2zm11-8v2h-3V1h3zM9 3V1H6v2h3z"></path></svg>';
    }

    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        $this->logo = $wwwUrl . '/images/logo-light.svg';
    }
}
