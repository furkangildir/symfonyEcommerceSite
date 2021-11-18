<?php

namespace App\Controller;

use App\Entity\Product;
use App\Manager\CartManager;
use App\Repository\OrderItemRepository;
use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @Route("/order", name="order")
     */
    public function index(OrderItemRepository $orderItemRepository): Response
    {
     
        return $this->render('order/index.html.twig', [
            'orderItems' => $orderItemRepository->findAll(),
        ]);
    }
}
