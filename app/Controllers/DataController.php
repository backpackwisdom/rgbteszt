<?php
    namespace App\Controllers;

    use App\Models\Data;

    class DataController {
        protected $container;

        public function __construct($container) {
            $this->container = $container;
        }

        // sending POST request with the text
        public function postText($request, $response) {
            $text = $request->getParam('text');

            // check text value
            if(empty($text) === true) {
                echo json_encode('The input is invalid. The message body in the response is empty.');
                return $response->withStatus(400);
            }

            // insert into database
            $data = Data::create(['text' => $text]);

            // return response with status code
            $obj = ['id' => $data->id];
            echo json_encode($obj);
            return $response->withStatus(201);
        }

        // sending GET request with the help of ID parameter
        public function getText($request, $response) {
            $id = $request->getAttribute('id');

            // get element by ID
            $data = Data::where('id', $id)->first();

            // check ID value
            if(empty($data) === true) {
                echo json_encode('Text not found by the id.');
                return $response->withStatus(404);
            }

            // return response with status code
            echo json_encode($data);
            return $response->withStatus(200);
        }
    }