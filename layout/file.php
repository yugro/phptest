<div class="col-lg-4">
    <form enctype="multipart/form-data" action="../index.php?id=fileupload" method="post">
        <label for="file">Enter your file</label><br>
               <input type="file" name="file" id="files"><br>

        <button type="submit">submit</button>
    </form>

<?php
if(isset($_FILES['file']))
move_uploaded_file($_FILES["file"]['tmp_name'], "files/{$_FILES['file']['name']}");
