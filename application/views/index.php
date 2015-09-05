<html>
<head>
    <title>IS Book</title>
    <?php include "head.php"; ?>
</head>
<body>
    <!-- header -->
    <?php include "header.php"; ?>
    <!-- ./header -->

    <!-- menu bar -->
    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Insert Contact</a></li>
    </ul>
    <!-- ./menu bar -->
    
    <!-- search box -->
    <br/><br/>
    <div class="relative">
    <form action="" method="get">
        <div class="col-md-2"></div>
        <div class="col-md-3">
            <span><b> Search By &nbsp;</b></span>
            <input type="radio" name="type" value="name"> Name &nbsp; 
            <input type="radio" name="type" value="job"> Job  &nbsp;
            <input type="radio" name="type" value="company"> company
        </div>
        <div class="input-group col-md-4">
            <input type="text" name="key" class="form-control" value="" placeholder="Enter key" required autofocus>
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search!</button>
            </span>
        </div>
    </form>
    </div>
    <!-- ./search box -->
    <!-- contact list -->
    <br/><br/>
    <div class="relative contact_list">
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Company</th>
                <th>Job</th>
                <th>Rate</th>
                <th>edit</th>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="#">Sutthida Chonpanichakul</a></td>
                <td>SIT KMUTT</td>
                <td>Student</td>
                <td>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </td>
                <td><span class="glyphicon glyphicon-pencil"></span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sutthida Chonpanichakul</td>
                <td>SIT KMUTT</td>
                <td>Student</td>
                <td>
                    <span class="glyphicon glyphicon-star"></span>
                </td>
                <td><span class="glyphicon glyphicon-pencil"></span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Sutthida Chonpanichakul</td>
                <td>SIT KMUTT</td>
                <td>Student</td>
                <td>
                    <span class="glyphicon glyphicon-star"></span>
                </td>
                <td><span class="glyphicon glyphicon-pencil"></span></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Sutthida Chonpanichakul</td>
                <td>SIT KMUTT</td>
                <td>Student</td>
                <td>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </td>
                <td><span class="glyphicon glyphicon-pencil"></span></td>
            </tr>
        </table>
    </div>
    <!-- ./contact list -->
    <!-- pagination -->
    <br/><br/>
    <nav>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </nav>
    <!-- ./pagination -->
    <div class="col-md-8 footer"></div>
</body>
</html>