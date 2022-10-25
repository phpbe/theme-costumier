<?php

namespace Be\Theme\Costumier\Section\Products;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('products');
        echo $this->getCssPadding('products');
        echo $this->getCssMargin('products');

        echo '#' . $this->id . ' .products {';

        echo '}';

        echo '#' . $this->id . ' .products-item:nth-of-type(even) {';
        echo 'background-color: #f8fafb;';
        echo '}';

        echo '#' . $this->id . ' .products-item-image {';
        echo 'overflow: hidden;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .products-item-image img {';
        echo 'display: block;';
        echo 'max-width: 100%;';
        echo 'transition: transform 1.5s ease-in-out;';
        echo '}';

        echo '#' . $this->id . ' .products-item:hover .products-item-image img {';
        echo 'transform: scale(1.2) translateY(-6%);';
        echo '}';

        echo '#' . $this->id . ' .products-item-image-overlay {';
        echo 'position: absolute;';
        echo 'top: 0;';
        echo 'left: 0;';
        echo 'width: 100%;';
        echo 'height: 100%;';
        echo 'opacity: 0;';
        echo 'visibility: hidden;';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo 'justify-content: center;';
        echo 'transition: all .5s ease-in-out;';

        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');
        $libCss = \Be\Be::getLib('Css');
        $rgbMinorColor = $libCss->hexToRgb($configTheme->minorColor);
        echo 'background-color:  rgb('. implode(' ', $rgbMinorColor).' / 75%);';

        echo '}';

        echo '#' . $this->id . ' .products-item:hover .products-item-image-overlay {';
        echo 'visibility: visible;';
        echo 'opacity: 1;';
        echo '}';


        echo '#' . $this->id . ' .products-item-image-overlay a {';
        echo 'display: block;';
        echo 'width: 3rem;';
        echo 'height: 3rem;';
        echo 'line-height: 3rem;';
        echo 'text-align: center;';
        echo 'font-size: 2rem;';
        echo 'background-color: var(--major-color);';
        echo 'color: #fff;';
        echo 'transform: scale(0);';
        echo 'transition: all .9s ease;';
        echo '}';

        echo '#' . $this->id . ' .products-item:hover .products-item-image-overlay a {';
        echo 'transform: scale(1);';
        echo '}';


        echo '#' . $this->id . ' .products-item-category {';
        echo 'margin-top: .75rem;';
        echo 'font-size: 1.25rem;';
        echo 'color: #777;';
        echo 'padding-left: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .products-item-title {';
        echo 'font-size: 1.5rem;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo 'padding-left: 2rem;';
        echo 'margin: .75rem 0 2rem 0;';
        echo '}';


        echo '@media (min-width: 2048px) {';
        echo '#' . $this->id . ' .products {';
        echo 'width: 1920px;';
        echo 'margin: 0 auto;';
        echo '}';
        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $count = 0;
            foreach ($this->config->items as $item) {
                if ($item['config']->enable) {
                    $count++;
                }
            }

            if ($count === 0) {
                return;
            }

            $wwwUrl = Be::getProperty('Theme.Costumier')->getWwwUrl();

            echo '<link rel="stylesheet" href="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.css">';
            $this->css();

            echo '<div class="products">';
            echo '<div class="swiper">';
            echo '<div class="swiper-wrapper">';
            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if ($itemConfig->enable) {
                        echo '<div class="products-item swiper-slide">';
                        switch ($item['name']) {
                            case 'Product':
                                echo '<div class="products-item-image">';
                                echo '<img src="' . $itemConfig->image . '" alt="' . $itemConfig->title . '">';
                                echo '<div class="products-item-image-overlay">';
                                echo '<a href="' . $itemConfig->link . '" title="' . $itemConfig->title . '"><i class="bi-plus"></i></a>';
                                echo '</div>';
                                echo '</div>';

                                echo '<div class="products-item-category">' . $itemConfig->category . '</div>';

                                echo '<div class="products-item-title">';
                                echo '<a href="' . $itemConfig->link . '" title="' . $itemConfig->title . '">';
                                echo $itemConfig->title;
                                echo '</a>';
                                echo '</div>';

                                break;
                        }
                        echo '</div>';
                    }
                }
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            echo '<script src="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.js"></script>';
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

            echo 'slidesPerView: 2,';
            //echo 'spaceBetween: 20,';

            echo 'breakpoints: {';
            echo '320: {';
            echo 'slidesPerView: 2,';
            //echo 'spaceBetween: 20';
            echo '},';
            echo '768: {';
            echo 'slidesPerView: 3,';
            echo '},';
            echo '1280: {';
            echo 'slidesPerView: 4,';
            echo '},';
            echo '1680: {';
            echo 'slidesPerView: 5,';
            echo '},';
            echo '},';

            echo '});';
            echo '</script>';
        }
    }

}
