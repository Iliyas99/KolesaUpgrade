<?php
namespace Page\Acceptance;

/**
 * Page object для страницы формы
 */
class Fill{
    /**
     * локатор поля имени
     */
    public static $firstName = "//input[@id='firstName']";
    /**
     * локатор поля фамилии
     */
    public static $lastName = "//input[@id='lastName']";
    /**
     * локатор поля email
     */
    public static $email = "//input[@type='email']";

    /**
     * локатор поля номера
     */
    public static $phoneNumber = "//input[@id='phoneNumber']";

    /**
     * локатор поля номера
     */
    public static $address = "//input[@id='address']";

    /**
     * локатор поля города
     */
    public static $city = "//input[@id='city']";

    /**
     * локатор поля штата
     */
    public static $state = "//input[@id='state']";

    /**
     * локатор поля почтовый номер
     */
    public static $postalCode = "//input[@id='postal']";

    /**
     * локатор кнопки для оплаты через карту
     */
    public static $paymentTypeCart = "//input[@id='input_32_paymentType_credit']";

    /**
     * локатор поля номера карты
     */
    public static $cardNumber = "//input[@id='input_32_cc_number']";

    /**
     * локатор сообщения о результате
     */
    public static $successMessage = "//h1[contains(text(),'Good job')]";

    /**
     * локатор кнопки регистрация
     */
    public static $registrationButton = "//button[@id='input_36']";

}