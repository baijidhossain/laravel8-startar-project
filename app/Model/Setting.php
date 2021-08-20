<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\Isset_;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class Setting extends Model implements HasMedia
{
    use Notifiable,InteractsWithMedia;
    use HasFactory;

    protected $guarded='id';
    public static function getByName($name,$default=null){

        $setting=self::where('name',$name)->first();

            if(isset($setting)){
            return $setting->value;
            }
            else{
                return $default;
            }

    }


    public function registerMediaCollections(): void
{
    $this->addMediaCollection('site_logo')->singleFile();
}
}
