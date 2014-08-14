<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PLKHEALTH SOFTWARE CENTER</title>
        <meta name="keywords" content="blactro template, free html css template, jquery, templatemo" />
        <meta name="description" content="Blactro is free template by templatemo.com" />

        <link href="templatemo_style.css" type="text/css" rel="stylesheet" /> 
        <script type="text/javascript" src="js/jquery.min.js"></script> 
        <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
        <script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
        <script type="text/javascript" src="js/init.js"></script> 


        <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
        <script type="text/JavaScript" src="js/slimbox2.js"></script>

        <script type="text/javascript">
            function DisplayTime() {
                if (!document.all && !document.getElementById)
                    return
                timeElement = document.getElementById ? document.getElementById("curTime") : document.all.tick2
                var CurrentDate = new Date()
                var hours = CurrentDate.getHours()
                var minutes = CurrentDate.getMinutes()
                var seconds = CurrentDate.getSeconds()
                if (minutes <= 9)
                    minutes = "0" + minutes;
                if (seconds <= 9)
                    seconds = "0" + seconds;
                var currentTime = hours + ":" + minutes + ":" + seconds;
                timeElement.innerHTML = currentTime
                setTimeout("DisplayTime()", 1000)
            }
            window.onload = DisplayTime
        </script>
        <style>
            #divTime{position: relative}
            #imgTime{ position: absolute; bottom: 25%;left: 60%; }
        </style>



        <!-- Timestamp: 1236819900 --> 
    </head> 
    <body> 
        <div id="templatemo_header">
            <div id="site_title"><a href="#home"><span>PLKHEALTH SOFTWARE CENTER</span></a></div>
            <a class="site_bg"><img src="images/header.png" /></a>
        </div>
        <div id="templatemo_main">
            <div id="content"> 
                <div id="home" class="section">

                    <div class="box home_box2 color1">
                        <div class="padding_30">
                            <h2><a href="#about">เกี่ยวกับ</a></h2>
                            <p>
                                เรามุ่งเน้นพัฒนา Software เพื่อช่วยในการบริหารจัดการข้อมูลด้านการแพทย์และสุขภาพ
                                เป็นส่วนเสริมให้ผู้ใช้งานจัดการข้อมูลได้สะดวก รวดเร็วและมีทิศทาง
                            </p>
                        </div>
                    </div>

                    <div class="box home_box1 color11 no_mr ">
                        <div class="padding_20" id="divTime">
                            <table>
                                <tr><td><h1><?= date("d") ?></h1></td><td><h4>TIME <span id=curTime></span></h4></td></tr>
                                <tr><td><h4><?= date("D-M") ?></h4></td><td><img src="images/calendar.png" id="imgTime"></td></tr>
                            </table>
                            <p><?php require './count_visit_web.php'; ?></p>
                        </div>
                    </div>

                    <div class="box home_box1 color6">
                        <div class="padding_20">
                            <h2><a href="#idata">iData</a></h2>
                            <p>
                                <h5>for HOSXP &  HOSXP_PCU</h5>

                        </div>
                    </div>

                    <div class="box home_box1 color2">
                        <div class="padding_20">
                            <h2><a href="#jdata">jData</a></h2>
                            <p>
                                <h5>for JHCIS Database</h5>

                        </div>

                    </div>

                    <div class="box home_box1 color9 no_mr">
                        <div class="padding_20">
                            <h2><a href="#ihouse">iHouse</a></h2>
                            <p>
                                <h5>Android Application for Home Visit.</h5>

                        </div>
                    </div>

                    <div class="box home_box1 color12">
                        <div class="padding_20">
                            <h2><a href="#smart">Smart Visit</a></h2>
                            <p>
                                <h5>for Hospital to Home Visit.</h5>

                        </div>
                    </div>


                    <div class="box home_box1 color8">
                        <div class="padding_20">
                            <h2><a href="#service" >ข้อกำหนด</a></h2>
                            <p>
                                ให้คำปรึกษาด้านการพัฒนาระบบสารสนเทศด้านการแพทย์และสุขภาพ
                            </p>
                        </div>
                    </div>

                    <div class="box home_box1 color7 no_mr">
                        <div class="padding_20">
                            <h2><a href="https://www.facebook.com/itplkhealth" target="_blank">Facebook</a></h2>
                            <p>
                                ติดต่อสอบถามได้ที่ Facebook Fanpage.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END of home -->



                <div class="section section_with_padding" id="idata"> 
                    <h2>iData</h2>
                    <div class="img_border img_fl"> 
                        <a href="images/gallery/04-l.jpg" rel="lightbox[idata]"><img src="images/templatemo_image_01.jpg" alt="image 1" /></a>	
                    </div>
                    <div class="half right">
                        <p>Credit goes to <a href="http://www.photovaco.com" rel="nofollow">PhotoVaco</a> for photos used in this template. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Pellentesque non est quis sapien tempor consequat. Proin a ullamcorper enim.</p>
                        <p>Vultricies, tellus sit amet adipiscing sagittis, odio felis porta erat, hendrerit laoreet est nulla at enim. Vestibulum ut metus et ligula fermentum ultrices. Donec non rhoncus felis. Fusce vitae porta felis. Nam sed rhoncus lorem. Nam varius pretium enim id interdum. Curabitur tincidunt placerat justo eget fermentum.</p>
                    </div>
                    <div class="clear h40"></div>
                    <div class="img_border img_fr"> <a href="http://www.templatemo.com/page/1" target="_parent" rel="nofollow"><img src="images/templatemo_image_02.jpg" alt="image 2" /></a>	
                    </div>
                    <div class="half left">                
                        <p><em>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam mauris ipsum, pulvinar sit amet varius at, placerat ut felis.</em></p>
                        <p>Donec vitae tortor non ipsum tristique condimentum ac ac nulla. Etiam sagittis iaculis dolor ut euismod. Nam faucibus, risus at consequat malesuada, urna turpis sagittis libero, sodales hendrerit dui arcu et nisi. Praesent pulvinar, dolor id lacinia pulvinar, mi ligula tempor libero, et semper sem dolor et elit. </p>
                    </div>

                    <a href="#home" class="slider_nav_btn home_btn">home</a> 
                    <a href="#home" class="slider_nav_btn previous_btn">Previous</a>
                    <a href="#services" class="slider_nav_btn next_btn">Next</a> 

                </div>  <!-- END of page -->

                <div class="section section_with_padding" id="jdata"> 
                    <h2>Service</h2>

                    <div class="img_border img_fr"> <a href="#"><img src="images/templatemo_image_01.jpg" alt="image" /></a>	
                    </div>
                    <div class="half left">                
                        <p><em>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam mauris ipsum, pulvinar sit amet varius at, placerat ut felis.</em></p>
                        <p>Donec vitae tortor non ipsum tristique condimentum ac ac nulla. Etiam sagittis iaculis dolor ut euismod. Nam faucibus, risus at consequat malesuada, urna turpis sagittis libero, sodales hendrerit dui arcu et nisi. Praesent pulvinar, dolor id lacinia pulvinar, mi ligula tempor libero, et semper sem dolor et elit. </p>
                    </div>

                    <div class="clear h40"></div>

                    <div class="img_border img_fl"> <a href="#"><img src="images/templatemo_image_02.jpg" alt="image" /></a>	
                    </div>
                    <div class="half right">
                        <ul class="list_bullet">
                            <li>Maecenas ac odio ipsum donec cursus</li>
                            <li>Fusce risus tortor, interdum</li>
                            <li>Proin facilisis ullamcorper</li>
                            <li>Sed vel justo quis ligula</li>
                            <li>Ut tristique sagittis arcu</li>
                            <li>Maecenas ac odio ipsum donec cursus</li>
                            <li>Fusce risus tortor, interdum</li>
                        </ul>
                    </div>

                    <a href="#home" class="slider_nav_btn home_btn">home</a> 
                    <a href="#about" class="slider_nav_btn previous_btn">Previous</a>
                    <a href="#portfolio" class="slider_nav_btn next_btn">Next</a>



                </div> <!-- END of page -->


                <div class="section section_with_padding" id="ihouse"> 
                    <ul id="gallery">
                        <li><a href="images/gallery/01-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/01.jpg" alt="image 1" /></a></li>
                        <li><a href="images/gallery/02-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/02.jpg" alt="image 2" /></a></li>
                        <li class="no_mr"><a href="images/gallery/03-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/03.jpg" alt="image 3" /></a></li>
                        <li><a href="images/gallery/04-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/04.jpg" alt="image 4" /></a></li>
                        <li><a href="images/gallery/05-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/05.jpg" alt="image 5" /></a></li>
                        <li class="no_mr"><a href="images/gallery/06-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/06.jpg" alt="image 6" /></a></li>
                        <li><a href="images/gallery/07-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/07.jpg" alt="image 7" /></a></li>
                        <li><a href="images/gallery/08-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/08.jpg" alt="image 8" /></a></li>                
                        <li class="no_mr"><a href="images/gallery/09-l.jpg" rel="lightbox[gallery]"><img src="images/gallery/09.jpg" alt="image 9" /></a></li>
                    </ul>

                    <a href="#home" class="slider_nav_btn home_btn">home</a> 
                    <a href="#home" class="slider_nav_btn previous_btn">Previous</a>
                    <a href="#ihouse" class="slider_nav_btn next_btn">Next</a> 

                </div><!-- END of page --> 


                <div class="section section_with_padding" id="smart"> 
                    <h2>Testimonials</h2>
                    <div class="clear h40"></div>
                    <div class="half left">
                        <blockquote class="testimonial_block">
                            <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula. </p>
                            <cite>Neon - <span>Marketing Executive</span></cite> </blockquote>
                    </div>
                    <div class="half right">
                        <blockquote class="testimonial_block">
                            <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula. </p>
                            <cite>George - <span>Executive Director</span></cite> </blockquote>
                    </div>
                    <div class="clear h40"></div>
                    <div class="half left">
                        <blockquote class="testimonial_block">
                            <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula. </p>
                            <cite>Walker - <span>Media Specialist</span></cite> </blockquote>
                    </div>
                    <div class="half right">
                        <blockquote class="testimonial_block">
                            <p>Fusce nec felis id lacus sollicitudin vulputate. Proin tincidunt, arcu id pellentesque accumsan, neque dolor imperdiet ligula. </p>
                            <cite>Ronald - <span>Advertising Manager</span></cite> </blockquote>
                    </div>

                    <a href="#home" class="slider_nav_btn home_btn">home</a> 
                    <a href="#portfolio" class="slider_nav_btn previous_btn">Previous</a>
                    <a href="#contact" class="slider_nav_btn next_btn">Next</a> 
                </div><!-- END of page -->



            </div> <!-- END of content -->
        </div> <!-- END of main -->

        <div id="templatemo_footer">
            <p>Copyright © 2014-2020 PlkHealth Office | <a rel="nofollow" href="http://www.plkhealth.go.th" target="_parent">Office</a> 055252052 ต่อ 454-455</p>
        </div>

    </body> 

</html>