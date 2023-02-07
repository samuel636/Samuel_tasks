<?php include "header.php" ?>
<h3> Exersice 3 thi is variable operator</h3>
 <h2>1. create assimpel html form to get the fist nmae and last name fromthe  </h2>
<form action ="actio.php" method="post">
    <div class = "row">
        <div class ="col">
 <input type="text" name="fname" required placeholder="First name" class="form-control">
</div>
<div class= "col">
 <input type="text" name="lname"required placeholder="Last Name" class="form-control"><br><br>
</div>
Date: <input type="date" name ="bdate"><br><br>
select fav colour:<input type= "colour" name ="colour"><br><br>
Sumbit: <input type="submit" value ="Submit"><br>
    </div>
</form>
<?php include "footer.php" ?>