@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')
    <!--page-banner-area start-->
    <div class="pt-5">
        <div class="container wow fadeInDown">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h3>"UNAPOLOGETICALLY SEXY.OBSESSED WITH BEING THE FOREFRONT OF FASHION."</h3>
                </div>
            </div>
        </div>
    </div>
    <!--banner-area end-->

    <!--about-area start-->
    <div class="about-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <img class="img-100p" src="{{asset('images/about1.jpg')}}" alt=""/>
                </div>
                <div class="col-lg-6 mt-sm-30 wow fadeInRight">
                    <h4>ABOUT US</h4>
                    <p>Fashion Nova is the world’s leading quick-to-market apparel and lifestyle brand. We are renowned
                        for delivering the season’s most wanted styles to millions of people worldwide, which earned us
                        the title of the #1 Most-Searched Fashion Brand on Google in 2018.</p>
                    <p>As a Los Angeles based company with 5 retail stores throughout Southern California, we sell
                        collections for women, men, curve, and kids. We are a pop culture phenomenon, reaching
                        staggering social media followings of over 25 million, of which includes celebrity fans and
                        collaborators.</p>
                    <p>Our name has been featured in songs and our styles have been worn by your favorite celebs. From
                        Cardi B to Kylie Jenner, there isn’t a famous booty our jeans haven’t been on. Tyga, The Game,
                        YG, City Girls, Saweetie, Offset—you’ll hear Fashion Nova mentioned in the hottest chart-topping
                        hits, worldwide.</p>
                    {{--<div id="accordion">
                        <div class="card single-faq">
                            <div class="card-header faq-heading" id="headingOne">
                                <h5 class="mb-0">
                                    <a href="#collapseOne" class="btn btn-link" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                        How do I become an author?
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        <i class="fa fa-minus-circle pull-right"></i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq">
                            <div class="card-header faq-heading" id="headingTwo">
                                <h5 class="mb-0">
                                    <a href="#collapseTwo" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is my license transferable?
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        <i class="fa fa-minus-circle pull-right"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq">
                            <div class="card-header faq-heading" id="headingThree">
                                <h5 class="mb-0">
                                    <a href="#collapseThree" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What do you mean by item and end product?
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        <i class="fa fa-minus-circle pull-right"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>

            <div class="row py-5">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft">
                        <h4>OUR MISSION</h4>
                        <p>Our team works around-the-clock to bring you the world’s hottest styles. We forecast fashion
                            trends before anyone else, and introduce 1,000+ new arrivals to our site every week! We
                            listen to our customers and are always finding innovative ways to improve and deliver the
                            most coveted styles at a moment’s notice. It’s our top priority to ensure that our FN
                            community always feels confident and included. We've revolutionized the fashion industry and
                            dominated the market with our FashionNova, FashionNovaCURVE, FashionNovaMEN’s, and an
                            up-and-coming FashionNovaKIDS line. We cater to anyone who has an affinity for fashion.
                            Regardless of shape, personal style, or gender, we’re here to fit everyone.</p>
                        <p>Today, Fashion Nova’s mission remains the same—making affordable fashion accessible to
                            customers around the world.</p>
                    </div>
                    <div class="col-lg-6 mt-sm-30 wow fadeInRight">
                        <img class="img-100p" src="{{asset('images/about2.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 wow fadeInDown">
                    <h3 class="text-center">"OTHER BRANDS WORK HARD, BUT FASHION NOVA WORKS THE HARDEST..."</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <img class="img-100p" src="{{asset('images/about3.jpg')}}" alt=""/>
                </div>
                <div class="col-lg-6 mt-sm-30 wow fadeInRight">
                    <h4>THE FASHION NOVA STORY</h4>
                    <p>Founded in 2006, Fashion Nova has been privately owned and operated by CEO Richard Saghian. With
                        a keen eye, Saghian was able to identify a missing part of the women’s apparel market by
                        bringing sexy clubwear and jeans for women to the forefront of the affordable fashion industry.
                        Saghian said, “We’ve revolutionized fashion by making our customers part of the conversation
                        from concept to delivery. We stay ahead of the fashion curve and the competition by engaging
                        with our community every day to ensure we deliver what they need as fast as possible.” He
                        pioneered using Instagram as a platform to connect and relate to customers in a way that had
                        never been done before. Through these first accomplishments, the success of Fashion Nova was
                        born. Fashion Nova opened its first location in Panorama City, and the company has grown to
                        include 5 stores across Southern California.</p>
                    <p>In 2013, Saghian launched the brand’s online store, which has become its major identifiable
                        presence and primary source for shoppers worldwide. Collections have and still cater to a
                        diverse range of body types, many of which are ignored by retailers that offer limited size
                        options and silhouettes. Over the last decade, Fashion Nova has become a household name,
                        counting over 25 million followers across all social media platforms. Today, Fashion Nova
                        continues to provide elevated styles at affordable prices with a dedicated social media
                        following to match.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pb-3 wow fadeInDown">
                    <h3 class="text-center">"WE STAY AHEAD OF THE FASHION CURVE AND THE COMPETITION BY ENGAGING WITH OUR
                        COMMUNITY EVERY DAY…"</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="fn-influencer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-3 wow fadeInLeft">
                    <h3 class="text-center">THE FASHION NOVA INFLUENCER</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInDown">
                    <img class="img-100p" src="{{asset('images/about4.jpg')}}" alt=""/>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp">
                    <img class="img-100p" src="{{asset('images/about5.jpg')}}" alt=""/>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInDown">
                    <img class="img-100p" src="{{asset('images/about6.jpg')}}" alt=""/>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp">
                    <img class="img-100p" src="{{asset('images/about7.jpg')}}" alt=""/>
                </div>

                <div class="col-lg-12 pt-4 wow fadeIn">
                    <p>Our community of influencers spans worldwide. We’ve built a strong rapport with a diverse group
                        of individuals, all of whom embody and represent our brand. Each one of our Fashion Nova
                        Partners engage the market with their one-of-a-kind personalities.</p>
                    <p>You'll find them getting millions of likes on the ‘Gram, dancing to their own rhythm on TikTok,
                        and styling their favorite Fashion Nova ‘fits to perfection on YouTube. They push boundaries,
                        challenge style norms, and are leaders in the world of fashion. Our influencers inspire everyone
                        around them to own their confidence, embrace their individuality, and be whoever they FN
                        want.</p>
                </div>
            </div>
        </div>
    </div>
    <!--about-area end-->
@endsection
