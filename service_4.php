<?php include "./includes/header.php" ?>



<section class="page-content">



    <div class="page-section platform-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="platform_servicescontnt">
                        <h4>Data Engineering and AI</h4>
                        <p>Data Engineering involves data acquisition from physical world, representation to support high-level query, storage in distributed physical medium, analytical techniques for de-noising and conditioning data, analytical techniques for discovery of relationship across various data sets, feature extraction, and automatic labeling of data for higher-level learning systems such as AI.</p>
                        
                        <div class="platform_box ">
                            <div class="row">
                                <div class="col-md-2 pr-5">
                                <img src="assets/img/services_icon/data-science.png" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <h5>Data Engineering</h5>
                                    <p>With enhanced Data Analytics solutions and Engineering skills, we help you adapt to the ever-changing market dynamics. With this accelerated approach data becomes considerably easier to retrieve and access, creating seamless user experiences.</p> <br>



                                    <div class="moretext">
                                            <p>Structural changes brought about by Master Data Management makes complex data easy to understand and use. With a magnified focus on all data related challenges faced by clients, our brand of data scientists and engineers deliver a smooth functioning framework for your business at competitive prices. The unparalleled data ops techniques and activities put to use by our experts enable consistent data pattern reading and an unmatched cloud data stack. The proficient collaboration of data, with the “Enterprise data-as-a-service” approach by our highly skilled team yields the right kind of leverage, giving our clients an edge over the competitors. <br><br> “Let’s turn your vision into reality together !</p>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <a class="moreless-button" href="javascript:void(0);">Read more</a>
                                </div>

                            </div>
                        </div>
                        <div class="platform_box ">
                            <div class="row">
                                <div class="col-md-2 pr-5">
                                <img src="assets/img/services_icon/ai and ml.png" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <h5>AI & ML</h5>
                                    <p>Imagine AI as the master tool for your businesses’ innovation needs, we are your one stop-solution for the same! We offer a sharp approach to help businesses surpass productivity goals, by harvesting user data to perfection. </p> <br>


                                    <div class="moretext">
                                            <p>Our Artificial intelligence and Machine learning services create a self-learning environment to translate, structure and power your data appropriately. <br> <br> Offering easy to control ML models,Conversational AI, Architectural Strategy and Computer vision etc. our team of experts excel in natural language process and deep learning, creating a futuristic path for your business to prosper on. With the help of automation and seamlessly designed ML ops, we at SA IT & BLOCKCHAIN harness resources to the maximum potential helping businesses flourish beyond expectations.</p>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <a class="moreless-button" href="javascript:void(0);">Read more</a>
                                </div>

                            </div>
                        </div>
                        <div class="platform_box ">
                            <div class="row">
                                <div class="col-md-2 pr-5">
                                <img src="assets/img/services_icon/data-visualization.png" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <h5>Data Visualization & Analytics</h5>
                                    <p>When used correctly, Data is the powerhouse for the growth of any business and it requires being handled by trusted hands, ensuring it meets all regulatory compliance.</p> <br>


                                    <div class="moretext">
                                            <p>The skilled professionals atSA IT & BLOCKCHAIN offer data strategy that aligns seamlessly with your business goals.

Pledging to improve data operations, regulatory compliance and business intelligence, we use stringent methods to help your business make money from data. With the help of our Business Intelligence, Data processing and visualization capabilities, we strive to serve trustworthy and assured data assets for your business. <br> <br> Our data driven strategies like Platform Integration and Data Science enable business agility and clearer decision-making. The realization of your data analytics and operation capabilities can be monitored correctly through appropriate visualization and reporting achieving clearly defined business objectives.</p>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <a class="moreless-button" href="javascript:void(0);">Read more</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</section>





<?php include "./includes/footer.php" ?>


<script>
    $('.counting').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({
            countNum: $this.text()
        }).animate({
                countNum: countTo
            },

            {

                duration: 3000,
                easing: 'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }

            });


    });

    $('.moreless-button').click(function() {
        $(this).closest('.platform_box ').find('.moretext').slideToggle();
        if ($(this).text() == "Read more") {
            $(this).text("Read less")
        } else {
            $(this).text("Read more")
        }
    });
</script>

</body>

</html>