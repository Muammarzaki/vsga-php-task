<?php
require_once '../model/TourRepository.php';

use model\TourRepository;


$tourRepository = new TourRepository();

$data = $_POST;

$tourRepository->save([
    'name' => $data->order_name,
    'phone' => $data->phone_number,
    'entry_count' => $data->entry_count,
    'day_count' => $data->day_count,
    'accommodation' => $data->accommodation,
    'transportasi' => $data->transportasi,
    'service_food' => $data->service_food,
    'packet_price' => $data->packet_price,
    'total_price' => $data->total_price,
]);

echo "save";