<?php

namespace App\Models;

use Core\Model;

class Genre extends Model
{
    public int $ID_zanra;
    public string $naziv;

    public function getClassName(): string
    {
        return self::class;
    }

    public function getTableName(): string
    {
        return 'zanrovi';
    }
}