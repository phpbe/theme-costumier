<?php

namespace Be\Theme\Costumier\Section\Features;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('features');
        echo $this->getCssPadding('features');
        echo $this->getCssMargin('features');

        echo '#' . $this->id . ' .feature {';

        echo '}';


        echo '#' . $this->id . ' .features-title {';
        echo 'font-size: 2rem;';
        echo 'font-weight: 700;';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1.2;';
        echo 'color: var(--minor-color);';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo '}';

        echo '.features-items {';
        echo '}';

        echo '.features-item {';
        echo 'background-color: ' . $this->config->itemBackgroundColor . ';';
        echo '}';

        echo '.features-item-icon i,';
        echo '.features-item-icon svg {';
        echo 'display: inline-block;';
        echo 'font-size: 4rem;';
        echo 'color: var(--major-color);';
        echo 'transition: all 1s ease;';
        echo '}';

        echo '.features-item:hover .features-item-icon i,';
        echo '.features-item:hover .features-item-icon svg {';
        echo 'transform: rotateY(360deg);';
        echo '}';

        echo '.features-item-title {';
        echo 'margin-top: 1.5rem;';
        echo 'padding-top: 1.5rem;';
        echo 'border-top: #eee 1px solid;';
        echo 'font-size: 1.5rem;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '.features-item-index {';
        echo 'font-size: 4rem;';
        echo 'line-height: 1;';
        echo 'color: var(--major-color-8);';
        echo 'font-family: "Rajdhani";';
        echo 'padding-left: 1rem;';
        echo 'transition: all .6s ease-in-out;';
        echo '}';

        echo '.features-item:hover .features-item-index {';
        echo 'color: var(--major-color);';
        echo '}';




        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .features-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';



        echo '@media (min-width: 1200px) {';
        echo '.features-items {';
        echo 'display: flex;';
        echo 'justify-content: space-between;';
        echo '}';

        echo '.features-item {';
        echo 'width: calc((100% - 4rem) / 3);';
        echo '}';
        echo '}';



        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .features-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="features">';
            echo '<div class="be-container">';

            if ($this->config->title !== '') {
                echo '<div class="be-row">';
                echo '<div class="be-col-0 be-md-col-4 be-xl-col-6"></div>';
                echo '<div class="be-col-24 be-md-col-16 be-xl-col-12 be-ta-center">';
                echo '<h2 class="features-title">';
                echo $this->config->title;
                echo '</h2>';
                echo '</div>';
                echo '<div class="be-col-0 be-md-col-4 be-xl-col-6"></div>';
                echo '</div>';
            }

            echo '<div class="be-mt-100">';
            echo '<div class="features-items">';
            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                $i = 1;
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if ($itemConfig->enable) {
                        echo '<div class="features-item be-mt-100">';
                        switch ($item['name']) {
                            case 'Feature':
                                echo '<div class="be-px-150 be-py-200">';
                                echo '<div class="features-item-icon">';
                                $itemConfig->icon = strtolower(trim($itemConfig->icon));
                                if (substr($itemConfig->icon, 0, 3) === 'bi-') {
                                    echo '<i class="' . $itemConfig->icon . '"></i>';
                                } elseif (substr($itemConfig->icon, 0, 5) === '<svg ') {
                                    echo $itemConfig->icon;
                                }
                                echo '</div>';

                                echo '<div class="features-item-title">' . $itemConfig->title . '</div>';

                                echo '<div class="be-row be-mt-300">';
                                echo '<div class="be-col">';
                                echo '<div class="be-c-777 be-lh-150">';
                                echo $itemConfig->description;
                                echo '</div>';
                                echo '</div>';

                                echo '<div class="be-col-auto">';
                                echo '<div class="features-item-index">' . ($i < 10 ? ('0' . $i) : $i) . '</div>';
                                echo '</div>';
                                echo '</div>';

                                echo '</div>';
                                break;
                        }
                        echo '</div>';

                        $i++;
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
