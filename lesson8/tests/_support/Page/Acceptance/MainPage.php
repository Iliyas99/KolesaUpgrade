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
    public static $productBlock = "//li[contains(@class, 'ajax_block_product')][%s]";


     /**
      * Локатор логина
      */
    public static $login = "//a[@class='login']";


    /**
     * локатор для проверки удачного логина
     */
    public static $myAccaunt = "//h1[contains(text(),'My account')]";


    /**
     * Локатор Quick view
     */
    public static $quickView = "#homefeatured > li:nth-child(%s) > div > div.left-block > div > a.quick-view > span";

    /**
     * Локатор кнопки добавления в корзину 
     */
    public static $addToWishList = "//a[@id='wishlist_button']";

    /**
     * локатор текста успешного добавления в избранное
     */
    public static $addedToWishListText = "//p[contains(text(),'Added to your wishlist.')]";

    /**
     * локатор кнопки логаута
     */
    public static $logout = "//a[@class='logout']";

    /**
     * локатор для iframe
     */
    public static $iframeProductCard = "//*[@class='fancybox-iframe']";

    /**
     * локатор кнопки закрыть
     */
    public static $closeButton = "//a[@class='fancybox-item fancybox-close']";

<<<<<<< HEAD
    /**
     * Локатор карточки айфрейма
     */
    public static $iframeProductCard = '//*[@class="fancybox-iframe"]';
=======
    public static $accaunt = "//a[@class='account']";
>>>>>>> fc82762c44dcc119f6dcc37ce71a6a39023528cf
}