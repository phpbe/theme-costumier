<?php

namespace Be\Theme\Costumier\Section\AppCmsSearch;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['west', 'east'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('app-cms-search');
        echo $this->getCssMargin('app-cms-search');

        echo '#' . $this->id . ' .app-cms-search {';
        echo '}';

        echo '#' . $this->id . ' .app-cms-search form {';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-search .be-input {';
        echo 'background-color: var(--minor-color);';
        echo 'color: #fff;';
        echo 'padding-right: 4rem;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-search .be-btn {';
        echo 'background-color: var(--major-color);';
        echo 'border: none;';
        echo 'color: #fff;';
        echo 'position: absolute;';
        echo 'right: .5rem;';
        echo 'top: .5rem;';
        echo 'width: 3rem;';
        echo 'min-width: 3rem;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="app-cms-search">
                <form action="<?php echo beUrl('Cms.Article.search')?>" method="get">
                    <input type="text" name="keyword" class="be-input be-lh-250" placeholder="Search...">
                    <button type="submit" class="be-btn be-btn-main be-btn-lg"><i class="bi-search"></i></button>
                </form>
            </div>
            <?php
        }
    }
}

