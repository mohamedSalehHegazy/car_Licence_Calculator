<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            padding:1%;
        };
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>License</title>
</head>
<body>
<form  method="Post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Owner Name</label>
      <input type="text" class="form-control" name="Owner_Name">
    </div>
    <div class="form-group col-md-6">
      <label>Plot No</label>
      <input type="text" class="form-control" name="Plot_No">
    </div>
    <div class="form-group col-md-6">
      <label>Start Date </label>
      <input type="date" class="form-control" name="Start_Date">
    </div>
    <div class="form-group col-md-6">
      <label>End Date </label>
      <input type="date" class="form-control" name="End_Date">
    </div>
    <div class="form-group col-md-6">
      <label>Car Brand</label>
      <input type="text" class="form-control" name="Car_Brand">
    </div>
    <div class="form-group col-md-6">
      <label>Brand Model</label>
      <input type="text" class="form-control" name="Brand_Model">
    </div>
    <div class="form-group col-md-6">
      <label>Body No</label>
      <input type="number" class="form-control" name="Body_No">
    </div>
    <div class="form-group col-md-6">
      <label>Motor No</label>
      <input type="number" class="form-control" name="Motor_No">
    </div>
    <div class="form-group col-md-6">
      <label>Motor Capacity</label>
      <input type="number" class="form-control" name="Motor_Capacity">
    </div>
    <div class="form-group col-md-6">
      <label>Car Color</label>
      <input type="text" class="form-control" name="Car_Color">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Transimision Type</label>
      <select id="inputState" class="form-control" name="Transimision_Type">
        <option selected>Choose...</option>
        <option value="Steptronic">Steptronic</option>
        <option value="Automatic">Automatic</option>
        <option value="Manual">Manual</option>
      </select>
    </div>
  </div>
  <label>Fuel Type</label><br>
  <div class="custom-control custom-radio custom-control-inline">
    
    <input type="radio" id="customRadioInline1" name="Fuel_Type" value="Petrol" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline1">Petrol</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline2" name="Fuel_Type" value="Gasoline" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline2">Gasoline</label>
    </div><br><br>
 
  <button type="submit" class="btn btn-primary" name="btn">Confirm</button>
</form>
<?php 
    if(isset($_POST['btn'])){
        $ownername=$_POST['Owner_Name'];
        $plotNo=$_POST['Plot_No'];
        $Brand=$_POST['Car_Brand'];
        $Model=$_POST['Brand_Model'];
        $bodyNo=$_POST['Body_No'];
        $motorNo=$_POST['Motor_No'];
        $motorCapacity=$_POST['Motor_Capacity'];
        $color=$_POST['Car_Color'];
        $fuelType=$_POST['Fuel_Type'];
        $startDate=$_POST['Start_Date'];
        $endDate=$_POST['End_Date'];
        $transimisionType=$_POST['Transimision_Type'];
       
        include_once "Renewfees.php";
        
        $fees = new Renewfees($ownername,$plotNo,$Model,$bodyNo,$motorNo,$motorCapacity,$color,$fuelType,$startDate,$endDate,$transimisionType);
        $Total=NULL;
        $years=NULL;
        $yearsNo=$fees->YearsCalc($years,$startDate,$endDate);
        $TotalFees=$fees->FeesCalc($Total,$motorCapacity,$fuelType,$yearsNo);
       
         dechex($motorCapacity) ;
        
        echo'<table class="table">'.
        '<tbody>'.
          '<tr>'.
            '<td scope="row">'.
            $ownername
            .'</td>'.
            '<td scope="row">'.
            $plotNo
            .'</td>'.
          '</tr>'.

          '<tr>'.
          '<td scope="row">'.
          $startDate
          .'</td>'.
          '<td scope="row">'.
          $endDate
          .'</td>'.
          '</tr>'.

          
          '<tr>'.
          '<td scope="row">'.
          $Brand
          .'</td>'.
          '<td scope="row">'.
          $Model
          .'</td>'.
          '</tr>'.

          
          '<tr>'.
          '<td scope="row">'.
          $bodyNo
          .'</td>'.
          '<td scope="row">'.
          $motorNo
          .'</td>'.
          '</tr>'.

          
          '<tr>'.
          '<td scope="row">'.
        
       '<br>'.
        $motorCapacity.' CC'
          .'</td>'.
          '<td scope="row">'.
          $color
          .'</td>'.
          '</tr>'.
          
          '<tr>'.
          '<td scope="row">'.
          $fuelType
          .'</td>'.
          '<td scope="row">'.
          $transimisionType
          .'</td>'.
          '</tr>'.

          '<tr>'.
          '<td scope="row">'.
         'Total License Fees is '. $TotalFees.' LE'
          .'</td>'.
          '</tr>'.
        '</tbody>'.
      '</table>'
        ;
    }
?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>