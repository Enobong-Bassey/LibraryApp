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
                        <a class="nav-link" href="borrowBook.php">Member borrow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="createBook.php">Book Management</a>
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
                    <h2 id="pageHeaderBkAdmin">Book Administration</h2>
                </div>
                <div class="col-md-6 col-sm-8" style="text-align: right;">
                    <button id="enterBkBtn" class="btn btn-primary btn-sm">Enter a book</button>
                    <button id="editBkBtn" class="btn btn-warning btn-sm">Edit a book</button>
                    <button id="eraseBkBtn" class="btn btn-danger btn-sm">Erase a book</button>
                </div>
            </div>
            <hr id="pageHeaderLine">
            <div class="col-md-4 col-sm-8" id="upperLeftBookAdmin">
                <div class="col-md-12 col-sm-8" id="upperLeftBkAdminInnerUpdate">
                    <h5 id="formHeading">Retrieve Book to Update</h5><hr id="formHeadingLine">
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
                                <?php
                                    if(isset($_POST['bkcategory'])) {
                                        $bookCategory = $_POST['bkcategory'];
                                        
                                        $getBookQuery = "SELECT * FROM books WHERE book_class = '" . $bookCategory . "' ORDER BY title";
                                        $result = mysqli_query($conn, $getBookQuery);

                                        if(mysqli_num_rows($result) > 0){
                                            echo '<label for="books" class="form-label text-left" id="profileLbl">Books</label>
                                                    <select name="books" id="books" class="form-control">
                                                        <option value="" selected disabled>select the desired book here...</option>';

                                            while($rows = mysqli_fetch_assoc($result)){
                                                echo '<option value="' . $rows["title"] . '">' . $rows["title"] . '</option>';
                                            }
                                        } else {
                                            echo 'No books found in the specified book classification.';
                                        }
                                    }
                                ?>
                            </select>
                        </form>
                    </div>                    
                </div>
            </div>
            <div class="col-md-8 col-sm-8" id="upperRightBookAdmin">
                <!-- Create a book starts here -->
                <div class="col-md-12 col-sm-8" id="upperRightBkAdminInnerCreate">
                    <h5 id="formHeading">Create New Book</h5><hr id="formHeadingLine">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-9" >
                        <form action="" method="POST">
                            <div class="mb-1 mt-2">
                                <label for="title" class="form-label text-left" id="profileLbl">Book Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="pwd" class="form-label text-left" id="profileLbl">Author(s)</label>
                                    <input type="password" class="form-control" id="pwd" name="pswd">
                                </div>
                                <div class="col mb-1">
                                    <label for="publisher" class="form-label text-left" id="profileLbl">Published by</label>
                                    <input type="text" class="form-control" id="publisher" name="publisher">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="volume" class="form-label text-left" id="profileLbl">Edition / Volume</label>
                                    <input type="text" class="form-control" id="volume" name="volume">
                                </div>
                                <div class="col mb-1">
                                    <label for="publishDate1" class="form-label text-left" id="profileLbl">First Published</label>
                                    <input type="date" class="form-control" id="publishDate1" name="publishDate1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="lateReturn" class="form-label text-left" id="profileLbl">Late Return Cost<span style="font-size: smaller;"> (CAD)</span></label>
                                    <input type="text" class="form-control" id="lateReturn" name="lateReturn">
                                </div>
                                <div class="col mb-1">
                                    <label for="category" class="form-label text-left" id="profileLbl">Book Classification</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="" selected disabled></option>
                                        <option value="Journal">Journal</option>
                                        <option value="Nursery Rhymes">Nursery Rhymes</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Science and Technology">Science and Technology</option>
                                    </select>
                                </div>
                            </div>                    
                            <div class="mb-1">
                                <input type="reset" value="Clear" class="btn btn-secondary btn-block btn-sm" id="resetProfile">
                                <input type="submit" name="createBookBtn" value="Create" class="btn btn-primary btn-block btn-sm" >
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Create a book ends here -->
            
                <!-- Update a book starts here -->
                <div class="col-md-12" id="upperRightBkAdminInnerUpdate">
                    <h5 id="formHeading">Update a Book</h5><hr id="formHeadingLine">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-9" >
                        <form action="" method="POST">

                            <?php
                                if(isset($_POST['books'])) {
                                    $selectedBook = $_POST['books'];

                                    $getBookDetailsQuery = "SELECT * FROM books WHERE title = '" . $selectedBook . "' and book_class = '" . $bookCategory . "'";
                                    $result3 = mysqli_query($conn, $getBookDetailsQuery);

                                    if(mysqli_num_rows($result3) > 0) {

                                        while($data = $result3->fetch_assoc()) {

                                            $bookTitle = $data["title"];
                                            $bookAuthor = $data['author'];
                                            $bookPublisher = $data['published_by'];
                                            $bookEdition = $data['edition'];
                                            $bookDatePublished = $data['date_published'];
                                            $bookClassification = $data['book_class'];
                                            $bookLateFee = $data['late_return-fee'];

                                        }

                                    }
                                }
                            ?>

                            <div class="mb-1 mt-2">
                                <label for="title" class="form-label text-left" id="profileLbl">Book Title</label>
                                <input type="text" class="form-control" value="" id="title" name="title">
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="pwd" class="form-label text-left" id="profileLbl">Author(s)</label>
                                    <input type="password" class="form-control" id="pwd" name="pswd">
                                </div>
                                <div class="col mb-1">
                                    <label for="publisher" class="form-label text-left" id="profileLbl">Published by</label>
                                    <input type="text" class="form-control" id="publisher" name="publisher">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="volume" class="form-label text-left" id="profileLbl">Edition / Volume</label>
                                    <input type="text" class="form-control" id="volume" name="volume">
                                </div>
                                <div class="col mb-1">
                                    <label for="publishDate1" class="form-label text-left" id="profileLbl">First Published</label>
                                    <input type="date" class="form-control" id="publishDate1" name="publishDate1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    <label for="lateReturn" class="form-label text-left" id="profileLbl">Late Return Cost<span style="font-size: smaller;"> (CAD)</span></label>
                                    <input type="text" class="form-control" id="lateReturn" name="lateReturn">
                                </div>
                                <div class="col mb-1">
                                    <label for="category" class="form-label text-left" id="profileLbl">Book Classification</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="" selected disabled></option>
                                        <option value="Journal">Journal</option>
                                        <option value="Nursery Rhymes">Nursery Rhymes</option>
                                        <option value="Medicine">Medicine</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Science and Technology">Science and Technology</option>
                                    </select>
                                </div>
                            </div>                    
                            <div class="mb-1">
                                <input type="reset" value="Clear" class="btn btn-secondary btn-block btn-sm" id="resetProfile">
                                <input type="submit" name="updateBookBtn" value="SEND" class="btn btn-primary btn-block btn-sm" >
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Update a book ends here -->            
            </div>
        </div>
    </div>
    <div class="container" id="bookRecords">
        <div id="profileLbl">127808 books found in database.</div>
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include './includes/footer.php';
