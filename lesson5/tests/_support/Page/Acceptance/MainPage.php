<?php
namespace Page\Acceptance;

use PhpParser\Node\Expr\Cast\String_;

class MainPage
{
    /**
     * Ссылка на главную страницу сайта
     */
    public static $URL = 'http://automationpractice.com/index.php';
    
    /**
     * Кнопка Dresses на главной странице
     */
    public static $dressesButton = "//ul[@class='sf-menu clearfix menu-content sf-js-enabled sf-arrows']/li[2]";

    /**
     * Кнопка скрытая Summer dresses
     */
    public static $summerDressesButton = "//li[@class='sfHover']/ul/li[3]";

    /**
     * Кнопка переключатель на grid
     */
    public static $gridButton = "//li[@id='grid' and @class='selected']/a";

    /**
     * Список продуктов в виде Grid
     */
    public static $gridTable = "//ul[@class='product_list grid row']";

    /**
     * Кнопка переключатель на grid
     */
    public static $listButton = "//a[@title='List']/i";
    
    /**
     * Список продуктов в виде Grid
     */
    public static $listTable = "//li[@id='list' and @class='selected']";


    public function route($param){
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */

     protected $acceptanceTester;

     public function waitForElementAppear()
     {
         $this -> acceptanceTester -> waitForElement(MainPage::$gridButton, 3);
     }

}