<html>
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <title> Add Task </title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>

body {
    background-color: #f8f9fa;
    color: #333;
    background-image: url('https://images.pexels.com/photos/2736499/pexels-photo-2736499.jpeg?cs=srgb&dl=pexels-content-pixie-2736499.jpg&fm=jpg');
    background-size: cover;
    background-repeat: no-repeat;
   
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    font-family: Georgia, 'Times New Roman', Times, serif;
    
    
}
.container h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-control {
    border-radius: 5px;
}

.btn-primary {
    border-radius: 8px;
    width: 100%;
    font-family: Georgia, 'Times New Roman', Times, serif;
}


    </style>
</head>
  
<body>

    <div class="container mt-5">
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $task = $_POST['ttask'];
            $date = $_POST['tdate'];

            if (empty($task) || empty($date) ) {
                echo '<div class="alert alert-danger" role="alert" >
                        Please fill the task
                      </div>';
            } 
            else {
            $q="insert into todo(id, task, Date) values('$id','$task','$date')";
            mysqli_query($con,$q);
            header("location:view.php");
        }
          
        }
        if(isset($_POST["btn1"])) {
            header("location:view.php");
        }
    ?>

        <h1> Task  </h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label> Task Name </label>
                <input type="text" class="form-control" placeholder="Enter the Task" name="ttask" />
            </div>
            <div class="form-group">
                <label> Completion Date </label>
                <input type="date" class="form-control"  name="tdate" />
            </div>
    
            <div class="form-group">
                <input type="submit" value="Add" class="btn btn-primary" name="btn">
            </div>
            <div class="form-group">
            <input type="submit" value="View Task" class="btn btn-primary" name="btn1">
            </div>
        </form>
    </div>
    
    
</body>
  
</html>