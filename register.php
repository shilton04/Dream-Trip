<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<style>
.container{
margin-top:80px;
margin-left:30%;
}
h2{
text-align:center;
margin-top:20px;
}
</style>
<body>
<h2>Registration</h2>
<div class="container">

<form action="insert.php"  method="post">
	<div class="form-group row">
    <label for="name" class="control-label col-sm-2">Name</label>
	 <div class="col-sm-5">
    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
	</div>
  </div>
  <div class="form-group row">
    <label for="email" class="control-label col-sm-2">Email address</label>
	 <div class="col-sm-5">
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
    </div>
  <div class="form-group row">
    <label for="mobilenumber" class="control-label col-sm-2">Mobile Number</label>
	 <div class="col-sm-5">
    <input type="number" class="form-control" id="mobilenumber" placeholder="Mobile Number" name="mobilenumber">
  </div>
    </div>
 
  
  <div class="form-group row">
    <label for="type" class="control-label col-sm-2">select event</label>
	 <div class="col-sm-5">
    <select class="form-control" id="type" name="type">
      <option>Rafting@799</option>
      <option>Trekking@799</option>
      <option>Scuba Diving@4999</option>
      <option>Cycling@499</option>
    </select>
  </div>
    </div>
   <div class="form-group row">
    <label for="amount" class="control-label col-sm-2">Total Amount(Rs)</label>
	 <div class="col-sm-5">
    <input type="number" class="form-control" id="amount" placeholder="Total Amount" name="amount" >
  </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left:26%;margin-top:20px;">Submit</button>
</form>
</div>
</body>


</html>