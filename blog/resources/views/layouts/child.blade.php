@extends('layouts.master')
@section('title','Login Form')
@section('sidebar')
@extends('layouts.sidebar')
@endsection
@section('content')
      
      @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif
      
      <?php
         echo Form::open(array('url'=>'/login','method'=>'POST','files'=>'true'));
      ?>
<div style="position:relative;top:10px;left:30%;">      
      <table border = '1'>
         <tr>
            <td align = 'center' colspan = '2'>Login</td>
         </tr>
         <tr>
            <td>Username</td>
            <td><?php echo Form::text('username'); ?></td>
         </tr>
         <tr>
            <td>Password</td>
            <td><?php echo Form::password('password'); ?></td>
         </tr>
            <td align='center' colspan='2'>
                <?php
                    echo 'Select the file to upload.';
                    echo Form::file('image');
                ?>
            </td>
         <tr>
         </tr>
         <tr>
            <td align = 'center' colspan = '2'>
            <?php echo Form::submit('Login'); ?>
            </td>
         </tr>
      </table>
      
      <?php
         echo Form::close();
      ?>
@endsection