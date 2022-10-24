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





        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .production-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1200px) {';

        echo '}';

        echo '@media (min-width: 1560px) {';

        echo '#' . $this->id . ' .production-title {';
        echo 'font-size: 3rem;';
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



            echo '</div>';
            echo '</div>';
        }
    }

}
