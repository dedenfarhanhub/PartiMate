<?php

return [
    'partition_driver' => env('PARTIMATE_PARTITION_DRIVER', 'pgsql'),
    'refresh_schedule' => 'daily', // daily | hourly
];
