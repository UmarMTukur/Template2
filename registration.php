<html long="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rigistration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style> 

body{
  background-image: url(images/img3.jpg);
	display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  flex-direction: column;
}

*{
  font-family: sans-serif;
  box-sizing: border-box;
}
h2 {
  text-align: center;
  margin-bottom: 40px;
}

input {
  display: block;
  border: 2px solid #ccc;
  width: 95%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}

label {
  color: #888;
  font-size: 18px;
  padding: 10px;
}

button {
/*float: right;
  background: #555;
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-right: 10px;
  border: none;*/

  background: blue;
  display: blue;
  border: 2px solid #ccc;
  width: 18%;
  font-size: ; 
  color: white; 
  padding: 10px 15px;
  border-radius: 5px;
  margin-left: 80%;
}

button:hover{
  opacity: .7;
}

.error {
  background: #F2DEDE;
  color: #A94442;
  padding: 10px;
  width: 95%;
  border-radius: 5px;
  margin: 20px auto;

}

h1 {
  text-align: center;
  color: #fff;
}

a {
  float: right;
  background: #555;
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
  text-decoration: none;
}

.lin{
  float: left;
  background: #555;
  padding: 10px 15px;
  color: #fff;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
  text-decoration: none;
  flex-direction: left;
  font-size: 13px;

}

.row{
  padding: 10px 15px;
  border-radius: 5px;
  margin-right: 10px;
  border: none;
  font-size: 13px;
}

.footer{
  float: right;
  padding: 10px 15px;
  color: #fff;
  border-radius: 15px;
  margin-right: 10px;
  border: none;
  margin: 0;
}

.Submit:hover{
  opacity: .7;
}

a:hover{
  opacity: .7;
}
 form{

  width: 650px;
  border: 2px solid #ccc;
  padding: 30px;
  background: #fff;
  border-radius: 15px;
  align-self: center;
}

span{

  color: red;

}

</style>
	</head>
	<body>
     
     <div class="panel-body">

      <form method="post" action="registration-check.php">
        <center><img src="images/1.png" alt="IMG" height="120px" width="120px"></center>
        <h2>Sign Up</h2>
         
         <label>First Name</label><span class="span">*</span>
         <input class="form-control" name="fname" placeholder="First Name"><br>
         <label>Last Name</label><span class="span">*</span>
         <input class="form-control" name="lname" placeholder="Last Name"><br>
         <label>Phone Number</label><span class="span">*</span>
         <input class="form-control" name="Phone" placeholder="Phone Number"><br>

         <label>Email Address</label><span class="span">*</span>
         <input class="form-control" name="Email" placeholder="Email Address"><br>
         <label>Password</label><span class="span">*</span>
         <input type="password" name="Password">
         <label>Cofirm Password</label><span class="span">*</span>
         <input type="password" name="C_password">
         <button type="Submit" name="submit">Submit</button>


      <!-- <div class="form-group">
                <label class="control-label">State of Origin</label>
                <select
         
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-group my-4"\
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
              </div>
               <br>
              <div class="form-group my-4">
                <label class="control-label">LGA of Origin</label>
                <select
                  name="lga"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                </select>
              </div> -->
      </form>
     </div>
     	<!-- <center>
     <form action="registration.php" class="form-group" method="post" enctype="multipart/form-data" style="font-family: arial narrow">
       <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="firstname" type="firstname" placeholder="First Name" class="form-control form-control-lg"></div>
       <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="middle" type="middle" placeholder="Middle Name" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="lastname" type="lastname" placeholder="Last Name" class="form-control form-control-lg"></div>
        <br>
       <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="date" type="Date" placeholder="date" class="form-control form-control-lg" min="2000-01-01 max="2018-01-01></div>
       <br>
       <div class="form-group">
                <label class="control-label">State of Origin</label>
                <select
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-group my-4"
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
              </div>
               <br>
              <div class="form-group my-4">
                <label class="control-label">LGA of Origin</label>
                <select
                  name="lga"
                  id="lga"
                  class="form-control select-lga"
                  required
                >
                </select>
              </div>
     <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Address" type="Address" placeholder="Home Address" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Number" type="Number" placeholder="Phone No" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="email" type="email" placeholder="Enter Email Address" class="form-control form-control-lg"></div>

        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Password" type="Password" placeholder="New Password" class="form-control form-control-lg"></div>
        <br>
         <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Password" type="Password" placeholder="Comfirm Password" class="form-control form-control-lg"></div>
        <br>
        <select id="Gender" name="Gender">
		  <option value="#">-Gender-</option>
		  <option value="#">Male</option>
		  <option value="#">Female</option>
		  </select>
		</div>
			
			<br>
        <hr>
        <center>
        	<h3>Sponsor Details</h3>
         <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Sponsor" type="Sponsor" placeholder="Sponsor Name" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Number" type="Number" placeholder="Sponsor Number" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Sponsor" type="Sponsor" placeholder="Sponsor Address" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="Sponsor" type="Sponsor" placeholder="Relationship" class="form-control form-control-lg"></div>
        <br>
        <div data-v-3352a239="" class="form-group my-4"><input data-v-3352a239="" id="email" type="email" placeholder="Enter Email Address" class="form-control form-control-lg">
        </div>
        <hr>
        	<input type="Submit" name="submit" class="btn btn-primary" class="button primary">
        </form>
        </center>
        <br>

 -->    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/pace/pace.min.js"></script>
        <script src="assets/js/lobipanel/lobipanel.min.js"></script>
        <script src="assets/js/iscroll/iscroll.js"></script>
        <script src="assets/js/prism/prism.js"></script>
        <script src="assets/js/select2/select2.min.js"></script>
        <script src="assets/js/main.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/lga.min.js"></script>
    <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });

        </script>

	</body>


	</html>

    