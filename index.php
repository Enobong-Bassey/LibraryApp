<?php require './includes/upperHead.php'; ?>

<title>Document</title>
<meta name="description" content="">

<?php 
    require './includes/lowerHead.php'; 
    require './includes/upHeader.php';
?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Dashboard</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="startBorrow.php">Start a borrow</a>
                    </li>
                    <<li class="nav-item">
                        <a class="nav-link" href="borrowBook.php">Member borrow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="createBook.php">Book Management</a>
                    </li>
                    <a href="./signup.php" class="btn btn-outline-success">Sign In</a>    
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="font-family: 'Roboto', sans-serif; font-size: 2em; font-weight: 700; text-align: left; padding-left: 60px; margin-top: -150px; color: cyan; z-index: auto;">Readers Library, Fredericton</h1>
</header>
<main>
    <div class="container">
        <div class="row dashboard" id="upperSection">
            <div class="row">
                <div class="col-md-6 col-sm-8 text-left">
                    <h2 id="pageHeaderDash">Dashboard</h2>
                </div>
                <div class="col-md-6 col-sm-8 text-right" style="text-align: right;">
                    <button id="createProfileBtn" class="btn btn-success btn-sm">Create Profile</button>
                    <button id="updateProfileBtn" class="btn btn-warning btn-sm">Update Profile</button>
                </div>
            </div>
            <hr id="pageHeaderLine">
            <p id='profileLbl'>Welcome: Enobong Bassey</p>
            <div class="col-md-6 col-sm-8" id="upperLeftDash">
                <div class="row col-md-12" id="memberID">
                    <div class="col">
                        <img src="./assets/img/Enobong PP (1).jpg" width="200px" height="220px" id="memberPhotoCard" >
                    </div>
                    <div class="col">
                        <br><br>
                        <p>34 Beecroft Avenue,<br>Brampton, ON, L5P 2Z3<br>Canada.</p>
                        <p>(647)-644-7112</p>
                        <p>basseye@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-8" id="upperMidDash"></div>
            <div class="col-md-4 col-sm-8" id="upperRightDash">
                <div class="row" id="profileUpdate">
                <form action="" method="POST">
                    <h5 id="formHeading">Update Profile</h5>
                    <!-- <hr id="formHeadingLine"> -->
                    <div class="col-md-12 col-sm-8 mb-1 mt-2">
                        <label for="street" class="form-label text-left" id="profileLbl">Street Address</label>
                        <input type="text" class="form-control control-sm" id="street" value="34 Beecroft Avenue" name="street">
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="city" class="form-label"  id="profileLbl">City</label>
                            <input type="text" class="form-control" value="Brampton" id="city" name="city">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="province" class="form-label" id="profileLbl">Province / State</label>
                            <input type="text" class="form-control" value="Ontario" id="province" name="province">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="zip" class="form-label" id="profileLbl">Zip Code</label>
                            <input type="text" class="form-control" value="L5P 2Z3" id="zip" name="zip">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="country" class="form-label" id="profileLbl">Country</label>
                            <input type="text" class="form-control" value="Canada" id="country" name="country">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="phone" class="form-label" id="profileLbl">Phone number</label>
                            <input type="text" class="form-control" value="(647) 644 7112" id="phone" name="phone">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            &nbsp;
                        </div>
                    </div>
                    <input type="reset" value="Clear" class="btn btn-secondary btn-block btn-sm" id="resetProfile">
                    <input type="submit" value="Update" class="btn btn-primary btn-block btn-sm" >
                </form>
                </div>
                <div class="row" id="profileCreate">
                <form action="" method="POST">
                    <h5 id="formHeading">Create Profile</h5>
                    <div class="col-md-12 col-sm-8 mb-1 mt-2">
                        <label for="street" class="form-label text-left" id="profileLbl">Street Address</label>
                        <input type="text" class="form-control control-sm" id="street" name="street">
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="city" class="form-label"  id="profileLbl">City</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="province" class="form-label" id="profileLbl">Province / State</label>
                            <input type="text" class="form-control" id="province" name="province">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="zip" class="form-label" id="profileLbl">Zip Code</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="country" class="form-label" id="profileLbl">Country</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            <label for="phone" class="form-label" id="profileLbl">Phone number</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-md-4 col-sm-8 mb-1">
                            &nbsp;
                        </div>
                    </div>
                    <input type="reset" value="Clear" class="btn btn-secondary btn-block btn-sm"  id="resetProfile">
                    <input type="submit" value="Update" class="btn btn-primary btn-block btn-sm" >
                </form>
                </div>
            </div>
        </div>
        <div class="row dashboard" id="lowerSection">
            <h4>Borrowing Statistics</h4><hr>
            <div class="col-md-4 col-sm-8 " id="lowerLeftDash">
                <div class="col text-center" id="statBoxLeft">
                    <h6>Borrowed to date</h6><hr>
                    <h2>191</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-8 " id="lowerMidDash">
                <div class="col text-center" id="statBoxMid">
                    <h6>Currently borrowed</h6><hr>
                    <h2>8</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-8 " id="lowerRightDash">
                <div class="col text-center" id="statBoxRight">
                    <h6>Return date elapsed</h6><hr>
                    <h2>3</h2>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    
</footer>
</body>
</html>