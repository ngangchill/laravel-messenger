<?php

$faktory->define(['thread', 'yukkomeister\Messenger\Models\Thread'], function ($f) {
    $f->subject = 'Sample thread';
});

$faktory->define(['message', 'yukkomeister\Messenger\Models\Message'], function ($f) {
    $f->user_id = 1;
    $f->thread_id = 1;
    $f->body = 'A message';
});

$faktory->define(['participant', 'yukkomeister\Messenger\Models\Participant'], function ($f) {
    $f->user_id = 1;
    $f->thread_id = 1;
});
