<?php
    $app->post('/text', 'DataController:postText'); // POST: /text
    $app->get('/text/{id}', 'DataController:getText'); // GET: /text/{id}