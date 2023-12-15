<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">
    <head>
        <div class="a">
      <img src="Images/St Alphonsus -logo 1.jpeg" alt="Logo" class="img-rounded" width="200" height="200" class="Logo">
</div>
<br>
<br>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            div.a{text-align: center;}
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #555;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: rgb(62, 62, 201);
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    
<!--[if gte mso 9]><xml>
<mso:CustomDocumentProperties>
<mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers msdt:dt="string">UA92.132.B2.23/24Back end Development Members</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_SharedWithUsers>
<mso:SharedWithUsers msdt:dt="string">7;#UA92.132.B2.23/24Back end Development Members</mso:SharedWithUsers>
</mso:CustomDocumentProperties>
</xml><![endif]-->
</head>
<body>
        <div class="navbar">
            <a href="school.html.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.php">Student</a>
                    <a href="ViewParent.php">Parent</a>
                    <a href="ViewTeacher.php">Teacher</a>
                    <a href="ViewClass.php">Class</a>
                    <a href="ViewWage.php">Wage</a>
                    <a href="ViewUniform.php">Uniform</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.php">Student</a>
                    <a href="AddParent.php">Parent</a>
                    <a href="AddTeacher.php">Teacher</a>
                    <a href="AddClass.php">Class</a>
                    <a href="AddWage.php">Wage</a>
                    <a href="AddUniform.php">Uniform</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="DeleteStudent.php">Student</a>
                  <a href="DeleteParent.php">Parent</a>
                  <a href="DeleteTeacher.php">Teacher</a>
                  <a href="DeleteClass.php">Class</a>
                  <a href="DeleteWage.php">Wage</a>
                  <a href="DeleteUniform.php">Uniform</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="UpdateStudent.php">Student</a>
                <a href="UpdateParent.php">Parent</a>
                <a href="UpdateTeacher.php">Teacher</a>
                <a href="UpdateClass.php">Class</a>
                <a href="UpdateWage.php">Wage</a>
                <a href="UpdateUniform.php">Uniform</a>
            </div>
        </div>
        <a href="Contact.php">Contact Us</a>
        </div>

    </head>
<body>
<?php
   $link = mysqli_connect("localhost","root","","alphonsus");
   if ($link === false)
   {
      die("Connection failed; ");
   }    
?>

   <h3> See all Classes</h3>

   <table>
    <tr>
        <th width="150px">Class ID<br><hr></th>
        <th width="250px">Class Name<br><hr></th>
        <th width="250px">Class Room<br><hr></th>
        <th width="250px">Class Capacity<br><hr></th>
        <th width="250px">Teacher ID<br><hr></th>
</tr>
<?php
$sql = mysqli_query($link,"SELECT cid,cname,croom,ccapacity,tid FROM class");
while ($row = $sql->fetch_assoc())
{
    echo "
    <tr>
    <th>{$row['cid']}</th>
    <th>{$row['cname']}</th>
    <th>{$row['croom']}</th>
    <th>{$row['ccapacity']}</th>
    <th>{$row['tid']}</th>

    </tr> ";
}
?>
</table>
</body>
</html>

