<?php
namespace Be\Theme\Costumier\Section\Services\Item;

/**
 * @BeConfig("富文本", icon="bi-card-heading")
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
