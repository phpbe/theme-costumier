<?php
namespace Be\Theme\Costumier\Section\Production\Item;

/**
 * @BeConfig("富文本", icon="bi-filter-square")
 */
class RichText
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("内容",
     *     driver = "FormItemTinymce"
     * )
     */
    public string $content = '';

}
