<!DOCTYPE html>
<html>

<head>
    <title>BidMonkeys</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.png" type="image/x-icon" />
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/layout.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0d51041d85.js" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bgColorGreen">
        <a class="navbar-brand" href="homepage.php">
            <img src="../images/logo.png" width="50" alt="Logo">
            BidMonkeys
        </a>
        <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="search.php">Mammals</a>
                        <a class="dropdown-item" href="search.php">Insects</a>
                        <a class="dropdown-item" href="search.php">Reptiles</a>
                        <a class="dropdown-item" href="search.php">Birds</a>
                        <a class="dropdown-item" href="search.php">Fishes</a>
                        <a class="dropdown-item" href="search.php">Amphibians</a>
                    </div>
                </li>
            </ul>
            <?php
            if ($displaySearch) {
            ?>
                <form class="navbar-search form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a class="btn btn-green2 my-2 my-sm-0" href="search.php">Search</a>
                </form>
            <?php
            }
            ?>
            <ul class="navbar-nav align-items-center">
                <?php
                if ($loggedin) {
                ?>
                    <li class="nav-item">
                        <div class="btn btn-green mx-auto p-2 popup" data-toggle="modal" data-target="#exampleModal">
                            <img src="../images/bell.png" height="30" alt="Notifications">
                        </div>
                    </li>
                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-add-auction mx-sm-2 <?php if ($createAuctionPage) { ?> btn-outline-darkGreen <?php } ?>" <?php if (!$createAuctionPage) { ?> id="btn-add-auction" <?php } ?> href="createAuction.php">+ Add Auction</a>
                </li>
                <?php
                if ($loggedin) {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            John Doe
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">View Profile</a>
                            <?php
                            if ($admin) {
                            ?>
                                <a class="dropdown-item" href="adminDashboard.php">Admin Dashboard</a>
                            <?php
                            }
                            ?>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link btn <?php if ($signUpPage) { ?> btn-outline-darkGreen <?php } ?>" href="signup.php">Sign In</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>

    <div>
        <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content mx-auto">
                    <div class="modal-header">
                        <h2 class="mt-3">Auction Name</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group ml-3 mr-3 mt-3">
                            <p class="text-left">Payment Method</p>
                            <select name="categories" class="outline-green form-control" required>
                                <option value="0" selected hidden></option>
                                <option value="1">Debit Card</option>
                                <option value="2">Paypal</option>
                            </select>
                        </div>

                        <div class="form-group ml-3 mr-3 mt-3">
                            <p class="text-left">Shipping Method</p>
                            <select name="categories" class="outline-green form-control" required>
                                <option value="0" selected hidden></option>
                                <option value="1">Standard Mail</option>
                                <option value="2">Express Mail</option>
                                <option value="3">Urgent Mail</option>
                            </select>
                        </div>

                        <div class="d-flex ml-2 mr-2 mb-3">
                            <input type="text" class="form-control search_text_input" placeholder="Address" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-green2" id="submit_bt" data-dismiss="modal">SUBMIT</a>
                    </div>
                </div>
            </div>
        </div>