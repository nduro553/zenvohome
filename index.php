<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenvoHome - Fresh Food Delivery Services | Order Healthy Meals Online</title>
    <meta name="description" content="ZenvoHome delivers fresh, healthy meals straight to your door. Experience convenient food delivery with our wide selection of cuisines. Click here to continue exploring our delicious menu options and start your culinary journey today with fast, reliable service in your neighborhood.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }
        
        .header_nav_container_8k3j {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav_wrapper_9m2x {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .logo_text_4p7q {
            font-size: 28px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .navigation_menu_5t8w {
            display: flex;
            list-style: none;
            gap: 25px;
            flex-wrap: wrap;
        }
        
        .navigation_menu_5t8w a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }
        
        .navigation_menu_5t8w a:hover {
            opacity: 0.8;
        }
        
        .hero_section_6n9r {
            background: linear-gradient(rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8)), url('https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=1200') center/cover;
            color: white;
            padding: 120px 20px;
            text-align: center;
        }
        
        .hero_content_2l5k {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero_title_3d8m {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero_subtitle_7r4n {
            font-size: 22px;
            margin-bottom: 30px;
        }
        
        .cta_button_1x6p {
            display: inline-block;
            background-color: #ff6b6b;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .cta_button_1x6p:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        
        .section_container_8h3v {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }
        
        .section_title_9k2m {
            font-size: 36px;
            text-align: center;
            margin-bottom: 50px;
            color: #2c3e50;
        }
        
        .content_grid_4j7x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .card_item_5n8q {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .card_item_5n8q:hover {
            transform: translateY(-5px);
        }
        
        .card_icon_2m9w {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .card_title_6p3r {
            font-size: 24px;
            margin-bottom: 15px;
            color: #667eea;
        }
        
        .card_description_7t4k {
            color: #666;
            line-height: 1.8;
        }
        
        .history_timeline_3x8n {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .timeline_item_9r5m {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-bottom: 2px solid #f0f0f0;
        }
        
        .timeline_year_4k7p {
            font-size: 32px;
            font-weight: bold;
            color: #667eea;
            min-width: 100px;
        }
        
        .timeline_content_8m2x {
            flex: 1;
        }
        
        .timeline_heading_5n9t {
            font-size: 22px;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        .review_container_6j4w {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 20px;
            border-left: 5px solid #667eea;
        }
        
        .review_header_2p8k {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .reviewer_avatar_7x3m {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        
        .reviewer_info_9k5n {
            flex: 1;
        }
        
        .reviewer_name_4m7t {
            font-weight: bold;
            font-size: 18px;
            color: #2c3e50;
        }
        
        .review_stars_3r8p {
            color: #ffd700;
            font-size: 18px;
        }
        
        .review_text_5j2w {
            color: #555;
            line-height: 1.8;
            font-style: italic;
        }
        
        .image_showcase_8n4r {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 15px;
            margin: 20px 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .footer_section_9m7k {
            background: #2c3e50;
            color: white;
            padding: 50px 20px 20px;
        }
        
        .footer_content_4x9n {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 30px;
        }
        
        .footer_column_6k3p {
            line-height: 2;
        }
        
        .footer_heading_2r8m {
            font-size: 20px;
            margin-bottom: 20px;
            color: #667eea;
        }
        
        .footer_link_7n4t {
            color: #bbb;
            text-decoration: none;
            display: block;
            transition: color 0.3s;
        }
        
        .footer_link_7n4t:hover {
            color: white;
        }
        
        .phone_link_5m9x {
            color: #ff6b6b;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }
        
        .copyright_text_3j7k {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #444;
            color: #999;
        }
        
        .modal_overlay_8r5n {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 2000;
            overflow-y: auto;
        }
        
        .modal_content_4k8p {
            background: white;
            max-width: 800px;
            margin: 50px auto;
            padding: 40px;
            border-radius: 15px;
            position: relative;
        }
        
        .modal_close_9m3x {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 30px;
            cursor: pointer;
            color: #999;
            background: none;
            border: none;
        }
        
        .modal_close_9m3x:hover {
            color: #333;
        }
        
        .modal_title_6n7r {
            font-size: 32px;
            margin-bottom: 30px;
            color: #2c3e50;
        }
        
        .modal_section_2p5k {
            margin-bottom: 25px;
        }
        
        .modal_subtitle_7x4m {
            font-size: 22px;
            margin-bottom: 15px;
            color: #667eea;
        }
        
        .info_box_3k9r {
            background: #f0f4ff;
            padding: 25px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        
        .highlight_text_5m8n {
            background: linear-gradient(120deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
            font-weight: bold;
        }
        
        .feature_list_7r3k {
            list-style: none;
            padding-left: 0;
        }
        
        .feature_list_7r3k li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
        }
        
        .feature_list_7r3k li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #667eea;
            font-weight: bold;
            font-size: 20px;
        }
        
        @media (max-width: 768px) {
            .navigation_menu_5t8w {
                flex-direction: column;
                gap: 10px;
            }
            
            .hero_title_3d8m {
                font-size: 32px;
            }
            
            .timeline_item_9r5m {
                flex-direction: column;
            }
        }
    </style>

    <style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

</head>
<body>

    <header class="header_nav_container_8k3j">
        <nav class="nav_wrapper_9m2x">
            <a href="#home" class="logo_text_4p7q">ZenvoHome</a>
            <ul class="navigation_menu_5t8w">
                <li><a href="#home">Home</a></li>
                <li><a href="#services_9k3m">Services</a></li>
                <li><a href="#about_7r4n">About Us</a></li>
                <li><a href="#history_5x8p">Our Story</a></li>
                <li><a href="#cuisine_3m9k">Cuisine Types</a></li>
                <li><a href="#delivery_8n2r">Delivery Areas</a></li>
                <li><a href="#reviews_4k7m">Reviews</a></li>
                <li><a href="#contact_6p3x">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero_section_6n9r">
        <div class="hero_content_2l5k">
            <h1 class="hero_title_3d8m">Delicious Meals Delivered to Your Doorstep</h1>
            <p class="hero_subtitle_7r4n">Experience the convenience of fresh, homemade quality food delivered right when you need it. Your satisfaction is our mission every single day.</p>
            <a href="#services_9k3m" class="cta_button_1x6p">Click Here to Continue</a>
        </div>
    </section>

    <section id="services_9k3m" class="section_container_8h3v">
        <h2 class="section_title_9k2m">Our Food Delivery Services</h2>
        <div class="content_grid_4j7x">
            <div class="card_item_5n8q">
                <div class="card_icon_2m9w">🍱</div>
                <h3 class="card_title_6p3r">Daily Fresh Meals</h3>
                <p class="card_description_7t4k">Every morning our culinary team prepares authentic dishes using locally sourced ingredients. We believe in supporting community farmers while bringing you the freshest flavors possible. Our commitment to quality means each meal is crafted with attention to detail and genuine care for your wellbeing.</p>
            </div>
            <div class="card_item_5n8q">
                <div class="card_icon_2m9w">🚚</div>
                <h3 class="card_title_6p3r">Fast Delivery Network</h3>
                <p class="card_description_7t4k">Our extensive delivery network covers multiple neighborhoods with trained professionals who understand the importance of timely service. We utilize advanced routing technology combined with human expertise to ensure your food arrives hot and ready to enjoy. Temperature controlled containers maintain optimal freshness throughout transit.</p>
            </div>
            <div class="card_item_5n8q">
                <div class="card_icon_2m9w">🥗</div>
                <h3 class="card_title_6p3r">Healthy Options</h3>
                <p class="card_description_7t4k">Nutrition matters to us as much as taste. Our menu features balanced meals designed by certified nutritionists who understand dietary needs. Whether you're following specific eating patterns or simply want wholesome food, we provide transparent ingredient information and customizable options for every preference.</p>
            </div>
            <div class="card_item_5n8q">
                <div class="card_icon_2m9w">📱</div>
                <h3 class="card_title_6p3r">Easy Ordering System</h3>
                <p class="card_description_7t4k">Place orders through multiple convenient channels including phone, website, or mobile application. Our user-friendly interface remembers your preferences and suggests meals based on your history. Real-time tracking keeps you informed about your delivery status from kitchen to doorstep with precise updates.</p>
            </div>
            <div class="card_item_5n8q">
                <div class="card_icon_2m9w">🌮</div>
                <h3 class="card_title_6p3r">Diverse Menu Selection</h3>
                <p class="card_description_7t4k">Explore flavors from around the world without leaving your home. Our rotating menu features seasonal specialties alongside customer favorites. From comfort food to adventurous international cuisine, there's always something new to discover. Weekly specials keep your dining experience exciting and varied.</p>
            </div>
            <div class="card_item_5n8q">
                <div class="card_icon_2m9w">⭐</div>
                <h3 class="card_title_6p3r">Customer Satisfaction</h3>
                <p class="card_description_7t4k">Your happiness drives everything we do. Our dedicated support team addresses concerns promptly and professionally. We actively seek feedback to continuously improve our service. Every interaction is an opportunity to exceed expectations and build lasting relationships with our valued customers.</p>
            </div>
        </div>
        
        <div class="highlight_text_5m8n">
            <p>Join thousands of satisfied customers who trust ZenvoHome for their daily meals. <a href="#contact_6p3x" style="color: #ffd700; text-decoration: underline;">Click here to continue</a> and start your culinary journey with us today!</p>
        </div>
    </section>

    <section id="about_7r4n" class="section_container_8h3v" style="background: white;">
        <h2 class="section_title_9k2m">About ZenvoHome</h2>
        <img src="https://images.pexels.com/photos/4253320/pexels-photo-4253320.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Food preparation" class="image_showcase_8n4r">
        <div class="info_box_3k9r">
            <p>ZenvoHome emerged from a simple observation: people deserve access to quality meals without compromising their busy schedules. Our founders recognized the gap between fast food convenience and home-cooked nutrition. This realization sparked a mission to revolutionize food delivery by combining efficiency with culinary excellence.</p>
            <p style="margin-top: 15px;">We partner with talented chefs who share our vision of accessible, delicious food. Each recipe undergoes rigorous testing to ensure consistency and flavor. Our kitchen facilities maintain the highest hygiene standards, regularly inspected and certified by health authorities. Transparency in our operations builds trust with every customer.</p>
            <p style="margin-top: 15px;">Sustainability guides our business practices. We minimize waste through careful portion planning and eco-friendly packaging. Supporting local suppliers reduces our carbon footprint while strengthening community connections. These values aren't just policies—they're fundamental to who we are as a company.</p>
        </div>
        
        <div class="content_grid_4j7x" style="margin-top: 40px;">
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Our Mission Statement</h3>
                <p class="card_description_7t4k">To nourish communities by delivering exceptional meals that bring joy, convenience, and health to every table. We strive to make quality food accessible to everyone regardless of their schedule or cooking abilities. Through innovation and dedication, we're building a future where nutritious eating is effortless.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Core Values</h3>
                <ul class="feature_list_7r3k">
                    <li>Integrity in every ingredient and interaction</li>
                    <li>Excellence through continuous improvement</li>
                    <li>Community focus and local partnerships</li>
                    <li>Environmental responsibility</li>
                    <li>Customer-centric innovation</li>
                    <li>Team member empowerment and growth</li>
                </ul>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Quality Commitment</h3>
                <p class="card_description_7t4k">Every ingredient passes strict quality checks before entering our kitchen. We maintain relationships with suppliers who share our standards for freshness and ethical sourcing. Regular audits ensure compliance with food safety regulations. Our quality assurance team monitors every step from procurement to delivery.</p>
            </div>
        </div>
    </section>

    <section id="history_5x8p" class="section_container_8h3v">
        <h2 class="section_title_9k2m">Our Journey Through Time</h2>
        <div class="history_timeline_3x8n">
            <div class="timeline_item_9r5m">
                <div class="timeline_year_4k7p">2015</div>
                <div class="timeline_content_8m2x">
                    <h3 class="timeline_heading_5n9t">The Beginning of Something Special</h3>
                    <p>ZenvoHome started in a small kitchen with three passionate individuals who believed food delivery could be better. Armed with family recipes and determination, they began serving their neighborhood. Those early days taught valuable lessons about customer service, quality control, and the importance of listening to feedback. Word spread quickly about the delicious meals and reliable service.</p>
                </div>
            </div>
            <div class="timeline_item_9r5m">
                <div class="timeline_year_4k7p">2017</div>
                <div class="timeline_content_8m2x">
                    <h3 class="timeline_heading_5n9t">Expansion and Growth Phase</h3>
                    <p>Demand exceeded expectations, prompting expansion to a larger facility. We hired experienced chefs and invested in professional equipment. The team grew from three to twenty-five dedicated members. New delivery vehicles joined our fleet, extending our service radius. This period challenged us to maintain quality while scaling operations, a balance we achieved through systematic processes and unwavering standards.</p>
                </div>
            </div>
            <div class="timeline_item_9r5m">
                <div class="timeline_year_4k7p">2019</div>
                <div class="timeline_content_8m2x">
                    <h3 class="timeline_heading_5n9t">Technology Integration</h3>
                    <p>Recognizing the digital shift, we launched our mobile application and enhanced online ordering systems. Customer feedback shaped feature development, resulting in intuitive interfaces and useful functionality. Real-time tracking became standard, giving customers transparency throughout the delivery process. Technology improved efficiency without sacrificing the personal touch that defined our service.</p>
                </div>
            </div>
            <div class="timeline_item_9r5m">
                <div class="timeline_year_4k7p">2021</div>
                <div class="timeline_content_8m2x">
                    <h3 class="timeline_heading_5n9t">Community Partnerships</h3>
                    <p>We formalized relationships with local farmers and suppliers, creating a sustainable supply chain. These partnerships ensured ingredient freshness while supporting regional agriculture. Community events and sponsorships strengthened our local presence. Charitable initiatives provided meals to those in need, reflecting our commitment to social responsibility beyond business operations.</p>
                </div>
            </div>
            <div class="timeline_item_9r5m">
                <div class="timeline_year_4k7p">2023</div>
                <div class="timeline_content_8m2x">
                    <h3 class="timeline_heading_5n9t">Sustainable Practices Implementation</h3>
                    <p>Environmental consciousness became central to operations. We transitioned to biodegradable packaging and optimized delivery routes to reduce emissions. Energy-efficient kitchen equipment lowered our carbon footprint. A comprehensive recycling program minimized waste. These changes demonstrated that business success and environmental stewardship can coexist harmoniously.</p>
                </div>
            </div>
            <div class="timeline_item_9r5m" style="border-bottom: none;">
                <div class="timeline_year_4k7p">2024</div>
                <div class="timeline_content_8m2x">
                    <h3 class="timeline_heading_5n9t">Present Day Excellence</h3>
                    <p>Today, ZenvoHome serves thousands of customers weekly across multiple regions. Our team has grown to over one hundred dedicated professionals. Despite our size, we maintain the personal approach that started it all. Innovation continues with new menu items, improved technology, and enhanced customer experiences. The journey continues as we explore new ways to serve our community better.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cuisine_3m9k" class="section_container_8h3v" style="background: white;">
        <h2 class="section_title_9k2m">Cuisine Varieties We Offer</h2>
        <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Various cuisines" class="image_showcase_8n4r">
        <div class="content_grid_4j7x">
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🍝 Italian Classics</h3>
                <p class="card_description_7t4k">Authentic Italian flavors prepared with traditional techniques and genuine ingredients. Our pasta is made fresh daily, and sauces simmer for hours to develop rich, complex flavors. From hearty lasagna to delicate risotto, each dish transports you to the Italian countryside. Vegetarian and gluten-conscious options ensure everyone can enjoy these timeless recipes.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🍜 Asian Fusion</h3>
                <p class="card_description_7t4k">Experience the vibrant tastes of Asia through our carefully curated selection. Stir-fries burst with fresh vegetables and aromatic spices. Noodle dishes range from comforting soups to bold, spicy preparations. Our chefs trained in authentic techniques while adding creative modern touches. Each meal balances sweet, sour, salty, and umami flavors perfectly.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🌯 Mexican Favorites</h3>
                <p class="card_description_7t4k">Bold, satisfying Mexican cuisine made with fresh ingredients and authentic seasonings. Handmade tortillas form the foundation for tacos, burritos, and enchiladas. Salsas range from mild to fiery, all prepared in-house. Beans, rice, and proteins are seasoned with traditional spice blends. Vegetarian and vegan adaptations maintain authentic flavor profiles.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🥙 Mediterranean Delights</h3>
                <p class="card_description_7t4k">Healthy Mediterranean options featuring olive oil, fresh herbs, and lean proteins. Grilled meats and vegetables showcase simple preparation that highlights natural flavors. Hummus, falafel, and tabbouleh provide plant-based protein options. These dishes embody the Mediterranean diet's health benefits while delivering satisfying taste and generous portions.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🍔 American Comfort</h3>
                <p class="card_description_7t4k">Classic American dishes reimagined with quality ingredients and careful preparation. Burgers feature freshly ground beef and artisan buns. Sandwiches stack high with premium meats and crisp vegetables. Sides include hand-cut fries and seasonal salads. Comfort food doesn't mean compromising on quality or nutrition in our kitchen.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🍛 Indian Specialties</h3>
                <p class="card_description_7t4k">Aromatic Indian cuisine with complex spice blends and rich sauces. Curries range from creamy kormas to spicy vindaloos, each with distinct flavor profiles. Tandoori preparations offer smoky, charred notes. Vegetarian options are plentiful, reflecting India's diverse culinary traditions. Basmati rice and fresh naan complement every meal perfectly.</p>
            </div>
        </div>
        
        <div class="info_box_3k9r" style="margin-top: 40px;">
            <h3 style="margin-bottom: 15px; color: #667eea; font-size: 24px;">Special Dietary Accommodations</h3>
            <p>We understand that dietary needs vary widely among our customers. Our menu clearly marks vegetarian, vegan, gluten-free, and dairy-free options. Allergen information is available for every dish, helping you make informed choices. Custom modifications are welcome—just let us know your requirements. Our kitchen staff is trained in cross-contamination prevention for sensitive dietary restrictions.</p>
            <p style="margin-top: 15px;">Nutritional information accompanies each menu item, including calorie counts, macronutrient breakdowns, and key vitamins. This transparency empowers you to align meals with your health goals. Whether managing specific conditions or pursuing wellness objectives, we provide the information needed for confident ordering decisions.</p>
        </div>
    </section>

    <section id="delivery_8n2r" class="section_container_8h3v">
        <h2 class="section_title_9k2m">Delivery Coverage Areas</h2>
        <img src="https://images.pexels.com/photos/4391470/pexels-photo-4391470.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Delivery service" class="image_showcase_8n4r">
        <div class="content_grid_4j7x">
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Downtown District</h3>
                <p class="card_description_7t4k">Our busiest service area features rapid delivery times averaging twenty-five minutes. High-rise buildings and office complexes receive special attention with coordinated lobby deliveries. Peak lunch hours see increased driver presence to maintain speed. Evening service extends until late night for those working extended hours or enjoying city nightlife.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Suburban Neighborhoods</h3>
                <p class="card_description_7t4k">Residential areas receive reliable service with family-friendly timing options. Drivers familiar with local streets ensure efficient navigation. Weekend delivery windows accommodate family meal planning. We've become part of the community fabric, with drivers recognizing regular customers and their preferences.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">University Campus Zone</h3>
                <p class="card_description_7t4k">Student-focused service offers flexible delivery to dormitories and campus buildings. Late-night availability supports study sessions and irregular schedules. Group ordering options facilitate shared meals among roommates. Special promotions during exam periods show our support for academic success.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Business Parks</h3>
                <p class="card_description_7t4k">Corporate lunch delivery includes bulk ordering capabilities for meetings and events. Scheduled deliveries arrive precisely when needed for professional gatherings. Individual orders to office buildings feature contactless delivery options. We understand workplace dining needs and adapt our service accordingly.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Waterfront Area</h3>
                <p class="card_description_7t4k">Scenic waterfront locations receive full service despite unique access challenges. Drivers navigate parking and building entry efficiently. Outdoor dining areas and parks are accessible for picnic-style deliveries. Summer months see increased demand, which we meet with expanded coverage.</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">Expanding Regions</h3>
                <p class="card_description_7t4k">New neighborhoods continuously join our service map based on customer requests. We evaluate expansion opportunities quarterly, prioritizing areas with demonstrated interest. Pilot programs test service viability before full implementation. Your feedback helps shape our growth strategy and coverage decisions.</p>
            </div>
        </div>
        
        <div class="highlight_text_5m8n" style="margin-top: 40px;">
            <p>Not sure if we deliver to your location? <a href="#contact_6p3x" style="color: #ffd700; text-decoration: underline;">Click here to continue</a> to our contact section and reach out—we're always expanding our service areas!</p>
        </div>
    </section>

    <section id="reviews_4k7m" class="section_container_8h3v" style="background: white;">
        <h2 class="section_title_9k2m">What Our Customers Say</h2>
        
        <div class="review_container_6j4w">
            <div class="review_header_2p8k">
                <div class="reviewer_avatar_7x3m">MR</div>
                <div class="reviewer_info_9k5n">
                    <div class="reviewer_name_4m7t">Margaret Richardson</div>
                    <div class="review_stars_3r8p">★★★★★</div>
                </div>
            </div>
            <p class="review_text_5j2w">"I've been ordering from ZenvoHome for eight months now and haven't been disappointed once. The consistency is remarkable—every meal arrives hot and tastes exactly as expected. Their Mediterranean platter has become my weekly treat. Delivery drivers are always courteous and professional. As someone with limited cooking time, this service has genuinely improved my quality of life."</p>
        </div>

        <div class="review_container_6j4w">
            <div class="review_header_2p8k">
                <div class="reviewer_avatar_7x3m">JT</div>
                <div class="reviewer_info_9k5n">
                    <div class="reviewer_name_4m7t">James Thompson</div>
                    <div class="review_stars_3r8p">★★★★★</div>
                </div>
            </div>
            <p class="review_text_5j2w">"Working night shifts made eating well nearly impossible until I discovered ZenvoHome. Their late-night delivery saved me from endless fast food runs. The Asian fusion options are authentic and flavorful. I appreciate the nutritional information provided—it helps me maintain my fitness goals despite irregular hours. Customer service responded quickly when I had a question about ingredients."</p>
        </div>

        <div class="review_container_6j4w">
            <div class="review_header_2p8k">
                <div class="reviewer_avatar_7x3m">SP</div>
                <div class="reviewer_info_9k5n">
                    <div class="reviewer_name_4m7t">Sarah Patterson</div>
                    <div class="review_stars_3r8p">★★★★★</div>
                </div>
            </div>
            <p class="review_text_5j2w">"As a parent of three, dinner time was always stressful until we started using ZenvoHome. The kids actually eat the vegetables in these meals! Portion sizes are generous enough that we often have leftovers for lunch. The ordering app remembers our preferences, making reordering incredibly simple. It's become our Friday night tradition, giving me a break from cooking."</p>
        </div>

        <div class="review_container_6j4w">
            <div class="review_header_2p8k">
                <div class="reviewer_avatar_7x3m">DM</div>
                <div class="reviewer_info_9k5n">
                    <div class="reviewer_name_4m7t">David Martinez</div>
                    <div class="review_stars_3r8p">★★★★☆</div>
                </div>
            </div>
            <p class="review_text_5j2w">"The food quality is consistently excellent, and I've tried probably twenty different dishes by now. My only minor complaint is that delivery times can vary during peak hours, though they're always within the estimated window. The Italian pasta dishes are restaurant-quality. I've recommended ZenvoHome to several colleagues who now order regularly too."</p>
        </div>

        <div class="review_container_6j4w">
            <div class="review_header_2p8k">
                <div class="reviewer_avatar_7x3m">LC</div>
                <div class="reviewer_info_9k5n">
                    <div class="reviewer_name_4m7t">Linda Chen</div>
                    <div class="review_stars_3r8p">★★★★★</div>
                </div>
            </div>
            <p class="review_text_5j2w">"Being vegetarian sometimes limits delivery options, but ZenvoHome has an impressive selection of plant-based meals. Everything is clearly labeled, and they accommodate special requests without hassle. The Indian vegetarian dishes are particularly outstanding—authentic spices and generous portions. Packaging is eco-friendly, which aligns with my values. This company clearly cares about more than just profits."</p>
        </div>

        <div class="review_container_6j4w">
            <div class="review_header_2p8k">
                <div class="reviewer_avatar_7x3m">RB</div>
                <div class="reviewer_info_9k5n">
                    <div class="reviewer_name_4m7t">Robert Bradley</div>
                    <div class="review_stars_3r8p">★★★★★</div>
                </div>
            </div>
            <p class="review_text_5j2w">"I'm impressed by the attention to detail in every aspect of their service. Food arrives properly packaged with utensils and napkins. The tracking feature keeps me informed without being intrusive. Prices are reasonable considering the quality and convenience. Their Mexican food reminds me of my grandmother's cooking—that's the highest compliment I can give. Will definitely continue ordering regularly."</p>
        </div>
    </section>

    <section id="contact_6p3x" class="section_container_8h3v">
        <h2 class="section_title_9k2m">Get In Touch With Us</h2>
        <div class="content_grid_4j7x">
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">📞 Phone Contact</h3>
                <p class="card_description_7t4k">Speak directly with our customer service team for immediate assistance. Representatives are available during business hours to answer questions, take orders, or address concerns.</p>
                <p style="margin-top: 15px;"><a href="tel:+15558742390" class="phone_link_5m9x">Call: (555) 874-2390</a></p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">📧 Email Support</h3>
                <p class="card_description_7t4k">Send detailed inquiries or feedback via email. We respond to all messages within twenty-four hours during weekdays.</p>
                <p style="margin-top: 15px; color: #667eea; font-weight: bold;">support@zenvohome.com</p>
            </div>
            <div class="card_item_5n8q">
                <h3 class="card_title_6p3r">🏢 Main Office</h3>
                <p class="card_description_7t4k">Visit our headquarters for in-person consultations or partnership discussions. Office hours are Monday through Friday, 9 AM to 6 PM.</p>
                <p style="margin-top: 15px; color: #667eea; font-weight: bold;">4782 Riverside Avenue<br>Suite 320<br>Metropolitan City, MC 90210</p>
            </div>
        </div>
        
        <div class="info_box_3k9r" style="margin-top: 40px;">
            <h3 style="margin-bottom: 15px; color: #667eea; font-size: 24px;">Business Hours</h3>
            <p><strong>Monday - Friday:</strong> 11:00 AM - 10:00 PM</p>
            <p><strong>Saturday - Sunday:</strong> 12:00 PM - 11:00 PM</p>
            <p style="margin-top: 15px;">Holiday hours may vary. Check our website or call ahead during major holidays for specific availability. We strive to serve you even during special occasions when home cooking might be challenging.</p>
        </div>
    </section>

    <footer class="footer_section_9m7k">
        <div class="footer_content_4x9n">
            <div class="footer_column_6k3p">
                <h3 class="footer_heading_2r8m">ZenvoHome</h3>
                <p style="color: #bbb;">Delivering quality meals with care and consistency. Your satisfaction fuels our passion for culinary excellence and customer service.</p>
                <p style="margin-top: 20px;"><a href="tel:+15558742390" class="phone_link_5m9x">📞 (555) 874-2390</a></p>
            </div>
            <div class="footer_column_6k3p">
                <h3 class="footer_heading_2r8m">Quick Links</h3>
                <a href="#home" class="footer_link_7n4t">Home</a>
                <a href="#services_9k3m" class="footer_link_7n4t">Services</a>
                <a href="#about_7r4n" class="footer_link_7n4t">About Us</a>
                <a href="#cuisine_3m9k" class="footer_link_7n4t">Menu</a>
                <a href="#reviews_4k7m" class="footer_link_7n4t">Reviews</a>
            </div>
            <div class="footer_column_6k3p">
                <h3 class="footer_heading_2r8m">Information</h3>
                <a href="#" onclick="openModal('privacy'); return false;" class="footer_link_7n4t">Privacy Policy</a>
                <a href="#" onclick="openModal('terms'); return false;" class="footer_link_7n4t">Terms of Service</a>
                <a href="#delivery_8n2r" class="footer_link_7n4t">Delivery Areas</a>
                <a href="#contact_6p3x" class="footer_link_7n4t">Contact Us</a>
            </div>
            <div class="footer_column_6k3p">
                <h3 class="footer_heading_2r8m">Connect With Us</h3>
                <p style="color: #bbb;">Stay updated with our latest menu additions and special offers. Follow us on social media for behind-the-scenes content and cooking tips.</p>
                <p style="margin-top: 15px; color: #bbb;">Email: support@zenvohome.com</p>
            </div>
        </div>
        <div class="copyright_text_3j7k">
            <p>&copy; 2024 ZenvoHome Food Delivery Services. All rights reserved. Serving communities with dedication and delicious food.</p>
        </div>
    </footer>

    <div id="privacyModal" class="modal_overlay_8r5n" onclick="closeModalOutside(event, 'privacy')">
        <div class="modal_content_4k8p" onclick="event.stopPropagation()">
            <button class="modal_close_9m3x" onclick="closeModal('privacy')">&times;</button>
            <h2 class="modal_title_6n7r">Privacy Policy</h2>
            
            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Information Collection and Usage</h3>
                <p>ZenvoHome collects personal information necessary to process and deliver your food orders efficiently. This includes your name, delivery address, contact phone number, and email address. Payment information is processed through secure third-party payment processors and is not stored on our servers. We collect this data solely to fulfill our service obligations and improve customer experience.</p>
                <p style="margin-top: 15px;">Order history and preferences are maintained to streamline future ordering processes. This data helps us recommend meals based on your tastes and dietary requirements. We may collect device information and IP addresses for security purposes and to prevent fraudulent activities. All data collection complies with applicable privacy regulations and industry standards.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Data Protection Measures</h3>
                <p>We implement robust security measures to protect your personal information from unauthorized access, alteration, or disclosure. Our systems use encryption technology for data transmission and storage. Access to customer data is restricted to authorized personnel who require it for legitimate business purposes. Regular security audits ensure our protective measures remain effective against evolving threats.</p>
                <p style="margin-top: 15px;">Employee training emphasizes the importance of data privacy and confidentiality. We maintain strict policies regarding information handling and impose disciplinary measures for violations. Third-party service providers who access customer data are contractually obligated to maintain equivalent security standards. Your trust is paramount, and we continuously invest in protecting it.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Information Sharing Practices</h3>
                <p>ZenvoHome does not sell, rent, or trade your personal information to third parties for marketing purposes. We share data only when necessary to complete transactions, such as with delivery personnel who need addresses to fulfill orders. Payment processors receive only the information required to process transactions securely. These partners are bound by confidentiality agreements and privacy obligations.</p>
                <p style="margin-top: 15px;">Legal compliance may require disclosure of information to government authorities or law enforcement agencies. We will provide information only when legally obligated through valid court orders or subpoenas. In the event of a business merger or acquisition, customer data may be transferred to the new entity, with notification provided to affected customers beforehand.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Cookie Usage and Tracking</h3>
                <p>Our website uses cookies to enhance user experience and maintain session information. These small data files help remember your preferences and streamline the ordering process. Analytics cookies provide insights into website usage patterns, helping us improve functionality and content. You can configure your browser to refuse cookies, though this may limit certain website features.</p>
                <p style="margin-top: 15px;">Third-party cookies from analytics providers may be present on our site. These tools help us understand traffic sources and user behavior. We do not use cookies for targeted advertising purposes. Cookie data is retained only as long as necessary for its intended purpose and is then automatically deleted.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Your Privacy Rights</h3>
                <p>You have the right to access, correct, or delete your personal information at any time. Contact our customer service team to request data modifications or account closure. We will process such requests promptly, typically within thirty days. You may opt out of marketing communications while continuing to receive order-related messages necessary for service delivery.</p>
                <p style="margin-top: 15px;">California residents have additional rights under the California Consumer Privacy Act (CCPA). You may request detailed information about data collection and sharing practices. The right to non-discrimination ensures that exercising privacy rights does not affect service quality or pricing. We respect all privacy rights and facilitate their exercise without unnecessary barriers.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Children's Privacy Protection</h3>
                <p>Our services are not directed toward children under thirteen years of age. We do not knowingly collect personal information from minors without parental consent. If we discover that a child's information has been collected inadvertently, we will delete it promptly. Parents or guardians who believe their child's information has been collected should contact us immediately.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Policy Updates and Changes</h3>
                <p>This privacy policy may be updated periodically to reflect changes in our practices or legal requirements. Material changes will be communicated through email notifications or prominent website notices. Continued use of our services after policy updates constitutes acceptance of the revised terms. We encourage periodic review of this policy to stay informed about how we protect your information.</p>
                <p style="margin-top: 15px;">The effective date of the current policy is displayed at the top of this document. Previous versions are archived and available upon request. Questions or concerns about our privacy practices should be directed to our privacy officer through the contact information provided on our website.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Contact Information for Privacy Concerns</h3>
                <p>For privacy-related inquiries or to exercise your data rights, contact our dedicated privacy team at privacy@zenvohome.com or call (555) 874-2390. Written correspondence can be sent to our main office address listed in the contact section. We respond to all privacy inquiries within a reasonable timeframe and work diligently to address concerns satisfactorily.</p>
            </div>
        </div>
    </div>

    <div id="termsModal" class="modal_overlay_8r5n" onclick="closeModalOutside(event, 'terms')">
        <div class="modal_content_4k8p" onclick="event.stopPropagation()">
            <button class="modal_close_9m3x" onclick="closeModal('terms')">&times;</button>
            <h2 class="modal_title_6n7r">Terms of Service</h2>
            
            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Service Agreement Overview</h3>
                <p>These Terms of Service constitute a legally binding agreement between you and ZenvoHome Food Delivery Services. By accessing our website, placing orders, or using our services, you acknowledge that you have read, understood, and agree to be bound by these terms. If you do not agree with any provision, please discontinue use of our services immediately.</p>
                <p style="margin-top: 15px;">We reserve the right to modify these terms at any time without prior notice. Changes become effective immediately upon posting to our website. Your continued use of services after modifications constitutes acceptance of updated terms. It is your responsibility to review these terms periodically to stay informed of any changes.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Order Placement and Acceptance</h3>
                <p>Placing an order through our platform constitutes an offer to purchase food delivery services. We reserve the right to accept or decline any order at our discretion. Order acceptance occurs when we send confirmation via email or text message. Until acceptance, we are not obligated to fulfill the order, and no contract exists between parties.</p>
                <p style="margin-top: 15px;">Accurate information must be provided when placing orders, including delivery address, contact details, and special instructions. Errors in provided information may result in delivery delays or inability to complete service. You are responsible for ensuring someone is available to receive the delivery at the specified location during the estimated delivery window.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Payment Terms and Conditions</h3>
                <p>Payment is due at the time of order placement unless alternative arrangements have been made. We accept major credit cards, debit cards, and approved digital payment methods. All transactions are processed in United States dollars. You authorize us to charge the payment method provided for the total order amount, including applicable taxes and delivery fees.</p>
                <p style="margin-top: 15px;">Promotional codes and discounts are subject to specific terms and expiration dates. Only one promotional code may be applied per order unless otherwise stated. We reserve the right to cancel orders if payment cannot be processed or if fraudulent activity is suspected. Chargebacks initiated without attempting to resolve issues through customer service may result in account suspension.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Delivery Policies and Expectations</h3>
                <p>Estimated delivery times are approximations based on current conditions and are not guaranteed. Factors beyond our control, including weather, traffic, and unforeseen circumstances, may affect delivery timing. We strive to meet estimated windows but cannot be held liable for delays caused by external factors. Customers will be notified of significant delays whenever possible.</p>
                <p style="margin-top: 15px;">Delivery is completed when food is handed to the customer or left at the specified location per instructions. Contactless delivery options are available upon request. Once delivery is completed, responsibility for the food transfers to the customer. We are not liable for food left unattended per customer instructions or for issues arising after successful delivery.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Cancellation and Refund Policy</h3>
                <p>Orders may be cancelled without penalty if done before food preparation begins. Once preparation has started, cancellations may incur partial charges to cover food costs and labor. Refund requests must be submitted within forty-eight hours of delivery and will be evaluated on a case-by-case basis. Valid reasons include incorrect orders, quality issues, or non-delivery.</p>
                <p style="margin-top: 15px;">Refunds are processed to the original payment method within seven to ten business days of approval. We may offer credits or replacements instead of monetary refunds at our discretion. Repeated refund requests may trigger account review to prevent abuse. Photographic evidence may be requested to substantiate quality complaints.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Food Safety and Allergen Information</h3>
                <p>While we provide allergen information and accommodate dietary restrictions, we cannot guarantee complete absence of allergens due to potential cross-contamination in kitchen environments. Customers with severe allergies should exercise caution and contact us directly to discuss specific concerns. We are not liable for allergic reactions resulting from undisclosed allergies or sensitivities.</p>
                <p style="margin-top: 15px;">Food should be consumed promptly after delivery to ensure optimal quality and safety. Proper food handling after delivery is the customer's responsibility. We adhere to all food safety regulations during preparation and transport but cannot control conditions after delivery. Perishable items should be refrigerated immediately if not consumed right away.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Intellectual Property Rights</h3>
                <p>All content on our website, including text, graphics, logos, images, and software, is the property of ZenvoHome or its content suppliers and is protected by intellectual property laws. You may not reproduce, distribute, modify, or create derivative works without explicit written permission. Unauthorized use may result in legal action and account termination.</p>
                <p style="margin-top: 15px;">Trademarks and service marks displayed on our website are registered and unregistered marks of ZenvoHome. Nothing in these terms grants you any right to use our trademarks without prior written consent. User-generated content submitted to our platform grants us a non-exclusive license to use, reproduce, and display such content for business purposes.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Limitation of Liability</h3>
                <p>ZenvoHome's liability is limited to the amount paid for the specific order in question. We are not liable for indirect, incidental, consequential, or punitive damages arising from service use or inability to use services. This limitation applies regardless of the legal theory upon which claims are based, whether contract, tort, or otherwise.</p>
                <p style="margin-top: 15px;">We do not warrant that services will be uninterrupted, error-free, or completely secure. Technical issues, system maintenance, or external factors may temporarily affect service availability. You agree to use services at your own risk and acknowledge that we cannot guarantee perfect performance at all times.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Dispute Resolution and Governing Law</h3>
                <p>These terms are governed by the laws of the state in which our principal business office is located, without regard to conflict of law provisions. Any disputes arising from these terms or service use shall be resolved through binding arbitration rather than court litigation. Arbitration proceedings will be conducted by a mutually agreed-upon arbitrator or arbitration service.</p>
                <p style="margin-top: 15px;">You waive the right to participate in class action lawsuits or class-wide arbitration against ZenvoHome. Each party bears its own costs and attorney fees unless the arbitrator determines otherwise. This arbitration agreement does not prevent either party from seeking injunctive relief in court for intellectual property violations or other urgent matters.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Account Responsibilities</h3>
                <p>If you create an account, you are responsible for maintaining the confidentiality of your login credentials. All activities occurring under your account are your responsibility. Notify us immediately of any unauthorized access or security breaches. We are not liable for losses resulting from unauthorized account use if you failed to protect your credentials adequately.</p>
                <p style="margin-top: 15px;">Accounts may be suspended or terminated for violations of these terms, fraudulent activity, or abusive behavior toward staff. We reserve the right to refuse service to anyone for any lawful reason. Terminated accounts forfeit any unused credits or promotional balances without refund.</p>
            </div>

            <div class="modal_section_2p5k">
                <h3 class="modal_subtitle_7x4m">Contact for Terms Questions</h3>
                <p>Questions regarding these Terms of Service should be directed to legal@zenvohome.com or by calling (555) 874-2390. We will address inquiries promptly and provide clarification on any provisions you find unclear. Written correspondence can be sent to our main office address listed in the contact section of our website.</p>
            </div>
        </div>
    </div>

    <script>
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
            document.body.style.overflow = 'auto';
        }

        function closeModalOutside(event, type) {
            if (event.target.classList.contains('modal_overlay_8r5n')) {
                closeModal(type);
            }
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
        
</body>
</html>

















