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
                                <li><img src="<?php echo $baseurl; ?>assets/images/astra-dish-660.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/satellites-455.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/astra-dish-660.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/satellites-455.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/astra-dish-660.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/satellites-455.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/astra-dish-660.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/satellites-455.jpg" /></li>
                                <li><img src="<?php echo $baseurl; ?>assets/images/astra-dish-660.jpg" /></li>
                            </ul>
                        </div>

                    </article>
                    <article class="grid_6">
                        <div class="hello_box"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        <div id="accordion">
                            <h3> + Client</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>host30.cention</li>
                                    <li>Cention</li>
                                    <li>host30.cention</li>
                                    <li>Cention</li>
                                </ul>
                            </div>
                            <h3> + Skills Involved</h3>
                            <div><ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Framework : Codeigniter</li>
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
                                <p>The place of work is as important as the work itself. Honesty Software is excited about headquartered at Bangladesh. This is how our work place looks like!
                                    Honesty Software is a diverse end-to-end IT solution provider offering wide range of Mobile Application, web applications and also expert consultancy services. Our solutions enable companies to make their Application Lifecycle management and Project management easier and more efficient.</p>
                            </div>
                            <div id="tab-2">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Audit Management System</li>
                                    <li>Fixed Asset Management System</li>
                                    <li>Inventory Management System</li>
                                </ul>
                            </div>
                            <div id="tab-3">
                                <ul style="list-style-type:circle; padding-left: 30px;">
                                    <li>Maintained financial year wise Non-development and annual development program budget and expenditure information</li>
                                    <li>Generating all the financial statement such as trial balance, income/expenditure, receipt/payment, balance sheet automatically</li>
                                    <li>Tracking all audit objection and settlement issues</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="hireus_block">
    <div class="container_12">
        <section class="">
            <div class="wrapper">
                <article class="grid_3">
                    <h2>Impressed?<br/>
                        want to hire us?</h2>
                    <p class="MB0"> Send us your details and we'll get in touch withtin 24 hours. </p>
                </article>
                <article class="grid_9">
                    <form action="#" method="post" id="cform" name="cform" class="clearfix">
                        <ul id="homehireus" class="hireform">
                            <li>
                                <label>Name:<span class="required">*</span></label>
                                <input name="name" id="name" type="text" value="" tabindex="1">
                            </li>
                            <li>
                                <label>Phone:</label>
                                <input name="phone" id="phone" type="text" value="" tabindex="3">
                            </li>
                            <li>
                                <label>Email:<span class="required">*</span></label>
                                <input name="email" id="email" type="text" value="" tabindex="2">
                            </li>
                            <li>
                                <input type="button" id="send-message" value="Send Details To Wee" tabindex="4">
                            </li>
                        </ul>
                    </form>
                    <div id="output"></div>
                </article>
            </div>
        </section>
    </div>
</div>
<script language="javascript">
    $(document).ready(function() {
        $("#fruits").tiksluscarousel({width: 450, height: 270, nav: 'thumbnails', current: 1, type: 'zoom'});
    });
</script>