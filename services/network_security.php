<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="services.css">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
        <meta content="" name="keywords">
        <meta property="og:locale" content="en_US" >
        <meta property="og:title" content="Network Security - Secure Tech Solutions" >
        <meta property="og:description" content="This involves protecting the integrity, confidentiality, and availability of an organization’s network infrastructure.">
        <link rel="icon" href="images/securetech_logo.png" />

    </head>

    <body>

        <?php
        require 'dialog_box.html';
        ?>




        <div class="body_box">

            
            <!--Beginning of Menu Section--><!--Beginning of Menu Section-->

            <?php

                require 'header_menu.html';

            ?>

            <!--End of Menu Section--><!--End of Menu Section-->






            <div class="content_bound" onmouseenter = 'hideContent()'>


                <div class="content_topic_bond">
                    
                    
                    <div class="blurr_image"></div>
                    <div class="topic_text"> Network Security   </div>
                    

                </div>


                <!--Beginning Content Description --> <!--Beginning Content Description -->

                    <div class="content_description_bond">

                        <div class="description_left">
                            <img src='images/coding-isometric-01.png' />

                        </div>

                        <div class="description_right">

                            <p class='desc_exp' >

                                <b> Network Security </b> 

                                involves protecting the integrity, confidentiality, and 
                                availability of an organization’s network infrastructure. This encompasses hardware, 
                                software, policies, and practices to prevent unauthorized access, attacks, and misuse of network resources..
        
                            </p>

                        <!-- <h3> Key Objectives of Internal Penetration Testing: </h3> -->

                        <h3> Core Components of Network Security </h3>
                        

                            <ul class='desc_ben'>

                                <li> Firewalls: Act as a barrier between trusted internal networks and untrusted external networks,
                                    filtering incoming and outgoing traffic based on predetermined security rules. </li>

                                <li>  
                                    Intrusion Detection/Prevention Systems (IDS/IPS): Monitors network traffic for suspicious activity
                                    or policy violations. IDS systems alert administrators, while IPS systems can block or prevent 
                                    identified threats.
                                </li>


                                <li> 
                                    Virtual Private Networks (VPNs): Securely encrypts remote access connections to corporate networks, 
                                    protecting data in transit. 
                                </li>

                                <li> 
                                    Zero Trust Network Architecture: A security model that assumes no network traffic is trusted, 
                                    whether inside or outside the organization. It enforces strict identity verification and minimal 
                                    privileges for access to resources.
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

                        <a href='web_application_penetration_testing'> 
                            <div class='others_services_content'>

                                <div class='others_image'>

                                    <img src='images/defense.webp' />

                                </div>

                                <div class='others_text'>                          
                                    Web Application Penetration
                                </div>
                                
                            </div>
                        </a>

                        <a href='pci_dss_qsa'> 
                            <div class='others_services_content'>

                                <div class='others_image'>
                                    <img src='images/intro_about.png' />

                                </div>

                                <div class='others_text'>
                                    PCI DSS QSA (Qualified Security Assessor)
                                </div>
                                
                            </div>
                        </a>


                        <a href='malware_assessment'> 
                            <div class='others_services_content'>

                                <div class='others_image'>
                                    <img src='images/PCIDSS.webp' />

                                </div>

                                <div class='others_text'>
                                Malware Assessment
                                </div>
                                
                            </div>
                        </a>

                        <a href='cloud_computing'> 
                            <div class='others_services_content'>

                                <div class='others_image'>
                                    <img src='images/cloud_computing.webp' />

                                </div>

                                <div class='others_text'>
                                    Cloud Computing 
                                </div>
                                
                            </div>
                        </a>


                    </div>
            
                <!--End other_content_bond --> <!--End other_content_bond -->





                    <div class="content_methodology_bond" >

                        <div class="method_left">
                        <div class='meth_head'> Our Methodology </div>
                        <div class='meth_cont'>
                                All testing performed is based on the 
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
        
        </div>

    </body>

 

</html>