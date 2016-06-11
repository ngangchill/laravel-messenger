<?php

namespace yukkomeister\Messenger\Test\Models;

use yukkomeister\Messenger\Models\Message;

class CustomParticipant extends Message
{
    protected $table = 'custom_participants';
}
