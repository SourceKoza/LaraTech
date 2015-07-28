<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href="css/fullcalendar.css" rel='stylesheet' />

<link href="css/fullcalendar.print.css" rel='stylesheet' media='print' />
<script src="js/moment.min.js"></script>

<script src="js/fullcalendar.min.js"></script>

<script src="bootstrap.js"></script>
<script>
$(document).ready(function(){


function ram()
{
$.ajax({
        url:'hum.php',
        data:{name:'2015-07-28'},
        type:'POST',
        success:function(res)
        {
            $('#hum').html(res);
			$(".btn-primary").click(function(){
  
			
		  $.ajax({
		  url:'data.php',
		  data:{id:$(this).attr('index')},
		  success:function(data)
		  {
		     $(".modal-body").html(data);
			 $("#myModal").modal({
			 show:true,
			 backdrop:false	
			 
			 });
			 
		     
		  }
		 
		  
		  })
		  

});
			
			
			},
        
        error:function(xhr,rrr,error)
        {
            alert(error);
        }
    });
}
$('#calendar').fullCalendar(
    {
        header:
        {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        defaultDate: new Date(),
        editable: true,
        eventLimit: true,
        dayClick: function(calEvent, date, jsEvent, revertFunc)
        {
          ram();
		  
				
				}
         

       

    });
	});



</script>
<style>
.fc-widget-content {
    cursor: pointer;
}
.panel-primary > .panel-heading {
    background-color: green;
    border-color: green;
    color: #fff;
}

</style>
</head>
<body>



<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading"><center><h4>Event Calender</h4></center></div>
  <div class="panel-body">
<div id='calendar'>
</div>
</div>
</div>
</div>

<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading"><center><h4>Event Calender</h4></center></div>
  <div class="panel-body">
<div id="hum">


</div>
</div>
</div>
</div>

<div id="myModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<!-- dialog body -->
<div class="modal-body">

</div>
<!-- dialog buttons -->
<div class="modal-footer"><button type="button" data-dismiss="modal" class="btn btn-success">OK</button></div>
</div>
</div>
</div>




</body>
