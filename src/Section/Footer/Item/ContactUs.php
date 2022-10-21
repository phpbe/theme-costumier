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
    public string $title = '联系我们';

    /**
     * @BeConfigItem("地址",
     *     driver="FormItemInput"
     * )
     */
    public string $address = '深圳龙岗区平湖街道华南城';

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
