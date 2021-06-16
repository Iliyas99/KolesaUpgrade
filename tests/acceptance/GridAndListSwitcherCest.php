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
        
        $I->amOnPage('sdfasdf');

        //$mainPage->findDressesButton()->moveMouseToDressesButton()->clickSummerDressesButton();
        /*$I->seeElement(MainPage::$dressesButton);
        $I->moveMouseOver(MainPage::$dressesButton);
        $I->click(MainPage::$summerDressesButton);*/

        //$mainPage->waitForGridButtonAppear();

        //$mainPage->validateGridButtonSelected()->validateProductsInGridMode();
        /*$I->seeElement(MainPage::$gridButton);
        $I->seeElement(MainPage::$gridTable);*/

        //$I->waitForElement(MainPage::$listButton, 3);

        //$mainPage->clickListModeButton()->validateProductsInListMode();
        /*$I->click(MainPage::$listButton);
        $I->seeElement(MainPage::$listTable);*/
    }
}
