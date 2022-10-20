<?php

namespace Be\Theme\Costumier\Section\HeaderTips;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        echo '<style type="text/css">';

        // 手机端
        echo '@media (max-width: 1200px) {';
        echo '.header-tips {';
        echo 'display: none;';
        echo '}';
        echo '}';

        // 电脑端
        echo '@media (min-width: 1200px) {';

        echo '.header-tips {';
        echo 'background-color: var(--main-color);';
        echo 'color: #fff;';
        echo 'height: 50px;';
        echo 'line-height: 50px;';
        echo 'padding-left: 30px;';
        echo 'padding-right: 30px;';
        echo '}';

        echo '.header-tips a {';
        echo 'color: #fff;';
        echo '}';

        echo '.header-tips a:hover {';
        echo 'color: #eee;';
        echo '}';

        echo '.header-tips-im-icons {';
        echo 'padding-left: 30px;';
        echo '}';

        echo '.header-tips-im-icons a {';
        echo 'margin: 0 5px;';
        echo 'padding: 5px;';
        echo 'border: #fff 1px solid;';
        echo 'border-radius: 50%;';
        echo '}';

        echo '.header-tips-im-icons a:hover {';
        echo 'background-color: #fff;';
        echo 'color: var(--main-color);';
        echo '}';

        echo '.header-tips-im-icons i {';
        echo '}';

        echo '}';

        echo '@media (min-width: 1560px) {';
        echo '.header-tips {';
        echo 'padding-left: 60px;';
        echo 'padding-right: 60px;';
        echo '}';
        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();

            echo '<div class="header-tips">';

            echo '<div class="be-row">';
            echo '<div class="be-col-auto">' . $this->config->text . '</div>';
            echo '<div class="be-col"></div>';

            if ($this->config->address !== '') {
                echo '<div class="be-col-auto">';
                echo '<i class="bi-pin-map-fill"></i> ';
                echo '<a href="'.$this->config->addressLink.'" target="_blank">';
                echo $this->config->address;
                echo '</a>';
                echo '</div>';
            }

            echo '<div class="be-col-auto">';

            echo '<div class=" header-tips-im-icons">';
            if ($this->config->imFacebook !== '') {
                echo '<a href="https://www.facebook.com/'.$this->config->imFacebook.'/" target="_blank">';
                echo '<i class="bi-facebook"></i>';
                echo '</a>';
            }

            if ($this->config->imTwitter !== '') {
                echo '<a href="https://twitter.com/'.$this->config->imTwitter.'/" target="_blank">';
                echo '<i class="bi-twitter"></i>';
                echo '</a>';
            }

            if ($this->config->imLinkedin !== '') {
                echo '<a href="https://www.linkedin.com/'.$this->config->imLinkedin.'/" target="_blank">';
                echo '<i class="bi-linkedin"></i>';
                echo '</a>';
            }

            if ($this->config->imInstagram !== '') {
                echo '<a href="https://www.instagram.com/'.$this->config->imInstagram.'/" target="_blank">';
                echo '<i class="bi-instagram"></i>';
                echo '</a>';
            }
            echo '</div>';

            echo '</div>';
            echo '</div>';

            echo '</div>';
        }
    }

}
