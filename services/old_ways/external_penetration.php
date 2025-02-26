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
                <div class="topic_text"> External Penetration Testing </div>
                

            </div>





        <!--Beginning Content Description --> <!--Beginning Content Description -->

            <div class="content_description_bond">

                <div class="description_left">
                    <img src='images/coding-isometric-01.png' />

                </div>

                <div class="description_right">

                    <p class='desc_exp' >

                    <b> External Penetration Testing </b> focuses on assessing the 
                    security of an organization's external-facing systems and 
                    services, such as websites, web applications, email servers, 
                    firewalls, and any other systems accessible via the internet. 
                    The purpose of this type of testing is to simulate attacks 
                    that could be launched by an external attacker 
                    (a hacker without any inside knowledge or access to internal 
                    systems) to identify and exploit vulnerabilities.

                    </p>

                   <h3> Key Objectives of External Penetration Testing: </h3>

                    <ul class='desc_ben'>

                        <li> Identify Exposed Systems and Services: Discover publicly accessible systems, ports, and services that could be exploited. </li>
                        <li>  Detect Vulnerabilities: Find weaknesses in externally facing infrastructure, such as misconfigurations, unpatched software, 
                            weak authentication mechanisms, or exposed sensitive data. </li>
                        <li>  Simulate Real-World Attacks: Emulate the techniques and tactics used by 
                            external hackers to gain unauthorized access or compromise the systems. </li>
                        <li>  Assess Risk: Evaluate the risk posed by vulnerabilities in terms of 
                            potential data breaches, service disruption, or reputational damage. </li>
                        <li>  Strengthen Perimeter Security: Provide recommendations to secure and 
                            harden external-facing systems against potential attacks. </li>
                    
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