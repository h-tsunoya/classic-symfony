<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ConcertController extends Controller
{
    /**
     * @Route("concert")
     */
    public function indexAction()
    {
        $concertlist = [
            [
                'date' => '2016年7月10日',
                'time' => '14:00',
                'place' => '石川県民文化会館（満席）',
                'available' => false,
            ],
            [
                'date' => '2016年8月25日',
                'time' => '14:00',
                'place' => '松任市民ホール会館',
                'available' => true,
            ],
            [
                'date' => '2016年9月20日',
                'time' => '18:00',
                'place' => '石川厚生年金ホール',
                'available' => true,
            ],
        ];
        return $this->render('Concert/index.html.twig',
            ['concertList' => $concertlist]
        );
    }
}
