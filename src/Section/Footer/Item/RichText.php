<?php
namespace Be\Theme\Costumier\Section\Footer\Item;

/**
 * @BeConfig("富文本", icon="el-icon-fa fa-edit")
 */
class RichText
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
    public string $title = 'Get Free Estimate';

    /**
     * @BeConfigItem("内容",
     *     driver="FormItemTinymce"
     * )
     */
    public string $content = '<p class="be-fs-150 be-c-major">+0086-123456789</p><p>Our online scheduling and payment system is safe.</p><p class="be-mt-200"><a href="#" class="be-btn be-btn-major">Request Online Form</a></p>';


}
