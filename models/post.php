<?php

/**
 * Class Post
 */
class Post extends BaseModel
{
    public static $tableName = 'posts';
    public static $primaryKey = 'id';

    public $id;
    public $author;
    public $content;

}