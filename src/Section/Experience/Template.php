<?php

namespace Be\Theme\Costumier\Section\Experience;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        echo '<style type="text/css">';
        echo $this->getCssPadding('experience');
        echo $this->getCssMargin('experience');

        echo '#' . $this->id . ' .experience {';

        echo '}';

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .experience {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo '}';
        }

        echo '#' . $this->id . ' .experience-image img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .experience-side-a {';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .experience-tag {';
        echo 'margin-top: 1rem;';
        echo 'background-color: #fff;';
        echo 'padding: 2rem;';
        echo 'font-family: "Rajdhani";';
        echo 'max-width: 400px;';
        echo '}';


        echo '#' . $this->id . ' .experience-tag-head {';
        echo 'color: var(--major-color);';
        echo 'font-size: 4rem;';
        echo 'padding-right: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .experience-tag-text {';
        echo 'color: var(--minor-color);';
        echo 'font-size: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .experience-va-center {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';

        echo '#' . $this->id . ' .experience-inform-title {';
        echo 'color: var(--major-color);';
        echo 'font-family: "Rajdhani";';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .experience-inform-title:after {';
        echo 'content:\'\';';
        echo 'display: inline-block;';
        echo 'position: absolute;';
        echo 'top: 10px;';
        echo 'right: -13px;';
        echo 'width: 0;';
        echo 'height: 0;';
        echo 'border-style: solid;';
        echo 'border-width: 10px 10px 0px 0;';
        echo 'border-color: transparent var(--major-color) transparent transparent;';
        echo '}';

        echo '#' . $this->id . ' .experience-title {';
        echo 'margin-top: 1rem;';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .experience-icon {';
        echo 'font-size: 4rem;';
        echo 'padding-right: 1rem;';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .experience-icon-title {';
        echo 'font-size: 1.5rem;';
        echo 'line-height: 1.5;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .experience-icon-title span {';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo 'z-index: 1;';
        echo '}';

        echo '#' . $this->id . ' .experience-icon-title span:after {';
        echo 'content:\'\';';
        echo 'display: block;';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'bottom: -3px;';
        echo 'width: 100%;';
        echo 'height: 100%;';
        echo 'background-color: var(--major-color);';
        echo '-webkit-mask: url(' . $wwwUrl . '/images/text-underline.png) no-repeat 100% 100%;';
        echo 'z-index: -1;';
        echo '}';

        echo '#' . $this->id . ' .experience-lis {';
        echo 'font-size: 1.1rem;';
        echo 'line-height: 2;';
        echo 'color: var(--minor-color);';
        echo '}';

        echo '#' . $this->id . ' .experience-lis ul {';
        echo 'margin: 0;';
        echo 'padding: 0;';
        echo '}';

        echo '#' . $this->id . ' .experience-lis li {';
        echo 'list-style: none;';
        echo '}';

        echo '#' . $this->id . ' .experience-lis li i {';
        echo 'color: var(--major-color);';
        echo 'margin-right: .5rem;';
        echo '}';


        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .experience-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1200px) {';

        echo '#' . $this->id . ' .experience-tag {';
        echo 'position: absolute;';
        echo 'right: -40px;';
        echo 'bottom: 20%;';
        echo '}';


        echo '}';

        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .experience-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';



        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="experience">';
            echo '<div class="be-container">';

            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="experience-side-a">';

            echo '<div class="experience-image">';
            echo '<img src="' . $this->config->image . '" alt="' . $this->config->title . '">';
            echo '</div>';

            echo '<div class="experience-tag">';
            echo '<div class="be-row">';
            echo '<div class="be-col-auto">';
            echo '<div class="experience-tag-head">';
            echo $this->config->tagHead;
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col">';
            echo '<div class="experience-tag-text">';
            echo $this->config->tag;
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col experience-va-center">';

            echo '<div class="experience-side-b">';

            echo '<div class="experience-inform-title">';
            echo $this->config->informTitle;
            echo '</div>';

            echo '<div class="experience-title">';
            echo $this->config->title;
            echo '</div>';

            echo '<div class="be-row be-mt-200">';
            echo '<div class="be-col-auto">';
            echo '<div class="experience-icon">';
            $this->config->icon = strtolower(trim($this->config->icon));
            if (substr($this->config->icon, 0, 3) === 'bi-') {
                echo '<i class="' . $this->config->icon . '"></i>';
            } elseif (substr($this->config->icon, 0, 5) === '<svg ') {
                echo $this->config->icon;
            }
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col">';
            echo '<div class="experience-icon-title">';
            echo $this->config->iconTitle;
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="be-mt-200 be-c-777 be-lh-150">';
            echo $this->config->description;
            echo '</div>';

            echo '<div class="be-mt-200">';
            echo '<div class="experience-lis">';
            echo str_replace('<li>' , '<li><i class="bi-check-circle-fill"></i>', $this->config->lis);
            echo '</div>';
            echo '</div>';
            
            echo '</div>';

            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
        }
    }

}
