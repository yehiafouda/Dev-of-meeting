<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
Breadcrumbs::for('admin.questions', function ($trail) {
    $trail->push('Title Here', route('admin.questions'));
});
