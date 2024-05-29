<?php
namespace Oihso\DPD\API\Client;

use \Oihso\DPD\API\User\UserInterface;

/**
 * Фабрика по созданию клиента к API
 * 
 * По умолчанию создает SOAP-клиента
 */
class Factory
{
	/**
	 * Возвращает SOAP-клиент для работы с API
	 * 
	 * @return \Oihso\DPD\API\Client\ClientInterface
	 */
	public static function create($wdsl, UserInterface $user)
	{
		if (class_exists('\\SoapClient')) {
			return new Soap($wdsl, $user);
		}

		throw new \Exception("Soap client is not found", 1);
	}
}