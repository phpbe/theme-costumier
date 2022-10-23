<?php
namespace Be\Theme\Costumier\Section\Feature123\Item;

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
     *     description = "bi图标名（例：bi-facebook）或 svg 图像源码"
     *     driver = "FormItemInput"
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
     *     driver = "FormItemInput"
     * )
     */
    public string $description = '';


}
