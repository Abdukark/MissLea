<?php

namespace App\Helpers;

use App\Models\Post;
use App\Models\Tag as ModelsTag;

class Tag
{

    public static function tagWork($title)
    {
        ;
        if (strpos($title, " ")){
            $arra = explode(" ",$title);
            $oldTags = [];
            $newTags = [];
            foreach ($arra as $arr){
                if(ModelsTag::where('title','=', $arr)->first()) {
                    $oldTags[] = $arr;
                }else{
                    $newTags[] = $arr;
                }
               
            }
            if(isset($newTags)) {
                foreach ($newTags as $newTag) {
                    $nTag = new ModelsTag();
                    $nTag->title = $newTag;
                    $nTag->slug = $newTag;
                    $nTag->save();
                }
            }
        } else {
            $oldTags = [];
            $newTags = [];
                if(ModelsTag::where('title','=', $title)->first()) {
                    $oldTags = $title;

                } else {
                    $newTags = $title;
                    $nTag = new ModelsTag();
                    $nTag->title = $newTags;
                    $nTag->slug = $newTags;
                    $nTag->save();
                }
            
        }

    }

   
}
