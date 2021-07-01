<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Connections;
    use Illuminate\Support\Facades\Cache;

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

        public static function ProductsCateries($CaterieUuid)
        {
            $lang = config('app.locale');
            if (Cache::has('product_categories_'.$lang))
            {
                $productCategories  = Cache::get('product_categories_'.$lang);
            }
            else
            {
                $connections           = new Connections();
                $productCategoriesList = json_decode(json_encode($connections->LaddersDataAllList($lang)->urun_kategorileri),true);
                $productCategories     = Cache::remember('product_categories_'.$lang, 60*120, function () use ($productCategoriesList) {return $productCategoriesList;});

            }
            $arraySearch = array_search($CaterieUuid, array_column($productCategories, 'uuid'));
            return $productCategories[$arraySearch];
        }

        public static function get_video_thumbnail( $src ) {
            $url_pieces = explode('/', $src);

            if ( $url_pieces[2] == 'player.vimeo.com' ) { // If Vimeo
                $id = $url_pieces[4];
                $hash = unserialize(file_get_contents('http://vimeo.com/api/v2/video/' . $id . '.php'));
                $thumbnail = $hash[0]['thumbnail_large'];
            } elseif ( $url_pieces[2] == 'www.youtube.com' ) { // If Youtube
                $extract_id = explode('v=', $url_pieces[3]);
                $id = $extract_id[1];
                $thumbnail = 'http://img.youtube.com/vi/' . $id . '/mqdefault.jpg';
            }
            return $thumbnail;

        }
    }
