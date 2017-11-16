<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PLYFOOD</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <?php include('head.php');?>
</head>
    <style>
        .postmargin{
            margin-bottom: 40px !important;
        }
        body{
            background: white;
        }
        label{
            color:black;
        }
    </style>
 <body>
<div class="container" style="margin-top:100px; background:white;">
<ul>
      <li><h4 style="color:white;text-decoration: none;"><?= anchor('ShowTables/','Table Booked'); ?></h4></li>
    </ul>

  <fieldset>
    <legend style="color:black;">Upload Item</legend>
   <?php echo form_open_multipart('Upload/menu',['class'=>'form-horizontal']);?>
   
   <?php if( $error =$this->session->flashdata('feedback')): ?>
  
    <div class="row postmargin">
    <div class="col-lg-12">
    <div class="alert alert-dismissible alert-warning">
        <?= $error; ?>
          </div>
          </div>
          </div>
        <?php endif; ?>
         <div class="row container form-group postmargin">
      <div class="col-lg-2">
      <label for="select" class="control-label">Select Menu</label></div>
       
      <div class="col-lg-10">
        <select class="form-control" id="select" name="type" >
          <option value="Select content Type">Select Menu Type</option>
          <option value="breakfast">Breakfast</option>
          <option value="lunch">Lunch</option>
          <option value="snacks">Snacks</option>
          <option value="dinner">Dinner</option>
         
         
          </select>
        </div>
        </div>
       <div class="row postmargin">
        <div class="col-lg-12"  >
      <?php echo form_error('type'); ?>
       </div>
      </div>
       <div class="row container form-group postmargin">
      <div class="col-lg-2">
      <label for="select" class="control-label">Select Menu</label></div>
       
      <div class="col-lg-10">
        <select class="form-control" id="select2" name="subtype" >
          <option value="Select content Type">--Veg or Non-Veg--</option>
          <option value="veg">Veg</option>
          <option value="nonveg">Non-Veg</option>
          </select>
        </div>
        </div>
       <div class="row postmargin">
        <div class="col-lg-12"  >
      <?php echo form_error('subtype'); ?>
       </div>
      </div>
      <div class="row container postmargin">
      <div class="col-lg-2">
          <label for="inputMenu" class="control-label">Menu Title</label>
             </div>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'title','id'=>'menu','class'=>'form-control','placeholder'=>'Menu Title','value'=>set_value('title')]);  ?>
        </div>
   
    </div>
    <div class="row postmargin">
    <div class="col-lg-6"  >
    <?php echo form_error('menu'); ?>
    </div>
        </div>
	<div class="form-group row">
        <div class="col-lg-6">
      <label for="inputUpload" class="control-label">Upload Item Image</label>
      </div>
      <div class="col-lg-6">
        
         <?php echo form_upload(['name'=>'userfile']);  ?>
      </div>
    </div>

    
     <div class="row postmargin">
     <div class="col-lg-6"  >
       <?php if(isset($upload_error)) echo($upload_error) ?>
      </div>
        </div>  
         <div class=" row form-group">
        <div class="col-lg-2">
      <label for="inputQuantity" class="control-label">Item Quantity</label>
        </div>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'quantity','id'=>'quantity','class'=>'form-control','placeholder'=>'Quantity','value'=>set_value('quantity')]);  ?>
      </div>
    </div>
    <div class="row postmargin">
    <div class="col-lg-12"  >
       <?php echo form_error('quantity') ?>

      </div> 
      <br>
      <br>
     
        <div class=" row form-group">
        <div class="col-lg-2">
      <label for="inputDescription" class="control-label">Item description</label>
        </div>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'description','id'=>'description','class'=>'form-control','placeholder'=>'Description','value'=>set_value('description')]);  ?>
      </div>
    </div>
    <div class="row postmargin">
    <div class="col-lg-12"  >
       <?php echo form_error('description') ?>
      </div>
    </div>
    <div class="row form-group postmargin">
        <div class="col-lg-2">
      <label for="inputPrice" class="control-label">Price &#x20b9;</label>
        </div>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'price','id'=>'price','class'=>'form-control','placeholder'=>'Price','value'=>set_value('price')]);  ?>
      </div>
    </div>
    <div class="row postmargin">
    <div class="col-lg-12"  >
       <?php echo form_error('price') ?>
      </div>
    </div>
    <div class=" row form-group postmargin">
      <div class="col-lg-10 col-lg-offset-2">
     
       <button type="submit" class="btn btn-primary" id="submit">Upload Menu</button>
      </div>
    </div>
      
   
  </fieldset>

</div>
</body>
    
</html>