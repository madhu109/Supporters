<?php
// Include database connection
include 'connect.php';

$sql = "SELECT * FROM cases";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JusticeDesk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Global Styling */
        body {
            background-color: #f5f9ff;
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #0056b3;
            font-weight: bold;
        }
        table {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        thead {
            background-color: #0056b3;
            color: white;
        }
        tbody tr {
            transition: background-color 0.3s, transform 0.2s;
        }
        tbody tr:hover {
            background-color: #e3f2fd;
            transform: scale(1.02);
        }
        tbody td {
            vertical-align: middle;
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        .btn-logout {
            background-color: #0056b3;
            color: white;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-logout:hover {
            background-color: #003f8a;
            color: white;
            transform: scale(1.02);
            
        }
        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
  </head>
  <body>
	 <!-- Top Logo section  -->
   <div class="bg-top navbar-light">
    <div class="container">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-4 d-flex align-items-center py-4">
          <a class="navbar-brand" href="index.php">JusticeDesk</a>
        </div>
        <div class="col-lg-8 d-block">
          <div class="row d-flex">
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
              <div class="text">
                <span>Email</span>
                <span>harikamam@gmail.com</span>
              </div>
            </div>
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <div class="text">
                <span>Call</span>
                <span>Call Us: + 91 XXXXXXXXX</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Content bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a href="index.php" class="nav-link pl-0">Home</a></li>
          <li class="nav-item"><a href="BNC_Sections.html" class="nav-link">BNC Sections</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="container mt-5 fade-in">
        <h2 class="text-center mb-4">Case Records</h2>
        <a href="/JusticeDesk_collage_project/lawer_access/logout.php" class="btn btn-logout mb-3">Logout</a>
        <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Case Type</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Submitted On</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['firstName']); ?></td>
                    <td><?php echo htmlspecialchars($row['lastName']); ?></td>
                    <td><?php echo htmlspecialchars($row['case_type']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p class="text-center">No case records found.</p>
        <?php endif; ?>

        <?php
        // Close database connection
        $conn->close();
        ?>
    </div>

		
    	<!-- footer -->
		
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-2">
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Have a Questions?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span><span class="text">Obulavaripalli,Annamayya, Andhra Pradesh</span></li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 91 XXXXXXXXX</span></a></li>
                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">harikamam@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Recent Cases</h2>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/case\ 1.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">O.J. Simpson Case (1995)</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> June 26, 1995</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                <div class="block-21 mb-5 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/case\ 2.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Casey Anthony Trial (2011)</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> June 26, 2011</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5 ml-md-4">
                <h2 class="ftco-heading-2">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="index.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                  <li><a href="about.html"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                  <li><a href="BNC_Sections.html"><span class="ion-ios-arrow-round-forward mr-2"></span>BNC Sections</a></li>
                  <li><a href="services.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                  <li><a href="contact.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
  </body>
</html>