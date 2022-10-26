<?php

namespace Be\Theme\Costumier\Section\Faq;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();

        echo '<style type="text/css">';
        echo $this->getCssPadding('faq');
        echo $this->getCssMargin('faq');

        echo '#' . $this->id . ' .faq {';
        echo '}';


        echo '#' . $this->id . ' .faq-image img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .faq-icon {';
        echo 'font-size: 3rem;';
        echo 'padding-right: 1rem;';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .faq-icon-title {';
        echo 'font-size: 1.5rem;';
        echo 'line-height: 1.5;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .faq-icon-title span {';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo 'z-index: 1;';
        echo '}';

        echo '#' . $this->id . ' .faq-icon-title span:after {';
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


        echo '#' . $this->id . ' .faq-tag {';
        echo 'margin-top: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .faq-tag-head {';
        echo 'color: var(--minor-color);';
        echo 'font-size: 5rem;';
        echo 'padding-right: 1rem;';
        echo 'line-height: 1;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .faq-tag-head sup {';
        echo 'font-size: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .faq-tag-description {';
        echo 'color: #777;';
        echo 'line-height: 1.5;';
        echo '}';

        echo '#' . $this->id . ' .faq-link {';
        echo 'margin-top: 1.5rem;';
        echo '}';

        echo '#' . $this->id . ' .faq-link a {';
        echo 'font-family: "Rajdhani";';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .faq-link a:hover {';
        echo 'color: var(--minor-color);';
        echo '}';

        echo '#' . $this->id . ' .faq-inform-title {';
        echo 'color: var(--major-color);';
        echo 'font-family: "Rajdhani";';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .faq-inform-title:after {';
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

        echo '#' . $this->id . ' .faq-title {';
        echo 'margin-top: 1rem;';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';


        echo '#' . $this->id . ' .faq-questions {';
        echo 'margin-top: 3rem;';
        echo '}';

        echo '#' . $this->id . ' .faq-question {';
        echo 'margin-top: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .faq-question-open {';
        echo '}';

        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');
        $libCss = \Be\Be::getLib('Css');
        $rgbMinorColor = $libCss->hexToRgb($configTheme->minorColor);

        echo '#' . $this->id . ' .faq-question-title {';
        echo 'font-size: 1.1rem;';
        echo 'font-family: "Rajdhani";';
        echo 'line-height: 1;';
        echo 'color: var(--minor-color);';
        echo 'background-color:  rgb(' . implode(' ', $rgbMinorColor) . ' / 2%);';
        echo 'border: #eee 1px solid;';
        echo 'padding: 1rem;';
        echo 'cursor: pointer;';
        echo 'user-selection: none;';
        echo 'transition: all 0.3s ease 0s;';
        echo '}';

        echo '#' . $this->id . ' .faq-question-open .faq-question-title {';
        echo 'color: #fff;';
        echo 'background-color: var(--minor-color);';
        echo '}';


        echo '#' . $this->id . ' .faq-question-answer {';
        echo 'line-height: 1.5;';
        echo 'color: #777;';
        echo 'background-color:  rgb(' . implode(' ', $rgbMinorColor) . ' / 2%);';
        echo 'border: #eee 1px solid;';
        echo 'border-top: none;';
        echo 'padding: 1rem;';
        echo 'display:none;';
        echo '}';


        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .faq-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1200px) {';

        echo '}';

        echo '@media (min-width: 1560px) {';

        echo '#' . $this->id . ' .faq-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';


        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="faq">';
            echo '<div class="be-container">';

            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="faq-image">';
            echo '<img src="' . $this->config->image . '" alt="' . $this->config->title . '">';
            echo '</div>';

            echo '<div class="be-row be-mt-200">';
            echo '<div class="be-col">';
            echo '<div class="faq-icon-title">';
            echo $this->config->iconTitle;
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col-auto">';
            echo '<div class="faq-icon">';
            $this->config->icon = strtolower(trim($this->config->icon));
            if (substr($this->config->icon, 0, 3) === 'bi-') {
                echo '<i class="' . $this->config->icon . '"></i>';
            } elseif (substr($this->config->icon, 0, 5) === '<svg ') {
                echo $this->config->icon;
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="faq-tag">';
            echo '<div class="be-row">';
            echo '<div class="be-col-auto">';
            echo '<div class="faq-tag-head">';
            echo $this->config->tagHead;
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col">';
            echo '<div class="faq-tag-description">';
            echo $this->config->tagDescription;
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';


            if ($this->config->linkText !== '' && $this->config->link !== '') {
                echo '<div class="faq-link">';
                echo '<a href="' . $this->config->link . '">';
                echo $this->config->linkText;
                echo '</a>';
                echo '</div>';
            }


            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="faq-inform-title">';
            echo $this->config->informTitle;
            echo '</div>';

            echo '<div class="faq-title">';
            echo $this->config->title;
            echo '</div>';

            echo '<div class="be-mt-200 be-c-777 be-lh-150">';
            echo $this->config->description;
            echo '</div>';

            echo '<div class="faq-questions">';
            foreach ($this->config->items as $item) {
                $itemConfig = $item['config'];
                if ($itemConfig->enable) {
                    echo '<div class="faq-question">';
                    switch ($item['name']) {
                        case 'Question':
                            echo '<div class="faq-question-title">' . $itemConfig->question . '</div>';
                            echo '<div class="faq-question-answer">' . $itemConfig->answer . '</div>';
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
            ?>
            <script>
                $(function () {
                    $("#<?php echo $this->id; ?> .faq-question-title").click(function() {
                        let $e = $(this);
                        let $answer = $e.next();
                        let $parent = $e.parent();
                        if ($parent.hasClass("faq-question-open")) {
                            $answer.slideUp();
                            $parent.removeClass("faq-question-open");
                        } else {
                            if ($("#<?php echo $this->id; ?> .faq-question-open")) {
                                $("#<?php echo $this->id; ?> .faq-question-open .faq-question-title").click();
                            }

                            $answer.slideDown();
                            $parent.addClass("faq-question-open");
                        }
                    });

                    $("#<?php echo $this->id; ?> .faq-question-title").first().click();

                });
            </script>
            <?php
        }
    }

}
