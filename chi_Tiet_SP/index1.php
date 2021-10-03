 <?php
    require_once "condb1.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </head>
 <body>
    <?php
        if (isset($_GET['page_layout'])) {
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once 'danhsach1.php';
                    break;
                case 'them':
                    require_once 'them.php';
                    break;
                case 'sua':
                    require_once 'sua.php';
                    break;
                case 'xoa':
                    require_once 'xoa.php';
                    break;
                default:
                    require_once 'danhsach1.php';
                    break;
            }
        }else{
            require_once 'danhsach1.php';
        }
    ?>
 </body>
 </html>