<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1, initial-scale=1.0" />
    <title>Blog</title>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="assets/style.css" />
    <style>
      .blog-hero-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 10px 24px 10px 10px;
        border: 1.5px solid rgba(255, 255, 255, 0.55);
        border-radius: 50px;
        color: #ffffff;
        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        transition:
          background 0.3s ease,
          border-color 0.3s ease;
      }
      .blog-hero-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: #ffffff;
      }
      .slide-overlay {
        position: absolute;
        inset: 0;
        z-index: 2;
      }
      .slide-content h1 {
        font-weight: 100;
        line-height: 120%;
      }
      .subtitle {
        font-size: 20px;
        line-height: 1.5;
        color: #ffffff;
        max-width: 1500px;
        margin-bottom: 2rem;
        opacity: 0.9;
      }

      .breadcrumb {
        font-size: 18px;
        letter-spacing: 0.13em;
        text-transform: uppercase;
        color: #ffffff;
        margin-bottom: 0.85rem;
        font-weight: 900;
      }
      .blog-hero-btn-icon {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: linear-gradient(135deg, #13c5b8, #2a44b0);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: opacity 0.3s ease;
      }
      .blog-hero-btn:hover {
        background: rgba(255, 255, 255, 0.1);
        border: 1.5px solid #13c5b8;
      }

      .blog-hero-btn:hover .blog-hero-btn-icon {
        opacity: 0.88;
      }

      .projects-section {
        position: relative;
        padding: clamp(60px, 8vw, 90px) 0;
        background: linear-gradient(
          90deg,
          #06245a 0%,
          #04163f 25%,
          #020b2d 55%,
          #010824 100%
        );
        overflow: hidden;
      }

      .projects-section::before {
        content: "";
        position: absolute;
        inset: 0;

        background-image:
          linear-gradient(rgba(255, 255, 255, 0.12) 1px, transparent 2px),
          linear-gradient(90deg, rgba(255, 255, 255, 0.12) 1px, transparent 1px);

        background-size: 120px 120px;
        opacity: 0.9;
        z-index: 0;
        pointer-events: none;
      }

      .projects-section::after {
        content: "";
        position: absolute;
        inset: 0;

        background: radial-gradient(
          ellipse 900px 600px at 0% 40%,
          rgba(0, 120, 255, 0.35),
          transparent 65%
        );

        z-index: 0;
        pointer-events: none;
      }
      .projects-overlay {
        position: absolute;
        inset: 0;
        z-index: 1;
      }

      .projects-container {
        position: relative;
        z-index: 2;
        max-width: 1400px;
        margin: auto;
        padding: 0 20px;
      }

      /* Header */
      .projects-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 50px;
        gap: 40px;
      }

      .small-title {
        font-size: 16px;
        color: #ffffff;
      }

      .small-subtitle {
        font-size: 16px;
      }

      .projects-right {
        max-width: 800px;
        font-size: 32px;
        line-height: 1.4;
      }
      .projects-right span {
        color: #849cac;
      }

      /* Card */
      .project-card {
        display: flex;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border-radius: 16px;
        overflow: hidden;
      }

      .project-image {
        flex: 1;
      }

      .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .project-content {
        flex: 1.2;
        padding: 32px;
        background: #182847;
      }

      .project-meta {
        font-size: 14px;
        opacity: 0.7;
      }

      .project-content h2 {
        margin: 14px 0;
        font-size: 24px;
      }

      .project-content p {
        font-size: 16px;
        line-height: 1.3;
        opacity: 0.85;
        color: #849cac;
        margin-bottom: 80px;
        max-width: 800px;
      }

      .read-blog {
        margin-top: 18px;
        display: inline-block;
        color: #19e0c5;
        text-decoration: none;
        font-weight: 500;
      }

      .blog-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        margin: 60px 0 40px;
      }

      .blog-meta {
        font-size: 14px;
        opacity: 0.8;
        display: block;
        margin-bottom: 15px;
      }

      .blog-filters .filter {
        position: relative;
        padding: 8px 25px;
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.12);
        border: none;
        color: #fff;
        cursor: pointer;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
      }

      .blog-filters .filter.active,
      .blog-filters .filter:hover {
        background: #fff;
        color: #182847;
      }

      .blog-filters .close-icon {
        display: none;
        width: 20px;
        height: 20px;
        font-size: 25px;
        line-height: 20px;
        text-align: center;
        cursor: pointer;
      }

      .blog-filters .filter.active .close-icon {
        display: inline-block;
      }

      .blog-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
      }

      .blog-card {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        border-radius: 16px;
        overflow: hidden;
      }

      .blog-card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
      }

      .blog-card-content {
        padding: 20px;
      }

      .view-more {
        margin-top: 60px;
        display: flex;
        justify-content: center;
      }
      /* CTA Wrapper */
      .cta-wrapper {
        padding: 80px 20px;
        background: #ffffff;
        display: flex;
        justify-content: center;
      }

      /* CTA Card */
      .cta-card {
        width: 100%;
        max-width: 1350px;
        border-radius: 20px;
        padding: 65px;
        background: url("images/CTA-bg-img.jpg");
        background-position: center top;
        background-size: contain;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
      }

      /* Subtle wave feel */
      .cta-card::after {
        content: "";
        position: absolute;
        right: -120px;
        top: -100px;
        width: 500px;
        height: 500px;
        background: radial-gradient(
          circle,
          rgba(255, 255, 255, 0.15),
          transparent 70%
        );
        border-radius: 50%;
      }

      /* CTA Content */
      .cta-content {
        position: relative;
        z-index: 2;
        max-width: 520px;
        color: #ffffff;
      }

      /* Label */
      .cta-label {
        font-size: 18px;
        opacity: 0.8;
        display: block;
        margin-bottom: 12px;
      }

      /* Title */
      .cta-title {
        font-size: 32px;
        font-weight: 600;
        line-height: 1.25;
        margin-bottom: 16px;
      }

      /* Description */
      .cta-desc {
        font-size: 16px;
        opacity: 0.85;
        margin-bottom: 28px;
      }

      /* CTA Button */
      .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 12px 26px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, 0.5);
        color: #ffffff;
        text-decoration: none;
        font-size: 15px;
        backdrop-filter: blur(6px);
        transition: all 0.3s ease;
      }

      .cta-btn:hover {
        background: #ffffff;
        color: #0b1d4d;
      }

      /* Arrow Icon */
      .cta-btn-icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #00e1ff;
        color: #0b1d4d;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
      }

      @media (max-width: 1024px) {
        .projects-container {
          max-width: 950px;
          padding: 0 20px;
        }
        .blog-grid {
          grid-template-columns: repeat(2, 1fr);
        }

        .blog-filters {
          gap: 12px;
        }

        .blog-filters .filter {
          font-size: 13px;
          padding: 7px 18px;
        }
        .cta-card {
          border-radius: 20px;
          background-size: cover;
          padding: 50px;
        }
      }

      /* Mobile */
      @media (max-width: 768px) {
        .subtitle {
          font-size: 18px;
        }
        .slide {
          padding-top: 100px;
        }
        .cta-card {
          padding: 40px 24px;
        }
        .cta-title {
          font-size: 26px;
        }
        .cta-card {
          background-size: cover;
          background-position: center;
          min-height: 200px;
          padding: 40px 24px;
        }

        .cta-content {
          max-width: 100%;
        }
        .projects-container {
          max-width: 700px;
          padding: 0 20px;
        }
        .projects-right {
          max-width: 800px;
          font-size: 18px;
          line-height: 1.4;
        }
        .projects-section::before {
          opacity: 0.3;
        }

        .blog-filters {
          gap: 8px;
        }

        .blog-filters .filter {
          font-size: 13px;
          padding: 7px 16px;
        }
      }

      @media (max-width: 600px) {
        .blog-grid {
          grid-template-columns: 1fr;
        }
      }

      /* Responsive */
      @media (max-width: 900px) {
        .project-card {
          flex-direction: column;
        }
      }

      @media (max-width: 480px) {
        .subtitle {
          font-size: 16px;
        }
        .blog-hero-btn {
          font-size: 13px;
          padding: 9px 20px 9px 9px;
        }
       .slide-content h1 {
          max-width: 300px;
        }
        .blog-hero-btn-icon {
          width: 30px;
          height: 30px;
        }
        .projects-right {
          max-width: 800px;
          font-size: 16px;
          line-height: 1.4;
        }
      }
    </style>
  </head>
  <body>
    <div class="slider" id="slider">
      <div class="slide active">
        <img
          class="slide-bg"
          src="images/bloglist-bg-img.png"
          alt=""
          aria-hidden="true"
        />
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <p class="breadcrumb">RESOURCES/BLOGS</p>
          <div class="hero-rule"></div>
          <h1>Secure Every Layer of<br />Your Digital Enterprise</h1>
          <p class="subtitle">
            End-to-end cybersecurity services to detect, prevent, and respond to
            threats across network, cloud, endpoint, and identity layers. Backed
            by global delivery and 2,500+ experts.
          </p>
          <!-- Button -->
          <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="blog-hero-btn">
            <span class="blog-hero-btn-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#ffffff"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </span>
            Connect With Us
          </a>
        </div>
      </div>
    </div>

    <!-- Projects / Blog Section -->
    <section class="projects-section">
      <div class="projects-overlay"></div>

      <div class="projects-container">
        <!-- Heading Row -->
        <div class="projects-header">
          <div class="projects-left">
            <p class="small-title">Recent Projects</p>
            <p class="small-subtitle">Successfully Delivered</p>
          </div>

          <div class="projects-right">
            Delivering successful projects worldwide, we build
            <span
              >lasting partnerships and drive measurable growth across
              industries.</span
            >
          </div>
        </div>

        <!-- Blog Card -->
        <div class="project-card">
          <div class="project-image">
            <img src="images/agricultural.png" alt="Blog Post Image" />
          </div>

          <div class="project-content">
            <span class="project-meta">Dec 16, 2025, Cybersecurity</span>
            <h2>Preventing a Ransomware Attack for a Manufacturing Company</h2>
            <p>
              24/7 threat monitor manufacturing company faced a potential
              ransomware threat that could have disrupted production and
              compromised critical systems. By implementing proactive security
              measures—including real-time threat monitoring, endpoint
              protection, and strict access controls—the risk was quickly
              identified and contained. This approach ensured business
              continuity, safeguarded sensitive data, and strengthened the
              organization’s overall cybersecurity posture against future
              attacks and rapid response helped prevent ransomware, avoiding
              downtime and protecting critical business data.
            </p>
            <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog"> Read Blog → </a>
          </div>
        </div>

        <!-- Blog Grid (inside Projects Section) -->

        <div class="blog-filters">
          <button class="filter" data-filter="it-service">
            IT Service <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="cybersecurity">
            Cybersecurity <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="managed-services">
            Managed Services <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="digital-workplace">
            Digital Workplace <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="field-service">
            Field Service <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="compliance">
            Compliance <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="penetration-testing">
            Penetration Testing <span class="close-icon">×</span>
          </button>
          <button class="filter" data-filter="technology">
            Technology <span class="close-icon">×</span>
          </button>
        </div>

        <div class="blog-grid">
          <article class="blog-card" data-category="it-service">
            <img src="images/blogimg1.jpg" alt="blogimg1" />
            <div class="blog-card-content">
              <span class="blog-meta">Dec 16, 2025, IT Service</span>
              <h3>
                IT Budget Planning 2026: A Simplified Guide for Tech Leaders
              </h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>

          <article class="blog-card" data-category="cybersecurity">
            <img src="images/cyber.png" alt="cybersecurity" />
            <div class="blog-card-content">
              <span class="blog-meta">Nov 26, 2025 · Cybersecurity</span>
              <h3>
                Cybersecurity Forecast 2026: New Threats and How to Stay Ahead
              </h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>

          <article class="blog-card" data-category="cybersecurity">
            <img src="images/blog_img2.jpg" alt="blog_img2" />
            <div class="blog-card-content">
              <span class="blog-meta">Nov 19, 2025 · Cybersecurity</span>
              <h3>IT Security Playbook Every SMB Should Follow</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
          <article class="blog-card" data-category="managed-services">
            <img src="images/blog_img3.jpg" alt="blog_img3" />
            <div class="blog-card-content">
              <span class="blog-meta">Oct 17, 2025, Managed services</span>
              <h3>Why Businesses Are Outsourcing IT Service Providers?</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
          <article class="blog-card" data-category="digital-workplace">
            <img src="images/blog_img4.jpg" alt="blog_img4" />
            <div class="blog-card-content">
              <span class="blog-meta">Sep 24, 2025, Digital Workplace</span>
              <h3>
                5 Best Cost Optimization Strategies for Workplace Management
              </h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
          <article class="blog-card" data-category="penetration-testing">
            <img src="images/blog_img5.jpg" alt="blog_img5" />
            <div class="blog-card-content">
              <span class="blog-meta">Aug 29, 2025, Penetration Testing</span>
              <h3>
                7 Critical Reasons Your Business Needs Penetration Testing
                service
              </h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
          <article class="blog-card" data-category="compliance">
            <img src="images/blogimg1.jpg" alt="blog_img1" />
            <div class="blog-card-content">
              <span class="blog-meta">Aug 28, 2025, Compliance</span>
              <h3>
                Compliance Audits Simplified: A 2025 Guide to Penetration
                Testing Standards
              </h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
          <article class="blog-card" data-category="field-service">
            <img src="images/blog_img6.jpg" alt="blog_img6" />
            <div class="blog-card-content">
              <span class="blog-meta">Jul 18, 2025, Field Service</span>
              <h3>
                Solve Staffing Challenges in Field Service: A Beginner’s Guide
              </h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
          <article class="blog-card" data-category="compliance">
            <img src="images/blog_img7.jpg" alt="blog_img7" />
            <div class="blog-card-content">
              <span class="blog-meta">Aug 01, 2025, Compliance</span>
              <h3>GDPR Compliance Checklist Simplified for Every Business</h3>
              <a href="https://teal-mule-553916.hostingersite.com/Blogdetails.php" class="read-blog">Read Blog →</a>
            </div>
          </article>
        </div>

        <div class="view-more">
          <a href="#" class="blog-hero-btn">
            <span class="blog-hero-btn-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#ffffff"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </span>
            View More Blogs
          </a>
        </div>
      </div>
    </section>
    <section class="cta-wrapper">
      <div class="cta-card">
        <div class="cta-content">
          <span class="cta-label">Get In Touch</span>
          <h2 class="cta-title">
            Start with a Clear Security<br />
            Assessment
          </h2>
          <p class="cta-desc">
            Let's discuss how Teceze can deliver for your organization.
          </p>

          <a href="https://teal-mule-553916.hostingersite.com/Contactus.php" class="blog-hero-btn">
            <span class="blog-hero-btn-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="14"
                height="14"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#ffffff"
                stroke-width="2.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
                <polyline points="12 5 19 12 12 19" />
              </svg>
            </span>
            Talk to our Team
          </a>
        </div>
      </div>
    </section>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const filterButtons = document.querySelectorAll(
          ".blog-filters .filter",
        );
        const blogCards = document.querySelectorAll(".blog-card");

        let activeFilters = [];

        filterButtons.forEach((button) => {
          const filterValue = button.dataset.filter;

          // 👉 Button click → ADD only (no toggle remove)
          button.addEventListener("click", () => {
            if (!activeFilters.includes(filterValue)) {
              activeFilters.push(filterValue);
              button.classList.add("active");
            }

            applyFilters();
          });

          // 👉 Close icon → REMOVE only
          const closeIcon = button.querySelector(".close-icon");

          if (closeIcon) {
            closeIcon.addEventListener("click", (e) => {
              e.stopPropagation();

              button.classList.remove("active");
              activeFilters = activeFilters.filter((f) => f !== filterValue);

              applyFilters();
            });
          }
        });

        function applyFilters() {
          if (activeFilters.length === 0) {
            blogCards.forEach((card) => {
              card.style.display = "block";
            });
            return;
          }

          blogCards.forEach((card) => {
            const category = card.dataset.category;

            if (activeFilters.includes(category)) {
              card.style.display = "block";
            } else {
              card.style.display = "none";
            }
          });
        }
      });
    </script>
  </body>
  <?php include 'footer.php'; ?>
</html>
