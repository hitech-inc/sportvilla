<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // public function index()
    // {
    // 	return view('site.index');
    // }

    public function page($page = '')
    {
    	// index page
    	if (!$page)
    	{
    		return view('frontend.site.index');
    	}

    	// other pages
    	$pages = [
    		'news' => 'Новости',
    		'contacts' => 'Контакты',
    		'blog' => 'Блог',
    		'price' => 'Цена',
    		'timeline' => 'Расписание',
    		'gallery' => 'Фото/Видео',
    		'access' => 'Правило допуска',
    		'note' => 'Записка от родителей'
    	];

    	$title = $pages[$page];

    	return view('frontend.site.page', compact('title'));
    }
}
