<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\In;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

$html = <<<EOF
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <ul>
    <li>test</li>
  </ul>
</body>
</html>
EOF;

Route::get('hello', function() {
  return '<html><body><h1>hello</h1></body></html>';
});

Route::get('return-html', function() use ($html) {
  return $html;
});

Route::get('route-param/{msg}', function($msg) {
  $html = <<<EOF
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li>$msg</li>
    </ul>
  </body>
  </html>
  EOF;

  return $html;
});
