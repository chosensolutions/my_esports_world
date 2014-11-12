<?php


function response(array $data, $status_code, $header = [])
{
    return Response::json($data, $status_code, $header);
}