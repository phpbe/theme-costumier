<?php

namespace Be\Theme\Costumier\Section\ContactUs;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('contact-us');
        echo $this->getCssMargin('contact-us');

        echo '#' . $this->id . ' .contact-us {';
        if ($this->config->backgroundImage !== '') {
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center top;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
        }
        echo '}';


        echo '#' . $this->id . ' .contact-us-inform-title {';
        echo 'color: var(--major-color);';
        echo 'font-family: "Rajdhani";';
        echo 'display: inline-block;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .contact-us-inform-title:after {';
        echo 'content:\'\';';
        echo 'display: inline-block;';
        echo 'position: absolute;';
        echo 'top: 10px;';
        echo 'right: -13px;';
        echo 'width: 0;';
        echo 'height: 0;';
        echo 'border-style: solid;';
        echo 'border-width: 10px 10px 0px 0;';
        echo 'border-color: transparent var(--major-color) transparent transparent;';
        echo '}';

        echo '#' . $this->id . ' .contact-us-title {';
        echo 'margin-top: 1rem;';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .contact-us-icon-title {';
        echo 'font-size: 1.5rem;';
        echo 'color: #fff;';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .contact-us-title2 {';
        echo 'font-size: 2rem;';
        echo 'line-height: 1.1;';
        echo 'color: var(--minor-color);';
        echo 'font-family: "Rajdhani";';
        echo '}';

        echo '#' . $this->id . ' .contact-us-description {';
        echo 'margin-top: 2rem;';
        echo 'color: #777;';
        echo 'line-height: 1.5;';
        echo '}';





        echo '@media (min-width: 1024px) {';

        echo '#' . $this->id . ' .contact-us-title,';
        echo '#' . $this->id . ' .contact-us-title2 {';
        echo 'font-size: 2.5rem;';
        echo '}';

        echo '}';



        echo '@media (min-width: 1680px) {';

        echo '#' . $this->id . ' .contact-us-title,';
        echo '#' . $this->id . ' .contact-us-title2 {';
        echo 'font-size: 3rem;';
        echo '}';

        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();

            echo '<div class="contact-us">';
            echo '<div class="be-container">';

            echo '<div class="be-row">';
            echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
            echo '<div class="be-col-24 be-md-col-20 be-xl-col-16 be-ta-center">';

            echo '<div class="contact-us-inform-title">';
            echo $this->config->informTitle;
            echo '</div>';

            echo '<div class="contact-us-title">';
            echo $this->config->title;
            echo '</div>';

            echo '</div>';
            echo '<div class="be-col-0 be-md-col-2 be-xl-col-4"></div>';
            echo '</div>';


            echo '<div class="be-bc-minor be-px-300 be-py-200 be-mt-200">';
            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="be-row">';
            echo '<div class="be-col-auto">';
            echo '<div class="be-bc-major be-c-fff be-p-125 be-fs-200 be-mt-25 be-mr-100">';
            echo '<i class="bi-envelope"></i>';
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col-auto">';
            echo '<div class="contact-us-icon-title">';
            echo $this->config->emailTitle;
            echo '</div>';
            echo '<div class="be-mt-50 be-c-ccc">';
            echo $this->config->email;
            echo '</div>';
            if ($this->config->email2 !== '') {
                echo '<div class="be-mt-50 be-c-ccc">';
                echo $this->config->email2;
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-100 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="be-row">';
            echo '<div class="be-col-auto">';
            echo '<div class="be-bc-major be-c-fff be-p-125 be-fs-200 be-mt-25 be-mr-100">';
            echo '<i class="bi-geo-alt"></i>';
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col-auto">';
            echo '<div class="contact-us-icon-title">';
            echo $this->config->addressTitle;
            echo '</div>';
            echo '<div class="be-mt-50 be-c-ccc">';
            echo $this->config->address;
            echo '</div>';
            if ($this->config->address2 !== '') {
                echo '<div class="be-mt-50 be-c-ccc">';
                echo $this->config->address2;
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-100 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="be-row">';
            echo '<div class="be-col-auto">';
            echo '<div class="be-bc-major be-c-fff be-p-125 be-fs-200 be-mt-25 be-mr-100">';
            echo '<i class="bi-clock"></i>';
            echo '</div>';
            echo '</div>';
            echo '<div class="be-col-auto">';
            echo '<div class="contact-us-icon-title">';
            echo $this->config->workingHourTitle;
            echo '</div>';
            echo '<div class="be-mt-50 be-c-ccc">';
            echo $this->config->workingHour;
            echo '</div>';
            if ($this->config->workingHour2 !== '') {
                echo '<div class="be-mt-50 be-c-ccc">';
                echo $this->config->workingHour2;
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';



            echo '<div class="be-bc-fff be-px-200 be-py-300">';
            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-lg-col">';

            echo '<div class="contact-us-title2">';
            echo $this->config->title2;
            echo '</div>';

            echo '<div class="contact-us-description">';
            echo $this->config->description;
            echo '</div>';


            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col">';


            echo '<div class="be-row">';
            echo '<div class="be-col-24 be-lg-col">';
            echo '<input type="text" class="be-input" value="" placeholder="Your Name">';
            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col">';
            echo '<input type="text" class="be-input" value="" placeholder="Your Phone">';
            echo '</div>';
            echo '</div>';

            echo '<div class="be-row be-mt-200">';
            echo '<div class="be-col-24 be-lg-col">';
            echo '<input type="text" class="be-input" value="" placeholder="Email Address">';
            echo '</div>';
            echo '<div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>';
            echo '<div class="be-col-24 be-lg-col">';
            echo '<input type="text" class="be-input" value="" placeholder="Subject">';
            echo '</div>';
            echo '</div>';

            echo '<div class="be-mt-200">';
            echo '<textarea class="be-input" placeholder="Your Message"></textarea>';
            echo '</div>';

            echo '<div class="be-mt-200">';
            echo '<input type="button" class="be-btn be-btn-major" value="SEND A MESSAGE">';
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';


            echo '</div>'; // be-container
            echo '</div>'; // contact-us

        }
    }

}
