<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
   public function index(Request $request,Response $response) {
      $minutes = 1;
      $response = new Response('Hello World');
      $response->withCookie(cookie('name', 'virat', $minutes));
      return $response;    
   }
   public function getCookie(Request $request) {
      $value = $request->cookie('name');
      echo $value;
   }
   public function create() {
      echo 'create';
   }
   public function store(Request $request) {
      $username = $request->name;
      $password = $request->password;
      $name = $request->username;
      echo 'username :-'.$username.'password :-'.$password.'name :-'.$name;
   }
   public function show($id) {
      echo 'show';
   }
   public function edit($id) {
      echo 'edit';
   }
   public function update(Request $request, $id) {
      echo 'update';
   }
   public function destroy($id) {
      echo 'destroy';
   }
}
