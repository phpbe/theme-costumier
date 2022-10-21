<?php

namespace Be\Theme\Costumier\Section\Footer;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['south'];

    public function css()
    {
        echo '<style type="text/css">';

        echo '#' . $this->id . ' .footer {';
        echo 'background-color: #222d35;';
        echo 'color: #fff;';
        echo 'padding-top: 4rem;';
        echo '}';

        echo '.footer-logo {';
        echo '}';

        echo '.footer-logo img {';
        if ($this->config->logoMaxWidth) {
            echo 'max-width:' . $this->config->logoMaxWidth . 'px;';
        }
        if ($this->config->logoMaxHeight) {
            echo 'max-height:' . min($this->config->logoMaxHeight, 90) . 'px;';
        }
        echo '}';

        echo '.footer-social-icons {';
        echo '}';

        echo '.footer-social-icons a {';
        echo 'margin: 0 5px;';
        echo 'padding: 5px;';
        echo 'border: #fff 1px solid;';
        echo 'border-radius: 50%;';
        echo 'color: #fff;';
        echo '}';

        echo '.footer-social-icons a:hover {';
        echo 'background-color: #fff;';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.footer-social-icons i {';
        echo '}';

        echo '.footer-items {';
        echo 'border-top: #333 1px solid;';;
        echo 'margin-top: 2rem;';
        echo '}';

        echo '.footer-item {';
        echo 'margin-top: 2rem;';
        echo '}';

        // 电脑端
        echo '@media (min-width: 1200px) {';
        echo '.footer-items {';
        echo 'display: flex;';
        echo 'justify-content: space-between;';
        echo '}';

        echo '.footer-item {';
        echo 'width: calc((100% - 4rem) / 3);';
        echo '}';
        echo '}';

        echo '.footer-item-title {';
        echo 'font-size: 1.5rem;';
        echo 'position: relative;';
        echo '}';

        echo '.footer-item-title::after {';
        echo 'display: block;';
        echo 'background-color: var(--major-color);';
        echo 'content: \'\';';
        echo 'position: absolute;';
        echo 'width: 20px;';
        echo 'height: 2px;';
        echo 'left: 0;';
        echo 'bottom: -12px;';
        echo '}';

        echo '.footer-item-body {';
        echo 'margin-top: 3rem;';
        echo 'color: #bbb;';
        echo '}';

        echo '#' . $this->id . ' .footer-menu a {';
        echo 'color: #fff;';
        echo '}';

        echo '#' . $this->id . ' .footer-menu a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .footer-menu-item {';
        echo 'margin-top: 1rem';
        echo '}';


        /*
        $themeName = Be::getRequest()->getThemeName();
        $configTheme = Be::getConfig('Theme.' . $themeName . '.Theme');
        $libCss = \Be\Be::getLib('Css');
        $copyrightBackgroundColor = $libCss->darker($configTheme->minorColor, 20);
        */

        echo '#' . $this->id . ' .footer-copyright {';
        echo 'padding: 2rem 0;';
        echo 'margin-top: 3rem;';
        echo 'text-align: center;';
        echo 'color: #bbb;';
        //echo 'background-color: ' . $copyrightBackgroundColor . ';';
        echo 'background-color: #1e2830;';
        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {

            $this->css();

            echo '<div class="footer">';

            echo '<div class="be-container">';

            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-lg-col-6">';
            echo '<div class="footer-logo">';
            echo '<img src="' . $this->config->logo . '">';
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-0"><div class="be-pt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col-12">';
            echo '<div class="be-px-100 be-c-bbb">' . $this->config->description . '</div>';
            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-0"><div class="be-pt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col-6 be-ta-right">';
            echo '<div class="footer-social-icons">';
            if ($this->config->socialFacebook !== '') {
                echo '<a href="https://www.facebook.com/' . $this->config->socialFacebook . '/" target="_blank">';
                echo '<i class="bi-facebook"></i>';
                echo '</a>';
            }

            if ($this->config->socialTwitter !== '') {
                echo '<a href="https://twitter.com/' . $this->config->socialTwitter . '/" target="_blank">';
                echo '<i class="bi-twitter"></i>';
                echo '</a>';
            }

            if ($this->config->socialLinkedin !== '') {
                echo '<a href="https://www.linkedin.com/' . $this->config->socialLinkedin . '/" target="_blank">';
                echo '<i class="bi-linkedin"></i>';
                echo '</a>';
            }

            if ($this->config->socialInstagram !== '') {
                echo '<a href="https://www.instagram.com/' . $this->config->socialInstagram . '/" target="_blank">';
                echo '<i class="bi-instagram"></i>';
                echo '</a>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $this->items();

            echo '</div>';

            echo '<div class="footer-copyright">' . $this->config->copyright . '</div>';

            echo '</div>';

        }
    }

    private function items()
    {
        echo '<div class="footer-items">';
        if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
            foreach ($this->config->items as $item) {
                $itemConfig = $item['config'];
                if (!$itemConfig->enable) {
                    continue;
                }

                switch ($item['name']) {
                    case 'Menu':
                        $menu = \Be\Be::getMenu('South');
                        $menuTree = $menu->getTree();

                        $i = 0;
                        foreach ($menuTree as $menuItem) {
                            if (!isset($menuItem->subItems) || !is_array($menuItem->subItems) || count($menuItem->subItems) === 0) {
                                continue;
                            }

                            echo '<div class="footer-item">';

                            echo '<h3 class="footer-item-title">' . $menuItem->label . '</h3>';

                            echo '<div class="footer-item-body">';
                            echo '<div class="footer-menu">';
                            foreach ($menuItem->subItems as $subMenuItem) {
                                $url = 'javascript:void(0);';
                                if ($subMenuItem->route) {
                                    $url = beUrl($subMenuItem->route, $subMenuItem->params);
                                } else {
                                    if ($subMenuItem->url) {
                                        $url = $subMenuItem->url;
                                    }
                                }

                                echo '<div class="footer-menu-item"><a href="' . $url . '"';
                                if ($subMenuItem->target === '_blank') {
                                    echo ' target="_blank"';
                                }
                                echo '>' . $subMenuItem->label . '</a></div>';
                            }
                            echo '</div>';
                            echo '</div>';

                            echo '</div>';

                            $i++;
                            if ($i >= $itemConfig->quantity) {
                                break;
                            }
                        }

                        break;
                    case 'RichText':
                        echo '<div class="footer-item">';

                        echo '<h3 class="footer-item-title">' . $itemConfig->title . '</h3>';
                        echo '<div class="footer-item-body">' . $itemConfig->content . '</div>';

                        echo '</div>';
                        break;
                    case 'ContactUs':
                        echo '<div class="footer-item">';

                        echo '<h3 class="footer-item-title">' . $itemConfig->title . '</h3>';
                        echo '<div class="footer-item-body">';

                        if ($itemConfig->address !== '') {
                            echo '<div class="be-row be-mb-100">';
                            echo '<div class="be-col-auto be-c-major"><i class="bi-pin-map-fill"></i></div>';
                            echo '<div class="be-col"><div class="be-pl-50 be-c-bbb">' . $itemConfig->address . '</div></div>';
                            echo '</div>';
                        }

                        if ($itemConfig->phone !== '') {
                            echo '<div class="be-row be-mb-100">';
                            echo '<div class="be-col-auto be-c-major"><i class="bi-telephone"></i></div>';
                            echo '<div class="be-col"><div class="be-pl-50 be-c-bbb">' . $itemConfig->phone . '</div></div>';
                            echo '</div>';
                        }

                        if ($itemConfig->email !== '') {
                            echo '<div class="be-row">';
                            echo '<div class="be-col-auto be-c-major"><i class="bi-envelope"></i></div>';
                            echo '<div class="be-col"><div class="be-pl-50 be-c-bbb">' . $itemConfig->email . '</div></div>';
                            echo '</div>';
                        }

                        echo '</div>';

                        echo '</div>';
                        break;
                }
            }
        }
        echo '</div>';
    }
}
