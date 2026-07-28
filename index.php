<?php
include'header.php';
?>
<section id="pricing" class=" bg-light">
    <div class="container py-4">
        <p class="text-center text-primary fw-samibold small text-uppercase mb-1">Simple. Transparent. Affordable.</p>
        <h2 class="text-center fw-bold mb-5">Choose Your Hosting Plan</h2>
        <div class="row g-4 justify-content-center">
            <!-- ---------- Plan 1: Starter ---------- -->
             <div class="col-md-4">
                <div class="card pricing-card h-100 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold">Starter</h5>
                        <p class="text-muted small">Perfect for beginners</p>
                        <h2 class="fw-bold text-primary mb-3">₹99<span class="fs-6 text-muted fw-normal">/mo</span></h2>
                            <ul class="list-unstyled small mb-4">
              <li class="mb-2"><i class="bi bi-globe text-primary me-2"></i>1 Website</li>
              <li class="mb-2"><i class="bi bi-hdd text-primary me-2"></i>10 GB SSD Storage</li>
              <li class="mb-2"><i class="bi bi-shield-lock text-primary me-2"></i>Free SSL Certificate</li>
              <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i>Free Email</li>
              <li class="mb-2"><i class="bi bi-clock-history text-primary me-2"></i>Daily Backup</li>
            </ul>
            <a href="#" class="btn btn-outline-primary w-100 rounded-pill">Buy Now</a>
                    </div>
                </div>
             </div>


              <!-- ---------- Plan 2: Business (Most Popular) ---------- -->
      <div class="col-md-4">
        <!-- pricing-popular = hamari khud ki class jo isay highlight (bold border) deti hai -->
        <div class="card pricing-card pricing-popular h-100 shadow">
          <!-- Ye chhota badge "Most Popular" upar float ho k dikhta hai (CSS men position:absolute hai) -->
          <div class="badge-popular">Most Popular</div>
          <div class="card-body p-4">
            <h5 class="fw-bold">Business</h5>
            <p class="text-muted small">Best for growing businesses</p>
            <h2 class="fw-bold text-primary mb-3">₹299<span class="fs-6 text-muted fw-normal">/mo</span></h2>
            <ul class="list-unstyled small mb-4">
              <li class="mb-2"><i class="bi bi-globe text-primary me-2"></i>Unlimited Websites</li>
              <li class="mb-2"><i class="bi bi-hdd text-primary me-2"></i>50 GB NVMe SSD</li>
              <li class="mb-2"><i class="bi bi-shield-lock text-primary me-2"></i>Free SSL Certificate</li>
              <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i>Unlimited Email</li>
              <li class="mb-2"><i class="bi bi-clock-history text-primary me-2"></i>Daily Backup</li>
            </ul>
            <a href="#" class="btn btn-primary w-100 rounded-pill">Buy Now</a>
          </div>
        </div>
      </div>

       <!-- ---------- Plan 3: Enterprise ---------- -->
      <div class="col-md-4">
        <div class="card pricing-card h-100 shadow-sm">
          <div class="card-body p-4">
            <h5 class="fw-bold">Enterprise</h5>
            <p class="text-muted small">For high traffic websites</p>
            <h2 class="fw-bold text-primary mb-3">₹599<span class="fs-6 text-muted fw-normal">/mo</span></h2>
            <ul class="list-unstyled small mb-4">
              <li class="mb-2"><i class="bi bi-globe text-primary me-2"></i>Unlimited Websites</li>
              <li class="mb-2"><i class="bi bi-hdd text-primary me-2"></i>100 GB NVMe SSD</li>
              <li class="mb-2"><i class="bi bi-shield-lock text-primary me-2"></i>Free SSL Certificate</li>
              <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i>Unlimited Email</li>
              <li class="mb-2"><i class="bi bi-clock-history text-primary me-2"></i>Daily Backup</li>
            </ul>
            <a href="#" class="btn btn-outline-primary w-100 rounded-pill">Buy Now</a>
          </div>
        </div>
      </div>


        </div>
    </div>
</section>

<!-- ============================================================
     WHY CHOOSE US Section Start (4 chhote feature boxes)
     ============================================================
-->

