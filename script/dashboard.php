<?php include('dbconnection.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Dashboard</title>
    <style>
        body {
            display: flex; 
            justify-content: center;
            background-image: URL(bg.jpg);
            background-size: cover;
            background-attachment: fixed;
            flex-direction: column;
        }
        .container {
            max-width: 30%; 
            padding-bottom:30px;
        }
        h2 {
            padding-top: 50px; 
            font-size: 50px;
            font-family: Times, serif;
            color: white;
        }
        h5 {
            font-size: 25px;
            font-family: Times, serif;
            color: white;
        }
        p {
            font-size: 22px;
            font-family: Times, serif;
            color: white;
        }
        label {
            font-size: 18px;
            font-family: Times, serif;
            color: white;
            margin-top: 15px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            background-color: rgba(255, 252, 242, 0.7);
            border: none;
            border-radius: 10px;
        } 

        .btn-submit-artwork {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            background-color: #6c584c;
            margin-top: 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        } 

        .btn-submit-artwork:hover {
            background-color: rgba(255, 252, 242, 0.7);
            color: #ffffff;
        }

    
    </style>
</head>
<body>

<div class="container">
<h2>Admin Dashboard</h2>
<p>Welcome to the admin dashboard!</p>

<?php
session_start();

if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']); 
}

if (isset($_SESSION['error_message'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
    unset($_SESSION['error_message']); 
}
?>
           
            <div class="mb-2">
              <h5 id="admin">Add Artwork</h5>
              <form action="create.php" method="post">
                <div class="mb-3">
                  <label id="label" for="artworkName" class="form-label">Artwork Name:</label>
                  <input type="text" class="form-control" id="artworkName" name="artworkName" required>
                </div>
                <button type="submit" class="btn btn-submit-artwork">Add Artwork</button>
                </form>
            </div>

            
              <div class="mb-2">
              <h5 id="admin">Update Artwork</h5>
              <form action="update.php" method="post">
                <div class="mb-3">
                  <label  id="label" for="updateArtworkID" class="form-label">Artwork ID:</label>
                  <input type="text" class="form-control" id="updateArtworkID" name="updateArtworkID" required>
                </div>
                <div class="mb-3">
                  <label  id="label" for="newArtworkName" class="form-label">New Artwork Name:</label>
                  <input type="text" class="form-control" id="newArtworkName" name="newArtworkName" required>
                </div>
                <button type="submit" class="btn btn-submit-artwork" >Update Artwork</button>
              </form>
            </div>
            
            
              <div>
              <h5 id="admin">Delete Artwork</h5>
              <form action="delete.php" method="post">
                <div class="mb-2">
                  <label  id="label" for="deleteArtworkID" class="form-label">Artwork ID to Delete:</label>
                  <input type="text" class="form-control" id="deleteArtworkID" name="deleteArtworkID" required>
                </div>
                <button type="submit" class="btn btn-submit-artwork" >Delete Artwork</button>
              </form>
              <a  href="home.php" class="btn btn-submit-artwork ">Back to Homepage</a>
            </div>
          </div>
</body>
</html>