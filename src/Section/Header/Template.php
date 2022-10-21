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
        echo 'padding-left: 15px;';
        echo 'padding-right: 15px;';
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
        echo 'margin-left: 80px;';
        echo '}';

        echo '.header-menu ul {';
        echo 'padding: 0;';
        echo 'margin: 0;';
        echo '}';

        echo '.header-menu li {';
        echo 'list-style: none;';
        echo '}';

        echo '.header-menu-lv1-li {';
        echo 'display: inline-block;';
        echo 'padding: 0;';
        echo 'position: relative;';
        echo '}';

        echo '.header-menu-lv1-a {';
        echo 'height: 95px;';
        echo 'line-height: 95px;';
        echo 'padding: 0 1rem;';
        echo 'color: #fff;';
        echo '}';

        echo '.header-menu-lv1-li-active header-menu-lv1-a,';
        echo '.header-menu-lv1-a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-menu-lv2-ul {';
        echo 'border-top: var(--major-color) 2px solid;';
        echo 'position: absolute;';
        echo 'top: 95px;';
        echo 'min-width: 250px;';
        echo 'background-color: #fff;';
        echo 'opacity: 0;';
        echo 'transition: all 0.5s ease;';
        echo 'transform-origin: 0 0;';
        echo 'transform: rotateX(-90deg)';
        echo '}';

        echo '.header-menu-lv1-li:hover .header-menu-lv2-ul {';
        echo 'opacity: 1;';
        echo 'transform: rotateX(0)';
        echo '}';

        echo '.header-menu-lv2-li {';
        echo 'padding: 0 1.5rem;';
        echo '}';

        echo '.header-menu-lv2-a {';
        echo 'display: block;';
        echo 'padding: 1rem 0;';
        echo 'line-height: 1rem;';
        echo 'border-bottom: #eee 1px solid;';
        echo 'position: relative;';
        echo '}';

        echo '.header-menu-lv2-a:before {';
        echo 'content: \'\';';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'right: 0;';
        echo 'height: 1px;';
        echo 'bottom: 0;';
        echo 'background-color: var(--major-color);';
        echo 'transition: all 0.5s ease;';
        echo 'transform: scaleX(0);';
        echo '}';

        echo '.header-menu-lv2-a:hover:before {';
        echo 'transform: scaleX(1);';
        echo '}';

        echo '.header-menu-lv2-li-active header-menu-lv2-a, ';
        echo '.header-menu-lv2-a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-icon {';
        echo 'height: 95px;';
        echo 'line-height: 95px;';
        echo 'font-size: 35px;';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-icon-title {';
        echo 'margin-top: 25px;';
        echo 'color: #eee;';
        echo 'padding-left: 15px;';
        echo 'font-size: .8rem;';
        echo '}';

        echo '.header-icon-content {';
        echo 'margin-top: 5px;';
        echo 'font-weight: bold;';
        echo 'padding-left: 15px;';
        echo '}';

        echo '.header-icon-content a {';
        echo 'color: #fff;';
        echo '}';

        echo '.header-icon-content a:hover {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '.header-menu,';
        echo '.header-icon,';
        echo '.header-icon-body {';
        echo 'display: none;';
        echo '}';

        echo '.header-toggle {';
        echo 'display: block;';
        echo 'height: 95px;';
        echo 'line-height: 95px;';
        echo 'color: #fff;';
        echo 'cursor: pointer;';
        echo '}';

        echo '.header-toggle-icon,';
        echo '.header-toggle-icon:before,';
        echo '.header-toggle-icon:after {';
        echo 'display: inline-block;';
        echo 'width: 28px;';
        echo 'height: 2px;';
        echo 'background-color: #fff;';
        echo 'transition: all 0.3s ease;';
        echo '}';

        echo '.header-toggle-icon {';
        echo 'position: relative;';
        echo '}';

        echo '.header-toggle-icon:before,';
        echo '.header-toggle-icon:after {';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'content: \'\';';
        echo '}';

        echo '.header-toggle-icon:before {';
        echo 'top: -8px;';
        echo '}';

        echo '.header-toggle-icon:after {';
        echo 'top: 8px;';
        echo '}';

        echo '.js-open-drawer-menu .header-toggle-icon {';
        echo 'background-color: transparent;';
        echo '}';

        echo '.js-open-drawer-menu .header-toggle-icon:before {';
        echo 'top: 0;';
        echo 'transform: rotate3d(0, 0, 1, 45deg);';
        echo '}';

        echo '.js-open-drawer-menu .header-toggle-icon:after {';
        echo 'top: 0;';
        echo 'transform: rotate3d(0, 0, 1, -45deg);';
        echo '}';

        // 电脑端
        echo '@media (min-width: 1200px) {';

        echo '.header {';
        echo 'padding-left: 30px;';
        echo 'padding-right: 30px;';
        echo '}';

        echo '.header-menu,';
        echo '.header-icon-phone,';
        echo '.header-icon-phone-body {';
        echo 'display: block;';
        echo '}';

        echo '.header-toggle {';
        echo 'display: none;';
        echo '}';

        echo '}';

        echo '@media (min-width: 1560px) {';
        echo '.header {';
        echo 'padding-left: 60px;';
        echo 'padding-right: 60px;';
        echo '}';

        echo '.header-icon,';
        echo '.header-icon-body {';
        echo 'display: block;';
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
            echo '<ul class="header-menu-lv1-ul">';
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

                echo '<li class="header-menu-lv1-li';
                if ($active) {
                    echo ' header-menu-lv1-li-active';
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

                echo '<a class="header-menu-lv1-a" href="' . $url . '"';
                if ($item->target === '_blank') {
                    echo 'target="_blank"';
                }
                echo '>' . $item->label . '</a>';

                if ($hasSubItem) {
                    echo '<ul class="header-menu-lv2-ul">';
                    foreach ($item->subItems as $subItem) {
                        echo '<li class="header-menu-lv2-li';
                        if (isset($subItem->active) && $subItem->active) {
                            echo 'header-menu-lv2-li-active';
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

                        echo '<a class="header-menu-lv2-a" href="' . $url . '"';
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
                echo '<div class="header-icon header-icon-phone"><i class="bi-telephone"></i></div>';
                echo '</div>';
                echo '<div class="be-col-auto">';
                echo '<div class="header-icon-body header-icon-phone-body">';
                echo '<div class="header-icon-title">' . $this->config->phoneTitle . '</div>';
                echo '<div class="header-icon-content"><a href="tel:' . $this->config->phone . '" class="be-c-fff">' . $this->config->phone . '</a></div>';
                echo '</div>';
                echo '</div>';
            }

            if ($this->config->email !== '') {
                echo '<div class="be-col-auto">';
                echo '<div class="header-icon be-pl-200"><i class="bi-envelope"></i></div>';
                echo '</div>';
                echo '<div class="be-col-auto">';
                echo '<div class="header-icon-body">';
                echo '<div class="header-icon-title">' . $this->config->emailTitle . '</div>';
                echo '<div class="header-icon-content"><a href="mailto:' . $this->config->email . '" class="be-c-fff">' . $this->config->email . '</a></div>';
                echo '</div>';
                echo '</div>';
            }

            echo '<div class="be-col-auto">';
            echo '<div class="header-toggle" onclick="return DrawerMenu.toggle();">';
            echo '<i class="header-toggle-icon"></i>';
            echo '</div>';
            echo '</div>';

            echo '</div>';

            echo '</div>';
        }
    }

}
