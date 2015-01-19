<style> 
    #fruits{
        border:1px solid #e1e1e1;
    }
</style>
<!--SLIDER-->
<section class="innerpages">
    <div class="grid_12">                       
        <h1>Portfolio</h1>
    </div>
</section>
<!--SLIDER_END--> 
</div>
</div>
<div class="block2">
    <div class="container_12"> 
        <!--==============================content================================-->
        <section class="content">
            <div class="wrapper projects">
                <div class="row clearfix">
                    <article class="grid_6">
                        <div id="fruits">
                            <ul>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img2.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img3.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img4.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img1.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img2.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img3.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img4.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/page2-img4.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"><a href = "http://whitecall.ca/payme/" target="_blank">Payme Logs</a></div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Whitecall Limited</li>
                                    <li>Cloud IT Limited</li>
                                    <li>Ctechuk Limited</li>
                                    <li>Website : <a href = "http://whitecall.ca/payme/" target="_blank">Payme Logs</a></li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Framework : Codeigniter</li>
                                    <li>Script : JavaScript, Jquery, Ajax</li>
                                    <li>UI Technology : Google Web Toolkit (GWT), GXT</li>
                                    <li>Web Server : Apache Tomcat</li>
                                    <li>Database : Independent (Currently using MySQL)</li>
                                    <li>Reporting Tool : JasperReport</li>
                                    <li>Mail Transfer Protocol : SMTP</li>
                                </ul>
                            </div>
                            <h3> + Platform</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Operating System (OS) Independent</li>
                                    <li>Browser Independent</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="row clearfix" id="responsivetab">
                    <article class="grid_12">
                        <div id="horizontalTab">
                            <ul>
                                <li><a href="#tab-1">Details</a></li>
                                <li><a href="#tab-2">Major Modules</a></li>
                                <li><a href="#tab-3">Features & Benefits</a></li>
                            </ul>
                            <div id="tab-1">
                                <p>Controll the full System and get all result . summery report, datails report, daily report</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>TOP UP(recharge) System</li>
                                    <li>Sms Services</li>
                                    <li>CASH(send money)</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Maintained financial year wise Non-development and annual development program budget and expenditure information</li>
                                    <li>Generating all the financial statement such as trial balance, income/expenditure, receipt/payment, balance sheet automatically</li>
                                    <li>User Can Sent Sms, TOP UP(recharge), CASH(send money), Free Sms</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>                
            </div>
        </section>
    </div>
</div>
<script language="javascript">
    $(document).ready(function() {
        $("#fruits").tiksluscarousel({width: 450, height: 270, nav: 'thumbnails', current: 1, type: 'zoom'});
    });
</script>