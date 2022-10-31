<?php

namespace Be\Theme\Costumier\Service;


use Be\Be;

class Cms
{


    /**
     * 生成文章列表部件
     *
     * @param object $section
     * @param string $class
     * @param array $articles
     * @param string $moreLink
     * @return string
     */
    public function makeArticlesSection(object $section, string $class, array $articles, string $moreLink = null): string
    {
        $html = '';
        
        $html .= '<style type="text/css">';
        $html .= $section->getCssPadding($class);
        $html .= $section->getCssMargin($class);

        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');
        $libCss = Be::getLib('Css');
        $rgbMinorColor = $libCss->hexToRgb($configTheme->minorColor);

        $html .= '#' . $section->id . ' .' . $class . ' {';
        $html .= 'padding: 2rem;';
        $html .= 'background-color:  rgb(' . implode(' ', $rgbMinorColor) . ' / 2%);';
        $html .= 'border: #ddd 1px solid;';
        $html .= '}';

        $html .= '#' . $section->id . ' .' . $class . '-title {';
        $html .= 'font-size: 1.5rem;';
        $html .= 'line-height: 1.1;';
        $html .= 'color: var(--minor-color);';
        $html .= 'font-family: "Rajdhani";';
        $html .= '}';


        $html .= '#' . $section->id . ' .' . $class . '-item-image {';
        $html .= 'background-size: cover;';
        $html .= 'background-position: 100%;';
        $html .= 'width: 85px;';
        $html .= 'height: 100%;';
        $html .= 'margin-right: 1rem;';
        $html .= '}';

        $html .= '#' . $section->id . ' .' . $class . '-item-title a {';
        $html .= 'margin-top: .5rem;';
        $html .= 'font-size: 1.25rem;';
        $html .= 'line-height: 1.5;';
        $html .= 'color: var(--minor-color);';
        $html .= 'font-family: "Rajdhani";';
        $html .= '}';

        $html .= '#' . $section->id . ' .' . $class . '-item-title a:hover {';
        $html .= 'color: var(--major-color);';
        $html .= '}';

        $html .= '</style>';

        $html .= '<div class="' . $class . '">';

        $html .= '<div class="' . $class . '-title">';
        $html .= $section->config->title;
        $html .= '</div>';

        $i = 0;
        foreach ($articles as $article) {
            $html .= '<div class="be-row ' . ($i > 0 ? ' be-mt-100 be-pt-100 be-bt-eee' : 'be-mt-200') . '">';
            $html .= '<div class="be-col-auto">';
            $html .= '<div class="' . $class . '-item-image" style="background-image: url(' . $article->image . ')"></div>';
            $html .= '</div>';

            $html .= '<div class="be-col">';
            $html .= '<div class="be-c-777">' . date('j M, Y', strtotime($article->publish_time)) . '</div>';
            $html .= '<div class="' . $class . '-item-title">';
            $html .= '<a class="be-t-ellipsis-2" href="' . beUrl('Cms.Article.detail', ['id' => $article->id]) . '" title="' . $article->title . '">';
            $html .= $article->title;
            $html .= '</a>';
            $html .= '</div>';
            $html .= '</div>';

            $html .= '</div>';
            $i++;
        }

        $html .= '</div>'; // ' . $class . '

        return $html;
    }

}
