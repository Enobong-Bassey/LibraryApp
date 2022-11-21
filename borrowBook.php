<?php require './includes/upperHead.php'; ?>

<title>Document</title>
<meta name="description" content="">

<?php 
    require './includes/lowerHead.php'; 
    require './includes/upHeader.php';
?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Dashboard</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="startBorrow.php">Start a borrow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="borrowBook.php">Member borrow</a>
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
        <div class="row bookadmin" id="upperSection">
            <div class="row">
                <div class="col-md-6 col-sm-8 text-left">
                    <h2 id="pageHeaderBorrowAdmin">Borrowing</h2>
                </div>
                <div class="col-md-6 col-sm-8" style="text-align: right;">
                    <button id="borrowBkBtn" class="btn btn-primary btn-sm">Borrow a book</button>
                    <button id="returnBkBtn" class="btn btn-warning btn-sm">Return a book</button>
                </div>
            </div>
            <hr id="pageHeaderLine">
            <div class="row justify-content-right" id="borrowingSection">
                
                <div class="col-md-3 col-sm-8 mb-3">
                <h6>Retrieve Member Info</h6>
                    <label for="memberNo" class="form-label text-left" id="profileLbl">Enter Member Number</label>
                    <input type="text" class="form-control" id="memberNo" name="memberNo">
                    <input type="submit" value="Get" name="Get" class="btn btn-primary">
                </div>
                <div class="col-md-6 col-sm-0">&nbsp;</div>
                <div class="row col-md-3 col-sm-8" id="identity">
                    <div class="col">
                        <p><br>Enobong Bassey Lib.# 006771</p>
                    </div>
                    <div class="col">
                        <img src="./assets/img/Enobong PP (1).jpg" width="85px" height="100px" >
                    </div>
                </div>
            </div>    
            <div class="col-md-12 col-sm-8" id="reservedBooks">
                
                <div id="bookRecords">
                    <div id="profileLbl">8 books reserved by member.</div>
                    <div class="table-responsive-sm">
                        <table class="table table-bordered table-sm table-hover">
                            <thead class="table-secondary">
                                <tr>
                                    <th>S/N</th><h6>Reserved Books</h6>
                                    <th>Book Title</th>
                                    <th>Author(s)</th>
                                    <th>Book Classification</th>
                                    <th>Year</th>
                                    <th>Published by</th>
                                    <th>Volume (Edition)</th>
                                    <th>Action Buttons</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Strenght of Materials</td>
                                    <td>Prof. Donald Saakyan, Prof. Reginald Khan</td>
                                    <td>Engineering</td>
                                    <td>2001</td>
                                    <td>Greenwich Publishing House</td>
                                    <td>10th Volume</td>
                                    <td><input type="submit" class="btn btn-success" name="approve" value="borrow"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container" id="borrowingRecords">
            <h6>Books still with member</h6>
                <div id="profileLbl">Number of books currently with member = 13</div>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-sm table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th>S/N</th>
                                <th>Book Title</th>
                                <th>Author(s)</th>
                                <th>Book Classification</th>
                                <th>Year</th>
                                <th>Published by</th>
                                <th>Volume (Edition)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Strenght of Materials</td>
                                    <td>Prof. Donald Saakyan, Prof. Reginald Khan</td>
                                    <td>Engineering</td>
                                    <td>2001</td>
                                    <td>Greenwich Publishing House</td>
                                    <td>10th Volume</td>

                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- returning section starts here -->
            <div class="row justify-content-right" id="returningSection">
                
                <div class="col-md-3 col-sm-8 mb-3">
                <h6>Retrieve Member Info</h6>
                    <label for="memberNo" class="form-label text-left" id="profileLbl">Enter Member Number</label>
                    <input type="text" class="form-control" id="memberNo" name="memberNo">
                    <input type="submit" value="Get" name="Get2" class="btn btn-primary">
                </div>
                <div class="col-md-6 col-sm-0">&nbsp;</div>
                <div class="col-md-3 col-sm-8" id="identity">
                    <div class="col">
                        <p><br>Enobong Bassey Lib.# 006771</p>
                    </div>
                    <div class="col">
                        <img src="./assets/img/Enobong PP (1).jpg" width="85px" height="100px" >
                    </div>
                </div>
            </div>                
            
            <div class="container" id="returningRecords">
                <div id="profileLbl">Number of books currently with member = 13</div>
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-sm table-hover">
                        <thead class="table-secondary">
                            <tr>
                                <th>S/N</th>
                                <th>Book Title</th>
                                <th>Author(s)</th>
                                <th>Book Classification</th>
                                <th>Year</th>
                                <th>Published by</th>
                                <th>Volume (Edition)</th>
                                <th>Action Buttons</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Strenght of Materials</td>
                                    <td>Prof. Donald Saakyan, Prof. Reginald Khan</td>
                                    <td>Engineering</td>
                                    <td>2001</td>
                                    <td>Greenwich Publishing House</td>
                                    <td>10th Volume</td>
                                    <td><input type="submit" class="btn btn-success" name="return" value="return"></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
