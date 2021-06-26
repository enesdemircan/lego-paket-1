<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Connections;

    class HelperController extends Controller
    {
        public static function ArrayImageOne($commaImage,$thumbsMode = null)
        {
            $arraySmash = explode(',',$commaImage);

            if (empty($thumbsMode))
            {
                return env('SERVER_ADDRESS','NULL').'/'.$arraySmash[0];
            }
            else
            {
                return env('SERVER_ADDRESS','NULL').'/'.self::ThumbsImage($arraySmash[0]);
            }
        }

        public static function ModuleUuidSearch($SearchWord,$String)
        {
            $arraySmash = explode($SearchWord,$String);

            return $arraySmash[1];
        }

        public static function ThumbsImage($image)
        {
            $arraySmash  = explode('/',$image);
            $arraySmash2 = explode(end($arraySmash),$image);

            return $arraySmash2[0].'thumbs/'.end($arraySmash);
        }
    }
