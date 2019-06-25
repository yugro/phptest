<div class="col-lg-4">
    <form action="index.php" method="post">
        <legend for="name">Your name</legend>
        <input type="text" id=name" name="name">
        <legend for="surname">Your surname</legend>
        <input type="text" id=surname" name="surname">
        <br>
        <button name='pet' type="submit" class="btn btn-primary">Click me
        </button>
    </form>
</div>
<div class="col-lg-4">
    <h2>Results</h2>
    <table>
      <?php

      $row = getData();
      foreach ($row as $key => $value) { ?>
          <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Delete</th>
          </tr>
          <tr>
              <td id="increment"></td>
              <td>
                <?php echo $value['name'] ?>
              </td>
              <td>
                <?php echo $value['breed'] ?>
              </td>
              <td id="delete">
                  X
              </td>
          </tr>
      <?php } ?>
    </table>
</div>