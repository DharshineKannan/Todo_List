<?php
    include("connect.php");
  
    if (isset($_POST['btn'])) {
        $date = $_POST['tdate'];
        $q="select * from todo where Date ='$date'";
        $query=mysqli_query($con,$q);
    } 
    else {
        $q= "select * from todo";
        $query=mysqli_query($con,$q);
    }
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> View </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
       body {
    background-color: lightgrey;
    color: #333;

   
}
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        .card-link {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
        }

        .card-subtitle {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 20px;
            color: palevioletred;
        }

        h1 {
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bold;
            font-size: 40px;
            text-align: center;
        }

    </style>
</head>
  
<body>
    <div class="container mt-5">
        <h1>To Do List</h1>
        <div class="row">
            <?php
                while ($qq = mysqli_fetch_array($query)) {
            ?>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Task: <?php echo $qq['task']; ?>
                        </h5>
                        <h5 class="card-title">
                            Date: <?php echo $qq['Date']; ?>
                        </h5>
                        <a href="delete.php?id=<?php echo $qq['id']; ?>" class="card-link">
                            Completed Successfully
                        </a>
                    </div>
                </div>
            </div>
            
            <?php
                }
            ?>
           </div>
           <div>
            <a href="index.php" class="btn btn-primary back-btn"> Back </a>
        </div> 
        </div>
        
    </div>
    
</body>
</html>
