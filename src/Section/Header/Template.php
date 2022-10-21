<?php

namespace Be\Theme\Costumier\Section\Header;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        echo '<style type="text/css">';

        echo '.header {';
        echo 'position: sticky;';
        echo 'top: 0;';
        echo 'z-index: 999;';
        echo 'background-color: var(--minor-color);';
        echo 'height: 95px;';
        echo 'padding-left: 0;';
        echo 'padding-right: 0;';
        echo '}';


        echo '.header-logo {';
        echo 'line-height: 95px;';
        echo '}';

        echo '.header-logo img {';
        echo 'vertical-align: middle;';
        if ($this->config->logoMaxWidth) {
            echo 'max-width:' . $this->config->logoMaxWidth . 'px;';
        }
        if ($this->config->logoMaxHeight) {
            echo 'max-height:' . min($this->config->logoMaxHeight, 90) . 'px;';
        }
        echo '}';

        echo '.header-menu {';
        echo 'height: 95px;';
        echo 'line-height: 95px;';
        echo 'position: relative;';
        echo 'z-index: 100;';
        echo 'margin-left: 80px;';
        echo '}';

        echo '.header-menu ul {';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo '}';

        echo '.header-menu li {';
        echo 'list-style: none;';
        echo '}';

        echo '.header-menu-lv1-item,';
        echo '.header-menu-lv1-item-with-dropdown {';
        echo 'display: inline-block;';
        echo 'padding: 0;';
        echo 'margin: 0 2rem 0 0;';
        echo 'position: relative;';
        echo '}';

        echo '.header-menu-lv1-item > a,';
        echo '.header-menu-lv1-item-with-dropdown > a {';
        echo 'color: #fff;';
        echo '}';

        echo '.header-menu-lv1-item-active > a,';
        echo '.header-menu-lv1-item-with-dropdown > a:hover,';
        echo '.header-menu-lv1-item > a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-menu-lv1-item-with-dropdown:after {';
        echo 'display: inline-block;';
        echo 'margin-left: .35em;';
        echo 'vertical-align: middle;';
        echo 'content: "";';
        echo 'border-top: .3em solid #999;';
        echo 'border-left: .3em solid transparent;';
        echo 'border-right: .3em solid transparent;';
        echo 'border-bottom: 0;';
        echo '}';

        echo '.header-menu-lv2 {';
        echo 'position: absolute;';
        echo 'left: -.5rem;';
        echo 'background-color: #fff;';
        echo 'min-width: 170px;';
        echo 'line-height: 30px;';
        echo 'box-shadow: 0 0 2px 1px #eee;';
        echo 'z-index: 120;';
        echo 'transition: transform 0.3s linear;';
        echo 'transform: translateY(30px);';
        echo 'visibility: hidden;';
        echo '}';

        echo '.header-menu-lv1-item-with-dropdown:hover .header-menu-lv2 {';
        echo 'visibility: visible;';
        echo 'transform: translateY(-1px)';
        echo '}';

        echo '.header-menu-lv2-item {';
        echo 'padding: .2rem 2rem;';
        echo '}';

        echo '.header-menu-lv2-item-active, ';
        echo '.header-menu-lv2-item:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-menu-icon {';
        echo 'height: 95px;';
        echo 'line-height: 95px;';
        echo 'font-size: 35px;';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-menu-icon-title {';
        echo 'margin-top: 25px;';
        echo 'color: #eee;';
        echo 'padding-left: 15px;';
        echo 'font-size: .8rem;';
        echo '}';

        echo '.header-menu-icon-content {';
        echo 'margin-top: 5px;';
        echo 'font-weight: bold;';
        echo 'padding-left: 15px;';
        echo '}';

        echo '.header-menu-icon-content a {';
        echo 'color: #fff;';
        echo '}';

        echo '.header-menu-icon-content a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        // 电脑端
        echo '@media (min-width: 1200px) {';
        echo '.header {';
        echo 'padding-left: 30px;';
        echo 'padding-right: 30px;';
        echo '}';
        echo '}';

        echo '@media (min-width: 1560px) {';
        echo '.header {';
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

            $beUrl = beUrl();
            echo '<div class="header">';


            echo '<div class="be-row">';

            echo '<div class="be-col-auto">';
            echo '<div class="header-logo">';
            echo '<a href="' . $beUrl . '">';
            echo '<img src="' . $this->config->logo . '">';
            echo '</a>';
            echo '</div>';
            echo '</div>';

            echo '<div class="be-col">';
            echo '<div class="header-menu">';
            echo '<ul class="header-menu-lv1">';
            $menu = \Be\Be::getMenu('North');
            $menuTree = $menu->getTree();
            $menuActiveId = $menu->getActiveId();
            foreach ($menuTree as $item) {
                $hasSubItem = false;
                if (isset($item->subItems) && is_array($item->subItems) && count($item->subItems) > 0) {
                    $hasSubItem = true;
                }

                $active = false;
                if ($hasSubItem) {
                    foreach ($item->subItems as &$subItem) {
                        if ($item->id === $menuActiveId) {
                            $subItem->active = true;
                            $active = true;
                            break;
                        }
                    }
                    unset($subItem);
                } else {
                    if ($item->id === $menuActiveId) {
                        $active = true;
                    }
                }

                echo '<li class="header-menu-lv1-item';

                if ($hasSubItem) {
                    echo '-with-dropdown';
                }

                if ($active) {
                    echo ' header-menu-lv1-item-active';
                }
                echo '">';

                $url = 'javascript:void(0);';
                if ($item->route) {
                    if ($item->params) {
                        $url = beUrl($item->route, $item->params);
                    } else {
                        $url = beUrl($item->route);
                    }
                } else {
                    if ($item->url) {
                        if ($item->url === '/') {
                            $url = beUrl();
                        } else {
                            $url = $item->url;
                        }
                    }
                }

                echo '<a class="link-hover" href="' . $url . '"';
                if ($item->target === '_blank') {
                    echo 'target="_blank"';
                }
                echo '>' . $item->label . '</a>';

                if ($hasSubItem) {
                    echo '<ul class="header-menu-lv2">';
                    foreach ($item->subItems as $subItem) {
                        echo '<li class="header-menu-lv2-item';
                        if (isset($subItem->active) && $subItem->active) {
                            echo 'header-menu-lv2-item-active';
                        }
                        echo '">';

                        $url = 'javascript:void(0);';
                        if ($subItem->route) {
                            if ($subItem->params) {
                                $url = beUrl($subItem->route, $subItem->params);
                            } else {
                                $url = beUrl($subItem->route);
                            }
                        } else {
                            if ($subItem->url) {
                                $url = $subItem->url;
                            }
                        }

                        echo '<a class="link-hover" href="' . $url . '"';
                        if ($subItem->target === '_blank') {
                            echo 'target="_blank"';
                        }
                        echo '>' . $subItem->label . '</a>';

                        echo '</li>';
                    }
                    echo '</ul>';
                }
                echo '</li>';
            }
            echo '</ul>';
            echo '</div>';
            echo '</div>';

            if ($this->config->phone !== '') {
                echo '<div class="be-col-auto">';
                echo '<div class="header-menu-icon"><i class="bi-telephone"></i></div>';
                echo '</div>';
                echo '<div class="be-col-auto">';
                echo '<div class="header-menu-icon-title">' . $this->config->phoneTitle . '</div>';
                echo '<div class="header-menu-icon-content"><a href="tel:' . $this->config->phone . '" class="be-c-fff">' . $this->config->phone . '</a></div>';
                echo '</div>';
            }

            if ($this->config->email !== '') {
                echo '<div class="be-col-auto">';
                echo '<div class="header-menu-icon be-pl-200"><i class="bi-envelope"></i></div>';
                echo '</div>';
                echo '<div class="be-col-auto">';
                echo '<div class="header-menu-icon-title">' . $this->config->emailTitle . '</div>';
                echo '<div class="header-menu-icon-content"><a href="mailto:' . $this->config->email . '" class="be-c-fff">' . $this->config->email . '</a></div>';
                echo '</div>';
            }

            echo '</div>';

            echo '</div>';
        }
    }

}
