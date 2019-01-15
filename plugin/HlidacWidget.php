<?php
namespace Hlidac\Wp;

/**
 * Hlidac widget shortcode
 *
 * @author Petr Stastny <petr@stastny.eu>
 */
class HlidacWidget
{
    /**
     * Get shortcode content
     *
     * @param array $atts shortcode attributes
     * @return string
     */
    public static function getContent(array $atts)
    {
        if (empty($atts['page'])) {
            return '';
        }
        $width = '500';
        if (!empty($atts['width'])) {
            $width=$atts['width'];
        }

        $randomSource = 'abcdefghijklmnopqrstuvwxyz01234567890';
        $id = 'hlidac'.self::randomStringFrom($randomSource, 5);

        $html = '';

        $html .= '<script src="https://www.hlidacstatu.cz/widget/'.$id.'?width='.$atts['width'].'" type="text/javascript"></script>';
        $html .= '<div id="'.$id.'" style="width:'.$width.'" widget-page="'.$atts['page'].'"></div>';

        return $html;
    }


    /**
     * Generate random string from explicit source characters
     *
     * @param string $source source characters
     * @param int $length string length
     * @return string
     */
    public static function randomStringFrom($source, $length)
    {
        $shuffled = str_shuffle($source);
        $sourceLen = strlen($source);
        $result = '';

        for ($i = 1; $i <= $length; $i++) {
            $result .= $shuffled[random_int(0, $sourceLen - 1)];
        }

        return $result;
    }
}
