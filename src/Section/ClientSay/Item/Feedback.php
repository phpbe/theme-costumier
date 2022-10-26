<?php
namespace Be\Theme\Costumier\Section\ClientSay\Item;

/**
 * @BeConfig("反馈", icon="bi-chat-left-quote")
 */
class Feedback
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("头像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $avatar = '';

    /**
     * @BeConfigItem("名称",
     *     driver = "FormItemInput"
     * )
     */
    public string $name = '';

    /**
     * @BeConfigItem("职位",
     *     driver = "FormItemInput"
     * )
     */
    public string $job = '';

    /**
     * @BeConfigItem("内容",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $content = '';

}
