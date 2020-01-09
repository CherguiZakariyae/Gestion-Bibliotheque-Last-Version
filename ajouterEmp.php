<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Form | Gestion Bibliothèque</title>
        <meta content=" " name="description" />
        <meta content=" " name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

             <?php include('header.php'); ?>

 

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box" style="padding: 10px;"> 
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title"></h4><br>
                                         
        
                                         
                                                <div class="form-group row col-sm-6" style="display: inline-block;margin-top: -10px;">
                                                     <label>Date Emprunt</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                            

                                              <div class="form-group row col-sm-6" style="display: inline-block;margin-top: -10px;">
                                                <label>Date Retour Prevu</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>
                                           

                                            <div class="form-group row col-sm-6" style="display: inline-block;margin-top: -10px;">
                                                <label>Date Retour Effective</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                </div>
                                            </div>

                                            <div class="form-group row col-sm-6" style="display: inline-block;margin-top: -10px;">
                                            <label for="example-text-input" class="col-sm-5 col-form-label">Titre</label>
                                            <div class="col-sm-13">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                            </div>
                                        </div>

                                         <div class="form-group row col-sm-6" style="display: inline-block;margin-top: -10px;">
                                            <label for="example-text-input" class="col-sm-5 col-form-label">Adherent</label>
                                            <div class="col-sm-13">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                            </div>
                                        </div>
                                           





                                       

                                       



                                        
                                        

                                     <div class="form-group row col-sm-8" style="display: inline-block;margin-top: -10px;"> </div>
                                     <div class="form-group row col-sm-2" style="display: inline-block;margin-top: -10px;"> 
                                        <a href="#"><button type="button" class="btn btn-secondary waves-effect" style="width: 100%;">Retour</button></a>
                                    </div>
                                    <div class="form-group row col-sm-2" style="display: inline-block;margin-top: -10px;"> 
                                        <button type="button" class="btn btn-success waves-effect waves-light" style="width: 100%;">Enregisterer</button>
                                    </div>



                                  
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    

                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

                <?php include("footer.php"); ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

</html>