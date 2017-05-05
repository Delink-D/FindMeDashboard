<?php 
    // include header
    include 'header-nav.php';
?>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            

            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <h5> Current Notifications</h5>
                        <div class="alert alert-info alert-with-icon alert alert-danger" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="dashboard.php" id="linkcolor"> Find me at Location </a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-danger" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="dashboard.php" id="linkcolor"> Find me at Location </a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-danger" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="dashboard.php" id="linkcolor"> Find me at Location </a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-danger " data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="dashboard.php" id="linkcolor"> Find me at Location </a></span>
                        </div>     

                         <div class="alert alert-info alert-with-icon alert alert-danger " data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="dashboard.php" id="linkcolor"> Find me at Location </a></span>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <h5> OnRoute Notifications</h5>
                        <div class="alert alert-info alert-with-icon alert alert-info" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor"> Find me at Location</a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-info" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor">  Find me at Location </a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-info" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor"> Find me at Location</a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-info " data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor"> Find me at Location</a></span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h5>Responded to Notifications</h5>
                        <div class="alert alert-info alert-with-icon alert alert-success" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor"> Find me at Location</a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-success" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor">  Find me at Location </a></span>
                        </div>

                        <div class="alert alert-info alert-with-icon alert alert-success" data-notify="container">
                            <button type="button" aria-hidden="true" class="close">×</button>
                            <span data-notify="icon" class="pe-7s-bell"></span>
                            <span data-notify="message">Hey, I am in danger please help. My current location is:"<a href="#" id="linkcolor"> Find me at Location </a></span>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="places-buttons">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h5>Notifications Places
                                <p class="category">Click to view notifications</p>
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-3">
                            <button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-3">
                            <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    // include footer
    include 'footer.php';
?>