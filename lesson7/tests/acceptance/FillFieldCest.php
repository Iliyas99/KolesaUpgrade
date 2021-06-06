<?php

namespace Page\Acceptance;
use Page\Acceptance\Fill;
use Page\Acceptance\CustomFakerProvider;
use Faker\Factory;

/**
 * класс для тестирование формы
 * @group test2
 */
class FillFieldCest{
    public function checkFromFields(\AcceptanceTester $I){
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustumFakerProvider($faker));
        $name= $faker->firstName;
        $lastName= $faker->lastName;
        $email= $faker->email;
        $phoneNumber = $faker->phoneNumber;
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postalCode = $faker-> postcode;
        $cardNumber = $faker->getRandomCardNumber();


        $I->amOnPage('');
        $I->fillField(Fill::$firstName, $name);
        $I->fillField(Fill::$lastName, $lastName);
        $I->fillField(Fill::$email, $email);
        $I->fillField(Fill::$phoneNumber, $phoneNumber);
        $I->fillField(Fill::$address, $address);
        $I->fillField(Fill::$city, $city);
        $I->fillField(Fill::$state, $state);
        $I->fillField(Fill::$postalCode, $postalCode);
        $I->click(Fill::$paymentTypeCart);
        $I->fillField(Fill::$cardNumber, $cardNumber);
        $I->click(Fill::$registrationButton);
        $I->waitForElementVisible(Fill::$successMessage);
    }

    
    
}