<?php

use Page\Acceptance\MainPage;

/**
 * Класс для проверки Grid и List
 */
class LoginCest
{
    /**
     * Проверяем, что список продуктов переключается между Grid/List
     */

    public function checkErrorInLogin(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->fillField("//input[@id='user-name']", "locked_out_user");
        $I->fillField("//input[@id='password']", "secret_sauce");
        $I->click("//input[@id='login-button']");
        $I->waitForElement("//div[@class='error-message-container error']", 3);
        $I->click("//button[@class='error-button']");
        $I->dontSeeElement("//h3[@data-test='error']");
    }
}
