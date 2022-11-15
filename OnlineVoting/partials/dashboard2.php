<?php
session_start(); 
$data=$_SESSION['data'];  
if($_SESSION['status']==1)
{
    $status='<b class="text-success">Voted</b>'; 
}
else{
    $status='<b class="text-danger">Not Voted</b>'; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Boostrap Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- CSS file link -->
    <link rel="stylesheet" href="../style.css">

</head>
<body class="bg-secondary text-light">
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
      <div class="container my-5"> 
        <h1 class="my-3">Voting System</h1>
        
        <div class="row my-5">
            <div class="col md-7"> 

                <?php                    
                    if(isset($_SESSION['groups'])){
                    $groups=$_SESSION['groups']; 
                    for($i=0;$i<count($groups);$i++){ 
                       ?>
                        <!-- Groups -->  
                        <div class="row">
                            <div class="col md-4">
                                <img src="../uploads/<?php echo $groups[$i]['photo']; ?>" alt="Group image">
                            </div>
                            <div class="col md-8">
                                <strong class="text-dark h5">Group Name:</strong>
                                <?php echo $groups[$i]['username']; ?><br>
                                <strong class="text-dark h5">Votes:</strong>
                                <?php echo $groups[$i]['votes']; ?><br>
                            </div>
                        </div>
                        <hr>
                <?php
                    }
                } 
                else{
                    ?>
                       <div class="container">
                        <P>No groups to display</P>
                       </div>
                    <?php
                }

                 ?>
                  
            </div>
            <div class="col md-5">
                 <!-- user profile -->
                 <img src="../uploads/<?php echo $data['photo']; ?>" alt="user image"><br><br>
                 <strong class="text-dark h5">Name:</strong>
                 <?php echo $data['username'] ; ?><br><br>
                 <strong class="text-dark h5">Votes:</strong>
                 <?php echo$data['votes']; ?><br><br>

            </div>

    
     </div>

    </div>
</body>
</html>
