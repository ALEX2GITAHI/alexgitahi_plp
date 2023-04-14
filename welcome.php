
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="logininfo.js"></script>
    <title>course</title>
</head>
<body>
   
            
  <form class="modal-content animate"  id="myform"  action="server.php" method="post" name="form" required>
    <div class="imgcontainer">
      <span onclick="document.getElementById('Login').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./IMAGES/images1.jfif" alt="Avatar" class="avatar">

       <h1>Welcome </h1>  <strong>
        <?php
				include('server.php');
 
            if(!ISSET($_SESSION['userName'])){
               $query = mysqli_query($db, "SELECT fristname FROM log_in WHERE userName='{$_SESSION['userName']}'") or die(mysqli_error());
                     $fetch = mysqli_fetch_array($query);
                     echo "<h2 class='text-success'>".$fetch['fristName']."</h2>";
            }
 
				
			?>
        </strong>
      </h2>
    </div>
    <div class="container">
              <p class="contact">
                 <fieldset>
                    <legend id="ctdetail">CONTACT DETAILS</legend>
                    PHONE 1: <br>
                          <input type="tel" id="phone" name="phone" ></label> <br>
                    PHONE 2: <br>
                          <input type="tel" id="phone2" name="phone2" ></label> <br>
                 </fieldset>
                    
              </p>
                 <p class="school">
                    CAMPUS:
                    <br>
                    <input class="stdinpt" id="stschol" type="text" name="school" size="15"  required/>
                 </p>
                    <p class="recidence">
                       RECIDENCE:
                       <br>
                       <select  name="location" id="recidence" class="label">
                       <option class="rcidnc" id="stru" value="RUIRU">ruiru</option>
                       <option class="rcidnc" id="stju" value="JUJA">juja</option>
                       <option class="rcidnc" id="stmu" value="MUTHAIGA">muthaiga</option>
                       <option class="rcidnc" id="stka" value="KASARANI">kasarani</option>
                       </select>
                    </p>
                       <p class="course">
                          COURSE:
                          <br>
                          <input class="cors" id="1" type="radio" name="genre" value="BSIT"> BSIT
                          <input class="cors" id="2" type="radio" name="genre" value="BCOM"  > BCOM
                          <input class="cors" id="3" type="radio" name="genre" value="BSIR"  > BSIR
                          <input class="cors" id="4" type="radio" name="genre" value="BEDA"  > BEDA
                       </p>
                       <p class="unities">
                          UNITIES:

                       <div class="multipleSelection">
                          <div class="selectBox" 
                             onclick="UnitesSelect()">
                             <select>
                                   <option>Select unities</option>
                             </select>
                             <div class="overSelect"></div>
                          </div>

                          <div id="checkBoxes">
                             <label for="one">
                                <input class="unty" id="uncplus" type="checkbox" name="unity[]" value="c++"/>c++ </label>
                             <label for="two">
                                <input class="unty" id="unja" type="checkbox" name="unity[]" value="java"  />java   </label>
                             <label for="three">
                                <input class="unty" id="unfa" type="checkbox" name="unity[]" value="financial accounting"  />financial accounting  </label>
                             <label for="one">
                                <input class="unty" id="unpm" type="checkbox" name="unity[]" value="principle of management"  />principle of management  </label>
                             <label for="two">
                                <input class="unty" id="unstat" type="checkbox" name="unity[]" value="statistics"  />statistics </label>
                             <label for="three">
                                <input class="unty" id="unnet" type="checkbox" name="unity[]" value="networking"  />networking  </label>
                             <label for="one">
                                <input class="unty" id="undstr" type="checkbox" name="unity[]" value="data structures"  />data structures  </label>
                             <label for="two">
                                <input class="unty" id="undep" type="checkbox" name="unity[]" value="depromacy"  />depromacy </label>
                             <label for="three">
                                <input class="unty" id="unfor" type="checkbox" name="unity[]" value="Forencis"  />Forencis</label>  
                          </div> <br>
                          
                        </div>
                       <style>
                         .multipleSelection {
                           width: 200px;
                           margin-left: 0%;
                           background-color: #BCC2C1;
                        
                           
                        }

                        .selectBox {
                           position: relative;
                        }

                        .selectBox select {
                           width: 100%;
                           font-weight: bold;
                        }

                        .overSelect {
                           position: absolute;
                           left: 0;
                           right: 0;
                           top: 0;
                           bottom: 0;
                        }

                        #checkBoxes {
                           display: none;
                           border: 1px #d3dbda solid;
                           align-content: center;
                        }

                        #checkBoxes label {
                           display: block;
                        }

                        #checkBoxes label:hover {
                           background-color: #09cfe9;
                        }
                       </style>
                       </p>
                       <button type="submit" name="submit" onclick=" validateForm()"  >submit</button> <br>
            <div>
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('Login').style.display='none'" class="cancelbtn">Cancel</button>
                    
                  </div>
</body>
</html>