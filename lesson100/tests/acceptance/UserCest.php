<?php
use Faker\Factory;

class UserCest{
    public const OWNER = 'Iliyas';
    public const NUMBER = 10;

    /**
     * @group test1
     */
    public function checkUserCreate(\AcceptanceTester $I){
        
        $I->haveHttpHeader('Content-Type', 'application/json');
        $faker = Factory::create('en_EN');
        
        for($i=0; $i<$this::NUMBER; $i++){

            $userData = [
                'email' => $faker->email,
                'owner' => $this::OWNER,
                'job' => $faker->company,
                'name' => $faker->name,
                'canbeKilledBySnap' => $faker->boolean(),
                'created_at' => $faker->date("Y-m-d"),

            ];

            $I->haveInCollection('people', $userData);

            $I->sendPost('/human', $userData);
            $I->seeResponseCodeIsSuccessful();
            $I->seeResponseContainsJson(['status' => 'ok']);
            $I->seeInCollection('people', $userData);
            
            $I->wantTo('Проверить получение пользователей по создателю записи');
            $I->sendGet('/people', ['owner' => $userData['owner']]);
            $I->seeResponseContainsJson([$userData]);
            
        }

        $count = $I->grabCollectionCount('people', ['owner' => $this->userData['owner'],'canbeKilledBySnap'=> true]);
        $I->amOnPage('/?owner='.$this::OWNER);
        $I->assertContains(MainPage::$counter, $this::NUMBER);
        $I->assertEquals(strlen(MainPage::$users), $this::NUMBER);
        $I->click(MainPage::$button);
        $I->assertContains(MainPage::$counter, strval($count));
        $I->assertEquals(strlen(MainPage::$users), $count);
        

    }
    
}