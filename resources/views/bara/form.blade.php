
<html>
<head>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #58257b;
  border-radius: 4px;
  
}
</style>
</head>
<body>

<form action="{{'/users'}}" method="post">
 {{csrf_field()}}
  <label>Name</label>
  <input type="text" id="fname" name="name">
  <label >Email</label>
  <input type="text" name="email">
  <label >password</label>
  <input type="text"  name="password">
  <input type="submit" value="Submit">
  <!-- <label >Email</label>
  <input type="password"  name="password"> -->
</form>

</body>
</html>


</body>
</html>