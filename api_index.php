<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">students</th>
      <th scope="col">age</th>
      <th scope="col">city</th>
    </tr>
  </thead>
  <tbody id="loadtable">

  </tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
    function loadTable()
    {
        $.ajax({
            url:'http://localhost/API/api-fetch-all.php',
            type:"GET",
            success:function(data){
               // console.log(data);
               if(data.status == false)
               {
                   
            $(".table tbody").append("<tr><td colspan='4'><h2>" + data.message +"</h2></td></tr>");
               }
               else{
                $.each(data,function(key,value){
                            $('#loadtable').append('<tr>'+
                            '<td>'+ value.id + '</td>' +
                            '<td>'+ value.student_name +'</td>'+
                            '<td>'+ value.age +'</td>'+
                            '<td>'+ value.city +'</td>'+
                            '</tr>');

                         })
               }
            }
        });
    }
    loadTable();
}
)

</script>

</body>