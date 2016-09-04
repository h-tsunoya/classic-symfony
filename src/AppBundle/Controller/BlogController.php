<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BlogController extends Controller
{
    public function latestListAction(){
        $blogList =[
            [
                'targetDate' => '2016年8月３日',
                'title' => '東京公演レポート',
            ],
            [
                'targetDate' => '2016年8月１０日',
                'title' => '最近の練習風景',
            ],
            [
                'targetDate' => '2016年8月25日',
                'title' => '毎日暑い日が続きます',
            ],
        ];

        return $this ->render('Blog/latestList.html.twig',
            ['blogList' => $blogList]
        );
    }
}
