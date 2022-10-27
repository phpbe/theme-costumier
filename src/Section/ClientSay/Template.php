<?php

namespace Be\Theme\Costumier\Section\ClientSay;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        echo '<style type="text/css">';
        echo $this->getCssMargin('client-say');
        echo $this->getCssPadding('client-say-left');
        echo $this->getCssPadding('client-say-right');

        echo '#' . $this->id . ' .client-say {';
        echo 'overflow: hidden;';
        echo '}';

        echo '#' . $this->id . ' .client-say-container {';
        echo '}';

        echo '#' . $this->id . ' .client-say-left {';
        echo 'position: relative;';
        echo 'padding-left: 2rem;';
        echo 'padding-right: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .client-say-left-bg {';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'top: 0;';
        echo 'right: 0;';
        echo 'width: auto;';
        echo 'height: 100%;';
        echo 'background-image: url(' . $this->config->leftBg . ');';
        echo 'background-position: center;';
        echo 'background-repeat: no-repeat;';
        echo 'background-size: cover;';
        echo '}';

        echo '#' . $this->id . ' .client-say-left-body {';
        echo 'position: relative;';
        echo 'width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .client-say-right {';
        echo 'position: relative;';
        echo 'min-height: 400px;';
        echo '}';

        echo '#' . $this->id . ' .client-say-right-bg {';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'top: 0;';
        echo 'right: 0;';
        echo 'width: auto;';
        echo 'height: 100%;';
        echo 'background-image: url(' . $this->config->rightBg . ');';
        echo 'background-position: center;';
        echo 'background-repeat: no-repeat;';
        echo 'background-size: cover;';
        echo '}';


        echo '#' . $this->id . ' .client-say-inform-title {';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .client-say-inform-title:after {';
        echo 'content:\'\';';
        echo 'display: inline-block;';
        echo 'position: absolute;';
        echo 'top: 10px;';
        echo 'right: -13px;';
        echo 'width: 0;';
        echo 'height: 0;';
        echo 'border-style: solid;';
        echo 'border-width: 10px 10px 0px 0;';
        echo 'border-color: transparent #fff transparent transparent;';
        echo '}';

        echo '#' . $this->id . ' .client-say-title {';
        echo 'margin-top: 1rem;';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo '}';


        echo '#' . $this->id . ' .client-say-feedbacks {';
        echo 'margin-top: 3rem;';
        echo '}';

        echo '#' . $this->id . ' .client-say-feedback {';
        echo 'margin-top: 1rem;';
        echo '}';


        echo '#' . $this->id . ' .client-say-feedback-avatar {';
        echo 'border-right: var(--major-color) 3px solid;';
        echo 'padding-right: 2rem;';
        echo 'margin-right: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .client-say-feedback-avatar img {';
        echo 'max-width: 100px;';
        echo 'border: #444 2px solid;';
        echo 'border-radius: 50%;';
        echo 'padding: 5px;';
        echo '}';

        echo '#' . $this->id . ' .client-say-feedback-name {';
        echo 'font-size: 1.5rem;';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .client-say-feedback-job {';
        echo 'margin-top: .5rem;';
        echo 'color: #999;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .client-say-feedback-content {';
        echo 'margin-top: 2rem;';
        echo 'color: #999;';
        echo '}';

        echo '@media (max-width: 960px) {';

        echo '#' . $this->id . ' .client-say-left {';
        echo 'padding-left: 2rem;';
        echo '}';

        echo '}';


        echo '@media (min-width: 960px) {';

        echo '#' . $this->id . ' .client-say-container {';
        echo 'display: flex;';
        echo '}';

        echo '#' . $this->id . ' .client-say-left {';
        echo 'padding-left: 0;';
        echo 'flex: 0 0 50%;';
        echo 'width: 50%;';
        echo '}';

        echo '#' . $this->id . ' .client-say-left-bg {';
        echo 'margin-left: -300px;';
        echo '}';

        echo '#' . $this->id . ' .client-say-right {';
        echo 'flex: 0 0 50%;';
        echo 'width: 50%;';
        echo 'margin-top: 0;';
        echo '}';

        echo '#' . $this->id . ' .client-say-right-bg {';
        echo 'margin-right: -300px;';
        echo '}';

        echo '}';


        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .client-say-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';


        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .client-say-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '#' . $this->id . ' .client-say-left-bg {';
        echo 'margin-left: -500px;';
        echo '}';

        echo '#' . $this->id . ' .client-say-right-bg {';
        echo 'margin-right: -500px;';
        echo '}';

        echo '}';


        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="client-say">';
            echo '<div class="be-container">';

            echo '<div class="client-say-container">';
            echo '<div class="client-say-left">';

            echo '<div class="client-say-left-bg"></div>';

            echo '<div class="client-say-left-body">';

            echo '<div class="client-say-inform-title">';
            echo $this->config->informTitle;
            echo '</div>';

            echo '<div class="client-say-title">';
            echo $this->config->title;
            echo '</div>';

            echo '<div class="client-say-feedbacks">';
            echo '<div class="swiper">';
            echo '<div class="swiper-wrapper">';
            foreach ($this->config->items as $item) {
                $itemConfig = $item['config'];
                if ($itemConfig->enable) {
                    echo '<div class="client-say-feedback swiper-slide">';
                    switch ($item['name']) {
                        case 'Feedback':
                            echo '<div class="be-row">';
                            echo '<div class="be-col-auto">';
                            echo '<div class="client-say-feedback-avatar">';
                            echo '<img src="' . $itemConfig->avatar . '" alt="' . $itemConfig->name . '">';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="be-col">';
                            echo '<div class="client-say-feedback-name">' . $itemConfig->name . '</div>';
                            echo '<div class="client-say-feedback-job">' . $itemConfig->job . '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="client-say-feedback-content">' . $itemConfig->content . '</div>';
                            break;
                    }
                    echo '</div>';
                }
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '<div class="client-say-right">';
            echo '<div class="client-say-right-bg"></div>';
            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';

            $key = 'Theme:Costumier:swiper';
            if (!Be::hasContext($key)) {
                $wwwUrl = Be::getProperty('Theme.Costumier')->getWwwUrl();
                echo '<link rel="stylesheet" href="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.css">';
                echo '<script src="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.js"></script>';
            }

            echo '<script>';

            echo 'new Swiper("#' . $this->id . ' .swiper", {';

            if ($this->config->loop) {
                echo 'loop: true,';
            }

            if ($this->config->autoplay) {
                echo 'autoplay: {';
                echo 'delay: ' . $this->config->delay;
                echo '},';

                echo 'speed: ' . $this->config->speed . ',';
            }

            echo '});';
            echo '</script>';


        }
    }

}
