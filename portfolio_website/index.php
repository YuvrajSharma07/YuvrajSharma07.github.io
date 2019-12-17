<!DOCTYPE html>
<html>
    <head>
        <title>Yuvraj Sharma</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cutive+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="https://YuvrajSharma07.github.io/Web_Development_Folder/templates/Libraries/ripple_effect_v0.3/ripple_effect_v0.3/ripple_effect.min.css">
        <link rel="stylesheet" href="lib/index.css">
        <link rel="stylesheet" href="https://YuvrajSharma07.github.io/Web_Development_Folder/templates/animate.css">
        <link rel="icon" href="lib/logo.png">
    </head>
    <body>
        <div class="loader full" id="ldiv">
            <center><div class="square" id="sdiv"><div class="circle"></div><div class="circle"></div><div class="circle"></div><div class="circle"></div></div></center>
        </div>
        <div class="mainbod none">
            <div class="allmodals">
                <div class="modal fade bd-example-modal-lg" id="fimg" tabindex="-1" role="dialog" aria-labelledby="pic1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <center><img src="lib/yuvraj.JPG" class="fullimg img-fluid"></center>
                    </div>
                </div>
            </div>
            <div class="ncl none text-center" id="navb">
                <ul class="nul d-flex justify-content-around">
                    <a id="ian" data-menuanchor="intro" class="nav-item nav-link" href="#intro">About</a>
                    <a id="wan" data-menuanchor="work" class="nav-item nav-link" href="#work">Works</a>
                    <a id="can" data-menuanchor="con" class="nav-item nav-link" href="#con">Hit me up</a>
                    <a href="javascript:void(0);" style="font-size:1rem;" class="icon" onclick="myFunction()">&#9776;</a>
                </ul>
            </div>
                <div class="full" id="intro">
                    <div class="row">
                        <div class="col-md-12 col-lg-1"></div>
                        <div class="col-md-12 col-lg-4">
                            <div class="imgcontain fromtop">
                                <img src="lib/yuvraj.JPG" class="intropic img-fluid">
                                <div class="mypic" data-toggle="modal" data-target="#fimg" data-ripple-effect>
                                    <div class="text">Click to view the whole image.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-1"></div>
                        <div class="hmm col-md-12 col-lg-6 frombottom">
                            <h1 class="text-center">Hey there!</h1>
                            <p class="intex">My name is Yuvraj Sharma. I am a senior high school student from India, who is into web development, music, photography and literature. I have been developing websites since 2015 and playing music since 2012, it wasn't until 2016 when I started producing music as well.</p>
                            <div class="text-center"><a class="btn btn-lg btn-outline-info" href="#about">Know more</a></div>
                        </div>
                        <div class="banner"></div>
                    </div>
                </div>
                <div class="full" id="about">
                    <div class="banner" style="height: 2rem"></div>
                    <h1 class="text-center">About me</h1>
                    <div class="banner" style="height: 2rem"></div>
                    <div class="row">
                        <div class="col-md-12 col-lg-1"></div>
                        <div class="hmm1 col-md-12 col-lg-5 fromtop none">
                            <h2 class="text-center">Computer skills</h2>
                            <div class="intex">Some of the languages/libraries I am comfortable with</div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <ul>
                                        <li>HTML</li>
                                        <li>CSS</li>
                                        <li>JavaScript</li>
                                        <li>jQuery</li>
                                        <li>Bootstrap</li>
                                        <li>Kotlin</li>
                                        <li>Python</li>
                                        <li>PHP</li>
                                        <li>SCSS</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <p style="padding-left: 1rem">And some that I am still trying to figure out</p>
                                    <ul>
                                        <li>ReactJS</li>
                                        <li>AngularJS</li>
                                        <li>NodeJS</li>
                                        <li>C++</li>
                                        <li>Arduino</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="hmm2 col-md-12 col-lg-5 frombottom none">
                            <h2 class="text-center">Music skills</h2>
                            <div class="intex">I started off as a bass player and then gradually learnt most of other string instruments, i.e guitar and ukulele, along with percussions, like cajon, darbuka and drums.<br><br>
                                Currently, I am more focused towards the technical side of music, that is music programming/production, using softwares like GarageBand by Apple and ProTools First by Avid.
                            </div>
                        </div>
                    </div>
                    <div class="banner"></div>
                </div>
                <div class="full" id="work">
                    <div class="banner"></div>
                    <h1 class="text-center">My Works</h1>
                    <div class="banner"></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="container worcon">
                                <center>
                                    <button class="btn btn-lg btn-outline-secondary" type="button" data-toggle="collapse" data-target="#webd" aria-expanded="false" aria-controls="webd">Web Development</button>
                                </center>
                            </div>
                            <div class="container collapse" id="webd">
                                <div class="card card-block">
                                    <p class="intex">Some of the designs which were developed by me.</p>
                                    <ul>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/ordin">Ordin@trix</a></li>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/ordin">Ordin@trix</a></li>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/hackathon">PineX</a></li>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/sbv13.1">Google Pixel</a></li>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/pinectrl">Pine Ctrl</a></li>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/tis3">iPhone XS</a></li>
                                        <li><a target="_blank" href="https://yuvrajsharma07.github.io/tis2">Project Drishti</a></li>
                                        <li><a target="_blank" href="http://thethrivemag.com">Thrive Magazine</a></li>
                                        <li><a target="_blank" href="http://yuvrajsharma07.github.io/forverses">Forbidden Verses (Under Progress)</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="container worcon">
                                <center>
                                    <button class="btn btn-lg btn-outline-secondary" type="button" data-toggle="collapse" data-target="#music" aria-expanded="false" aria-controls="music">Music</button>
                                </center>
                            </div>
                            <div class="container collapse" id="music">
                                <div class="card card-block">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="container worcon">
                                <center>
                                    <button class="btn btn-lg btn-outline-secondary" type="button" data-toggle="collapse" data-target="#photo" aria-expanded="false" aria-controls="photo">Photography</button>
                                </center>
                            </div>
                            <div class="container collapse" id="photo">
                                <div class="card card-block">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner"></div>
                </div>
                <div class="full" id="con">
                    <div class="banner"></div>
                    <h1 class="text-center">Contact Me</h1>
                    <div class="intex">Get in touch with me via these social media platforms</div>
                    <ul class="conlist d-flex justify-content-around">
                        <li><a class="zoom btn btn-outline-secondary btn-lg" target="_blank" href="https://github.com/YuvrajSharma07"><i class="fab fa-github"></i> YuvrajSharma07</a></li>
                        <li><a class="zoom btn btn-outline-primary btn-lg" target="_blank" href="https://twitter.com/Yuv_is_here"><i class="fab fa-twitter"></i> @Yuv_is_here</a></li>
                        <li><a class="zoom btn sto btn-outline-secondary btn-lg" target="_blank" href="https://stackoverflow.com/users/11824614/yuv-is-here"><i class="fab fa-stack-overflow"></i> Yuv_is_here</a></li>
                        <li><a class="zoom btn sdc btn-outline-secondary btn-lg" target="_blank" href="https://soundcloud.com/yuvraj-sharma-251283993"><i class="fab fa-soundcloud"></i> yuvraj sharma</a></li>
                        <li><a class="zoom btn btn-outline-danger btn-lg" target="_blank" href="https://www.youtube.com/channel/UCvJnN7bsZNOgD1xZiStOU4g/"><i class="fab fa-youtube"></i> Yuvraj Sharma</a></li>
                    </ul>
                    <div class="intex">Or shoot me a mail at <a href="mailto:billiondollarone07@gmail.com">billiondollarone07@gmail.com</a></div>
                    <div class="banner"></div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://YuvrajSharma07.github.io/Web_Development_Folder/templates/Libraries/ripple_effect_v0.3/ripple_effect_v0.3/ripple_effect.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.4.1/js/all.js" integrity="sha384-L469/ELG4Bg9sDQbl0hvjMq8pOcqFgkSpwhwnslzvVVGpDjYJ6wJJyYjvG3u8XW7" crossorigin="anonymous"></script>
        <script src="lib/index.js"></script>
    </body>
</html>