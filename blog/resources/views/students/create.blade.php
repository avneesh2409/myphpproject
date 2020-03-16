<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
 
input[type=text], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
 
input[type=submit]:hover {
  background-color: #45a049;
}
 
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
 
<h1>Create New Devices</h1>
 
<div class="container">
 
    <form method="POST" action="/student">
 
        {{ csrf_field() }}
 
       <div>
          <label >Student Name</label>
          <input type="text" name="name" placeholder="Student Name">
 
      </div>
      <div>
            <label >Student School Name</label>
            <input type='text' name="school" placeholder="Enter School Name" />
 
      </div>
       <div>
            <label >Student Age</label>
            <input type='text' name="age" placeholder="Enter Age" />
 
      </div>
       <div>
            <label >Student Class</label>
            <input name="class" type='text' placeholder="Enter Class" />
 
      </div>
       <div>
            <label >Student Contact Number</label>
            <input name="contact" type='text' placeholder="Contact Here" />
 
      </div>
      <div>
 
            <input type="submit" value="Make Student">
 
      </div>
 
    </form>  
 
 </div>   
