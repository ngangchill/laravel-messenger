<?php

return [

    'user_model' => App\User::class,

    'message_model' => yukkomeister\Messenger\Models\Message::class,

    'participant_model' => yukkomeister\Messenger\Models\Participant::class,

    'thread_model' => yukkomeister\Messenger\Models\Thread::class,

    /**
     * Define custom database table names.
     */
    'messages_table' => null,

    'participants_table' => null,

    'threads_table' => null,
];