<section class="">
  <div class="container py-4">
    <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>

    <div class="row g-4">
      <div class="col-md-3 col-6">
        <div class="feature-box text-center p-4 h-100">
          <!-- bg-primary-subtle = halka blue background (Bootstrap 5.3 ka naya utility) -->
          <div class="feature-icon bg-primary-subtle text-primary mx-auto mb-3"><i class="bi bi-lightning-charge-fill"></i></div>
          <h6 class="fw-bold">NVMe SSD Servers</h6>
          <p class="text-muted small mb-0">Ultra-fast storage for top performance</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="feature-box text-center p-4 h-100">
          <div class="feature-icon bg-success-subtle text-success mx-auto mb-3"><i class="bi bi-shield-check"></i></div>
          <h6 class="fw-bold">Free SSL</h6>
          <p class="text-muted small mb-0">Secure every website with free SSL</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="feature-box text-center p-4 h-100">
          <!-- bg-purple-subtle aur text-purple ye Bootstrap ki asli class nahi, 
               hum ne khud style.css men banai hain (kyunke Bootstrap men 
               "purple" ka ready color nahi hota) -->
          <div class="feature-icon bg-purple-subtle text-purple mx-auto mb-3"><i class="bi bi-cloud-arrow-up-fill"></i></div>
          <h6 class="fw-bold">Daily Backup</h6>
          <p class="text-muted small mb-0">Automatic daily backups for your data</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="feature-box text-center p-4 h-100">
          <div class="feature-icon bg-warning-subtle text-warning mx-auto mb-3"><i class="bi bi-headset"></i></div>
          <h6 class="fw-bold">24/7 Support</h6>
          <p class="text-muted small mb-0">24/7 expert support via chat, ticket &amp; phone</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     HOSTING SOLUTIONS Section Start
     ============================================================
-->

<section class=" bg-light">
  <div class="container py-4">
    <h2 class="text-center fw-bold mb-5">Our Hosting Solutions</h2>

    <div class="row g-3 text-center mb-5">
      <div class="col-md-2 col-4">
        <div class="solution-box p-3 h-100">
          <i class="bi bi-server fs-2 text-primary d-block mb-2"></i>
          <span class="small fw-semibold">Shared Hosting</span>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="solution-box p-3 h-100">
          <i class="bi bi-hdd-stack fs-2 text-primary d-block mb-2"></i>
          <span class="small fw-semibold">VPS Hosting</span>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="solution-box p-3 h-100">
          <i class="bi bi-cloud-fill fs-2 text-primary d-block mb-2"></i>
          <span class="small fw-semibold">Cloud Hosting</span>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="solution-box p-3 h-100">
          <i class="bi bi-wordpress fs-2 text-primary d-block mb-2"></i>
          <span class="small fw-semibold">WordPress Hosting</span>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="solution-box p-3 h-100">
          <i class="bi bi-person-badge fs-2 text-primary d-block mb-2"></i>
          <span class="small fw-semibold">Reseller Hosting</span>
        </div>
      </div>
      <div class="col-md-2 col-4">
        <div class="solution-box p-3 h-100">
          <i class="bi bi-database-fill fs-2 text-primary d-block mb-2"></i>
          <span class="small fw-semibold">Dedicated Servers</span>
        </div>
      </div>
    </div>

    <!-- "Built for Speed" wala bara banner box -->
    <div class="row g-4 align-items-center bg-white rounded-4 shadow-sm p-4">
      <div class="col-md-6">
        <!-- 
          ratio ratio-16x9 = Bootstrap ki utility jo kisi box ko 
          hamesha 16:9 (jese YouTube video ka shape) rakhti hai, 
          chahe screen kitni bhi choti barri ho 
        -->
        <div class="ratio ratio-16x9 rounded-4 overflow-hidden speed-banner-img">
          <i class="bi bi-cloud-arrow-up-fill"></i>
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold mb-3">Built for Speed. Secured for You.</h3>
        <div class="row row-cols-2 g-2 mb-4">
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>LiteSpeed Web Server</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>cPanel Control Panel</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>HTTP/3 Support</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>Imunify360 Security</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>PHP 8.4</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>Malware Scanner</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>CloudLinux OS</div>
          <div class="col small"><i class="bi bi-check-circle-fill text-success me-2"></i>Free Website Migration</div>
        </div>
        <a href="#" class="btn btn-primary rounded-pill px-4">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     STATS BAR Section Start (50,000+ Websites waghera)
     ============================================================
-->

