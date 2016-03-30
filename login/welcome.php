<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Api Docs</h1>
                <p>
                    This is an alternate to swagger editor and swagger-ui, to create api documentation.
                    Instead of writing yaml codes, all you have to do is to fill a simple CRUD form.
                </p>
                <p>
                    Login below to perform an action
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
                    <h3> Click here to go to test Apis page </h3>
                    <p><a class="btn btn-success btn-lg" href="public/" role="button">Test Apis</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <div class="well">
                    <div class="text-center">
                        <h2> Modify Api's </h2>
                        <p>
                            You must enter valid login credentials to be able to access apis.
                        </p>

                        <form class="form-horizontal" role="form" method="post" action="">

                            <?php if($formerrors){ echo $errmsg; }  ?>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Email:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Enter email">
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
                                    <button type="submit" class="btn btn-default">Submit</button>
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