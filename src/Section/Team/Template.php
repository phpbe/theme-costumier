<?php

namespace Be\Theme\Costumier\Section\Team;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('team');
        echo $this->getCssMargin('team');

        echo '#' . $this->id . ' .team {';

        echo '}';

        echo '#' . $this->id . ' .team-container {';

        echo '}';

        echo '#' . $this->id . ' .team-side-a {';

        echo '}';

        echo '#' . $this->id . ' .team-side-a-container {';

        echo '}';

        echo '#' . $this->id . ' .team-side-b {';

        echo '}';

        echo '#' . $this->id . ' .team-side-b-container {';
        echo 'background-color: var(--major-color);';
        echo 'padding: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .team-title {';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .team-description {';
        echo 'margin-top: 2rem;';
        echo 'color: #eee;';
        echo 'line-height: 1.5;';
        echo '}';

        echo '#' . $this->id . ' .team-link {';
        echo 'margin-top: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .team-link a {';
        echo 'color: #fff;';
        echo '}';

        echo '#' . $this->id . ' .team-link a:hover {';
        echo 'color: var(--minor-color);';
        echo '}';

        echo '#' . $this->id . ' .team-image {';
        echo 'margin-top: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .team-image img {';
        echo 'width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .team-member {';
        echo 'background-color: #f5f5f5;';
        echo 'padding-bottom: 2rem;';
        echo 'border-bottom: #f5f5f5 3px solid;';
        echo 'transition: all 1s ease;';
        echo 'position: relative;';
        echo 'overflow: hidden;';
        echo '}';

        echo '#' . $this->id . ' .team-member:hover {';
        echo 'border-bottom-color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .team-member-avatar img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .team-member-name {';
        echo 'margin-top: 1rem;';
        echo 'font-size: 1.5rem;';
        echo 'text-align: center;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .team-member-job {';
        echo 'margin-top: .5rem;';
        echo 'color: #777;';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .team-member-account {';
        echo 'position: absolute;';
        echo 'top: 0;';
        echo 'left: -40px;';
        echo 'opacity: 0;';
        echo 'transition: all .5s ease;';
        echo 'background-color: var(--major-color);';
        echo 'padding: .5rem;';
        echo '}';

        echo '#' . $this->id . ' .team-member-account a {';
        echo 'display: block;';
        echo 'color: #fff;';
        echo 'padding: .5rem;';
        echo '}';

        echo '#' . $this->id . ' .team-member-account a:hover {';
        echo 'color: var(--minor-color);';
        echo '}';

        echo '#' . $this->id . ' .team-member:hover .team-member-account {';
        echo 'left: 0;';
        echo 'opacity: 1;';
        echo '}';

        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .team-title {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';


        echo '@media (min-width: 1280px) {';

        echo '#' . $this->id . ' .team-container {';
        echo 'display: flex;';
        echo '}';

        echo '#' . $this->id . ' .team-side-a {';
        echo 'padding-left: 0;';
        echo 'flex: 0 0 66.666666%;';
        echo 'width: 66.666666%;';
        if ($this->config->layout === 'right') {
            echo 'order: 2;';
        }
        echo '}';

        echo '#' . $this->id . ' .team-side-a-container {';
        if ($this->config->layout === 'left') {
            echo 'padding-right: 35px;';
        } else {
            echo 'padding-left: 35px;';
        }
        echo '}';

        echo '#' . $this->id . ' .team-side-b {';
        echo 'flex: 0 0 33.333333%;';
        echo 'width: 33.333333%;';
        echo 'margin-top: 0;';
        if ($this->config->layout === 'right') {
            echo 'order: 1;';
        }
        echo '}';

        echo '}';


        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .team-title {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            try {
                $teamMembers = Be::getService('App.Company.Team')->getMembers();
            } catch (\Throwable $t) {
                return;
            }

            if (!is_array($teamMembers) || count($teamMembers) < 1) {
                return;
            }

            $this->css();

            echo '<div class="team">';
            echo '<div class="be-container">';

            echo '<div class="team-container">';

            echo '<div class="team-side-a">';

            echo '<div class="team-side-a-container">';
            echo '<div class="swiper">';
            echo '<div class="swiper-wrapper">';

            foreach ($teamMembers as $teamMember) {
                ?>
                <div class="team-member swiper-slide">
                    <div class="team-member-avatar">
                        <img src="<?php echo $teamMember->avatar; ?>" alt="<?php echo $teamMember->name; ?>">
                    </div>

                    <div class="team-member-name">
                        <?php echo $teamMember->name; ?>
                    </div>

                    <div class="team-member-job">
                        <?php echo $teamMember->job; ?>
                    </div>

                    <div class="team-member-account">
                        <?php
                        if ($teamMember->account_facebook !== '') {
                            ?>
                            <a href="https://www.facebook.com/<?php echo $teamMember->account_facebook; ?>/" target="_blank">
                                <i class="bi-facebook"></i>
                            </a>
                            <?php
                        }

                        if ($teamMember->account_twitter !== '') {
                            ?>
                            <a href="https://twitter.com/<?php echo $teamMember->account_twitter; ?>" target="_blank">
                                <i class="bi-twitter"></i>
                            </a>
                            <?php
                        }

                        if ($teamMember->account_instagram !== '') {
                            ?>
                            <a href="https://www.instagram.com/<?php echo $teamMember->account_instagram; ?>/" target="_blank">
                                <i class="bi-instagram"></i>
                            </a>
                            <?php
                        }

                        if ($teamMember->account_linkedin !== '') {
                            ?>
                            <a href="https://www.instagram.com/<?php echo $teamMember->account_linkedin; ?>/" target="_blank">
                                <i class="bi-linkedin"></i>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }

            echo '</div>'; // swiper-wrapper
            echo '</div>'; // swiper
            echo '</div>'; // team-side-a-container
            echo '</div>'; // team-side-a


            echo '<div class="team-side-b">';
            echo '<div class="team-side-b-container">';

            echo '<div class="team-title">';
            echo $this->config->title;
            echo '</div>';

            echo '<div class="team-description">';
            echo $this->config->description;
            echo '</div>';

            if ($this->config->linkText !== '' && $this->config->link !== '') {
                echo '<div class="team-link">';
                echo '<a href="' . $this->config->link . '">';
                echo $this->config->linkText;
                echo '</a>';
                echo '</div>';
            }

            if ($this->config->image !== '') {
                echo '<div class="team-image">';
                echo '<img src="' . $this->config->image . '" alt="' . $this->config->title . '">';
                echo '</div>';
            }

            echo '</div>'; // team-side-b-container
            echo '</div>'; // team-side-b

            echo '</div>'; // team-container

            echo '</div>'; // be-container
            echo '</div>'; // team

            $key = 'Theme:Costumier:swiper';
            if (!Be::hasContext($key)) {
                $wwwUrl = Be::getProperty('Theme.Costumier')->getWwwUrl();
                echo '<link rel="stylesheet" href="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.css">';
                echo '<script src="' . $wwwUrl . '/lib/swiper/8.3.2/swiper-bundle.min.js"></script>';
            }

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

            echo 'slidesPerView: 1,';

            echo 'breakpoints: {';
            echo '512: {';
            echo 'slidesPerView: 2,';
            echo 'spaceBetween: 15';
            echo '},';
            echo '1024: {';
            echo 'slidesPerView: 2,';
            echo 'spaceBetween: 35';
            echo '}';
            echo '},';

            echo '});';
            echo '</script>';
        }
    }

}