<section class="stats-bar text-white py-4">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-6 col-md-3">
        <i class="bi bi-people-fill fs-3 d-block mb-2"></i>
        <h4 class="fw-bold mb-0">50,000+</h4>
        <span class="small text-white-50">Websites Hosted</span>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-shield-check fs-3 d-block mb-2"></i>
        <h4 class="fw-bold mb-0">99.99%</h4>
        <span class="small text-white-50">Uptime Guarantee</span>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-headset fs-3 d-block mb-2"></i>
        <h4 class="fw-bold mb-0">24/7</h4>
        <span class="small text-white-50">Expert Support</span>
      </div>
      <div class="col-6 col-md-3">
        <i class="bi bi-trophy-fill fs-3 d-block mb-2"></i>
        <h4 class="fw-bold mb-0">15 Years</h4>
        <span class="small text-white-50">Of Hosting Experience</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS Section Start (Customer reviews)
     ============================================================
     Ye section PHP se DYNAMIC (khud-b-khud) generate ho raha hai.
     Matlab humne data ek "array" (list) men rakha hai, aur phir 
     "foreach loop" se us array ko ghuma (loop) kar k HTML cards 
     bana rahe hain. Isse agar kal ko 4th customer add karna ho, 
     to sirf array men ek naya item add karna hoga — HTML dobara 
     nahi likhni parhegi.
-->
<section class="py-5">
  <div class="container py-4">
    <h2 class="text-center fw-bold mb-5">What Our Customers Say</h2>
    <?php
      // ============================================================
      // $testimonials -> Ye ek PHP "ARRAY" (list) hai.
      // Array men hum multiple values ek sath store kar sakte hain.
      // 
      // Yahan hum ne "array of arrays" banaya hai:
      // Bahar wala array 3 customers ki list hai [0, 1, 2],
      // aur har customer khud ek chhota array hai jismen 
      // "name", "role", "text" keys (labels) k sath data hai.
      // Isay "Associative Array" kehte hain (index number ki jaga 
      // hum apne khud k naam/keys use karte hain jese "name" => "value").
      // ============================================================
      $testimonials = [
        ["name" => "Rajesh Kumar", "role" => "Business Owner", "text" => "Excellent hosting and outstanding support! My website has never been faster. Highly recommended!"],
        ["name" => "Neha Sharma", "role" => "Blogger", "text" => "Their support team is amazing. They resolved my issue in minutes. Great service!"],
        ["name" => "John D'Souza", "role" => "Developer", "text" => "Very reliable hosting with 99.99% uptime. I'm using their VPS and I'm extremely satisfied."],
      ];
    ?>
    <div class="row g-4">
      <?php 
        // ============================================================
        // foreach -> Ye PHP ka LOOP keyword hai. Iska kaam hai kisi 
        // array k HAR item par ek ek kar k chalna (repeat karna).
        //
        // "foreach ($testimonials as $t)" ka matlab: 
        // "$testimonials" array k andar jitne bhi customers hain, 
        // un sab men se HAR EK customer ko baari baari $t (chhota, 
        // temporary variable) men rakho, aur neeche wala HTML code 
        // us $t k liye print karo. Phir agle customer k liye phir 
        // se yehi HTML print karo... aur ye tab tak chalta rahega 
        // jab tak array khatam na ho jaye (yani 3 dafa chalega, 
        // kyunke array men 3 customers hain).
        //
        // Is tarah humein sirf EK BAAR card ka HTML likhna para, 
        // aur wo teeno customers k liye khud-b-khud repeat ho gaya.
        // ============================================================
        foreach ($testimonials as $t): 
      ?>
      <div class="col-md-4">
        <div class="card testimonial-card h-100 p-4 border-0 shadow-sm">
          <div class="text-warning mb-2">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>

          <p class="text-muted small">"<?php 
            // ============================================================
            // htmlspecialchars() -> Ye PHP ka SECURITY function hai.
            // Iska kaam hai: agar user ka diya hua text men koi 
            // HTML special characters (jese <, >, ", ') hon, to unhe 
            // "safe" bana dena taake wo browser men code ki tarah 
            // execute na ho jayein (isse "XSS attack" naam ka 
            // security issue rukta hai). 
            //
            // Hamesha jab bhi PHP se koi text page par print karein 
            // (especially agar wo text kisi form/user se aaya ho), 
            // to usay htmlspecialchars() k andar rakh kar print karna 
            // achi practice (best practice) hai.
            // ============================================================
            echo htmlspecialchars($t['text']); 
          ?>"</p>

          <div class="d-flex align-items-center mt-3">
            <div class="avatar-circle me-3"><?php 
              // ============================================================
              // Ye line customer k naam ka PEHLA LETTER (jese "Rajesh" 
              // se sirf "R") nikal kar circle k andar dikhati hai — 
              // jese WhatsApp/Gmail men profile picture ki jaga 
              // letter wala gol icon hota hai.
              //
              // In-built functions jo yahan use hue:
              //
              // 1) substr($t['name'], 0, 1)
              //    "substr" ka matlab hai "sub-string" (poore text 
              //    men se ek chhota tukra nikalna).
              //    Parameters: (jis text se nikalna hai, kahan se 
              //    shuru karna hai [0 = pehle letter se], kitne 
              //    letters chahiye [1 = sirf 1 letter]).
              //    Result: agar naam "Rajesh Kumar" hai, to ye "R" 
              //    wapas dega.
              //
              // 2) strtoupper(...)
              //    "str" = string, "to upper" = capital letters men 
              //    badalna. Agar pehle se letter chhota (lowercase) 
              //    ho to bhi ye usay BARA (uppercase) bana dega.
              //
              // Dono functions ko humne "nest" kiya hai (ek dusre 
              // k andar), yani pehle substr() chalega, uska result 
              // strtoupper() k andar jayega, aur akhri result echo 
              // se print hoga.
              // ============================================================
              echo strtoupper(substr($t['name'], 0, 1)); 
            ?></div>
            <div>
              <h6 class="mb-0 fw-semibold"><?php echo htmlspecialchars($t['name']); ?></h6>
              <span class="small text-muted"><?php echo htmlspecialchars($t['role']); ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php 
        // endforeach -> Ye batata hai PHP ko k humara foreach loop 
        // yahan KHATAM ho raha hai. Jab hum HTML k beech men PHP loop 
        // likhte hain (jese upar "foreach(...):" colon ke sath likha), 
        // to usay band (close) karne k liye "endforeach;" likhte hain, 
        // curly brackets { } ki jaga.
        endforeach; 
      ?>
    </div>
  </div>
