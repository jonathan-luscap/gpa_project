<?php
$pageTitle = 'Error';
require_once '../resources/views/layouts/header.tpl.php';?>

<div class="container" style="height: 90vh;">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                    <a href="/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="/?action=Contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once '../resources/views/layouts/footer.tpl.php';