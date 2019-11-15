<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-state=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script>
     
        $(document).ready(function(){
            var $select1 = $( '#select1' ),
                $select2 = $( '#select2' ),
                $options = $select2.find( 'option' );

            $select1.on( 'change', function() {
                $select2.html( $options.filter( '[value="' + this.value + '"]' ) );
            } ).trigger( 'change' );

        });
        $(function () {
    $("#select2").bind("change", function () {
        //var div = $("<div />");
        var a=document.getElementById("select2");
        var b = a.options[a.selectedIndex].text;
        // for 2 participants
        if(b=="Trigger your Code"||b=="Defenders of Space"||b=="Code Freeze"||b=="Hunky Brainzz"||b=="Mind the App( Android App Hackathon)"||b=="My Future Gateway"||b=="Arch Quizomania")
        {
         var div = $("<div />");
            div.html(GetDynamicTextBox(""));
             $("#TextBoxContainer").append(div);
        }
           //for 3 participants

        else if(b=="Python Workshop"){
        	var div = $("<div />");
        	div.html(GetDynamicTextBox(""));
       		 $("#TextBoxContainer").append(div);
       		 var div = $("<div />");
       		 div.html(GetDynamicTextBox(""));
       		 $("#TextBoxContainer").append(div);

        }
        //$("#TextBoxContainer").append(div);
    });
    
    });
function GetDynamicTextBox(value) {
    return '<input name ="DynamicTextBox" type="textarea" value = "' + value + '" placeholder = "Team Mate Name" required/>&nbsp;'
}
    </script>
    <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
        alert(document.getElementById('make_text').value);
    }
</script>
</head>

<body>
    <div class="container-fluid" id="bg">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
    <form name="eventform" method="post" action="#">
        <h1 style="color:white">Login Form</h1>
        <div class="form-group inputWithIcon">
<div class="form-group">
                        <label>Name</label>
                        <div class="input-group col-xs-12">
                            <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Name" name="name" style="width:100%;margin: auto;" required>
                        </div>
                    </div>
                <label>Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    </div>
        Name: <input type="text" name="name" required>
        College: <input type="text" name="college" required>
<div class="col-xs-6">
    <select class="form-control" name="select1" id="select1" required>
        <option value="0"> Select Department</option>
        <option value="1">CSE/IT</option>
        <option value="2">ECE</option>
        <option value="3">MAE</option>
        <option value="4">B.ARCH</option>
    </select>
</div>
<div class="col-xs-6">
    <select class="form-control form-control selectpicker" name="select2" id="select2" onchange="setTextField(this)" required>
        <option value="0"> Select Event</option>
        <option value="1" selected="selected"> Select Event</option>
        <option value="1">Blind Coding</option>
        <option value="1">Neoteric Hunt</option>
        <option value="1">Trigger your Code</option>
        <option value="1">Defenders of Space</option>
        <option value="1">Coder Spy</option>
        <option value="1">Code Freeze</option>
        <option value="1">Hunky Brainzz</option>
        <option value="1">My Future Gateway</option>
        <option value="1">Innerve Code Challenge (Phase 2)</option>
        <option value="1">Mind the App( Android App Hackathon)</option>
        
        <option value="2" selected="selected"> Select Event</option>
        <option value="2">Roborace</option>
        <option value="2">Digit cluster / Bomb Defuser</option>
        <option value="2">Technovate</option>
        <option value="2">Robomaze</option>
        <option value="2">Catch-A-Match</option>
        <option value="2">TechQuest</option>
        <option value="2">Circuitrix</option>
        <option value="2">DroneMaze</option>
        
        <option value="3" selected="selected"> Select Event</option>
        <option value="3">Mech Masters</option>
        <option value="3">Fidget Spinner</option>
        <option value="3">LFR</option>
        <option value="3">Robosoccer</option>
        <option value="3">Parachute Launching Event</option>
       
        <option value="4" selected="selected"> Select Event</option>
        <option value="4">Arch Fashion</option>
        <option value="4">Arch Quizomania</option>
        <option value="4">Bridge Builder </option>
        <option value="4">Art Attire</option>
        
    </select>
</div>
<input type="hidden" id="make_text">
<div class="col-xs-6">
	<br />
<div id="TextBoxContainer">
    <!--Textboxes will be added here -->
</div>
<br />
<input type="submit" value="register" name="submit">
  </div>
</form>
<?php
 include 'connection.php';
  try{
     if(isset($_POST['submit']))
    {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $college = $_POST['college'];
    $dept = $_POST['select1'];
    $event = $_POST['select2'];
    /*$member = $_POST['DynamicTextBox'];*/
  
    echo $college;
    echo $dept;
    $stmt=$conn->prepare("");
  if($event=="Trigger your Code"||$event=="Defenders of Space"||$event=="Code Freeze"||$event=="Hunky Brainzz"||$event=="Mind the App( Android App Hackathon)"||$event=="My Future Gateway"||$event=="Arch Quizomania")
    $member = $_POST['DynamicTextBox'];

  if($dept=="CSE/IT")
  { echo $name;
    echo $dept;
    $stmt = $conn->prepare("INSERT INTO cse_it(Name,Email,College,Event,Teammates) 
    VALUES (:name, :email, :college, :event, $member)");
   }

  else if($dept=="ECE")
  {
    $stmt = $conn->prepare("INSERT INTO ece(Name,Email,College,Event,Teammates) 
    VALUES (:name, :email, :college, :event, $member)");
   }

  else if($dept=="MAE")
  {
    $stmt = $conn->prepare("INSERT INTO mae(Name,Email,College,Event,Teammates) 
    VALUES (:name, :email, :college, :event, $member)");
   }

  else if($dept=="B.ARCH")
  {
    $stmt = $conn->prepare("INSERT INTO barch(Name,Email,College,Event,Teammates) 
    VALUES (:name, :email, :college, :event, $member)");
   }
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':event', $event);
 /*   $stmt->bindParam(':member1', $member1);
    $stmt->bindParam(':member2', $member2);
    $stmt->bindParam(':member3', $member3);
    $stmt->bindParam(':member4', $member4);
   */ $stmt->execute();
    echo "Inserted Successfully";
}}
catch (Exception $e) {
        echo $e->getMessage();

}
?>
</body>
</html>