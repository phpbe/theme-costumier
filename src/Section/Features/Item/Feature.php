<?php
namespace Be\Theme\Costumier\Section\Features\Item;

/**
 * @BeConfig("特色项", icon="bi-1-square")
 */
class Feature
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
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $title = '';

    /**
     * @BeConfigItem("描述",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = '';


}
