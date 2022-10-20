<?php

namespace Be\Theme\Costumier;

class Property extends \Be\Theme\Property
{

    public string $label = '服装供应商';

    /**
     * 预览图片
     *
     * @var string
     */
    public string $previewImage = 'images/preview.jpg';


    public function __construct() {
        parent::__construct(__FILE__);
    }

}

