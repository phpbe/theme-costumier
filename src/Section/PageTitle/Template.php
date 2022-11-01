<?php

namespace Be\Theme\Costumier\Section\PageTitle;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['north'];


    private function css()
    {
        echo '<style type="text/css">';

        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');
        $libCss = \Be\Be::getLib('Css');
        $rgbMinorColor = $libCss->hexToRgb($configTheme->minorColor);

        echo '.page-title {';
        echo 'background-color:  rgb(' . implode(' ', $rgbMinorColor) . ' / 2%);';
        echo 'border-bottom: var(--major-color) 5px solid;';
        echo 'padding: 1rem 0;';
        echo '}';

        echo '.page-title-text {';
        echo 'font-size: 2rem;';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1;';
        echo 'color: var(--minor-color);';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo '}';

        echo '.page-title-nav {';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1;';
        echo 'color: var(--minor-color);';
        echo 'padding-top: 1rem;';
        echo '}';

        echo '@media (min-width: 1024px) {';

        echo '.page-title-text {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1200px) {';

        echo '}';

        echo '@media (min-width: 1680px) {';

        echo '.page-title-text {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';


        echo '</style>';
    }


    /**
     * 输出内容
     *
     * @return void
     */
    public function display()
    {
        if ($this->config->enable) {
            $this->css();

            echo '<div class="page-title">';
            echo '<div class="be-container">';
            echo '<div class="be-row">';

            echo '<div class="be-col" style="overflow: hidden;">';
            echo '<h1 class="page-title-text be-t-ellipsis">';
            echo $this->page->pageTitle;
            echo '</h1>';
            echo '</div>';

            echo '<div class="be-col-0 be-lg-col-auto page-title-nav">';
            echo '<i class="bi-house-door-fill"></i> HOME / ';

            $northMenu = Be::getMenu('North');
            $menuActiveId = $northMenu->getActiveId();
            if ($menuActiveId !== '') {
                foreach ($northMenu->getItems() as $item) {
                    if ($item->id === $menuActiveId) {
                        echo $item->label;
                        break;
                    }
                }
            }

            echo '</div>';

            echo '</div>'; // be-row
            echo '</div>'; // be-container
            echo '</div>'; // page-title
        }
    }

}

