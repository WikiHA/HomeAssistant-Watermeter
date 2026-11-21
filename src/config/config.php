<?php
$config = array(
    // Enable logging in case data changes or an error occurs. If you'd like to access the logging data when running
    // in docker(-compose), please mount /usr/src/watermeter/src/log/
    'logging' => false,
    // Maximum volume change to accept between two updates.
    'maxThreshold' => 0.2,
    // Allow decreasing numbers?
    'allowDecreasing' => true,
    // Source image. Can either be a path to a file or an URL.
    'sourceImage' => 'https://www.vykydal.changeip.net:7123/local/ocr/voda.jpg',
    // Source Image Brightness & Contrast tuning
    'sourceImageRotate' => '0',
    'sourceImageCropSizeX' => '640',
    'sourceImageCropSizeY' => '480',
    'sourceImageCropStartX' => '0',
    'sourceImageCropStartY' => '0',
    'sourceImageBrightness' => '30',
    'sourceImageContrast' => '50',
    'postprocessing' => false,
    // Each digital digit is identified by it's x and y coordinates and it's height and width
    'digitalDigits' =>
        array(
            1 =>
                array(
                    'x' => '89',
                    'y' => '12',
                    'width' => '38',
                    'height' => '58',
                ),
            2 =>
                array(
                    'x' => '139',
                    'y' => '12',
                    'width' => '38',
                    'height' => '58',
                ),
            3 =>
                array(
                    'x' => '191',
                    'y' => '12',
                    'width' => '38',
                    'height' => '58',
                ),
            4 =>
                array(
                    'x' => '249',
                    'y' => '12',
                    'width' => '38',
                    'height' => '58',
                ),
            5 =>
                array(
                    'x' => '303',
                    'y' => '12',
                    'width' => '38',
                    'height' => '58',
                ),
        ),
    // Each analog gauge is identified by it's x and y coordinates and it's height and width
    'analogGauges' =>
        array(
            1 =>
                array(
                    'x' => '422',
                    'y' => '112',
                    'width' => '142',
                    'height' => '142',
                ),
            2 =>
                array(
                    'x' => '357',
                    'y' => '270',
                    'width' => '142',
                    'height' => '142',
                ),
            3 =>
                array(
                    'x' => '200',
                    'y' => '332',
                    'width' => '142',
                    'height' => '142',
                ),
            4 =>
                array(
                    'x' => '32',
                    'y' => '263',
                    'width' => '145',
                    'height' => '145',
                ),
        ),
);
