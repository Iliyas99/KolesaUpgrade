<?php
namespace Page\Acceptance;

use PhpParser\Node\Expr\Cast\String_;

class LoginPage
{
    /**
     * Ссылка на главную страницу сайта
     */
    public static $URL = 'http://automationpractice.com/index.php';
    
    

    public function route($param){
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */

     protected $acceptanceTester;

     public function waitForElementAppear()
     {
         $this -> acceptanceTester -> waitForElement(MainPage::$gridButton, 3);
     }

}