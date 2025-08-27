<?php
require_once '../model/TourRepository.php';

use model\TourRepository;


$tourRepository = new TourRepository();

$data = $_POST;
var_dump($data);;
$tourRepository->save([
    'name' => $data->order_name,
    'phone' => $data->phone_number,
    'create_at' => $data->date_order,
    'day_count' => $data->days_order,
    'accommodation' => $data->accommodation == 'on',
    'transportasi' => $data->transportation == 'on',
    'service_food' => $data->service_food == 'on',
    'entry_count' => $data->entry_count,
    'packet_price' => $data->packet_price,
    'total_price' => $data->price_total,
]);

