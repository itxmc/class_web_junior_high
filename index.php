<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>後勁國中三年三班</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//cdn.bootcss.com/animate.css/3.4.0/animate.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                                <span class="light">後勁國中</span> 三年三班
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">關於三班</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#class">班級主要幹部</a>
                    </li>
                    <li>
                    <a class="page-scroll" href="#contact">Feedback</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#" onclick="alert('製作中...');">圖片集</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" style="background-image: url('http://i.imgur.com/LQzQnZn.jpg');
                                 background-attachment: fixed;
	                             background-repeat: no-repeat;
">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">後勁國中<BR>三年三班</h1>
                        <p class="intro-text"><br>三年級中的一個班級</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>關於三班</h2>
                <p>這個呢...說來話長，我還是想想好了</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="class" class="content-section text-center">
        <div class="download-section" style="
        background-attachment: fixed;
	    background-repeat: no-repeat;">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>班級主要幹部</h2>


                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="http://cw1.tw/CC/images/article/J1321857735746.jpg" alt="..." class="img-circle">
                                <div class="caption">
                                    <h3>班導</h3>
                                    <p>Name: 江曉惠</p>
                                    <button class="btn btn-default btn-cta" onclick="window.location.href = ''">Facebook</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="http://cw1.tw/CC/images/article/J1321857735746.jpg" alt="..." class="img-circle">
                                <div class="caption">
                                    <h3>班長</h3>
                                    <p>Name: 蔡宗哲</p>
                                    <button class="btn btn-default btn-cta" onclick="window.location.href = ''">Facebook</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="http://cw1.tw/CC/images/article/J1321857735746.jpg" alt="..." class="img-circle">
                                <div class="caption">
                                    <h3>副班長</h3>
                                    <p>Name: 蔡維哲</p>
                                    <button class="btn btn-default btn-cta" onclick="window.location.href = 'https://www.facebook.com/profile.php?id=100003728985300&fref=ts'">Facebook</button>

                                </div>
                            </div>
                        </div>
                    <button class="btn btn-default btn-cta btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">看全部</button>
                    <?php include('include/modal.php');?>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>有些事情想告訴老師嗎？</h2>
                <p>說吧！</p>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form>
                        <input type="text" class="form-control" placeholder="你的姓名">
                        <BR>
                        <textarea class="form-control" rows="3"placeholder="發生的事情"></textarea>
                        <BR>

                        <button type="submit" class="btn btn-default btn-cta btn-lg">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; 後勁國中三年三班 <BR> Creator by Max Chou.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script>
       alert('因為本網站還在製作中，未完成的部分敬請見諒！');
       $('.nav-collapse').click('li', function() {
           $('.nav-collapse').collapse('hide');
       });

    </script>

</body>

</html>
