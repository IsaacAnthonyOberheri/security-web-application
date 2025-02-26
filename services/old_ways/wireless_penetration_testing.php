<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="services.css">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="keywords">
        

    </head>

    <body>

        
        <!--Beginning of Menu Section--><!--Beginning of Menu Section-->

        <?php

            require 'header_menu.html';

        ?>

        <!--End of Menu Section--><!--End of Menu Section-->






        <div class="content_bound" onmouseenter = 'hideContent()'>


            <div class="content_topic_bond">
                
                
                <div class="blurr_image"></div>
                <div class="topic_text"> Wireless Penetration Testing </div>
                

            </div>





        <!--Beginning Content Description --> <!--Beginning Content Description -->

            <div class="content_description_bond">

                <div class="description_left">
                    <img src='images/coding-isometric-01.png' />

                </div>

                <div class="description_right">

                    <p class='desc_exp' >

                    <b> Wireless Penetration Testing </b> is a process used to assess the security of 
                    wireless networks (Wi-Fi) and identify vulnerabilities that could be exploited by 
                    attackers. Wireless networks are often a target for attackers because they can be 
                    accessed from outside the physical premises of an organization. The purpose of wireless 
                    penetration testing is to simulate real-world attacks on 
                    a wireless network, evaluate its defenses, and help secure the wireless infrastructure.

                    </p>

                   <h3> Key Objectives of Wireless Penetration Testing: </h3>

                    <ul class='desc_ben'>

                        <li>

                            Identify Security Weaknesses: Detect vulnerabilities in 
                            wireless configurations, encryption protocols, and access points. 

                        </li>

                        <li>

                          Test for Unauthorized Access: Simulate attacks to gain 
                          unauthorized access to the wireless network and evaluate the potential impact.  </li>

                        <li>
                            Assess Encryption: Evaluate the strength of encryption 
                            methods (e.g., WEP, WPA, WPA2, WPA3) 
                            and determine whether they are susceptible to attacks.
                        </li>

                        <li>
                            Detect Rogue Access Points: Identify unauthorized access points set up by malicious 
                            actors or employees.
                        </li>

                       
                    
                    </ul>
                    
                </div>

            </div>

        <!--End Content Description --> <!--End Content Description -->










        <!--Beginning other_content_bond --> <!--Beginning other_content_bond -->

            <div class='other_content_bond'>

                <div class='others_services_title'> 
                    Related Services
                </div>

                <a href='internal_penetration'> 
                    <div class='others_services_content'>

                        <div class='others_image'>

                            <img src='images/defense.webp' />

                        </div>

                        <div class='others_text'>
                            Internal Penetration Testing
                        </div>
                        
                    </div>
                </a>

                <div class='others_services_content'>

                    <div class='others_image'>
                        <img src='images/intro_about.png' />

                    </div>

                    <div class='others_text'>
                        End-Point Detection
                    </div>
                    
                </div>

                <div class='others_services_content'>

                    <div class='others_image'>
                        <img src='images/PCIDSS.webp' />

                    </div>

                    <div class='others_text'>
                        Cloud Security Assessment
                    </div>
                    
                </div>

                <div class='others_services_content'>

                    <div class='others_image'>
                        <img src='images/cloud_computing.webp' />

                    </div>

                    <div class='others_text'>
                        Tailored Consulting
                    </div>
                    
                </div>


            </div>
        
        <!--End other_content_bond --> <!--End other_content_bond -->











            <div class="content_methodology_bond" >

                <div class="method_left">
                   <div class='meth_head'> Our Methodology </div>
                   <div class='meth_cont'>
                        All external penetration testing performed is based on the 
                        NIST SP 800-115 Technical Guide to Information Security Testing and Assessment, 
                        OWASP Testing Guide (v4), and customized testing frameworks.
                    </div>
                </div>

                <div class="method_right">

                    <div class='meth_icon_image'>

                        <img src='images/60377640-0-application-strategy-980x940.png' />
                    
                    </div>

                </div>
            </div>













            <div class="testimonial_bond" >
                
                <?php
                    require 'slider.html';
                ?>
                      
                
            </div>



            <!-- Beginning Pentest E-book Section -->
            
            <div >

                <?php
                    require 'pentest_ebook.html';

                ?>

                
            </div>

            <!-- End  od Pentest E-book Section -->


            <div class="contact_bond" >
                <?php
                    require 'contact.html';
                ?>
            </div>
            
        </div> 

    </body>

 

</html>