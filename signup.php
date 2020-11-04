<?php
session_start();
include('config.php');
if(isset($_POST['LOGIN']))
{
  $name=$_POST['name'];
  $username=$_POST['username'];
  $sem=$_POST['sem'];
  $dept=$_POST['dept'];
  $batch=$_POST['batch'];
  $tkmid=$_POST['tkmid'];
  $favteam=$_POST['favteam'];
  $num=$_POST['number'];
  $uniqid=$_POST['uniq'];

  $sql ="";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> bindParam(':', $, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
  // $_SESSION['alogin']=$_POST['user'];
  echo "<script type='text/javascript'> document.location = 'index/index.php'; </script>";
  } else{
    
    echo "<script>alert('Invalid Details'); document.location = 'index.php'; </script>";
  
  }
  
  }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register - Beat The Game</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="
    display: grid;
    justify-content: center;
    padding: 25px;
    background-image: url('https://wallpapercave.com/wp/wp4793580.jpg')
">
    
<h1 style="text-align: center;
    font-size: larger;
    color: aliceblue;
    font-weight: 700;">BEAT THE GAME - REGISTER</h1> <br>


<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Name">
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Username
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="username">
      <p class="text-red-500 text-xs italic"></p>
    </div>
    <div class="inline-block relative w-64">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="dept">
        Department
      </label>
  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline " name="dept">
    <option>Electrical and Electronics Engineering</option>
    <option>Electronics and Communication Engineering</option>
    <option>Computer Science Engineering</option>
    <option>Civil Engineering</option>
    <option>Mechanical Engineering</option>
    <option>Production Engineering</option>
    <option>Chemical Engineering</option>
    <option>Architecture</option>
 </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
<br><br>
    <div class="inline-block relative w-64">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="sem">
        Semester
      </label>
  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="sem">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>

 </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
<br><br>
    <div class="inline-block relative w-64">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="sem">
        Batch
      </label>
  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"name="batch">
    <option>A</option>
    <option>B</option>


 </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
<br> <br>

<div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="admid">
       TKM Login Id (Adm.No@tkmce.ac.in)
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="tkmid" name="tkmid" type="text" placeholder="______@tkmce.ac.in">
      <p class="text-red-500 text-xs italic"></p>
    </div>

    <div class="inline-block relative w-64">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="ft">
        Favorite team
      </label>
  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline "name="favteam">
    <option>MI</option>
    <option>DC</option>
    <option>CSK</option>
    <option>RCB</option>
    <option>RR</option>
    <option>KKR</option>
    <option>SRH</option>
    <option>KXIP</option>

 </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
<br><br>

   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Phno">
        Mobile Number
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Phno" type="text" placeholder="" name="number">
    </div>
   <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Uniq">
        Unique id (required for login)
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="uniq" type="text" name="uniq" placeholder="*******">
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" id="subbt" type="submit" name="LOGIN" onclick="checkdt()" >
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="index.php">
        Registered? Log In
      </a>
    </div>
  </form>
</div>

<script>

function checkdt() {
      var at = document.getElementById("tkmid").value.indexOf("@tkmce.ac.in");
      
      submitOK = "true";

      if (at == -1) {
        alert("Not a TKM Id! Please Enter TKM Id");
        document.getElementById("subbt").name = "";
        location.reload()
        submitOK = "false";
      }

      if (submitOK == "false") {
        return false;
      }
    }

</script>

</body>
</html>