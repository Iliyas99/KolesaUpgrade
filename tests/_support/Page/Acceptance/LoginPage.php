<?php
namespace Page\Acceptance;

use PhpParser\Node\Expr\Cast\String_;

class LoginPage
{
    /**
     * Ссылка на главную страницу сайта
     */
    public static $URL = 'www.saucedemo.com';
    public static $nameField = "//input[@id='user-name']";
    public static $passwordFiled = "//input[@id='password']";
    public static $submitButton = "//input[@id='login-button']";
    public static $errorBox = "//div[@class='error-message-container error']";
    public static $errorBoxDeletion = "//button[@class='error-button']";
    public static $errorBoxText = "//h3[@data-test='error']";
    

    public function route($param){
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */

    protected $acceptanceTester;

    /**
     * Заполнить логин
     */
    public function fillNameField()
    {
        $this -> acceptanceTester -> fillField(self::$nameField, "locked_out_user");
        return $this;
    }

    /**
     * Заполнить пароль
     */
    public function fillPasswordField()
    {
        $this -> acceptanceTester -> fillField(self::$passwordFiled, "secret_sauce");
        return $this;
    }

    /**
     * Нажать на submit
     */
    public function clickSubmit()
    {
        $this -> acceptanceTester -> fillField(self::$passwordFiled);
        return $this;
    }

    /**
     * Подождать появление окна с ошибкой
     */
    public function waitForErrorBoxAppear(){
        $this -> acceptanceTester -> waitForElement(self::$errorBox);
        return $this;
    }

    /**
     * Нажать на крестик чтобы удалить окно с ошибкой
     */
    public function clickToDeleteErrorBox(){
        $this -> acceptanceTester -> click(self::$errorBoxDeletion);
        return $this;
    }

    /**
     * Проверить, что окно исчезло
     */
    public function validateErrorBoxDisapear(){
        $this -> acceptanceTester -> dontSeeElement(self::$errorBoxText);
        return $this;
    }

    

}