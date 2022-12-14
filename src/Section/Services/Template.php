<?php

namespace Be\Theme\Costumier\Section\Services;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('services');
        echo $this->getCssPadding('services');
        echo $this->getCssMargin('services');
        echo $this->getCssSpacing('services-items', 'services-item', '100%', '50%', 100 / 3 . '%');

        echo '#' . $this->id . ' .services {';

        echo '}';

        echo '#' . $this->id . ' .services-title {';
        echo 'font-size: 2rem;';
        echo 'font-weight: 700;';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1.2;';
        echo 'color: #fff;';
        echo 'background-color: var(--major-color);';
        echo 'padding: 2rem 0;';
        echo 'margin: 0;';
        echo '}';

        echo '#' . $this->id . ' .services-items-container {';
        echo 'box-shadow: 0px 0px 10px 0px #ddd;';
        echo 'padding: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .services-item-box {';
        echo 'border: 1px solid #e5e4e2;';
        echo 'height: 100%;';
        echo 'padding: 2rem;';
        echo 'background-color: ' . $this->config->itemBackgroundColor . ';';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .services-item-box:after {';
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

        echo '#' . $this->id . ' .services-item:hover .services-item-box:after {';
        echo 'border-width: 20px 20px 0px 0;';
        echo '}';

        echo '#' . $this->id . ' .services-item-icon {';
        echo 'margin-right: 1rem;';
        echo 'padding: .75rem 1.25rem;';
        echo 'background-color: #fff;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .services-item-icon:before {';
        echo 'content: "";';
        echo 'display: inline-block;';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'top: 0;';
        echo 'width: 3px;';
        echo 'height: 4.5rem;';
        echo 'background-color: var(--major-color);';
        echo 'transition: all .7s ease;';
        echo 'z-index: 1;';
        echo '}';

        echo '#' . $this->id . ' .services-item:hover .services-item-icon:before {';
        echo 'width: 5.5rem;';
        echo '}';

        echo '#' . $this->id . ' .services-item-icon i,';
        echo '#' . $this->id . ' .services-item-icon svg {';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo 'font-size: 3rem;';
        echo 'line-height: 1;';
        echo 'color: var(--major-color);';
        echo 'transition: all 1s ease;';
        echo 'z-index: 2;';
        echo '}';

        echo '#' . $this->id . ' .services-item:hover .services-item-icon i,';
        echo '#' . $this->id . ' .services-item:hover .services-item-icon svg {';
        echo 'color: #fff;';
        echo '}';

        echo '#' . $this->id . ' .services-item-title {';
        echo 'margin-top: .75rem;';
        echo 'font-size: 1.5rem;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .services-item-sub-title {';
        echo 'font-size: 1.25rem;';
        echo 'color: var(--major-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';


        echo '#' . $this->id . ' .services-item-link {';
        echo 'margin-top: 1.5rem;';
        echo '}';

        echo '#' . $this->id . ' .services-item-link a {';
        echo 'font-family: "Rajdhani";';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .services-item-link a:hover {';
        echo 'color: var(--minor-color);';
        echo '}';

        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .services-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '#' . $this->id . ' .services-items-container {';
        echo 'padding: 2rem;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1200px) {';

        echo '}';

        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .services-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '#' . $this->id . ' .services-items-container {';
        echo 'padding: 3rem;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="services">';
            echo '<div class="be-container">';

            if ($this->config->title !== '') {
                echo '<div class="be-row">';
                echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
                echo '<div class="be-col-24 be-md-col-20 be-xl-col-16 be-ta-center">';
                echo '<h2 class="services-title">';
                echo $this->config->title;
                echo '</h2>';
                echo '</div>';
                echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
                echo '</div>';
            }

            echo '<div class="services-items-container">';
            echo '<div class="services-items">';

            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if ($itemConfig->enable) {
                        echo '<div class="services-item">';
                        echo '<div class="services-item-box">';
                        switch ($item['name']) {
                            case 'Service':

                                echo '<div class="be-row">';

                                echo '<div class="be-col-auto">';
                                echo '<div class="services-item-icon">';
                                $itemConfig->icon = strtolower(trim($itemConfig->icon));
                                if (substr($itemConfig->icon, 0, 3) === 'bi-') {
                                    echo '<i class="' . $itemConfig->icon . '"></i>';
                                } elseif (substr($itemConfig->icon, 0, 5) === '<svg ') {
                                    echo $itemConfig->icon;
                                }
                                echo '</div>';
                                echo '</div>';

                                echo '<div class="be-col">';
                                echo '<div class="services-item-title">' . $itemConfig->title . '</div>';
                                echo '<div class="services-item-sub-title">' . $itemConfig->subTitle . '</div>';
                                echo '</div>';

                                echo '</div>';

                                echo '<div class="be-mt-150 be-c-777 be-lh-150">';
                                echo $itemConfig->description;
                                echo '</div>';

                                if ($itemConfig->linkText !== '' && $itemConfig->link !== '') {
                                    echo '<div class="services-item-link">';
                                    echo '<a href="' . $itemConfig->link . '">';
                                    echo $itemConfig->linkText;
                                    echo '</a>';
                                    echo '</div>';
                                }

                                break;
                            case 'RichText':
                                echo $itemConfig->content;
                                break;
                        }
                        echo '</div>';
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
