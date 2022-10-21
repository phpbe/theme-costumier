<be-html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no,viewport-fit=cover">
    <title><?php echo $this->title; ?></title>
    <meta name="keywords" content="<?php echo $this->metaKeywords ?? ''; ?>">
    <meta name="description" content="<?php echo $this->metaDescription ?? ''; ?>">
    <meta name="applicable-device" content="pc,mobile">

    <?php
    $configTheme = \Be\Be::getConfig('Theme.Costumier.Theme');

    $beUrl = beUrl();
    $wwwUrl = \Be\Be::getProperty('Theme.Costumier')->getWwwUrl();
    ?>
    <base href="<?php echo $beUrl; ?>/" >
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <script src="<?php echo $wwwUrl; ?>/lib/jquery/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $wwwUrl; ?>/lib/jquery/jquery.validate-1.19.2.min.js"></script>

    <link rel="stylesheet" href="//cdn.phpbe.com/ui/be.css" />
    <link rel="stylesheet" href="//cdn.phpbe.com/ui/be-icons.css"/>

    <style type="text/css">
        html {
            font-size: <?php echo $configTheme->fontSize; ?>px;
            background-color: <?php echo $configTheme->backgroundColor; ?>;
            color: <?php echo $configTheme->fontColor; ?>;
        }

        body {
            <?php
            echo '--major-color: ' . $configTheme->majorColor . ';';

            // CSS 处理库
            $libCss = \Be\Be::getLib('Css');
            for ($i=1; $i<=9; $i++) {
                echo '--major-color-' . $i. ': ' . $libCss->lighter($configTheme->majorColor, $i * 10) . ';';
                echo '--major-color' . $i. ': ' . $libCss->darker($configTheme->majorColor, $i * 10) . ';';
            }

            echo '--minor-color: ' . $configTheme->minorColor . ';';
            ?>
        }

        a {
            color: <?php echo $configTheme->linkColor; ?>;
        }

        a:hover {
            color: <?php echo $configTheme->linkHoverColor; ?>;
        }
    </style>

    <link rel="stylesheet" href="<?php echo $wwwUrl; ?>/css/drawer.css" />
    <script src="<?php echo $wwwUrl; ?>/js/drawer-menu.js"></script>

    <link rel="stylesheet" href="<?php echo $wwwUrl; ?>/css/theme.css" />
    <script src="<?php echo $wwwUrl; ?>/js/theme.js"></script>

    <be-head>
    </be-head>
</head>
<body>

    <be-body>
        <be-north>
            <?php
            if ($this->pageConfig->north !== 0) {
                if (count($this->pageConfig->northSections)) {
                    foreach ($this->pageConfig->northSections as $section) {
                        $section->template->page = $this;
                        $section->template->display();
                    }
                }
            }
            ?>
        </be-north>
        <be-middle></be-middle>
        <be-south></be-south>
    </be-body>

    <div id="ajax-loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div id="overlay"></div>

    <div id="drawer-menu" class="drawer">
        <div class="drawer-fixed-header">
            <div class="drawer-header">
                <div class="drawer-title">Navigation</div>
                <button type="button" class="drawer-close" onclick="DrawerMenu.hide();"></button>
            </div>
        </div>
        <ul class="drawer-menu-lv1">
            <?php
            $menu = \Be\Be::getMenu('North');
            $menuTree = $menu->getTree();
            foreach ($menuTree as $item) {
                $hasSubItem = false;
                if (isset($item->subItems) && is_array($item->subItems) && count($item->subItems) > 0) {
                    $hasSubItem = true;
                }

                if ($hasSubItem) {
                    echo '<li class="drawer-menu-lv1-item-with-dropdown">';
                } else {
                    echo '<li class="drawer-menu-lv1-item">';
                }

                $url = 'javascript:void(0);';
                if ($item->route) {
                    $url = beUrl($item->route, $item->params);
                } else {
                    if ($item->url) {
                        $url = $item->url;
                    }
                }
                echo '<a href="'.$url.'"';
                if ($item->target === '_blank') {
                    echo ' target="_blank"';
                }
                echo '>' . $item->label . '</a>';

                if ($hasSubItem) {
                    echo '<div class="drawer-menu-lv1-dropdown">';
                    echo '<div class="drawer-menu-lv1-dropdown-title">';
                    echo $item->label;
                    echo '</div>';
                    echo '<ul class="drawer-menu-lv2">';
                    foreach ($item->subItems as $subItem) {
                        $url = 'javascript:void(0);';
                        if ($subItem->route) {
                            $url = beUrl($subItem->route, $subItem->params);
                        } else {
                            if ($subItem->url) {
                                $url = $subItem->url;
                            }
                        }
                        echo '<li class="drawer-menu-lv2-item"><a href="'.$url.'"';
                        if ($subItem->target === '_blank') {
                            echo ' target="_blank"';
                        }
                        echo '>' . $subItem->label . '</a></li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                }

                echo '</li>';
            }
            ?>
        </ul>
    </div>

    <div id="goto-top"><i class="bi-arrow-up"></i></div>

</body>
</html>
</be-html>