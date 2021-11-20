<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Order;
use App\Repository\OrderItemRepository;

class OrderController extends AbstractController
{
    /**
     * @Route("/order", name="order")
     */
    public function index(OrderItemRepository $orderItemRepository): Response
    {
        return $this->render('orderItem/index.html.twig', [
            'orderItems' => $orderItemRepository->findAll(),
        ]);
    }
}
