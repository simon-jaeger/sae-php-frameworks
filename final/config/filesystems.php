<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Default Filesystem Disk
  |--------------------------------------------------------------------------
  |
  | Here you may specify the default filesystem disk that should be used
  | by the framework. The "local" disk, as well as a variety of cloud
  | based disks are available to your application. Just store away!
  |
  */

  'default' => env('FILESYSTEM_DISK', 'public'),

  /*
  |--------------------------------------------------------------------------
  | Filesystem Disks
  |--------------------------------------------------------------------------
  |
  | Here you may configure as many filesystem "disks" as you wish, and you
  | may even configure multiple disks of the same driver. Defaults have
  | been set up for each driver as an example of the required values.
  |
  | Supported Drivers: "local", "ftp", "sftp", "s3"
  |
  */

  'disks' => [

    'private' => [
      'driver' => 'local',
      'root' => storage_path('app/uploads'),
      'throw' => false,
    ],

    'public' => [
      'driver' => 'local',
      'root' => public_path('files/uploads'),
    ],

  ],

  /*
  |--------------------------------------------------------------------------
  | Symbolic Links
  |--------------------------------------------------------------------------
  |
  | Here you may configure the symbolic links that will be created when the
  | `storage:link` Artisan command is executed. The array keys should be
  | the locations of the links and the values should be their targets.
  |
  */

  'links' => [],

];
