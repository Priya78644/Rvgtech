@extends('components.main')
@section('content')
    <div class="container py-5">
        <div class="row align-items-start">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="text-center">Welcome to Our SEO-Friendly Website</h2>
                <p class="text-dark">Our website is designed with SEO best practices in mind, ensuring your content ranks
                    well in search engines.
                    Search engines’ success as businesses depends on the public finding search engine results to be relevant
                    to their needs. The more links a search engine like Google finds pointing from a particular type of
                    content to a particular resource, the more confident it becomes that the linked-to resource is relevant
                    to certain search queries. The search engine then determines that this resource
                    deserves to be ranked highly when people make those queries.
                    There are three main categories of SEO: on-page SEO, off-page SEO,
                    and technical SEO, all of which combine to help search engines discover,
                    crawl, index, understand, and rank your content, and this article will cover each of these topics.
                </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/SEO-Gear.jpg') }}" alt="SEO Design" class="img-fluid">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-start">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/seo.jpg') }}" alt="About Us" class="img-fluid">
            </div>
            <div class="col-md-6 ">
                <h2 class="text-center">About Us</h2>
                <p class="text-dark">We are a team of experts in web design and SEO optimization, delivering top-notch
                    services to help your business grow.
                    In order to understand how SEO works, it’s vital to have a basic understanding of how search engines
                    work. Search engines use crawlers (also known as spiders or bots) to gather information across the
                    internet to populate their big databases, called “indexes”.
                    Crawlers begin from a known web page and then follow links from that page to other pages.
                    For example, if a page Google already indexed on Patagonia.
                    com on the topic of used clothing features internal links to further pages on the site for used jackets,
                    used hiking boots, and used flannel shirts, Google can crawl to those pages via the links provided.
                    Meanwhile, if Patagonia’s main used clothing page links
                    out to an article on TheGuardian.com about the negative impacts of fast fashion, Google can crawl from
                    Patagonia to the news article via the link, thereby discovering that content and potentially indexing
                    it.
                </p>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div id="services">
        <h2 class="text-center">Our Services</h2>
        <p class="text-center">We offer a wide range of services, including web design, SEO, content creation, and more.</p>
        <div class="container my-4">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/On-Page-SEO.jpg') }}" class="card-img-top" alt="On-Page SEO">
                        <div class="card-body">
                            <h5 class="card-title">On-Page SEO</h5>
                            <p class="card-text">Optimize individual web pages to rank higher and earn more relevant traffic
                                in search engines. This includes optimizing meta tags, content, and more.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/off-page-seo.jpg') }}" class="card-img-top" alt="Off-Page SEO">
                        <div class="card-body">
                            <h5 class="card-title">Off-Page SEO</h5>
                            <p class="card-text">Improve your site's reputation and authority by earning backlinks from
                                reputable sites. Social media marketing and guest blogging are key strategies.</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/img/Technical-SEO.jpg') }}" class="card-img-top" alt="Technical SEO">
                        <div class="card-body">
                            <h5 class="card-title">Technical SEO</h5>
                            <p class="card-text">Ensure that your website meets the technical requirements of modern search
                                engines. This includes improving site speed, mobile-friendliness, and site structure website
                                meets the technical requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <p class="text-center mb-5">Get in touch with us to learn more about how we can help your business succeed
                online.</p>
            <form>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            <label for="name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="Phone" required>
                            <label for="phone">Your Phone</label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="project" placeholder="Project">
                            <label for="project">Your Project</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px" required></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    {{-- Poster Start --}}
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/Animate.png') }}" alt="Illustration" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center text-white text-center">
                    <h1 class="display-4 font-weight-bold">Learn Something New Every Day.</h1>
                    <p class="lead">Complete information in Hindi about Digital India, Technology, Online Business,
                        Making Money, Life Success, Blogging, SEO, and the Internet.</p>
                    <p class="lead">Subscribe to our blog now to get notifications of our new posts.</p>
                    <form class="form-inline justify-content-center">
                        <div class="form-row">
                            <div class="col-auto">
                                <input type="text" class="form-control mb-2" placeholder="Your Name">
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control mb-2" placeholder="Your Email Address">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-dark mb-2">Subscribe Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Poster End --}}
@endsection
