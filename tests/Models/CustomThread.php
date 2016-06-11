<?php

namespace yukkomeister\Messenger\Test\Models;

use yukkomeister\Messenger\Models\Message;

class CustomThread extends Message
{
    protected $table = 'custom_threads';
}
