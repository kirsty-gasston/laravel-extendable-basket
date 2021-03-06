<?php
namespace DivineOmega\LaravelExtendableBasket\Interfaces;

use DivineOmega\LaravelExtendableBasket\Models\BasketableModel;

interface BasketInterface
{
    public static function getCurrent();
    public static function getNew();
    public function items();
    public function add(int $quantity, BasketableModel $basketable);
    public function getSubtotal();
    public function getTotalNumberOfItems();
    public function isEmpty();
}