<style>
    :root {
        --primary-color: #1a365d;
        --secondary-color: #e53e3e;
        --accent-color: #2d3748;
        --light-bg: #f7fafc;
        --business-color: #2b6cb0;
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

    .category-header {
        background: linear-gradient(135deg, var(--business-color) 0%, #2c5282 100%);
        color: white;
        padding: 80px 0 40px;
        margin-bottom: 30px;
    }

    .category-icon {
        font-size: 3rem;
        margin-bottom: 20px;
        background: rgba(255, 255, 255, 0.2);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .category-tag {
        background-color: var(--secondary-color);
        color: white;
        padding: 3px 10px;
        border-radius: 3px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 10px;
    }

    .business-tag {
        background-color: var(--business-color);
    }

    .news-card {
        transition: transform 0.3s;
        margin-bottom: 20px;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        height: 100%;
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
        border-left: 5px solid var(--business-color);
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
        background-color: var(--business-color);
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

    .category-stats {
        background-color: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--business-color);
    }

    .stat-label {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .subcategory-nav {
        background-color: white;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .subcategory-link {
        display: block;
        padding: 8px 15px;
        color: #4a5568;
        text-decoration: none;
        border-radius: 5px;
        margin-bottom: 5px;
        transition: all 0.3s;
    }

    .subcategory-link:hover,
    .subcategory-link.active {
        background-color: var(--business-color);
        color: white;
    }

    .pagination .page-link {
        color: var(--business-color);
    }

    .pagination .page-item.active .page-link {
        background-color: var(--business-color);
        border-color: var(--business-color);
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
        .category-header {
            padding: 60px 0 30px;
        }

        .category-header h1 {
            font-size: 1.8rem;
        }
    }
</style>

<?php load_view('_nav'); ?>

<!-- Category Header -->
<div class="category-header">
    <div class="container text-center">
        <div class="category-icon">
            <i class="fas fa-chart-line"></i>
        </div>
        <h1 class="display-4 fw-bold">
            <?php echo $category->name; ?>
        </h1>
        <p class="lead mb-0">
            <?php echo $category->description; ?>
        </p>
    </div>
</div>

<!-- Main Content -->
<div class="container my-4">
    <div class="row">
        <!-- Main Content Column -->
        <div class="col-lg-8">
            <!-- Category Stats -->
            <div class="category-stats">
                <div class="row text-center">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number">1,248</div>
                        <div class="stat-label">Articles Published</div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number">4.2M</div>
                        <div class="stat-label">Monthly Readers</div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Business Reporters</div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Market Coverage</div>
                    </div>
                </div>
            </div>

            <!-- Subcategory Navigation -->
            <div class="subcategory-nav">
                <div class="d-flex flex-wrap">
                    <a href="#" class="subcategory-link active">All Business</a>
                    <a href="#" class="subcategory-link">Economy</a>
                    <a href="#" class="subcategory-link">Markets</a>
                    <a href="#" class="subcategory-link">Banking & Finance</a>
                    <a href="#" class="subcategory-link">Corporate News</a>
                    <a href="#" class="subcategory-link">Startups</a>
                    <a href="#" class="subcategory-link">Real Estate</a>
                    <a href="#" class="subcategory-link">Trade & Industry</a>
                </div>
            </div>

            <!-- Featured Article -->
            <div class="card news-card mb-4">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://via.placeholder.com/600x400" class="img-fluid rounded-start h-100" alt="Featured business news">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <span class="category-tag business-tag">Markets</span>
                            <h3 class="card-title">Peso strengthens to 3-month high against US dollar</h3>
                            <p class="card-text">The Philippine peso reached its highest level in three months amid positive economic indicators and strong foreign investment inflows. Analysts predict continued strength in the coming weeks.</p>
                            <p class="card-text"><small class="text-muted">By Juan Dela Cruz | October 16, 2023 | 5 min read</small></p>
                            <a href="article.html" class="btn btn-primary">Read Full Story</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Business News -->
            <h3 class="section-title">Latest Business News</h3>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card news-card h-100">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Business news">
                        <div class="card-body">
                            <span class="category-tag business-tag">Economy</span>
                            <h5 class="card-title mt-2">Q3 GDP growth exceeds expectations at 7.2%</h5>
                            <p class="card-text">The Philippine economy expanded faster than anticipated in the third quarter, driven by robust consumer spending and increased government infrastructure outlays.</p>
                            <p class="text-muted small">By Maria Santos | 2 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card news-card h-100">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Business news">
                        <div class="card-body">
                            <span class="category-tag business-tag">Corporate News</span>
                            <h5 class="card-title mt-2">San Miguel announces $10B expansion plan</h5>
                            <p class="card-text">The conglomerate revealed ambitious expansion plans focusing on renewable energy, infrastructure, and digital businesses over the next five years.</p>
                            <p class="text-muted small">By Roberto Cruz | 4 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More Business Articles -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Business news">
                        <div class="card-body">
                            <span class="category-tag business-tag">Banking</span>
                            <h5 class="card-title mt-2">BSP keeps key interest rates unchanged</h5>
                            <p class="card-text">The central bank maintained its benchmark interest rate, citing manageable inflation and stable economic growth prospects.</p>
                            <p class="text-muted small">By Ana Reyes | 6 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Business news">
                        <div class="card-body">
                            <span class="category-tag business-tag">Startups</span>
                            <h5 class="card-title mt-2">Filipino fintech startup raises $20M Series B</h5>
                            <p class="card-text">The digital payments platform secured funding from international investors to expand its services across Southeast Asia.</p>
                            <p class="text-muted small">By Michael Tan | 8 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card news-card h-100">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Business news">
                        <div class="card-body">
                            <span class="category-tag business-tag">Real Estate</span>
                            <h5 class="card-title mt-2">Office space demand rebounds in Q3</h5>
                            <p class="card-text">Metro Manila office leasing activity increased by 15% as more companies implement return-to-office policies.</p>
                            <p class="text-muted small">By Susan Lim | 10 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Articles List -->
            <div class="list-group mb-4">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Stock market index reaches new all-time high</h5>
                        <small class="text-muted">12 hours ago</small>
                    </div>
                    <p class="mb-1">The PSEi surged past the 7,000-point mark for the first time, driven by strong corporate earnings and positive economic data.</p>
                    <small class="text-muted">By Carlos Gomez</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Export growth accelerates in September</h5>
                        <small class="text-muted">14 hours ago</small>
                    </div>
                    <p class="mb-1">Philippine exports rose by 12.5% year-on-year, with electronics and agricultural products leading the expansion.</p>
                    <small class="text-muted">By Elena Torres</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Minimum wage increase proposed in NCR</h5>
                        <small class="text-muted">16 hours ago</small>
                    </div>
                    <p class="mb-1">Labor groups are pushing for a PHP 100 daily wage hike, while employers cite concerns about business viability.</p>
                    <small class="text-muted">By Ricardo Santos</small>
                </a>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
            <!-- Trending Business News -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-chart-line me-2"></i>Trending in Business</h5>
                </div>
                <div class="card-body">
                    <ul class="trending-list">
                        <li>
                            <span class="trending-number">1</span>
                            <a href="#" class="text-dark fw-bold">Peso appreciation impacts OFW remittances</a>
                        </li>
                        <li>
                            <span class="trending-number">2</span>
                            <a href="#" class="text-dark fw-bold">New tax incentives for renewable energy projects</a>
                        </li>
                        <li>
                            <span class="trending-number">3</span>
                            <a href="#" class="text-dark fw-bold">BPO industry faces talent shortage</a>
                        </li>
                        <li>
                            <span class="trending-number">4</span>
                            <a href="#" class="text-dark fw-bold">Tourism arrivals exceed pre-pandemic levels</a>
                        </li>
                        <li>
                            <span class="trending-number">5</span>
                            <a href="#" class="text-dark fw-bold">Digital banking licenses approved by BSP</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Market Data Widget -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="fas fa-chart-bar me-2"></i>Market Snapshot</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>PSEi</span>
                            <span class="fw-bold text-success">7,025.45 <small>+1.2%</small></span>
                        </div>
                        <div class="progress mt-1" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>USD/PHP</span>
                            <span class="fw-bold text-danger">55.32 <small>-0.8%</small></span>
                        </div>
                        <div class="progress mt-1" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Oil Price</span>
                            <span class="fw-bold text-success">$84.50 <small>+2.1%</small></span>
                        </div>
                        <div class="progress mt-1" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Full Market Data</a>
                    </div>
                </div>
            </div>

            <!-- Business Newsletter -->
            <div class="card mb-4">
                <div class="card-body text-center bg-light">
                    <h5>Business Digest</h5>
                    <p>Get daily market updates and business news summary</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    <small class="text-muted">Daily digest at 6 AM. Unsubscribe anytime.</small>
                </div>
            </div>

            <!-- Business Events -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0"><i class="far fa-calendar-alt me-2"></i>Upcoming Business Events</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h6 class="mb-1">Economic Forum 2023</h6>
                        <p class="mb-1 small">October 25, 2023 | Makati City</p>
                        <a href="#" class="small">Register Now</a>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-1">Startup Pitch Competition</h6>
                        <p class="mb-1 small">November 5, 2023 | BGC, Taguig</p>
                        <a href="#" class="small">Learn More</a>
                    </div>
                    <div class="mb-3">
                        <h6 class="mb-1">Digital Banking Summit</h6>
                        <p class="mb-1 small">November 15, 2023 | Manila Hotel</p>
                        <a href="#" class="small">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>