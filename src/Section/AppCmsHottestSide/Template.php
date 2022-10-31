<?php

namespace Be\Theme\Costumier\Section\AppCmsHottestSide;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['west', 'east'];


    public function display()
    {
        if ($this->config->enable !== 1) return;

        $articles = [];
        try {
            $articles = Be::getService('App.Cms.Article')->getHottestArticles($this->config->quantity);
        } catch (\Throwable $t) {
        }

        if (count($articles) === 0) return;

        $moreLink = beUrl('Cms.Article.hottest');
        echo Be::getService('Theme.Costumier.Cms')->makeArticlesSection($this, 'app-cms-hottest-side', $articles, $moreLink);
    }

}
