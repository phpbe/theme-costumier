<?php
namespace Be\Theme\Costumier\Section\Products\Item;

/**
 * @BeConfig("服务", icon="bi-app")
 */
class Product
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

    /**
     * @BeConfigItem("分类",
     *     driver = "FormItemInput"
     * )
     */
    public string $category = '';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = '';

    /**
     * @BeConfigItem("链接",
     *     driver = "FormItemInput"
     * )
     */
    public string $link = '';

}
