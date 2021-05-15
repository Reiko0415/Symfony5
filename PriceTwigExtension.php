<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use App\Twig\helloTokenParse;

class PriceTwigExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('price',[$this,'priceFilter']),
        ];
    }

    public function priceFilter($number , $header='￥',$desimals=0)
    {
        $price = number_format($number,$desimals,'.',',');
        return $header . $price;
    }


}