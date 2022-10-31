<?php
namespace Be\Theme\Costumier\Section\PageTitle;


/**
 * @BeConfig("页面主体标题", icon="bi-type-h1", ordering="0")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

}
