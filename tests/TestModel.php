<?php

namespace codicastudio\TagsField\Tests;

use Illuminate\Database\Eloquent\Model;
use codicastudio\Tags\HasTags;

class TestModel extends Model
{
    use HasTags;

    public $table = 'test_models';

    protected $guarded = [];

    public $timestamps = false;
}
