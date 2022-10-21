<?php
namespace Be\Theme\Costumier\Config;

/**
 * @BeConfig("主题")
 */
class Theme
{

    /**
     * @BeConfigItem("主色调",
     *     driver="FormItemColorPicker")
     */
    public string $majorColor = '#eb4438';

    /**
     * @BeConfigItem("搭配颜色",
     *     driver="FormItemColorPicker")
     */
    public string $minorColor = '#0b2239';

    /**
     * @BeConfigItem("背景颜色",
     *     driver="FormItemColorPicker")
     */
    public string $backgroundColor = '#fff';

    /**
     * @BeConfigItem("字体大小",
     *     driver="FormItemInputNumberInt")
     */
    public int $fontSize = 16;

    /**
     * @BeConfigItem("字体颜色",
     *     driver="FormItemColorPicker")
     */
    public string $fontColor = '#333333';

    /**
     * @BeConfigItem("超链接颜色",
     *     driver="FormItemColorPicker")
     */
    public string $linkColor = '#333333';

    /**
     * @BeConfigItem("超链接悬停颜色",
     *     driver="FormItemColorPicker")
     */
    public string $linkHoverColor = '#FF6600';

}
