<?php

namespace Be\Theme\Costumier\Section\AppCmsLatest;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('app-cms-latest');
        echo $this->getCssMargin('app-cms-latest');

        echo '#' . $this->id . ' .app-cms-latest {';
        echo '}';


        echo '#' . $this->id . ' .app-cms-latest-inform-title {';
        echo 'color: var(--major-color);';
        echo 'font-family: "Rajdhani";';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-inform-title:after {';
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

        echo '#' . $this->id . ' .app-cms-latest-title {';
        echo 'margin-top: 1rem;';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-link .be-btn {';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-link .be-btn:after {';
        echo 'content:\'\';';
        echo 'display: inline-block;';
        echo 'position: absolute;';
        echo 'right: 3px;';
        echo 'bottom: 3px;';
        echo 'width: 0;';
        echo 'height: 0;';
        echo 'border-style: solid;';
        echo 'border-width: 10px 10px 0px 0;';
        echo 'border-color: transparent #fff transparent transparent;';
        echo '}';


        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');
        $libCss = \Be\Be::getLib('Css');
        $rgbMinorColor = $libCss->hexToRgb($configTheme->minorColor);

        echo '#' . $this->id . ' .app-cms-latest-small {';
        echo 'padding: 2rem;';
        echo 'background-color:  rgb(' . implode(' ', $rgbMinorColor) . ' / 2%);';
        echo 'border: #eee 1px solid;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-large,';
        echo '#' . $this->id . ' .app-cms-latest-small-image {';
        echo 'background-size: cover;';
        echo 'background-position: 100%;';
        echo 'height: 100%;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-large {';
        echo 'min-height: 360px;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-small-image {';
        echo 'width: 85px;';
        echo 'margin-right: 1rem;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-small-title a {';
        echo 'margin-top: .5rem;';
        echo 'font-size: 1.25rem;';
        echo 'line-height: 1.5;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-small-title a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-large-bottom {';
        echo 'position: absolute;';
        echo 'left: 2rem;';
        echo 'right: 2rem;';
        echo 'bottom: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-large-title a {';
        echo 'font-size: 1.25rem;';
        echo 'line-height: 1.5;';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .app-cms-latest-large-title a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .app-cms-latest-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';


        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .app-cms-latest-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable !== 1) return;

        $articles = [];
        try {
            $service = Be::getService('App.Cms.Article');
            if ($this->config->layout === '5') {
                $articles = $service->getLatestArticles(5);
            } else {
                $articles = $service->getLatestArticles(3);
            }
        } catch (\Throwable $t) {
        }

        $count = count($articles);

        if ($count === 0) return;

        $this->css($articles);

        echo '<div class="app-cms-latest">';
        echo '<div class="be-container">';

        echo '<div class="app-cms-latest-inform-title">';
        echo $this->config->informTitle;
        echo '</div>';

        echo '<div class="be-row">';
        echo '<div class="be-col-24 be-lg-col">';

        echo '<div class="app-cms-latest-title">';
        echo $this->config->title;
        echo '</div>';

        echo '</div>';
        echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-100 be-mt-200"></div></div>';
        echo '<div class="be-col-24 be-lg-col-auto">';

        if ($this->config->linkText !== '' && $this->config->link !== '') {
            echo '<div class="app-cms-latest-link">';
            echo '<a href="' . $this->config->link . '" class="be-btn be-btn-major">';
            echo $this->config->linkText;
            echo '</a>';
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';


        echo '<div class="be-row be-mt-200">';

        if ($this->config->layout === '5' && $count > 3) {
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="app-cms-latest-small">';
            $articles3 = array_slice($articles, 0, 3);
            $articles = array_slice($articles, 3);
            $i = 0;
            foreach ($articles3 as $article) {
                echo '<div class="be-row ' . ($i > 0 ? ' be-mt-100 be-pt-100 be-bt-eee' : '') . '">';
                echo '<div class="be-col-auto">';
                echo '<div class="app-cms-latest-small-image" style="background-image: url(' . $article->image . ')"></div>';
                echo '</div>';

                echo '<div class="be-col">';
                echo '<div class="be-c-777">' . date('j M, Y', strtotime($article->publish_time)) . '</div>';
                echo '<div class="app-cms-latest-small-title">';
                echo '<a class="be-t-ellipsis-2" href="' . beUrl('Cms.Article.detail', ['id' => $article->id]) . '" title="' . $article->title . '">';
                echo $article->title;
                echo '</a>';
                echo '</div>';
                echo '</div>';

                echo '</div>';
                $i++;
            }
            echo '</div>';

            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-200 be-mt-200"></div></div>';
        }

        $i = 0;
        foreach ($articles as $article) {
            if ($i > 0) {
                echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-200 be-mt-200"></div></div>';
            }
            echo '<div class="be-col-24 be-lg-col">';
            echo '<div class="app-cms-latest-large" style="background-image: url(' . $article->image . ')">';
            echo '<div class="app-cms-latest-large-bottom">';
            echo '<div class="app-cms-latest-large-title">';
            echo '<a class="be-t-ellipsis-2" href="' . beUrl('Cms.Article.detail', ['id' => $article->id]) . '" title="' . $article->title . '">';
            echo $article->title;
            echo '</a>';
            echo '</div>';

            echo '<div class="be-ta-right be-mt-50 be-pt-50 be-c-fff" style="border-top: #eee 1px dashed;">' . date('j M, Y', strtotime($article->publish_time)) . '</div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';
            $i++;
        }
        echo '</div>';


        echo '</div>'; // be-container
        echo '</div>'; // app-cms-latest

    }

}
