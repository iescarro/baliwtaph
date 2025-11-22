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
          line-height: 1.6;
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

      .article-header {
          background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://via.placeholder.com/1600x900') center/cover;
          color: white;
          padding: 120px 0 80px;
          margin-bottom: 40px;
      }

      .category-tag {
          background-color: var(--secondary-color);
          color: white;
          padding: 5px 15px;
          border-radius: 3px;
          font-size: 0.9rem;
          font-weight: 600;
          text-transform: uppercase;
          display: inline-block;
          margin-bottom: 15px;
      }

      .article-meta {
          color: rgba(255, 255, 255, 0.8);
          font-size: 0.95rem;
      }

      .article-meta .author {
          font-weight: 600;
          color: white;
      }

      .article-content {
          font-size: 1.1rem;
          line-height: 1.8;
      }

      .article-content p {
          margin-bottom: 1.5rem;
      }

      .article-content h2,
      .article-content h3 {
          margin-top: 2.5rem;
          margin-bottom: 1rem;
          color: var(--primary-color);
      }

      .article-image {
          margin: 2rem 0;
          border-radius: 5px;
          overflow: hidden;
      }

      .article-image figcaption {
          font-size: 0.9rem;
          color: #6c757d;
          margin-top: 0.5rem;
          font-style: italic;
          text-align: center;
      }

      .social-share {
          border-top: 1px solid #e2e8f0;
          border-bottom: 1px solid #e2e8f0;
          padding: 1.5rem 0;
          margin: 2rem 0;
      }

      .share-btn {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          color: white;
          margin-right: 10px;
          transition: transform 0.3s;
      }

      .share-btn:hover {
          transform: translateY(-3px);
          color: white;
      }

      .facebook {
          background-color: #3b5998;
      }

      .twitter {
          background-color: #1da1f2;
      }

      .linkedin {
          background-color: #0077b5;
      }

      .whatsapp {
          background-color: #25d366;
      }

      .author-bio {
          background-color: white;
          border-radius: 8px;
          padding: 2rem;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          margin: 3rem 0;
      }

      .author-avatar {
          width: 80px;
          height: 80px;
          border-radius: 50%;
          object-fit: cover;
          margin-right: 1.5rem;
      }

      .related-article {
          transition: transform 0.3s;
          margin-bottom: 20px;
          border: none;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .related-article:hover {
          transform: translateY(-5px);
          box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      }

      .related-article img {
          height: 180px;
          object-fit: cover;
      }

      .comments-section {
          background-color: white;
          border-radius: 8px;
          padding: 2rem;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          margin: 3rem 0;
      }

      .comment {
          border-bottom: 1px solid #e2e8f0;
          padding: 1.5rem 0;
      }

      .comment:last-child {
          border-bottom: none;
      }

      .comment-avatar {
          width: 50px;
          height: 50px;
          border-radius: 50%;
          object-fit: cover;
          margin-right: 1rem;
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
          .article-header {
              padding: 80px 0 50px;
          }

          .article-header h1 {
              font-size: 1.8rem;
          }
      }
  </style>

  <body>
      <?php load_view('_nav'); ?>

      <!-- Article Header -->
      <div class="article-header">
          <div class="container">
              <span class="category-tag">Politics</span>
              <h1 class="display-4 fw-bold mt-2">
                  <?php echo $post->title; ?>
              </h1>
              <div class="article-meta">
                  <span class="author">By Maria Santos</span> |
                  <span><?php echo date('M d, Y', strtotime($post->created_at)); ?></span> |
                  <span>5 min read</span> |
                  <span><i class="far fa-eye me-1"></i> 12,548 views</span>
              </div>
          </div>
      </div>

      <!-- Article Content -->
      <div class="container">
          <div class="row">
              <!-- Main Article Content -->
              <div class="col-lg-8">
                  <article class="article-content">
                      <?php echo (new Parsedown())->text($post->content); ?>
                  </article>

                  <!-- Social Share -->
                  <div class="social-share">
                      <div class="d-flex justify-content-between align-items-center">
                          <div>
                              <span class="fw-bold me-3">Share this article:</span>
                              <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="share-btn twitter"><i class="fab fa-twitter"></i></a>
                              <a href="#" class="share-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                              <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                          </div>
                          <div>
                              <button class="btn btn-outline-primary"><i class="far fa-bookmark me-2"></i>Save for later</button>
                          </div>
                      </div>
                  </div>

                  <!-- Author Bio -->
                  <div class="author-bio">
                      <div class="d-flex">
                          <img src="https://via.placeholder.com/150" class="author-avatar" alt="Maria Santos">
                          <div>
                              <h4>Maria Santos</h4>
                              <p class="text-muted">Senior Political Correspondent</p>
                              <p>Maria has been covering Philippine politics for over 15 years. She has won several awards for her investigative reporting and analysis of government policies.</p>
                              <div class="mt-2">
                                  <a href="#" class="btn btn-sm btn-outline-primary me-2">View Profile</a>
                                  <a href="#" class="btn btn-sm btn-outline-secondary">More Articles</a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Comments Section -->
                  <div class="comments-section">
                      <h3 class="mb-4">Comments (24)</h3>

                      <!-- Comment Form -->
                      <div class="mb-4">
                          <form>
                              <div class="mb-3">
                                  <textarea class="form-control" rows="4" placeholder="Join the discussion..."></textarea>
                              </div>
                              <div class="d-flex justify-content-between align-items-center">
                                  <div>
                                      <input type="text" class="form-control form-control-sm d-inline-block w-auto me-2" placeholder="Your name">
                                      <input type="email" class="form-control form-control-sm d-inline-block w-auto" placeholder="Your email">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Post Comment</button>
                              </div>
                          </form>
                      </div>

                      <!-- Comments List -->
                      <div class="comment">
                          <div class="d-flex">
                              <img src="https://via.placeholder.com/50" class="comment-avatar" alt="Juan Dela Cruz">
                              <div>
                                  <div class="d-flex justify-content-between">
                                      <h5 class="mb-1">Juan Dela Cruz</h5>
                                      <small class="text-muted">2 hours ago</small>
                                  </div>
                                  <p class="mb-1">Finally! We've been waiting for infrastructure projects that will benefit the provinces. The Mindanao Railway is long overdue.</p>
                                  <div class="mt-2">
                                      <a href="#" class="btn btn-sm btn-outline-secondary">Reply</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-thumbs-up me-1"></i>15</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-thumbs-down me-1"></i>2</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="comment">
                          <div class="d-flex">
                              <img src="https://via.placeholder.com/50" class="comment-avatar" alt="Ana Reyes">
                              <div>
                                  <div class="d-flex justify-content-between">
                                      <h5 class="mb-1">Ana Reyes</h5>
                                      <small class="text-muted">5 hours ago</small>
                                  </div>
                                  <p class="mb-1">I hope they prioritize environmental impact assessments. Some of these projects could damage our natural resources if not planned carefully.</p>
                                  <div class="mt-2">
                                      <a href="#" class="btn btn-sm btn-outline-secondary">Reply</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-thumbs-up me-1"></i>8</a>
                                      <a href="#" class="btn btn-sm btn-outline-secondary"><i class="far fa-thumbs-down me-1"></i>0</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- View More Comments -->
                      <div class="text-center mt-4">
                          <button class="btn btn-outline-primary">Load More Comments</button>
                      </div>
                  </div>
              </div>

              <!-- Sidebar -->
              <div class="col-lg-4">
                  <!-- Related Articles -->
                  <div class="card mb-4">
                      <div class="card-header bg-primary text-white">
                          <h5 class="mb-0">Related Articles</h5>
                      </div>
                      <div class="card-body p-0">
                          <div class="list-group list-group-flush">
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">DPWH releases list of priority road projects for 2024</h6>
                                  </div>
                                  <small class="text-muted">October 10, 2023</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">Economic managers defend infrastructure spending amid budget concerns</h6>
                                  </div>
                                  <small class="text-muted">October 5, 2023</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">Senate approves transportation infrastructure fund</h6>
                                  </div>
                                  <small class="text-muted">September 28, 2023</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">Infrastructure spending boosts construction sector employment</h6>
                                  </div>
                                  <small class="text-muted">September 20, 2023</small>
                              </a>
                          </div>
                      </div>
                  </div>

                  <!-- Newsletter Subscription -->
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

                  <!-- Trending Now -->
                  <div class="card mb-4">
                      <div class="card-header bg-danger text-white">
                          <h5 class="mb-0"><i class="fas fa-fire me-2"></i>Trending Now</h5>
                      </div>
                      <div class="card-body">
                          <div class="list-group list-group-flush">
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">New tax reform proposal draws mixed reactions</h6>
                                  </div>
                                  <small class="text-muted">3,452 views</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">Traffic scheme changes in Metro Manila starting next week</h6>
                                  </div>
                                  <small class="text-muted">2,987 views</small>
                              </a>
                              <a href="#" class="list-group-item list-group-item-action">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-1">Popular celebrity couple announces separation</h6>
                                  </div>
                                  <small class="text-muted">2,541 views</small>
                              </a>
                          </div>
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