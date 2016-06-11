<?php

namespace yukkomeister\Messenger\Test\Models;

use yukkomeister\Messenger\Models\Message;

class CustomMessage extends Message
{
    protected $table = 'custom_messages';
}
