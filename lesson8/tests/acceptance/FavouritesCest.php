<?php
namespace Page\Acceptance;


/**
 * класс для проверки добавления товаров в избранное
 */
class FavouritesCest{
    public const PRODUCT_NUMBER = 2;

    /**
     * Функция проверки добавления в корзину 
     */
    public function addToWishList(\AcceptanceTester $I){
        $I->amOnPage('');
        $I->click(MainPage::$login);
        $I->fillField(MainPage::$email, 'test@test.kz');
        $I->fillField(MainPage::$password, '12345');
        $I->click(MainPage::$submit);
        $I->waitForElementVisible(MainPage::$myPage);
        //$I->waitForElementVisible(MainPage::$productBlock);
        /*$I->moveMouseOver(MainPage::$productBlock, 1);
        $I->waitForElementVisible(MainPage::$quickView, 1);
        $I->click(MainPage::$quickView);
        $I->switchToIFrame("//body[@id='product']");
        $I->waitForElementVisible(MainPage::$addToCartButton);
        $I->click(MainPage::$addToCartButton);
        $I->waitForText("Product successfully added to your shopping cart");
        $I->click("//span[@title='Continue shopping']");*/
        
    }

   

}