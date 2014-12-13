<?php namespace Acme\Modules\Message\Repositories;

interface MessageRepositoryInterface {

    public function getAllInboxMessages($auth_id, $limit, $page);

    public function getAllSentMessages($auth_id, $limit, $page);

    public function send(array $input);

    public function setRead($id);

} 