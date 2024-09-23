<?php

use App\Models\Employer;
use App\Models\Job;

test('example', function () {
    // AAA - Arange - Act - Assert
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});
