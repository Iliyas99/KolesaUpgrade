<?php

class FirstCest
{
    /**
    * Ќайти товар, нажать на Ѕыстрый просмотр и проверить название товара
    */
    public function FindProductAndQuickVieW(AcceptanceTester $I)
    {
        $I->amOnPage(""); // изменение дл€ пула
        $I->waitForElementVisible("[title='Blouse']");
        $I->seeElement("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view");

        codecept_debug($I->grabTextFrom("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view"));

        $I->click("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view");

        $I->seeElement("//h1[contains(text(),'Blouse')]");

        codecept_debug($I->grabTextFrom("//h1[contains(text(),'Blouse')]"));
    }
}
