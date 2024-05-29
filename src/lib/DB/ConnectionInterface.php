<?php
namespace Oihso\DPD\DB;

/**
 * Интерфейс соединения с БД
 */
interface ConnectionInterface
{
    /**
     * Возвращает инстанс PDO
     * 
     * @return \PDO
     */
    public function getPDO();
}