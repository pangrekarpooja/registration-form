
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
    <title>Registration Form</title>
</head>
<body>
    <div class="container" style="margin-top:30px">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Sign in to PreDrag</strong></h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="register.php">
                        <!-- Remove existing alert -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" tabindex="1" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" tabindex="2" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="date" name="dob" class="form-control" placeholder="Date of Birth" tabindex="3" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="class" class="form-control" placeholder="Class" tabindex="4" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group gender">
                                   <lable class="abc"> Gender: </lable>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="male"> Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="tel" name="mobile_no" class="form-control" placeholder="Mobile Number" tabindex="6" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" tabindex="7" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" class="form-control" accept="image/*" tabindex="8">
                        </div>
                        
                        <!-- Existing password fields removed -->
                        <button type="submit" class="btn btn-success">Sign up</button>
                        <hr style="margin-top:10px;margin-bottom:10px;">
                        <div class="form-group">
                            <div style="font-size:85%">
                                Already Registered? 
                                <a href="#" onClick="$('#loginbox').show(); $('#signupbox').hide()">Sign In Here</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
