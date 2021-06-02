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

     
    /**
     * найти кнопку Dresses
    */
    public function findDressesButton()
    {
        $this -> acceptanceTester -> seeElement(self::$dressesButton);
        return $this;
    }

    /**
     * навести мышку на кнопку Dresses
    */
    public function moveMouseToDressesButton()
    {
        $this -> acceptanceTester -> moveMouseOver(self::$dressesButton);
        return $this;
    }

    /**
     * нажать на кнопку SummerDresses
    */
    public function clickSummerDressesButton()
    {
        $this -> acceptanceTester -> click(self::$summerDressesButton);
        return $this;
    }
    
    /**
     * Ждем появление кнопки переключателся на Grid
    */
    public function waitForGridButtonAppear()
    {
        $this -> acceptanceTester -> waitForElement(self::$gridButton, 3);
        return $this;
    }

    /**
     * Видите что по дефолту выбрана раскладка Grid
    */
    public function validateGridButtonSelected()
    {
        $this -> acceptanceTester -> seeElement(self::$gridButton);
        return $this;
    }

    /**
     * Видите что карточки с товаром расположены в режиме таблицы
     */
    public function validateProductsInGridMode()
    {
        $this -> acceptanceTester -> seeElement(self::$gridTable);
        return $this;
    }

    /**
     * Кликаете на кнопку List
     */
    public function clickListModeButton()
    {
        $this -> acceptanceTester -> click(self::$listButton);
        return $this;
    }

    /**
     * Проверяете что отображение карточек изменилось на List
     */
    public function validateProductsInListMode()
    {
        $this -> acceptanceTester -> seeElement(self::$listTable);
        return $this;
    }
}