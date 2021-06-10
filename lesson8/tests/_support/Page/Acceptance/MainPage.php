<?php
namespace Page\Acceptance;

class MainPage{
    /**
     * Ссылка на страницу
     */
    public static $URL = "";
    
    /**
     * Локатор карточки продукта
     * 
     * @var string
     */
    public static $productBlock = "//li[contains(@class, 'ajax_block_product')][1]";


     /**
      * Локатор логина
      */
    public static $login = "//a[@class='login']";

    /**
     * локатор для email
     */
    public static $email = "//input[@id='email']";

    /**
     * локатор для password
     */
    public static $password = "//input[@id='passwd']";

    /**
     * локатор для submit
     */
    public static $submit = "//button[@id='SubmitLogin']";


    /**
     * локатор для моей страницы
     */
    public static $myPage = "//span[contains(text(),'My account')]";


    /**
     * Локатор Quick view
     */
    public static $quickView = "//a[contains(@href,'id_product=1') and @class='quick-view']";

    /**
     * Локатор кнопки добавления в корзину 
     */
    public static $addToCartButton = "//span[contains(text(),'Add to cart')]";

    /**
     * Локатор карточки айфрейма
     */
    public static $iframeProductCard = '//*[@class="fancybox-iframe"]';
}