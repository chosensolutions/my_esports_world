<?php namespace Acme\Modules\Message\Repositories;

use Message;

class EloquentMessageRepository implements MessageRepositoryInterface {

    private $messageModel;

    function __construct(Message $messageModel)
    {
        $this->messageModel = $messageModel;
    }

    public function getAllInboxMessages($auth_id, $limit, $page)
    {
        // TODO: Implement getAllInboxMessages() method.
    }

    public function getAllSentMessages($auth_id, $limit, $page)
    {
        // TODO: Implement getAllSentMessages() method.
    }

    public function send(array $input)
    {
        // TODO: Implement send() method.
    }

    public function setRead($id)
    {
        // TODO: Implement setRead() method.
    }

}