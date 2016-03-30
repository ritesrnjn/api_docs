<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Api Docs</h1>
                <p>
                    This is an alternate to swagger editor and swagger-ui, to create api documentation.
                </p>
                <p>
                    Additional documentation here <a href="https://github.com/ritesrnjn/api_docs" class="btn btn-primary btn-md">Github</a>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well">
                <div class="text-center">
                    <h3> Click here Test APIs </h3>
                    <p><a class="btn btn-success btn-lg" href="public/" role="button">Test APIs</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <div class="well">
                    <div class="text-center">
                        <h2> Modify APIs </h2>
                        <p>
                            You must enter valid credentials to modify APIs.
                        </p>

                        <form class="form-horizontal" role="form" method="post" action="">

                            <?php if(isset($formerrors)){ ?>
                                <div class="row">
                                    <div class="col-sm-2">&nbsp;</div>
                                    <div class="col-sm-9">
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong><?php echo $errmsg; ?></strong> Try again.
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Username:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- CONTAINER -->