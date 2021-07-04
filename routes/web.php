<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

    $app->get('/{lang}/', [
        'as' => 'home', 'uses' => 'MasterController@Index'
    ]);

    $app->post('/{lang}/submit-form', [
        'as' => 'single', 'uses' => 'MasterController@SubmitForm'
    ]);

    $app->get('/{lang}/{component_slug}/{slug}/{PageNumber}', [
        'as' => 'paginate', 'uses' => 'MasterController@Paginate'
    ]);

    $app->get('/{lang}/{component_slug}/{slug}', [
        'as' => 'multiple', 'uses' => 'MasterController@Multiple'
    ]);

    $app->get('/{lang}/{component_slug}', [
        'as' => 'single', 'uses' => 'MasterController@Single'
    ]);


