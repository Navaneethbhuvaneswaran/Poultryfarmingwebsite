<style>
table,td,th {
  border: 1px solid;
  height: 10px;
  vertical-align: bottom;  
  text-align: center;
}
th{
    background-color: coral;
}
</style>



<div >
  <h2>Form Data</h2>
  <table class="table ">
    <thead>
      <tr>
      <th class="text-center">S.No</th>
        <th class="text-center">firstName</th>
        <th class="text-center">lastName </th>
        <th class="text-center">gender</th>
        <th class="text-center">email</th>
        <th class="text-center">number</th>
        <th class="text-center">address</th>
        <th class="text-center">comments</th>
        <th class="text-center">countrychicken</th>
        <th class="text-center">broilerchicken</th>
        <th class="text-center">countryeggs</th>
        <th class="text-center">broilereggs</th>

  
      </tr>
    </thead>
    <?php
      include_once "dbconnect.php";
      $sql="SELECT * from form";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["firstName"]?> </td>
      <td><?=$row["lastName"]?></td>
      <td><?=$row["gender"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["number"]?></td>
      <td><?=$row["address"]?></td>
      <td><?=$row["comments"]?></td>
      <td><?=$row["countrychicken"]?></td>
      <td><?=$row["broilerchicken"]?></td>
      <td><?=$row["countryeggs"]?></td>
      <td><?=$row["broilereggs"]?></td>

      

    
    </tr>
    <?php
            $count=$count+1;
            
        }
    }
    ?>
  </table>
</div>


<div >
  <h2>Medecine</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">name </th>
        <th class="text-center">number</th>
        <th class="text-center">comments</th>
  
      </tr>
    </thead>
    <?php
      include_once "dbconnect.php";
      $sql="SELECT * from medecine";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?> </td>
      <td><?=$row["number"]?></td>
      <td><?=$row["comments"]?></td>
    
    </tr>
    <?php
            $count=$count+1;
            
        }
    }
    ?>
  </table>
</div>





<div >
  <h2>Food Data</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">chicken startergrower </th>
        <th class="text-center">Start grow</th>
        <th class="text-center">Henech</th>
        <th class="text-center">Country companion</th>
        <th class="text-center">comments</th>


  
      </tr>
    </thead>
    <?php
      include_once "dbconnect.php";
      $sql="SELECT * from food";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["chickenstartergrower"]?> </td>
      <td><?=$row["startgrow"]?></td>
      <td><?=$row["Henech"]?></td>
      <td><?=$row["Countrycompanion"]?></td>
      <td><?=$row["comments"]?></td>

    
    </tr>
    <?php
            $count=$count+1;
            
        }
    }
    ?>
  </table>
</div>



<div >
  <h2>User Data</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">User id </th>
        <th class="text-center">Name</th>
        <th class="text-center">email</th>
        <th class="text-center">passowrd</th>
        <th class="text-center">user type</th>


  
      </tr>
    </thead>
    <?php
      include_once "dbconnect1.php";
      $sql="SELECT * from user_form";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
            
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["id"]?> </td>
      <td><?=$row["name"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["password"]?></td>
      <td><?=$row["user_type"]?></td>

    
    </tr>
    <?php
            $count=$count+1;
            
        }
    }
    ?>
  </table>
</div>



