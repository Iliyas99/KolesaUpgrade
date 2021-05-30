<?php

use Page\Acceptance\MainPage;

/**
 * Класс для проверки Grid и List
 */
class GridAndListSwitcherCest
{
    /**
     * Проверяем, что список продуктов переключается между Grid/List
     */

    public function checkGridAndListSwitchMode(AcceptanceTester $I)
    {
        $mainPage = new MainPage($I);
        
        $I->amOnPage(MainPage::$URL);
        $I->seeElement(MainPage::$dressesButton);
        $I->moveMouseOver(MainPage::$dressesButton);
        $I->click(MainPage::$summerDressesButton);

        $I->waitForElement(MainPage::$gridButton, 3);

        $I->seeElement(MainPage::$gridButton);
        $I->seeElement(MainPage::$gridTable);

        $I->waitForElement(MainPage::$listButton, 3);

        $I->click(MainPage::$listButton);
        $I->seeElement(MainPage::$listTable);
    }
}
