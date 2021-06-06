<?php
namespace Page\Acceptance;

use PhpParser\Node\Expr\Cast\String_;

class MainPage
{
    /**
     * Ссылка на главную страницу сайта
     */
    public static $URL = 'https://habr.com/ru/';
    /**
     * блок в верхнем меню 
    */
    public static $navigationMenuItem = "//a[contains(text(),'%s')]";
    /**
     * название страницы после перехода на блок из меню
     */
    public static $title = "//div[@class='page-header page-header_110 ' and contains(text(),'%s')]";
    
    public function route($param){
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
    */

    protected $acceptanceTester;

    
}