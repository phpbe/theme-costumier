<?php
namespace Be\Theme\Costumier\Section\Services\Item;

/**
 * @BeConfig("服务", icon="bi-app")
 */
class Service
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("图标",
     *     description = "bi图标名（图标库：https://www.phpbe.com/ui/icons）或 svg 图像源码",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $icon = '';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = '';

    /**
     * @BeConfigItem("子标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $subTitle = '';

    /**
     * @BeConfigItem("描述",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = '';

    /**
     * @BeConfigItem("链接",
     *     driver = "FormItemInput"
     * )
     */
    public string $link = '#';

    /**
     * @BeConfigItem("链接文字",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkText = 'READ MORE <i class="bi-plus"></i>';
}
