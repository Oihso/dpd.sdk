<?php
namespace Oihso\DPD\API\Service;

use Oihso\DPD\API\User\UserInterface;

/**
 * Интерфейс отдельной служюы API
 */
interface ServiceInterface
{
    /**
     * Конструктор класса
     * 
     * @param \Oihso\DPD\API\User\UserInterface
     */
    public function __construct(UserInterface $user);
}