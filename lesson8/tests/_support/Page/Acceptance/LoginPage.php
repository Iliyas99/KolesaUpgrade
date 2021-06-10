<?php
namespace Page\Acceptance;

class LoginPage{
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
     * локатор для кнопки my wish list
     */
    public static $myWishListButton = "//i[@class='icon-heart']";

    /**
     * локатор для кол-во продуктов в избранных
     */
    public static $quantity = "td.bold.align_center";

    /**
     * локатор для кнопки удалить избранные
     */
    public static $deleteButton = "//td[@class='wishlist_delete']/a";

}