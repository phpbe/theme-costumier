<?php

namespace Be\Theme\Costumier\Section\Production;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('production');
        echo $this->getCssPadding('production');
        echo $this->getCssMargin('production');
        echo $this->getCssSpacing('production-items', 'production-item', '100%', '50%', 100 / 3 . '%');

        echo '#' . $this->id . ' .production {';

        echo '}';

        echo '#' . $this->id . ' .production-title {';
        echo 'font-size: 2rem;';
        echo 'font-weight: 700;';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1.2;';
        echo 'color: #fff;';
        echo 'background-color: var(--major-color);';
        echo 'padding: 2rem 0;';
        echo 'margin: 0;';
        echo '}';

        echo '#' . $this->id . ' .production-items-container {';
        echo 'box-shadow: 0px 0px 10px 0px #ddd;';
        echo 'padding: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .production-item-box {';
        echo 'border: 1px solid #e5e4e2;';
        echo 'padding: 2rem;';
        echo 'background-color: ' . $this->config->itemBackgroundColor . ';';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .production-item-box:after {';
        echo 'content: "";';
        echo 'display: inline-block;';
        echo 'position: absolute;';
        echo 'right: 4px;';
        echo 'bottom: 3px;';
        echo 'width: 0;';
        echo 'height: 0;';
        echo 'z-index: 2;';
        echo 'border-style: solid;';
        echo 'border-width: 15px 15px 0px 0;';
        echo 'border-color: transparent var(--major-color) transparent transparent;';
        echo 'transition: all .7s ease;';
        echo '}';

        echo '#' . $this->id . ' .production-item-icon {';
        echo 'margin-right: 1rem;';
        echo 'padding: .75rem 1.25rem;';
        echo 'background-color: #fff;';
        echo 'border-left: var(--major-color) 3px solid;';
        echo '}';

        echo '#' . $this->id . ' .production-item-icon i,';
        echo '#' . $this->id . ' .production-item-icon svg {';
        echo 'display: inline-block;';
        echo 'font-size: 3rem;';
        echo 'color: var(--major-color);';
        echo 'transition: all 1s ease;';
        echo '}';

        echo '#' . $this->id . ' .production-item:hover .feature123-item-icon i,';
        echo '#' . $this->id . ' .production-item:hover .feature123-item-icon svg {';
        echo 'transform: rotateY(360deg);';
        echo '}';

        echo '#' . $this->id . ' .production-item-title {';
        echo 'margin-top: .75rem;';
        echo 'font-size: 1.5rem;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .production-item-sub-title {';
        echo 'font-size: 1.25rem;';
        echo 'color: var(--major-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';


        echo '#' . $this->id . ' .production-item-link {';
        echo 'margin-top: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .production-item-link a {';
        echo 'font-family: "Rajdhani";';
        echo 'color: var(--major-color);';
        echo '}';




        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .production-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '#' . $this->id . ' .production-items-container {';
        echo 'padding: 1.5rem;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1200px) {';

        echo '}';

        echo '@media (min-width: 1560px) {';

        echo '#' . $this->id . ' .production-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '#' . $this->id . ' .production-items-container {';
        echo 'padding: 2rem;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="production">';
            echo '<div class="be-container">';

            if ($this->config->title !== '') {
                echo '<div class="be-row">';
                echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
                echo '<div class="be-col-24 be-md-col-20 be-xl-col-16 be-ta-center">';
                echo '<h2 class="production-title">';
                echo $this->config->title;
                echo '</h2>';
                echo '</div>';
                echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
                echo '</div>';
            }

            echo '<div class="production-items-container">';
            echo '<div class="production-items">';

            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if ($itemConfig->enable) {
                        echo '<div class="production-item">';
                        switch ($item['name']) {
                            case 'Production':
                                echo '<div class="production-item-box">';

                                echo '<div class="be-row">';

                                echo '<div class="be-col-auto">';
                                echo '<div class="production-item-icon">';
                                $itemConfig->icon = strtolower(trim($itemConfig->icon));
                                if (substr($itemConfig->icon, 0, 3) === 'bi-') {
                                    echo '<i class="' . $itemConfig->icon . '"></i>';
                                } elseif (substr($itemConfig->icon, 0, 5) === '<svg ') {
                                    echo $itemConfig->icon;
                                }
                                echo '</div>';
                                echo '</div>';

                                echo '<div class="be-col">';
                                echo '<div class="production-item-title">' . $itemConfig->title . '</div>';
                                echo '<div class="production-item-sub-title">' . $itemConfig->subTitle . '</div>';
                                echo '</div>';

                                echo '</div>';

                                echo '<div class="be-mt-100 be-c-777 be-lh-150">';
                                echo $itemConfig->description;
                                echo '</div>';

                                if ($itemConfig->linkText !== '' && $itemConfig->link !== '') {
                                    echo '<div class="production-item-link">';
                                    echo '<a href="' . $itemConfig->link . '">';
                                    echo $itemConfig->linkText;
                                    echo '</a>';
                                    echo '</div>';
                                }

                                echo '</div>';
                                break;
                        }
                        echo '</div>';
                    }
                }
            }

            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
        }
    }

}
