<?php
namespace Be\Theme\Costumier\Section\ContactUs;

/**
 * @BeConfig("联系我们", ordering="10", icon="bi-people")
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
    public string $informTitle = 'CONTACT US';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Needs Help? Let’s Get in Touch';

    /**
     * @BeConfigItem("邮箱标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $emailTitle = 'Email Address';

    /**
     * @BeConfigItem("邮箱",
     *     driver = "FormItemInput"
     * )
     */
    public string $email = 'info@yourmail.com';

    /**
     * @BeConfigItem("邮箱2",
     *     driver = "FormItemInput"
     * )
     */
    public string $email2 = 'email@example.com';

    /**
     * @BeConfigItem("地址标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $addressTitle = 'Our Address';

    /**
     * @BeConfigItem("地址",
     *     driver = "FormItemInput"
     * )
     */
    public string $address = '45 Mikraham Street,';

    /**
     * @BeConfigItem("地址2",
     *     driver = "FormItemInput"
     * )
     */
    public string $address2 = 'Trooklyn, New York 47895';

    /**
     * @BeConfigItem("工作时间标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $workingHourTitle = 'Open Hours';

    /**
     * @BeConfigItem("工作时间",
     *     driver = "FormItemInput"
     * )
     */
    public string $workingHour = 'Mon – Fri: 9am – 7pm';

    /**
     * @BeConfigItem("工作时间2",
     *     driver = "FormItemInput"
     * )
     */
    public string $workingHour2 = 'Sat – Sun: closed';

    /**
     * @BeConfigItem("标题2",
     *     driver = "FormItemInput"
     * )
     */
    public string $title2 = 'Have Be Any Question? <br>Feel Free To Contact <br>With Us.';

    /**
     * @BeConfigItem("描述",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'Contrary to popular belief, Lorem Ipsum is not simply random text. has rootse of classical Latin literature r belief, LoremIpsum is not simply random text. in a piece of classical Latin literature r belief, LoremIpsum is not simply random text.';

    /**
     * @BeConfigItem("背景图像（左）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $backgroundImage = '';

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

        $this->backgroundImage = $wwwUrl . '/images/contact-us/bg.jpeg';
    }





}
