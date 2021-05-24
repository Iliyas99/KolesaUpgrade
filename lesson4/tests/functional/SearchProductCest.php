<?php

class SearchProductCest
{

    // tests
    public function clickSearchButtonAndFindProducts(FunctionalTester $I)
    {
       $I->amOnPage(""); // изменение для пула
       $I->seeElement("[class='search_query form-control']");
       $I->fillField("[class='search_query form-control']", "Printed dress");
       $I->seeElement("[name='submit_search']");
       $I->click("[name='submit_search']");
       $I->seeNumberOfElements("[class='product-image-container']", 5);
    }

}
