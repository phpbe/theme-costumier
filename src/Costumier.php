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

    $libCss = \Be\Be::getLib('Css');
    $mainColor = $configTheme->mainColor;
    $mainColor1 = $libCss->lighter($mainColor, 10);
    $mainColor2 = $libCss->lighter($mainColor, 20);
    $mainColor3 = $libCss->lighter($mainColor, 30);
    $mainColor4 = $libCss->lighter($mainColor, 40);
    $mainColor5 = $libCss->lighter($mainColor, 50);
    $mainColor6 = $libCss->lighter($mainColor, 60);
    $mainColor7 = $libCss->lighter($mainColor, 70);
    $mainColor8 = $libCss->lighter($mainColor, 80);
    $mainColor9 = $libCss->lighter($mainColor, 90);
    $mainColorHover = $libCss->darker($mainColor, 10);
    ?>
    <base href="<?php echo $beUrl; ?>/" >
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <script src="<?php echo $wwwUrl; ?>/lib/jquery/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $wwwUrl; ?>/lib/jquery/jquery.validate-1.19.2.min.js"></script>

    <link rel="stylesheet" href="//cdn.phpbe.com/ui/be.css?v=2022092603" />
    <link rel="stylesheet" href="//cdn.phpbe.com/ui/be-icons.css"/>

    <style type="text/css">
        html {
            font-size: <?php echo $configTheme->fontSize; ?>px;
            background-color: <?php echo $configTheme->backgroundColor; ?>;
            color: <?php echo $configTheme->fontColor; ?>;
        }

        body {
            --main-color: <?php echo $mainColor; ?>;
            --main-color-1: <?php echo $mainColor1; ?>;
            --main-color-2: <?php echo $mainColor2; ?>;
            --main-color-3: <?php echo $mainColor3; ?>;
            --main-color-4: <?php echo $mainColor4; ?>;
            --main-color-5: <?php echo $mainColor5; ?>;
            --main-color-6: <?php echo $mainColor6; ?>;
            --main-color-7: <?php echo $mainColor7; ?>;
            --main-color-8: <?php echo $mainColor8; ?>;
            --main-color-9: <?php echo $mainColor9; ?>;
            --main-color-hover: <?php echo $mainColorHover; ?>;
            --font-color: <?php echo $configTheme->fontColor; ?>;
            --title-color: <?php echo $configTheme->titleColor; ?>;
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