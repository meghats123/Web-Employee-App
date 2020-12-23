<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee App</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
                <h2>EMPLOYEE REGISTRATION</h2>
    <table class="table table-borderless">
        <tr>
            <td>Emp Code</td>
            <td><input id="ecode" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Emp Name</td>
            <td><input id="ename" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input id="desig" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input id="address" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Mobile No</td>
            <td><input id="mob" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input id="uname" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input id="pass" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><Button onclick="mybuttonclick()" class="btn btn-primary">REGISTER</Button></td>
        </tr>

    </table>
            </div>
        </div>
    </div>
    <script>
    function mybuttonclick(){
        var getEmpCode=document.getElementById("ecode").value
        var getEmpName=document.getElementById("ename").value
        var getDesignation=document.getElementById("desig").value
        var getAddress=document.getElementById("address").value
        var getMobile=document.getElementById("mob").value
        var getUsername=document.getElementById("uname").value
        var getPassword=document.getElementById("pass").value
        console.log(getEmpCode)
        console.log(getEmpName)
        console.log(getDesignation)
        console.log(getAddress)
        console.log(getMobile)
        console.log(getUsername)
        console.log(getPassword)

        
    }
    
    </script>
    
</body>
</html>