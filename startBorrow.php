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
                        <a class="nav-link active" href="startBorrow.php">Start a borrow</a>
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
    <div class="row bookadmin" id="upperSection">
        <div class="row">
            <div class="col-md-12 col-sm-8 text-left">
                <h2 id="pageHeaderBkAdmin">Book Borrowing Reservation</h2>
            </div>
        </div>
        <hr id="pageHeaderLine">
        <p id='profileLbl'>Welcome: Enobong</p>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-sm-8">
            <h5 id="formHeading">Cover and Details of the Book</h5><hr id="formHeadingLine">
            <div class="row col-12">
                <div class="col-6" id="bookPics">
                    <div id="picsPosition">

                    </div>
                </div>
                <div class="col-6" id="bookDetails">

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-8">
            <h5 id="formHeading">Pick and Reserve a Book</h5><hr id="formHeadingLine">
            <div class="mb-1 mt-2">
                <form action="" method="POST">
                    <label for="bkcategory" class="form-label text-left" id="profileLbl">Book Classification</label>
                    <select name="bkcategory" id="bkcategory" class="form-control">
                        <option value="" selected disabled>select book classification here...</option>

                        <?php 
                            require './includes/dbconnect.php';

                            $classQuery = "SELECT * FROM bookClass ORDER BY className";
                            $result = mysqli_query($conn, $classQuery);

                            if(mysqli_num_rows($result) > 0) {

                                while($rows = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $rows["className"] . '">' . $rows["className"] . '</option>';
                                }
                            }
                        ?>
                        
                    </select><br>
                </form>
            </div>
            <div class="mb-1" id="retrievedBook">
                <form action="" method="POST">
                <label for="books" class="form-label text-left" id="profileLbl">Books</label>
                    <select name="books" id="books" class="form-control">
                        <option value="" selected disabled>select the desired book here...</option>
                        <?php
                            if(isset($_POST['bkcategory'])) {
                                $bookCategory = $_POST['bkcategory'];
                                
                                $getBookQuery = "SELECT * FROM books WHERE book_class = '" . $bookCategory . "' ORDER BY title";
                                $result = mysqli_query($conn, $getBookQuery);

                                if(mysqli_num_rows($result) > 0){

                                    while($rows = mysqli_fetch_assoc($result)){
                                        echo '<option value="' . $rows["title"] . '">' . $rows["title"] . '</option>';
                                    }
                                } else {
                                    echo 'No books found in the specified book classification.';
                                }
                            }
                        ?>
                    </select>
                    <div class="mb-1">
                        <input type="reset" value="Clear" class="btn btn-secondary btn-block btn-sm" id="resetProfile">
                        <input type="submit" name="reserveBookBtn" value="RESERVE BOOK" class="btn btn-primary btn-block btn-sm" >
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="bookRecords">
        <div id="profileLbl">You have 8 books reserved.</div>
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
</main>