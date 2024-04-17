<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CSVExportController extends AbstractController
{
    #[Route('/csv_export/{receipt_id}', name: 'app_csv_export')]
    public function index($receipt_id): Response
    {
        // https://developers.etsy.com/documentation/reference/#operation/getShopReceipt

        $api_key = $this->getParameter('etsy.api_key');
        $shop_id = $this->getParameter('etsy.shop_id');
        
        $endpoint = 'https://openapi.etsy.com/v3/application/shops/'.$shop_id.'/receipts/'.$receipt_id;

        dd($endpoint);

        return $this->render('csv_export/index.html.twig', [
            'controller_name' => 'CSVExportController',
        ]);
    }
}
