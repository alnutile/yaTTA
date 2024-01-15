<?php

test('can delete all chats', function () {
    $this->get(route('welcome'))
        ->assertSeeLivewire('chat.quick-settings');

});
