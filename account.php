<!-- check role -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account Management</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <style>
        .body-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            min-height: 20vh;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            background-color: #000000;
            align-items: center;
        }
        
        .content .sl-img {
            width: 100%;
        }
        
        .content{
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .footer {
            background-color: #000000;
            min-height: 30vh;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .logo-img {
            height: 15vh;
        }
        
        .model-content a {
            font-weight: lighter;
            color: #E5E5E5;
        }
        
        .left a {
            color: #ffffff;
        }
        
        .left a:hover {
            text-decoration: unset;
            color: #E5E5E5;
        }
        
        .right {
            color: white;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        
        .right button {
            margin-left: 10%;
        }
        
        .navbar-toggler {
            color: #ffffff;
        }
        
        .navbar-toggler:focus {
            outline: unset;
        }
        
        .top {
            height: 40%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .top img {
            height: 60px;
        }
        
        .mid {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-weight: lighter;
            font-size: 0.7rem;
            color: #ffffff;
            text-align: center;
            height: 30%;
        }
        
        .bot {
            width: 20%;
            display: flex;
            flex-direction: row;
            height: 30%;
            justify-content: space-around;
            align-items: center;
            margin: 0 auto;
        }
        
        .bot i {
            color: #ffffff;
        }
        #accout-table{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="body-container">
        <div class="header">
            <img alt="logo" src="images/logo.png" class="logo-img">
            <div class="container">
                <div class="row">
                    <nav class="left col-sm-8 navbar navbar-expand-lg">
                        <a class="nav-link" href="model-details.html">MODELS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-caret-down fa-lg"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="price.html">PRICING</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="company.html">COMPANY</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">CONTACT US</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="account.php">ACCOUNT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="right col-sm-4">
                        <button class="btn"><i class="fas fa-search fa-lg"></i></button>
                        <button class="btn"><i class="fas fa-bars fa-lg"></i></button>
                        <button class="btn" id="login-ic"><i class="fa fa-user-circle fa-lg"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <table class="table table-bordered" id="accout-table">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Adress</th>
                        <th>Role</th>
                        <th>
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#create-account">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </button>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer">
            <div class="top">
                <img alt="ducati-text" src="images/ducati-text.png" class="ducati-text">
            </div>
            <div class="mid">
                <p>Copyright © 2020 Ducati Motor Holding S.p.A. – A Sole Shareholder Company - A Company subject to the Management and Coordination <br/> activities of AUDI AG. All rights reserved. VAT 05113870967</p>
            </div>
            <div class="bot">
                <i class="fab fa-facebook-f fa-lg"></i>
                <i class="fab fa-twitter fa-lg"></i>
                <i class="fab fa-instagram fa-lg"></i>
                <i class="fab fa-youtube fa-lg"></i>
                <i class="fab fa-linkedin-in fa-lg"></i>
            </div>
        </div>

        <div class="modal fade" id="create-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Add account</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form data-toggle="validator" action="create.php" method="POST">
                <div class="form-group">
                    <input placeholder="First name" type="text" name="first-name" class="form-control" data-error="Please enter first name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Last name" type="text" name="last-name" class="form-control" data-error="Please enter last name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" id="male" name="gender" autocomplete="off" checked> Male
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" id="female" name="gender" autocomplete="off"> Female
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input placeholder="Email" type="text" name="email" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" name="password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Confirm password" type="password" name="confirm-password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Phone" type="number" name="phone" class="form-control" data-error="Please enter phone." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" id="user" name="user-type" autocomplete="off" checked> User
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" id="admin" name="user-type" autocomplete="off"> Admin
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input placeholder="Address" type="text" name="address" class="form-control" data-error="Please enter address." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-dark">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="edit-account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Update account</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form data-toggle="validator" action="update.php" method="POST">
                <input type="hidden" name="id" class="edit-id">
                <div class="form-group">
                    <input placeholder="First name" type="text" name="first-name" class="form-control" data-error="Please enter first name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Last name" type="text" name="last-name" class="form-control" data-error="Please enter last name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" id="edit-male" name="gender" autocomplete="off" checked> Male
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" id="edit-female" name="gender" autocomplete="off"> Female
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input placeholder="Email" type="text" name="email" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" name="password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Phone" type="number" name="phone" class="form-control" data-error="Please enter phone." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" id="edit-user" name="user-type" autocomplete="off" checked> User
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" id="edit-admin" name="user-type" autocomplete="off"> Admin
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input placeholder="Address" type="text" name="address" class="form-control" data-error="Please enter address." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit-edit btn-dark" id="edit-btn">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>


          <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Sign in</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form data-toggle="validator" action="signin.php" method="POST">
                <div class="form-group">
                    <input placeholder="Email" type="text" name="reg-email" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" name="reg-password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn login-submit btn-dark">Sign in</button>
                    <button type="button" class="btn btn-secondary" id="register-btn">Register</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Register</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form data-toggle="validator" action="create.php" method="POST">
                <div class="form-group">
                    <input placeholder="First name" type="text" class="form-control" data-error="Please enter first name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Last name" type="text" class="form-control" data-error="Please enter last name." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" id="male" autocomplete="off" checked> Male
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" id="female" autocomplete="off"> Female
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <input placeholder="Email" type="text" class="form-control" data-error="Please enter email." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Password" type="password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Confirm password" type="password" class="form-control" data-error="Please enter password." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Phone" type="number" class="form-control" data-error="Please enter phone." required />
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input placeholder="Address" type="text" name="address" class="form-control" data-error="Please enter address." required />
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn crud-submit btn-dark">Register</button>
                    <button type="button" class="btn btn-secondary" id="back-signin-btn">Sign in</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>