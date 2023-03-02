<!doctype html>
<html>
<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron" style="background:url('pic5.jpg') no-repeat;background-size:cover;height:300px;"></div>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<div class="container">
	<div class="card">
	      		<div class="card-body" style="background-color:#3498D8;color:#ffffff;">
            <div class="row">
            <div class="col-md-3">
              <a href="iwp_pro.html" class="btn btn-light">Go Back</a></div>
	      			<div class="col-md-6"><h3>See Paitent Experience</h3></div>
              <div class="col-md-8">
              </div>
                  </div></div>
                  <div class="card-body">
<table class="table table-hover" >
    <tr scope="row">
    <th scope="col">Name</th>
    <th scope="col">E-mail</th>
    <th scope="col">DR.Name</th>
    <th scope="col">Disease</th>
    <th scope="col">Experience</th>
    </tr>
 
    <tbody id="data"></tbody>
</table>
</div>
<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "data.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var name = data[a].name;
                var drname = data[a].drname;
                var email = data[a].email;
                var dis = data[a].disease;
                var exper = data[a].exper;
 
                html += "<tr>";
                    html += "<td>" + name + "</td>";
                    html += "<td>" + email + "</td>";
                    html += "<td>" + drname + "</td>";
                    html += "<td>" + dis + "</td>";
                    html += "<td>" + exper + "</td>";
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };
</script>
</body>
</html>


 
