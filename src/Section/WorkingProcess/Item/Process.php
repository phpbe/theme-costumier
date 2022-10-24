<?php
namespace Be\Theme\Costumier\Section\WorkingProcess\Item;

/**
 * @BeConfig("流程", icon="bi-app")
 */
class Process
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
     * @BeConfigItem("描述",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = '';

}
