<?php
function isGetIdAdd(){
  if (isset($_GET['id']))
    if ($_GET['id']=='add')
      return true;
}
