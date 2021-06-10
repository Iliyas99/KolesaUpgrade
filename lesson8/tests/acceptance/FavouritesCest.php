<?php
namespace Page\Acceptance;


/**
 * класс для проверки добавления товаров в избранное
 */
class FavouritesCest{
    public const PRODUCT_NUMBER = 2;
    public const EMAIL = 'test@test.kz';
    public const PASSWORD = '12345';

    /**
     * Метод который выполняется перед тестом
     */
    public function _before(\AcceptanceTester $I){
        $I->amOnPage('');
        $I->click(MainPage::$login);
        $I->fillField(LoginPage::$email, self::EMAIL);
        $I->fillField(LoginPage::$password, self::PASSWORD);
        $I->click(LoginPage::$submit);
        $I->waitForElementVisible(MainPage::$myAccaunt);
    }

    /**
     * метод который выполняется после теста
     */
    
    public function _after(\AcceptanceTester $I){
        $I->click(LoginPage::$deleteButton);
        $I->acceptPopup();
        $I->waitForElementVisible(MainPage::$logout);
        $I->click(MainPage::$logout);
        $I->waitForElementVisible(MainPage::$login);
    }


    /**
     * Функция проверки добавления в корзину 
     */
    public function addToWishList(\AcceptanceTester $I){
        for ($i=1; $i <= self::PRODUCT_NUMBER; $i++){ 
            $I->amOnPage('');
            $I->waitForElementVisible(sprintf(MainPage::$productBlock, $i));
            $I->moveMouseOver(sprintf(MainPage::$productBlock, $i));
            $I->waitForElementVisible(sprintf(MainPage::$quickView, $i));
            $I->click(sprintf(MainPage::$quickView, $i));
            $I->switchToIFrame(MainPage::$iframeProductCard);
            $I->waitForElementVisible(MainPage::$addToWishList);
            $I->click(MainPage::$addToWishList);
            $I->waitForElement(MainPage::$addedToWishListText);
            $I ->waitForElement(MainPage::$closeButton);
            $I->click(MainPage::$closeButton);
            $I->switchToFrame();
            $I ->waitForElement(MainPage::$closeButton);
            $I->click(MainPage::$closeButton);
        }
        $I->waitForElementClickable(MainPage::$accaunt);
        $I->click(MainPage::$accaunt);
        $I->waitForElementVisible(LoginPage::$myWishListButton);
        $I->click(LoginPage::$myWishListButton);
        $I->waitForElementVisible(LoginPage::$quantity);
        $amount = intval($I->grabTextFrom(LoginPage::$quantity));
        $I ->assertEquals($amount, self::PRODUCT_NUMBER ,"кол-во не равно двум");
    }

   

}