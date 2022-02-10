<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .headercard {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 10px; /* Added */
            width: 60%;
            height: 80%;
        }
        .bodycard {
            margin: 0 auto; /* Added */
            margin-top:5%;
            float: none; /* Added */
            margin-bottom: 10px; /* Added */
            width: 50%;
        }
    </style>
</head>

<?php
session_start();

if(isset($_SESSION['username']))
{

  //$GLOBALS['u'] = $_SESSION['manager'];
  $u=$_SESSION['username'];
  echo $u;
}
?>


<body style="background-color:#FFFFF0">
        <div class="card headercard text-center">
            <div class="card-header">
                Candidate Page
            </div>
            <div class="card bodycard">
                <div class="row mt-4">
                    <div class="col-md-12">
					
					<?php
						include('db_connect.php');

						if(isset($_POST['submit']))
						{
						$u=$_SESSION['username'];	
						$narayanan=$_POST['narayanan'];
						
						$query=mysqli_query($conn,"INSERT INTO vote(username,pname)VALUES('$u','$narayanan')");
						if($query)
						{
							echo "<script>alert('Thanks for Voting');</script>";
							header('location:index.php');
						}



						}

					?>
					
					<form method="post" action="#" >
                      <input type="text" id="narayanan" value="narayanan" name="narayanan" hidden><input type="submit" class="btn btn-success ml-5" name="submit" value="Vote for Narayanan" /><br />
                    </form>
					</div>
                </div>
               
            </div>
        </div>
</body>
</html>