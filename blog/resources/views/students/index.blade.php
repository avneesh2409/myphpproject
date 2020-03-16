<h1>All Information About Students</h1>
<ol> 
@foreach ($students as $student)
<li> {{ $student->name }}  </li>
@endforeach
 </ol>

