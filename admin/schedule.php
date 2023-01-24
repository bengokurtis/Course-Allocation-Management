<html lang="en">
<?php
include "./main/header.php";
?>
<style>
   .columns {
  
  width: 100%;
  padding: 8px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin-left: 30px;
}
.schedule {
  list-style-type: none;
  border: 1px solid #eee;
  border-radius: 5px;
  margin: 30px;
  padding: 20px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  background-color: #eee;
}

.schedule:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.schedule .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

label {
  padding: 20px;
} 

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }}
</style>

<body>
    <header class="header">
        <h2 class="u-name">Mind <b>Hub</b></h2>
    </header>

<div class="columns">
    <div>
    <form action="/action_page.php" class="schedule">
        <h2 class="header" style="background-color:#0B1A51">Lecturers Schedule</h2>
        <label for="myfile">Select files:</label>
        <input type="file" id="myfile" name="myfile"><br><br>
        <input type="file" id="myfile" name="myfile"><br><br>
        <input type="submit" value="Submit" class="btn btn-primary" style="width: 80px;">
    </form>
    </div>
    <div>
        <form action="/action_page.php" class="schedule">
            <h2 class="header" style="background-color: #EC9E30">Students Schedule</h2>
            <label for="myfile">Select files:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            <input type="file" id="myfile" name="myfile"><br><br>
            <input type="submit" value="Submit" class="btn btn-primary" style="width: 80px;">
        </form>
    </div>

        
</div>
</body>
</html>