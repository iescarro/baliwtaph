<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaliwtaPH - Latest News in the Philippines</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1a365d;
            --secondary-color: #e53e3e;
            --accent-color: #2d3748;
            --light-bg: #f7fafc;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }

        .baliwta-logo {
            color: var(--primary-color);
        }

        .ph-logo {
            color: var(--secondary-color);
        }

        .breaking-news {
            background-color: var(--secondary-color);
            color: white;
            padding: 8px 0;
            font-weight: 600;
        }

        .breaking-news a {
            color: white;
            text-decoration: none;
        }

        .breaking-news a:hover {
            text-decoration: underline;
        }

        .main-headline {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://via.placeholder.com/1200x600') center/cover;
            color: white;
            padding: 100px 0;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .category-tag {
            background-color: var(--secondary-color);
            color: white;
            padding: 3px 10px;
            border-radius: 3px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .news-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .news-card img {
            height: 200px;
            object-fit: cover;
        }

        .section-title {
            border-left: 5px solid var(--secondary-color);
            padding-left: 15px;
            margin: 30px 0 20px;
            font-weight: 700;
        }

        .trending-list {
            list-style-type: none;
            padding-left: 0;
        }

        .trending-list li {
            padding: 10px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .trending-list li:last-child {
            border-bottom: none;
        }

        .trending-number {
            background-color: var(--primary-color);
            color: white;
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 10px;
            font-size: 0.8rem;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
        }

        .footer-links a {
            color: #cbd5e0;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }

        .footer-links a:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .main-headline {
                padding: 60px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Breaking News Bar -->
    <div class="breaking-news">
        <div class="container">
            <div class="row">
                <div class="col-md-1 text-center">
                    <span class="badge bg-light text-dark">BREAKING</span>
                </div>
                <div class="col-md-11">
                    <marquee behavior="scroll" direction="left">
                        <a href="#">Major earthquake hits Mindanao, officials assessing damage</a> |
                        <a href="#">Senate passes new education reform bill</a> |
                        <a href="#">Philippine economy grows by 7.1% in Q3</a>
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="baliwta-logo">Baliwta</span><span class="ph-logo">PH</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lifestyle</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search news...">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4">
        <!-- Main Headline -->
        <div class="main-headline">
            <div class="container">
                <span class="category-tag">Politics</span>
                <h1 class="display-4 fw-bold mt-2">President announces new infrastructure projects nationwide</h1>
                <p class="lead">The administration unveiled a 5-year plan focusing on transportation, digital infrastructure, and sustainable energy.</p>
                <p class="mb-0">By Maria Santos | October 15, 2023</p>
            </div>
        </div>

        <!-- News Sections -->
        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <!-- Top Stories -->
                <h3 class="section-title">Top Stories</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card news-card">
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="News image">
                            <div class="card-body">
                                <span class="category-tag">Business</span>
                                <h5 class="card-title mt-2">Peso strengthens against US dollar</h5>
                                <p class="card-text">The Philippine peso reached its highest level in three months amid positive economic indicators.</p>
                                <p class="text-muted small">By Juan Dela Cruz | 2 hours ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card news-card">
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="News image">
                            <div class="card-body">
                                <span class="category-tag">Sports</span>
                                <h5 class="card-title mt-2">Filipino athlete wins gold in Asian Games</h5>
                                <p class="card-text">Weightlifter sets new record in the women's 55kg category, bringing pride to the nation.</p>
                                <p class="text-muted small">By Ana Reyes | 4 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Latest News -->
                <h3 class="section-title">Latest News</h3>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card news-card h-100">
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="News image">
                            <div class="card-body">
                                <span class="category-tag">Technology</span>
                                <h5 class="card-title mt-2">New Filipino startup raises $10M funding</h5>
                                <p class="card-text">The edtech platform aims to revolutionize online learning in the Philippines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card news-card h-100">
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="News image">
                            <div class="card-body">
                                <span class="category-tag">Entertainment</span>
                                <h5 class="card-title mt-2">Local film wins international award</h5>
                                <p class="card-text">Independent movie receives recognition at prestigious film festival in Europe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card news-card h-100">
                            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="News image">
                            <div class="card-body">
                                <span class="category-tag">Lifestyle</span>
                                <h5 class="card-title mt-2">New food trend takes Manila by storm</h5>
                                <p class="card-text">Unique fusion cuisine combining traditional Filipino flavors with modern techniques.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More articles -->
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-3 news-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://via.placeholder.com/400x250" class="img-fluid rounded-start h-100" alt="News image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="category-tag">Health</span>
                                        <h5 class="card-title">DOH reports decline in COVID-19 cases</h5>
                                        <p class="card-text">Health officials attribute the decrease to successful vaccination campaigns and public compliance with health protocols.</p>
                                        <p class="card-text"><small class="text-muted">By Dr. Roberto Cruz | 6 hours ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <!-- Trending Now -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-fire me-2"></i>Trending Now</h5>
                    </div>
                    <div class="card-body">
                        <ul class="trending-list">
                            <li>
                                <span class="trending-number">1</span>
                                <a href="#" class="text-dark fw-bold">New tax reform proposal draws mixed reactions</a>
                            </li>
                            <li>
                                <span class="trending-number">2</span>
                                <a href="#" class="text-dark fw-bold">Traffic scheme changes in Metro Manila starting next week</a>
                            </li>
                            <li>
                                <span class="trending-number">3</span>
                                <a href="#" class="text-dark fw-bold">Popular celebrity couple announces separation</a>
                            </li>
                            <li>
                                <span class="trending-number">4</span>
                                <a href="#" class="text-dark fw-bold">New study reveals benefits of traditional Filipino diet</a>
                            </li>
                            <li>
                                <span class="trending-number">5</span>
                                <a href="#" class="text-dark fw-bold">Tourism department launches new campaign to attract visitors</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Weather Widget -->
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><i class="fas fa-cloud-sun me-2"></i>Weather</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-4">
                                <h6>Manila</h6>
                                <i class="fas fa-cloud-rain fa-2x text-primary"></i>
                                <p class="mb-0">28°C</p>
                            </div>
                            <div class="col-4">
                                <h6>Cebu</h6>
                                <i class="fas fa-sun fa-2x text-warning"></i>
                                <p class="mb-0">31°C</p>
                            </div>
                            <div class="col-4">
                                <h6>Davao</h6>
                                <i class="fas fa-cloud fa-2x text-secondary"></i>
                                <p class="mb-0">29°C</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Subscribe Newsletter -->
                <div class="card mb-4">
                    <div class="card-body text-center bg-light">
                        <h5>Stay Updated</h5>
                        <p>Get the latest news delivered to your inbox daily</p>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Your email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                        <small class="text-muted">We respect your privacy. Unsubscribe at any time.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4><span class="baliwta-logo">Baliwta</span><span class="ph-logo">PH</span></h4>
                    <p>Your trusted source for the latest news and updates in the Philippines and around the world.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Categories</h5>
                    <div class="footer-links">
                        <a href="#">Politics</a>
                        <a href="#">Business</a>
                        <a href="#">Entertainment</a>
                        <a href="#">Sports</a>
                        <a href="#">Technology</a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Company</h5>
                    <div class="footer-links">
                        <a href="#">About Us</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">Advertise</a>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> 123 News Street, Manila, Philippines</p>
                    <p><i class="fas fa-phone me-2"></i> +63 2 1234 5678</p>
                    <p><i class="fas fa-envelope me-2"></i> info@baliwta.ph</p>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">© 2023 BaliwtaPH. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>