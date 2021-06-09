<?php

use Faker\Factory;
use Page\Acceptance\CustomFakerProvider;
/**
 * класс для работы с юзером
 */
class UsersCest{

    public const OWNER = 'Il1yas';
    public const EMAIL = 'test@test.test';
    public const JOB = 'Kolesa';
    public const NAME = 'User';

    public static $defaultSchema = [
        'job' => 'string',
        '_id' => 'string',
        'email' => 'string',
        'name' => 'string',
        'owner' => 'string',
    ];

    public static $userData = [
        'email' => self::EMAIL,
        'owner' => self::OWNER,
        'job' => self::JOB,
        'name' => self::NAME
    ];

    /**
     * Тест на создания юзера
     * @group test1
     */
    public function checkUserCreate(\FunctionalTester $I){
        

        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('human', self::$userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status' => 'ok']);
        $I->sendGet('people', ['owner' => self::OWNER]);
        $I->seeResponseMatchesJsonType(self::$defaultSchema);
    } 

    /**
     * Проверка, что можно обновить данные клиента
     * @group test2
     */
    public function checkUserUpdate(\FunctionalTester $I){
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPut('human', array(['owner' => self::OWNER, 'name' => 'davert']);
        $I->seeResponseContainsJson(['nModified' => 1]);
    }


    /**
     * Проверка, что можно удалить данные клиента
     * @group test3
     */
    public function checkUserDelete(\FunctionalTester $I){
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendDelete('human', ['owner' => self::OWNER]);
        //$I->sendGet('people', ['owner' => self::OWNER]);
        $I->seeResponseContainsJson(['deletedCount' => 1]);
    }

}