<?php
namespace Be\Theme\Costumier\Section\Products\Item;

/**
 * @BeConfig("问题", icon="bi-question-diamond")
 */
class Question
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("问题",
     *     driver = "FormItemInput"
     * )
     */
    public string $question = '';

    /**
     * @BeConfigItem("签案",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $answer = '';


}
