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
    public string $title = '咨询报价';

    /**
     * @BeConfigItem("内容",
     *     driver="FormItemInputTinymce"
     * )
     */
    public string $content = '<p class="be-fs-150 be-c-major">+0086-123456789</p><p>我们的线上询价和支付系十分安全，您可以联通系我们，或在线提交表单</p><p class="be-mt-200"><a href="#" class="be-btn be-btn-major">在线资询</a></p>';


}
