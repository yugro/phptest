  <?php
  //echo "world";
  //echo "\t";
  //echo "hello";
  $id = $_GET['id'];
  $pdo = new PDO('mysql:dbname=phptest;host=localhost', 'root', 87456123);
  $result = $pdo->query("SELECT * FROM pet WHERE id = '$id';");
  $row = $result->fetch();
  var_dump($row);
  ?>
<body>
<h3>This is page for testing php!!!</h3>
<div class="row">
    <div class="col-lg-2">
        <form action="footer.php" type="post">
            <legend for="name">Your name</legend>
            <input type="text" id=name" name="name">
            <legend for="surname">Your surname</legend>
            <input type="text" id=surname" name="surname">
            <button type="submit" class="btn btn-primary">Click</button>
        </form>
    </div>
    <div class="col-lg-3">
        <h2>Results</h2>
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Weight</th>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                </td>

            </tr>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
    </html>