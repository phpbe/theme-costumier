<?php

namespace Be\Theme\Costumier\Section\HeaderSlider;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('header-slider');
        echo $this->getCssPadding('header-slider');
        echo $this->getCssMargin('header-slider');

        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');

        if ($this->config->pagination) {
            echo '.swiper-pagination-bullet-active {';
            echo 'background-color: ' . $configTheme->mainColor . ';';
            echo '}';
        }

        if ($this->config->navigation) {
            echo '.swiper-button-prev, ';
            echo '.swiper-button-next {';
            echo 'color: #fff;';
            echo 'width: ' . ($this->config->navigationSize / 44 * 27) . 'px;';
            echo 'height: ' . $this->config->navigationSize . 'px;';
            echo 'margin-top: -' . ($this->config->navigationSize / 2) . 'px;';
            echo 'opacity: .1;';
            echo 'transition: opacity 0.3s ease;';
            echo '}';

            echo '.swiper-container:hover .swiper-button-prev, ';
            echo '.swiper-container:hover .swiper-button-next {';
            echo 'opacity: 1;';
            echo '}';

            echo '.swiper-button-prev:after, ';
            echo '.swiper-button-next:after {';
            echo 'font-size: ' . $this->config->navigationSize . ';';
            echo '}';
        }

        // 手机版，电脑版上传不同的图片
        echo '@media (max-width: 992px) {';
        echo '.header-slider-image,';
        echo '.header-slider-image-with-text-overlay-image {';
        echo 'display:none;';
        echo '}';
        echo '.header-slider-image-mobile,';
        echo '.header-slider-image-with-text-overlay-image-mobile {';
        echo 'display:block;';
        echo '}';
        echo '}';

        // 手机版，电脑版上传不同的图片
        echo '@media (min-width: 992px) {';
        echo '.header-slider-image,';
        echo '.header-slider-image-with-text-overlay-image {';
        echo 'display:block;';
        echo '}';
        echo '.header-slider-image-mobile,';
        echo '.header-slider-image-with-text-overlay-image-mobile {';
        echo 'display:none;';
        echo '}';
        echo '}';

        echo '.header-slider-image img,';
        echo '.header-slider-image-mobile img,';
        echo '.header-slider-image-with-text-overlay-image img,';
        echo '.header-slider-image-with-text-overlay-image-mobile img {';
        echo 'width: 100%;';
        echo '}';

        echo '.header-slider-image img,';
        echo '.header-slider-image-with-text-overlay-image img {';
        echo 'min-width: 1024px;';
        echo '}';

        // 未上传图像时的占位符
        echo '.header-slider-image .no-image,';
        echo '.header-slider-image-mobile .no-image,';
        echo '.header-slider-image-with-text-overlay-image .no-image,';
        echo '.header-slider-image-with-text-overlay-image-mobile .no-image {';
        echo 'width: 100%;';
        echo 'height: 400px;';
        echo 'line-height: 400px;';
        echo 'color: #fff;';
        echo 'font-size: 24px;';
        echo 'text-align: center;';
        echo 'text-shadow:  5px 5px 5px #999;';
        echo 'background-color: rgba(35, 35, 35, 0.2);';
        echo '}';


        echo '.header-slider-image-with-text-overlay-container {';
        echo 'position: relative;';
        echo 'overflow: hidden;';
        echo '}';

        echo '.header-slider-image-with-text-overlay-content-container {';
        echo 'position: absolute;';
        echo 'padding-left: 0.75rem;';
        echo 'padding-right: 0.75rem;';
        echo 'width: 100%;';
        echo 'z-index; 2;';
        echo 'top: 0;';
        echo 'bottom: 0;';
        echo '}';
        echo '@media (max-width: 768px) {';
        echo '.header-slider-image-with-text-overlay-content-container {';
        echo '}';
        echo '}';
        echo '@media (min-width: 768px) {';
        echo '.header-slider-image-with-text-overlay-content-container {';
        echo 'max-width: 720px;';
        echo 'left: calc((100% - 720px) / 2);';
        echo '}';
        echo '}';
        echo '@media (min-width: 992px) {';
        echo '.header-slider-image-with-text-overlay-content-container {';
        echo 'max-width: 960px;';
        echo 'left: calc((100% - 960px) / 2);';
        echo '}';
        echo '}';
        echo '@media (min-width: 1200px) {';
        echo '.header-slider-image-with-text-overlay-content-container {';
        echo 'max-width: 1140px;';
        echo 'left: calc((100% - 1140px) / 2);';
        echo '}';
        echo '}';
        echo '@media (min-width: 1400px) {';
        echo '.header-slider-image-with-text-overlay-content-container {';
        echo 'max-width: 1320px;';
        echo 'left: calc((100% - 1320px) / 2);';
        echo '}';
        echo '}';

        echo '.header-slider-image-with-text-overlay-content {';
        echo 'position: absolute;';
        echo '}';

        echo '.header-slider-image-with-text-overlay-title {';
        echo 'text-align: center;';
        echo 'margin-bottom: 10px;';
        echo '}';

        echo '.header-slider-image-with-text-overlay-description {';
        echo 'text-align: center;';
        echo 'margin-bottom: 35px;';
        echo '}';

        echo '.header-slider-image-with-text-overlay-button {';
        echo 'text-align: center;';
        echo '}';

        echo '.header-slider-image-with-text-overlay-button .be-btn {';
        echo 'background-color: transparent;';
        echo '}';

        echo '.header-slider-image-with-text-overlay-button .be-btn:hover {';
        echo 'color: #333 !important;';
        echo '}';

        echo '.header-float {';
        echo 'position: absolute;';
        echo 'top: 50px;';
        echo 'left: 0;';
        echo 'right: 0;';
        echo 'opacity: 0.8;';
        echo '}';

        echo '.header-fixed {';
        echo 'position: fixed;';
        echo 'top: 0;';
        echo 'left: 0;';
        echo 'right: 0;';
        echo 'opacity: 1;';
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

            echo '<div class="header-slider">';

            echo '<div class="swiper">';

            echo '<div class="swiper-wrapper">';
            foreach ($this->config->items as $item) {
                $itemConfig = $item['config'];
                if ($itemConfig->enable) {
                    echo '<div class="swiper-slide">';
                    switch ($item['name']) {
                        case 'Image':
                            echo '<div class="header-slider-image">';
                            if (!$itemConfig->image) {
                                echo '<div class="no-image">1200X400px+</div>';
                            } else {
                                if ($itemConfig->link) {
                                    echo '<a href="' . $itemConfig->link . '">';
                                }
                                echo '<img src="' . $itemConfig->image . '" />';
                                if ($itemConfig->link) {
                                    echo '</a>';
                                }
                            }
                            echo '</div>';

                            echo '<div class="header-slider-image-mobile">';
                            if (!$itemConfig->image) {
                                echo '<div class="no-image">720X400px+</div>';
                            } else {
                                if ($itemConfig->link) {
                                    echo '<a href="' . $itemConfig->link . '">';
                                }
                                echo '<img src="' . $itemConfig->imageMobile . '" />';
                                if ($itemConfig->link) {
                                    echo '</a>';
                                }
                            }
                            echo '</div>';
                            break;
                        case 'ImageWithTextOverlay':

                            echo '<div class="header-slider-image-with-text-overlay">';
                            echo '<div class="header-slider-image-with-text-overlay-container">';

                            echo '<div class="header-slider-image-with-text-overlay-image">';
                            if (!$itemConfig->image) {
                                echo '<div class="no-image">1200X400px+</div>';
                            } else {
                                echo '<img src="' . $itemConfig->image . '">';
                            }
                            echo '</div>';
                            echo '<div class="header-slider-image-with-text-overlay-image-mobile">';
                            if (!$itemConfig->imageMobile) {
                                echo '<div class="no-image">720X400px+</div>';
                            } else {
                                echo '<img src="' . $itemConfig->imageMobile . '">';
                            }
                            echo '</div>';

                            echo '<div class="header-slider-image-with-text-overlay-content-container">';
                            echo '<div class="header-slider-image-with-text-overlay-content" style="';
                            echo 'width: ' . $itemConfig->contentWidth . 'px;';
                            if ($itemConfig->contentPosition === 'custom') {
                                if ($itemConfig->contentPositionLeft >= 0) {
                                    echo 'left: ' . $itemConfig->contentPositionLeft . 'px;';
                                }
                                if ($itemConfig->contentPositionRight >= 0) {
                                    echo 'right: ' . $itemConfig->contentPositionRight . 'px;';
                                }
                                if ($itemConfig->contentPositionTop >= 0) {
                                    echo 'top: ' . $itemConfig->contentPositionTop . 'px;';
                                }
                                if ($itemConfig->contentPositionBottom >= 0) {
                                    echo 'bottom: ' . $itemConfig->contentPositionBottom . 'px;';
                                }
                            } else {
                                echo 'top: 50%;';
                                echo 'transform: translateY(-50%);';
                                if ($itemConfig->contentPosition === 'left') {
                                    echo 'left: 5%;';
                                } elseif ($itemConfig->contentPosition === 'center') {
                                    echo 'left: 50%;';
                                    echo 'transform: translateX(-50%);';
                                } elseif ($itemConfig->contentPosition === 'right') {
                                    echo 'right: 5%;';
                                }
                            }
                            echo '">';
                            echo '<h2 class="header-slider-image-with-text-overlay-title" style="color: ' . $itemConfig->contentTitleColor . ';font-size: ' . $itemConfig->contentTitleFontSize . 'px;">' . $itemConfig->contentTitle . '</h2>';
                            echo '<div class="header-slider-image-with-text-overlay-description" style="color: ' . $itemConfig->contentDescriptionColor . ';font-size: ' . $itemConfig->contentDescriptionFontSize . 'px;">' . $itemConfig->contentDescription . '</div>';
                            echo '<div class="header-slider-image-with-text-overlay-button">';
                            echo '<a href="' . $itemConfig->contentButtonLink . '" class="be-btn be-btn-large" style="color: ' . $itemConfig->contentButtonColor . ';border-color: ' . $itemConfig->contentButtonColor . ';" onMouseOver="this.style.backgroundColor=\'' . $itemConfig->contentButtonColor . '\'" onMouseOut="this.style.backgroundColor=\'transparent\'">' . $itemConfig->contentButton . '</a>';
                            echo '</div>';

                            echo '</div>';
                            echo '</div>';

                            echo '</div>';
                            echo '</div>';

                            break;
                        case 'Video':

                            break;
                    }
                    echo '</div>';
                }
            }
            echo '</div>';

            if ($this->config->pagination && $count > 1) {
                echo '<div class="swiper-pagination"></div>';
            }

            if ($this->config->navigation && $count > 1) {
                echo '<div class="swiper-button-prev"></div>';
                echo '<div class="swiper-button-next"></div>';
            }

            echo '</div>';

            echo '</div>';

            echo '<script src="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.js"></script>';
            echo '<script>';
            echo '$(".header").addClass("header-float");';

            echo 'new Swiper(".header-slider .swiper", {';

            echo 'effect: \'' . $this->config->effect . '\',';

            if ($count > 1) {
                if ($this->config->loop) {
                    echo 'loop: true,';
                }

                if ($this->config->autoplay) {
                    echo 'autoplay: true,';
                    echo 'delay: ' . $this->config->delay . ',';
                    echo 'speed: ' . $this->config->speed . ',';
                }

                if ($this->config->pagination) {
                    echo 'pagination: {el: \'.swiper-pagination\'},';
                }

                if ($this->config->navigation) {
                    echo 'navigation: {nextEl: \'.swiper-button-next\', prevEl: \'.swiper-button-prev\'},';
                }
                echo 'grabCursor : true';
            } else {
                echo 'enabled:false';
            }
            echo '});';
            echo '</script>';
        }
    }
}
