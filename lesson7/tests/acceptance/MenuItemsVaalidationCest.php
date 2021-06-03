<?php

use Codeception\Example;
use Page\Acceptance\MainPage;
    /**
    * класс для тестирования навигационного меню
    */
class MenuItemsVaalidationCest
{   
    /**
     * тест на провеку навигационного меню
     * @param Example $data
     * @dataProvider getDataForRandomElementsFromMenu
     */
    public function chooseRandomElementsFromMenu(AcceptanceTester $I, Example $data)
    {
        $I->amOnPage('');
        $I->waitForElementClickable(sprintf(MainPage::$navigationMenuItem, $data['title']), 3);
        $I->click(sprintf(MainPage::$navigationMenuItem, $data['title']));
        $I->waitForElementVisible(sprintf(MainPage::$title, $data['title']), 3);
        $I->seeInCurrentUrl($data['url']);
    }

    /**
    * Массив с данными    
    */
    public $menuItems = 
        array(['title' => 'Все потоки', 'url' => 'top'],
              ['title' => 'Разработка', 'url' => 'develop'],
              ['title' => 'Администрирование', 'url' => 'admin'],
              ['title' => 'Дизайн', 'url' => 'design'],
              ['title' => 'Менеджмент', 'url' => 'management'],
              ['title' => 'Маркетинг', 'url' => 'marketing'],
              ['title' => 'Научпоп', 'url' => 'popsci']
        );
    
    /**
     * функция возвращает 2 рандомных массива для динамического теста
     */
    protected function getDataForRandomElementsFromMenu(){
        $rand_keys = array_rand($this->menuItems, 2);
        return [
            $this->menuItems[$rand_keys[0]],
            $this->menuItems[$rand_keys[1]]
        ];
    }
}
