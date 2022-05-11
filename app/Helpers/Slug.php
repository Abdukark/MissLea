<?php

namespace App\Helpers;

class Slug
{

    public static function uniqueSlug($slug,$table)
    {
        $slug=self::createSlug($slug);

        $items=\DB::table($table)->select('slug')->whereRaw("slug like '$slug%'")->get();

        return $slug;
    }

    protected static function createSlug($str)
    {
        $string = preg_replace("/[^a-z0-9_\s۰۱۲۳۴۵۶۷۸۹يءةاأإآؤئبپتثجچحخدذرزژسشصضطظعغفقکكگگلمنوهیZXCVBNMASDFGHJKLQWERTYUIOPzxcvbnmasdfghjklqwertyuiop12345678-]/u", '', $str);

        $string = preg_replace("/[\s_]+/", ' ', $string);

        $string = preg_replace("/[\s_]/", '-', $string);

        return $string;
    }
    public static function slug($str)
    {
        $string = preg_replace("/[^a-z0-9_\s۰۱۲۳۴۵۶۷۸۹يءةاأإآؤئبپتثجچحخدذرزژسشصضطظعغفقکكگگلمنوهیZXCVBNMASDFGHJKLQWERTYUIOPzxcvbnmasdfghjklqwertyuiop12345678-]/u", '', $str);

        $string = preg_replace("/[\s_]+/", ' ', $string);

        $string = preg_replace("/[\s_]/", '-', $string);

        return $string;
    }
}
