<?php

namespace Be\Theme\Costumier\Section\WorkingProcess;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('working-process');
        echo $this->getCssPadding('working-process');
        echo $this->getCssMargin('working-process');

        echo '#' . $this->id . ' .working-process {';

        echo '}';

        echo '#' . $this->id . ' .working-process-title {';
        echo 'font-size: 2rem;';
        echo 'font-weight: 700;';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1.2;';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo 'color: var(--minor-color);';
        echo '}';


        echo '#' . $this->id . ' .working-process-item-icon {';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .working-process-item-icon-box {';
        echo 'margin: 2rem auto;';
        echo 'background-color: #fff;';
        echo 'position: relative;';
        echo 'width: 6rem;';
        echo 'height: 6rem;';
        echo 'line-height: 6rem;';
        echo 'box-shadow: 0px 0px 7px 0px #eee;';
        echo 'transition: all .5s ease;';
        echo '}';

        echo '#' . $this->id . ' .working-process-item-index {';
        echo 'position: absolute;';
        echo 'counter-increment: section;';
        echo 'content: counter(section,decimal-leading-zero);';
        echo 'bottom: 2rem;';
        echo 'right: -1rem;';
        echo 'width: 2rem;';
        echo 'height: 2rem;';
        echo 'border-radius: 50%;';
        echo 'background-color: var(--minor-color);';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo 'font-size: 1rem;';
        echo 'line-height: 2rem;';
        echo 'text-align: center;';
        echo 'transition: all .5s ease;';
        echo '}';

        echo '#' . $this->id . ' .working-process-item:hover .working-process-item-icon-box {';
        echo 'transform: translateY(-10px);';
        echo '}';

        echo '#' . $this->id . ' .working-process-item:hover .working-process-item-index {';
        echo 'background-color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .working-process-item-icon-box i,';
        echo '#' . $this->id . ' .working-process-item-icon-box svg {';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo 'font-size: 3rem;';
        echo 'color: var(--major-color);';
        echo 'transition: all 1s ease;';
        echo 'z-index: 2;';
        echo '}';


        echo '#' . $this->id . ' .working-process-item-title {';
        echo 'margin-top: .75rem;';
        echo 'font-size: 1.5rem;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo 'text-align: center;';
        echo '}';



        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .working-process-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';



        echo '@media (min-width: 1200px) {';
        echo '.working-process-items {';
        echo 'display: flex;';
        echo 'justify-content: space-between;';
        echo '}';

        echo '.working-process-item {';
        echo 'width: calc((100% - 4rem) / 4);';
        echo '}';
        echo '}';



        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .working-process-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';


        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="working-process">';
            echo '<div class="be-container">';

            if ($this->config->title !== '') {
                echo '<div class="be-row">';
                echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
                echo '<div class="be-col-24 be-md-col-20 be-xl-col-16 be-ta-center">';
                echo '<h2 class="working-process-title">';
                echo $this->config->title;
                echo '</h2>';
                echo '</div>';
                echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
                echo '</div>';
            }

            echo '<div class="working-process-items">';

            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                $i = 1;
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if ($itemConfig->enable) {
                        echo '<div class="working-process-item">';
                        switch ($item['name']) {
                            case 'Process':

                                echo '<div class="working-process-item-icon">';
                                echo '<div class="working-process-item-icon-box">';
                                $itemConfig->icon = strtolower(trim($itemConfig->icon));
                                if (substr($itemConfig->icon, 0, 3) === 'bi-') {
                                    echo '<i class="' . $itemConfig->icon . '"></i>';
                                } elseif (substr($itemConfig->icon, 0, 5) === '<svg ') {
                                    echo $itemConfig->icon;
                                }
                                echo '<div class="working-process-item-index">' . ($i < 10 ? ('0' . $i) : $i) . '</div>';
                                echo '</div>';
                                echo '</div>';

                                echo '<div class="working-process-item-title">' . $itemConfig->title . '</div>';

                                echo '<div class="be-mt-100 be-ta-center be-c-777 be-lh-150">';
                                echo $itemConfig->description;
                                echo '</div>';

                                break;
                        }
                        echo '</div>';
                    }

                    $i++;
                }
            }

            echo '</div>';

            echo '</div>';
            echo '</div>';
        }
    }

}
