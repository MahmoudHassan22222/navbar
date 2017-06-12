<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Dynamic Navbar </title>
    <link href="style/css/main.css" rel="stylesheet" />
  </head>
  <script src="https://use.fontawesome.com/a4688d1ed6.js"></script>
  <body>
    <ul class="navbar">
      <li><a href="#">Link 1 </a></li>
      <li><a href="#">Link 2 </a></li>
      <!-- DropDown Menu -->
      <li class="dropdown">
       <a href="#">Link 3 <i class="fa fa-arrow-down"></i></a>
        <div class="dropdown-list">
          <ul>
            <!-- another sub menu dropdown -->
            <li class="dropdown">
              <a href="#"> DropDown Link1 <i class="fa fa-arrow-down"></i></a>
              <div class="dropdown-list">
                <ul>
                  <li><a href="#"> sub DropDown Link1</a></li>
                  <li><a href="#"> sub DropDown Link2</a></li>
                  <li><a href="#"> sub DropDown Link3</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#"> DropDown Link2</a>
            </li>
            <li>
              <a href="#"> DropDown Link3</a>
            </li>
          </ul>
        </div>
      </li>
       <!-- end DropDown Menu -->
       <li><a href="#">Link 4 </a></li>
       <li><a href="#">Link 5 </a></li>
    </ul>
    <div class="clear-fix"></div>
  </body>

  <!-- call to javascript files  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="style/js/main.js"></script>
</html>
