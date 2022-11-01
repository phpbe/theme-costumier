<?php
namespace Be\Theme\Costumier\Section\Footer\Item;

/**
 * @BeConfig("联系我们", icon="el-icon-fa fa-edit")
 */
class ContactUs
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
    public string $title = 'Contact Us';

    /**
     * @BeConfigItem("地址",
     *     driver="FormItemInput"
     * )
     */
    public string $address = 'HuaNan cheng, ShenZhen City GuangDong province';

    /**
     * @BeConfigItem("电话",
     *     driver="FormItemInput"
     * )
     */
    public string $phone = '+0086-123456789';

    /**
     * @BeConfigItem("邮箱",
     *     driver="FormItemInput"
     * )
     */
    public string $email = 'your@email.com';


}
