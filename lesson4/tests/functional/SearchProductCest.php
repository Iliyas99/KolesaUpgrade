<?php

class SearchProductCest
{

    // tests
    public function clickSearchButtonAndFindProducts(FunctionalTester $I)
    {
       $searchBoxCss="#search_query_top";
       $searchBoxXPath="//input[@class='search_query form-control ac_input']";
       $submitSearchButtonCss = "[name='submit_search']";
       $submitSearchButtonXPath = "//button[@type='submit' and @name='submit_search']";
       $productImagesCss = "[class='product-image-container']";
       $productImagesXPath = "//div[@class='product-image-container']"
       
       $I->amOnPage(""); // изменение для пула
       $I->seeElement("[class='search_query form-control']");
       $I->fillField("[class='search_query form-control']", "Printed dress");
       $I->seeElement("[name='submit_search']");
       $I->click("[name='submit_search']");
       $I->seeNumberOfElements("[class='product-image-container']", 5);
    }

}
