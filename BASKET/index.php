<?php
/**
 * Created by PhpStorm.
 * User: hysterias
 * Date: 19/10/17
 * Time: 09:38
 */
$basket = array(
    array(
        'name' => 'figurine maitre yoda',
        'price_ht' => 47.50,
        'code_tva' => 2,
        'qty' => 3
    ),
    array(
        'name' => 'Chewing gum Chewbaka',
        'price_ht' => 1.45,
        'code_tva' => 1,
        'qty' => 15
    ),
    array(
        'name' => 'Taille crayon R2D2',
        'price_ht' => 7.80,
        'code_tva' => 2,
        'qty' => 2
    ),
    array(
        'name' => 'Boules de pétanque BB-8 (x2)',
        'price_ht' => 34.80,
        'code_tva' => 2,
        'qty' => 3
    ),
);

class Price
{

    /** @array */
    public $basket;

    /**
     * Price constructor.
     * @param $basket
     */
    public function __construct($basket)
    {
        $this->basket = $basket;
    }


    /**
     * @return mixed
     */
    public function getBasket()
    {
        return $this->basket;
    }

    /**
     * @param mixed $basket
     * @return Price
     */
    public function setBasket($basket)
    {
        $this->basket = $basket;
        return $this;
    }


    public function calculHT()
    {
        $total['total_ht'] = 0;
        foreach ($this->basket as $article) {
            if ($article['qty'] >= 3 AND $article['qty'] <= 9) {
                $priceDiscount = ($article['price_ht'] * $article['qty']) *0.95;
                $total['total_ht'] += $priceDiscount;
                $total['total_discount'] += ($article['price_ht'] * $article['qty']) *0.05;
                if ($article['code_tva'] === 1) {
                    $total['total_tva5'] += $this->calculTVA($priceDiscount, $article['code_tva']);
                }
                if ($article['code_tva'] === 2) {
                    $total['total_tva20'] += $this->calculTVA($priceDiscount, $article['code_tva']);
                }
            }
            elseif ($article['qty'] >= 10) {

                $priceDiscount = ($article['price_ht'] * $article['qty']) *0.90;
                $total['total_ht'] += $priceDiscount;
                $total['total_discount'] += ($article['price_ht'] * $article['qty']) *0.1;

                if ($article['code_tva'] === 1) {
                    $total['total_tva5'] += $this->calculTVA($priceDiscount, $article['code_tva']);
                }
                if ($article['code_tva'] === 2) {
                    $total['total_tva20'] += $this->calculTVA($priceDiscount, $article['code_tva']);
                }
            }
            else {
                $priceDiscount = ($article['price_ht'] * $article['qty']);
                $total['total_ht'] += $priceDiscount;

                if ($article['code_tva'] === 1) {
                    $total['total_tva5'] += $this->calculTVA($priceDiscount, $article['code_tva']);
                }
                if ($article['code_tva'] === 2) {
                    $total['total_tva20'] += $this->calculTVA($priceDiscount, $article['code_tva']);
                }
            }
        }
        $total['total_ttc'] = $total['total_ht']  + $total['total_tva5'] + $total['total_tva20'];
        foreach ($total as $key => $value){
            $total[$key] = round($value, 2);
        }
        return $total;
    }

    public function calculTVA($price, $codeTva)
    {
            if ($codeTva === 1) {
                $total = $price * 0.05;
            }
            else {
                $total = $price * 0.2;
            }

        return $total;
    }
}



$test = new Price($basket);
echo "<pre>";
print_r($test->calculHT());
echo "</pre>";