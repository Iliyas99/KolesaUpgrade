<?php

class FindProductCest
{
    /**
    * Ќайти товар, нажать на Ѕыстрый просмотр и проверить название товара
    */
    public function FindProductAndQuickVieW(AcceptanceTester $I)
    {
        $productCartCss = "[title='Blouse'][alt='Blouse']";
        $productCartXPath = "//img[@title='Blouse']";
        $quickViewBoxCss  = "[title='Blouse'] .quick-view[rel*='id_product=2']";
        $quickViewBoxXPath = "//a[contains(@href, 'id_product=2') and @class='quick-view']";
        $productTitleInBoxCss ="h1[itemprop='name']";
        $productTitleInTheBoxXPath = "//h1[contains(text(),'Blouse')]";
        

        $I->amOnPage(""); // изменение дл€ пула
        $I->waitForElementVisible("[title='Blouse']");
        $I->seeElement("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view");

        codecept_debug($I->grabTextFrom("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view"));

        $I->click("#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view");

        $I->seeElement("//h1[contains(text(),'Blouse')]");

        codecept_debug($I->grabTextFrom("//h1[contains(text(),'Blouse')]"));
    }
}
