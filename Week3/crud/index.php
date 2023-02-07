<?php
$insert=false;
$update=false;
$delete=false;

//Connect to database
$servername="localhost";
$username="root";
$password="";
$database="notes";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die
if(!$conn){
    die("Failed to connect ". mysqli_connect_error());
}
if(isset($_GET['delete'])){
    $sno=$_GET['delete'];
    $delete=true;

    $sql="DELETE FROM `notes` WHERE `sno` = $sno";
    $result=mysqli_query($conn,$sql);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['snoEdit'])){
        //update record
        $sno=$_POST["snoEdit"];
        $title=$_POST["titleEdit"];
        $description=$_POST["descriptionEdit"];

        $sql="UPDATE `notes` SET `title` = '$title', `description` = '$description' WHERE `sno` = $sno";
        $result=mysqli_query($conn, $sql);
        if($result){
            $update=true;
        }
    }
    else{
    $title=$_POST["title"];
    $description=$_POST["description"];

    $sql="INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    $result=mysqli_query($conn, $sql);

    if($result){
        $insert=true;
    }
    else{
        echo "Record not inserted !<br>". mysqli_error($conn);
    }
 }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Data tables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" 
    crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>

    <title>Notes App</title>
</head>

<body>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit this note</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/crud/index.php" method="post">
        <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="mb-3">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="desc">Note Description</label>
                <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Nav -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">myNotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Alert -->
    <?php
    if($insert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your note has been inserted successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <?php
    if($delete){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your note has been deleted successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <?php
    if($update){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your note has been updated successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>

    <!-- Form -->
    <div class="container mt-3">
        <h2>Add a Note</h2>
        <form action="/crud/index.php" method='POST'>
            <div class="mb-3">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="desc">Note Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <!-- Form Data -->
    <div class="container mt-3 my-4">
       <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php
                $sql="SELECT * FROM `notes`";
                $result=mysqli_query($conn,$sql);
                $sno=0;
              while($row = mysqli_fetch_assoc($result)){
                $sno++;
              echo "
              <tr>
                  <th scope='row'>". $sno ."</th>
                  <td>". $row['title'] ."</td>
                  <td>". $row['description'] ."</td>
                  <td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button>
                  <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button> </td>
              </tr>";
              }
              
        ?>

            </tbody>
        </table>
    </div>
    <hr>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <script>
        edits=document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click", (e)=>{
                console.log("edit ",);
                tr = e.target.parentNode.parentNode;
                title= tr.getElementsByTagName("td")[0].innerText;
                description=tr.getElementsByTagName("td")[1].innerText;
                console.log(title,description);
                titleEdit.value=title;
                descriptionEdit.value=description;
                snoEdit.value=e.target.id;
                console.log(e.target.id);
                
                $('#editModal').modal('toggle');
            })
        })

        deltes=document.getElementsByClassName('delete');
        Array.from(deltes).forEach((element)=>{
            element.addEventListener("click", (e)=>{
                console.log("edit ",);
                sno=e.target.id.substr(1,);
                if(confirm("Are you sure you want to delete the note ?")){
                    window.location=`/crud/index.php?delete=${sno}`;
                    // create form and use post request to submit a form
                }
                else{
                    console.log('no');
                    
                }
            })
        })
    </script>
</body>

</html>