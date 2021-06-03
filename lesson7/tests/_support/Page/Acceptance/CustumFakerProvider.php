<?php
namespace Page\Acceptance;

use Faker\Provider\Base;

class CustumFakerProvider extends Base
{
    /**
     * Генерация рандомного номера карты
     */
    public function getRandomCardNumber(){
        return sprintf(
            '%d%d%d%d', 
            random_int(100,999),
            random_int(100,999),
            random_int(100,999),
            random_int(100,999)
        );
    }
}