</section>

<!-- ============================================================
     DATACENTER LOCATIONS Section Start
     ============================================================
-->
<section class="py-5 bg-light">
  <div class="container py-4 text-center">
    <h2 class="fw-bold mb-5">Our Datacenter Locations</h2>
    <div class="row justify-content-center g-4">
      <div class="col-4 col-md-2"><i class="bi bi-geo-alt-fill fs-3 text-primary d-block mb-1"></i><span class="small fw-semibold">India</span></div>
      <div class="col-4 col-md-2"><i class="bi bi-geo-alt-fill fs-3 text-primary d-block mb-1"></i><span class="small fw-semibold">USA</span></div>
      <div class="col-4 col-md-2"><i class="bi bi-geo-alt-fill fs-3 text-primary d-block mb-1"></i><span class="small fw-semibold">UK</span></div>
      <div class="col-4 col-md-2"><i class="bi bi-geo-alt-fill fs-3 text-primary d-block mb-1"></i><span class="small fw-semibold">Germany</span></div>
      <div class="col-4 col-md-2"><i class="bi bi-geo-alt-fill fs-3 text-primary d-block mb-1"></i><span class="small fw-semibold">Singapore</span></div>
    </div>
  </div>
</section>

<!-- ============================================================
     BLOG Section Start
     ============================================================
-->
<section class="py-5">
  <div class="container py-4">
    <h2 class="text-center fw-bold mb-5">Latest From Our Blog</h2>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <!-- blog-thumb = hamari khud ki class, thumbnail jesi image ki jaga banayi -->
          <div class="blog-thumb d-flex align-items-center justify-content-center"><i class="bi bi-globe2"></i></div>
          <div class="card-body">
            <p class="small text-muted mb-1">May 20, 2024</p>
            <h6 class="fw-bold">How to Start a Website in 2024 - Step by Step Guide</h6>
            <a href="#" class="small text-primary text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="blog-thumb d-flex align-items-center justify-content-center"><i class="bi bi-speedometer2"></i></div>
          <div class="card-body">
            <p class="small text-muted mb-1">May 18, 2024</p>
            <h6 class="fw-bold">WordPress Speed Optimization Tips That Really Work</h6>
            <a href="#" class="small text-primary text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="blog-thumb d-flex align-items-center justify-content-center"><i class="bi bi-shield-lock-fill"></i></div>
          <div class="card-body">
            <p class="small text-muted mb-1">May 15, 2024</p>
            <h6 class="fw-bold">Why SSL Certificate is Important for Your Website</h6>
            <a href="#" class="small text-primary text-decoration-none">Read More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
include'footer.php';
?>