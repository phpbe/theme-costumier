<?php
namespace Be\Theme\Costumier\Section\HeaderTips;

/**
 * @BeConfig("头部提示", ordering="1")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("提示文字",
     *     driver="FormItemTinymce"
     * )
     */
    public string $text = '欢迎访问服装供应商 <a href="#">免费咨询</a>';

    /**
     * @BeConfigItem("公司地址",
     *     driver="FormItemInput"
     * )
     */
    public string $address = '深圳龙岗区平湖街道华南城';

    /**
     * @BeConfigItem("公司地址链接",
     *     driver="FormItemInput"
     * )
     */
    public string $addressLink = '#';

    /**
     * @BeConfigItem("Facebook",
     *     driver="FormItemInput"
     * )
     */
    public string $imFacebook = '#';

    /**
     * @BeConfigItem("Twitter",
     *     driver="FormItemInput"
     * )
     */
    public string $imTwitter = '#';

    /**
     * @BeConfigItem("Linkedin",
     *     driver="FormItemInput"
     * )
     */
    public string $imLinkedin = '#';

    /**
     * @BeConfigItem("Instagram",
     *     driver="FormItemInput"
     * )
     */
    public string $imInstagram = '#';

    public function __icon() {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2.5V9h18V2.5A1.5 1.5 0 0 0 17.5 1h-15A1.5 1.5 0 0 0 1 2.5zM2 19a1 1 0 0 1-1-1v-2h2v1h1v2H2zm17-1a1 1 0 0 1-1 1h-2v-2h1v-1h2v2zM1 14v-3h2v3H1zm16-3v3h2v-3h-2zM6 17h3v2H6v-2zm8 0h-3v2h3v-2z"></path></svg>';
    }

}
