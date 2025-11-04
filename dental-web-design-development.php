<?php include('inc/header.php');?>
<style>
  @import url(https://fonts.googleapis.com/css2?family=Poppins&display=swap);
@import url(https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&display=swap);

body {
	font-family: Montserrat, sans-serif;
	overflow-x: hidden;
	font-size: 14px;
	line-height: 22px;
	color: #4f4f4f;
	background: #fff;
	position: relative
}

.dropdown-backdrop {
	display: none !important
}

img.roundimg {
	border-radius: 50%
}

.linkBtn {
	display: block !important;
	background: #2f55c4;
	color: #fff;
	padding: 12px !important;
	font-size: 16px;
	border: 2px solid transparent !important;
	font-weight: 500;
	width: 200px !important;
	text-align: center;
	margin-top: 18px
}

.linkBtn:hover {
	color: #fff
}

section.prlog-sec .col-md-5 img {
	width: auto;
	display: table;
	margin: auto;
	height: 160px
}

.set-logo img {
	max-width: 100% !important
}

.top-bar a:hover i {
	color: #fff
}

.banner-content .lgt-btn.white-btn:hover {
	color: #fff;
	background: #2f55c4;
	border-color: #2f55c4
}

a {
	text-decoration: none;
	color: #000
}

a:focus,
a:hover {
	text-decoration: none
}

a:hover {
	transition: all .5s ease-in-out;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out
}

* {
	outline: 0 !important
}

ul {
	padding: 0;
	margin: 0;
	list-style-type: none
}

img {
	width: 100%
}

.pd-right {
	padding-left: 10px
}

input[type=email]:focus,
input[type=number]:focus,
input[type=password]:focus,
input[type=tel]:focus,
input[type=text]:focus,
input[type=url]:focus,
select:focus,
textarea:focus {
	transition: all .5s ease;
	-webkit-transition: all .5s ease;
	-moz-transition: all .5s ease;
	outline: 0
}

input[type=email],
input[type=number],
input[type=password],
input[type=tel],
input[type=text],
input[type=url],
textarea {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none
}

ul {
	padding: 0;
	margin: 0;
	list-style-type: none
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: Montserrat, sans-serif
}

p {
	font-size: 19px;
	font-family: Poppins, sans-serif;
	color: #181f3c;
	line-height: 30px;
	margin-bottom: 20px
}

.nopadding {
	padding: 0
}

.purple-bg {
	background: #f3f3fe
}

.center-col {
	margin: 0 auto;
	display: table;
	float: none
}

.all-section {
	padding: 60px 0
}

.pop-head {
	font-family: Poppins, sans-serif;
	color: #000;
	font-size: 14px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 5px
}

.pop-head span {
	color: #fe08a7
}

.section-head {
	color: #000;
	font-size: 44px;
	font-weight: 900;
	line-height: 55px;
	margin-bottom: 40px;
	margin-top: 0 !important
}

.section-head span {
	color: #fe08a7
}

.banner-ss.slick-dotted.slick-slider {
	margin-bottom: 0
}

.blue-btn {
	background: #2f55c4;
	color: #fff;
	display: inline-flex;
	padding: 10px;
	font-size: 16px;
	border: 2px solid transparent;
	font-weight: 500;
	width: 200px;
	text-align: center;
	align-items: center;
	justify-content: space-around;
	border-radius: 5px
}

.blue-btn:hover {
	color: #2f55c3;
	border-color: #2f55c4;
	background: #fff
}

.blue-btn.hvr-bounce-to-right:before {
	background: #2f55c4
}

.lgt-btn {
	background: #2f55c4;
	color: #fff;
	width: 100%;
	display: inline-block;
	padding: 12px;
	font-size: 16px;
	border: 2px solid transparent;
	font-weight: 500;
	width: 200px;
	text-align: center
}

.error-page .section-head {
	font-size: 170px;
	margin-top: 90px !important
}

.error-page .banner-content h5 {
	font-size: 32px;
	margin: 0 0 20px 0;
	text-align: center
}

.error-page .lgt-btn {
	display: table;
	margin: auto
}

.lgt-btn:hover {
	color: #fff;
	border-color: #0ad0db
}

.lgt-btn.hvr-bounce-to-right:before {
	background: #0ad0db
}

.flexRow {
	display: flex;
	align-items: center
}

.flexStart {
	display: flex;
	align-items: flex-start
}

.ml-2 {
	margin-left: 20px
}

.mb-3 {
	margin-bottom: 30px !important
}

.mb-4 {
	margin-bottom: 40px !important
}

.bottom-section {
	padding-bottom: 60px 0;
	padding: 0 0 30px
}

.p-right-0 {
	padding-right: 0 !important
}

.p-left-0 {
	padding-left: 0 !important
}

.mobile-nav .navbar-toggle {
	margin-right: 0;
	border: 1px solid #fff
}

.mobile-nav .navbar-toggle .icon-bar {
	background: #fff
}

.mobile-nav .navbar-nav {
	text-align: left
}

.mobile-nav .navbar-nav li a {
	display: flex;
	font-size: 13px;
	font-weight: 600;
	color: #fff;
	align-items: center;
	justify-content: space-between
}

.mobile-nav .navbar-nav li a .caret {
	float: right
}

.mobile-nav .nav .open>a,
.mobile-nav .nav .open>a:focus,
.mobile-nav .nav .open>a:hover {
	background-color: transparent;
	color: #0ad0db
}

.mobile-nav .nav>li>a:focus,
.mobile-nav .nav>li>a:hover {
	background-color: transparent;
	color: #0ad0db
}

@keyframes fixed-header {
	0% {
		transform: translateY(-100px)
	}

	100% {
		transform: translateY(0)
	}

}

header {
	background: #000
}

header .main-navigate.fixed {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 9;
	transition: all .5s ease-in-out;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	animation: fixed-header 1s .1s backwards ease-in-out;
	background: #000
}

.main-navigate {
	position: relative;
	padding: 10px 0
}

.top-bar {
	padding: 12px
}

.top-bar a {
	color: #fff;
	font-weight: 500;
	font-size: 20px;
	font-family: Montserrat;
	font-weight: 700
}

.top-bar a.red-phone {
	color: #fff;
	font-size: 20px;
	font-weight: 900;
	float: right !important;
	left: 0 !important
}

.dropdown-menu {
	background-color: #000
}

a.red-phone i {
	color: #e944a0;
	padding: 0 10px;
	padding-left: 40px
}

.top-bar a.red-phone:hover {
	color: #e944a0
}

.top-bar a:hover {
	color: #0ad0db
}

.top-bar .bd-btm {
	border-bottom: 1px solid #262626;
	padding: 10px
}

header ul.navbar-set>li>a {
	color: #fff;
	font-size: 14px;
	font-weight: 500;
	padding: 15px 12px;
	position: relative;
	display: block
}

header ul.navbar-set>li.megamenu>a::before {
	content: "\f107";
	position: absolute;
	top: 50%;
	right: -5px;
	transform: translateY(-50%);
	color: #fff;
	font-family: FontAwesome;
	font-size: 14px
}

header ul.navbar-set {
	float: right
}

header ul.navbar-set>li>a>i {
	font-weight: 900
}

header ul.navbar-set>li>a:hover {
	color: #0ad0db
}

.menu-section figure img {
	margin-top: 20%
}

header .main-navigate .col-md-8 {
	position: static
}

header .navigation>ul>li.megamenu .megamenu-dropdown {
	position: absolute;
	width: 100%;
	opacity: 0;
	visibility: hidden;
	height: 0;
	transition: all .5s ease-in-out;
	left: 0;
	z-index: 100;
	top: 100%
}

header .navigation>ul>li.megamenu.open .megamenu-dropdown {
	height: auto;
	opacity: 1;
	visibility: visible
}

.banner-ss .slick-dots li button:before {
	font-size: 12px
}

.banner-ss figure:focus {
	outline: 0
}

.banner-ss .slick-dots li.slick-active button:before {
	opacity: .75;
	color: #fe08a7
}

.banner-content .our-customers {
	display: flex;
	align-items: center;
	margin: 20px 0
}

.banner-content .our-customers img {
	width: auto;
	margin-right: 12px
}

.banner-content p {
	color: #272e49;
	font-size: 16px;
	font-weight: 600;
	font-style: italic;
	margin: 18px 0
}

.banner-content h5 {
	color: #fe08a7;
	font-size: 32px;
	font-weight: 900;
	margin: -30px 0 45px 0
}

.banner-content .lgt-btn.white-btn {
	background: #fff;
	color: #2f55c4;
	border-color: #2f55c3;
	margin-left: 10px
}

.banner-content .blue-btn.white-btn.hvr-bounce-to-right:before {
	background: #2f55c4
}

.banner-content .blue-btn.white-btn.hvr-bounce-to-right:hover {
	color: #fff
}

.banner-img img {
	width: 100%;
	object-fit: cover;
	display: block
}

.we-content p {
	font-size: 22px;
	color: #181f3c;
	font-weight: 700;
	line-height: 30px;
	margin: 20px 0
}

.we-section {
	overflow: hidden;
	padding: 50px 0 0 0
}

.service-section {
	background: #f3f3fe
}

.service-desc ul li a:hover {
	color: #2f55c4 !important
}

.service-desc ul li a {
	color: #2f55c4;
	font-size: 16px;
	font-weight: 900;
	font-family: Poppins, sans-serif
}

.service-desc ul li a:hover {
	color: #000
}

.service-desc ul li {
	display: flex;
	align-items: center;
	margin: 16px 0
}

.service-desc ul li i {
	color: #2f55c4;
	font-size: 16px;
	font-weight: 900;
	width: 16px
}

.service-box .section-head {
	font-size: 28px;
	line-height: 32px
}

.service-box:hover {
	-webkit-box-shadow: 0 2px 14px 2px #8778c6;
	-moz-box-shadow: 0 2px 14px 2px #8778c6;
	box-shadow: 0 2px 14px 2px #8778c6
}

.service-desc .section-head a:focus,
.service-desc .section-head a:hover {
	color: #2f55c4
}

.service-box h3.nbr {
	color: #181f3c;
	font-size: 23px;
	font-weight: 700;
	line-height: 35px
}

.service-box img {
	object-fit: contain;
	height: 200px;
	width: 200px;
	margin: 0 auto
}

.service-box {
	padding: 30px;
	margin-bottom: 60px;
	min-height: 575px;
	border-bottom: 9px solid #000;
	background: #fff;
	transition: all .5s ease-in-out
}

.service-box:hover {
	border-color: #2f55c4
}

.portfolio-section .logo-sli figure img {
	height: auto
}

.port-slider figure {
	margin: 9px;
	border-left: 5px solid #fef5e3;
	border-right: 5px solid #fee0e0;
	border-top: 5px solid #fef5e3;
	border-bottom: 5px solid #fee0e0
}

.logo-ss figure {
	border: 0
}

.port-slider a:focus {
	outline: 0
}

.view-btn {
	display: flex;
	margin: 2% 0;
	justify-content: center;
	text-align: center;
	margin-bottom: 0
}

.portfolio-section .nav-pills>li>a {
	border-radius: 0;
	color: #000;
	font-size: 16px;
	font-weight: 600
}

.portfolio-section .view-btn .blue-btn {
	width: 14%;
	text-align: center
}

.portfolio-section .nav-pills>li.active>a {
	color: #fff !important;
	background-color: #ff09aa
}

.main_port_mm {
	display: flex;
	justify-content: center
}

.portfolio-section .tab-content .tab-pane {
	display: block;
	overflow: hidden;
	height: 0
}

.portfolio-section .tab-content .tab-pane.active {
	height: auto
}

.case-box .flexRow {
	justify-content: space-between
}

.case-box {
	padding: 25px;
	position: relative;
	border-bottom: 5px solid #000;
	margin: 12px;
	background: #fff1fa
}

.case-box p.soon {
	font-weight: 600;
	margin-top: 30px;
	font-size: 16px
}

.case-section .view-btn {
	width: 15%;
	margin: 3% auto
}

.case-box:hover {
	background: #ff09aa;
	color: #fff;
	transition: all .5s ease-in-out;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	border-bottom: 0;
	-webkit-box-shadow: 0 2px 14px 2px #8778c6;
	-moz-box-shadow: 0 2px 14px 2px #8778c6;
	box-shadow: 0 2px 14px 2px #8778c6
}

.case-box:hover a {
	color: #fff
}

.case-box:hover h3 {
	color: #fff
}

.case-box:hover p {
	color: #fff
}

.case-box h3.section-head {
	font-size: 34px;
	line-height: 35px;
	margin-bottom: 30px
}

.case-box a {
	color: #181f3c;
	font-size: 16px;
	font-weight: 900;
	margin: 20px 0;
	display: inline-block
}

.case-box img.hidden-img {
	margin-bottom: 20px;
	margin-left: 25%;
	visibility: hidden;
	display: none
}

.case-box:hover img.hidden-img {
	visibility: visible;
	display: block
}

.case-box img.top-img {
	position: absolute;
	width: 25%;
	right: 20px;
	top: 20px
}

.brand-box img {
	height: 100px;
	width: 150px;
	object-fit: contain;
	margin: 0 auto
}

.grey-box img {
	filter: grayscale(100%)
}

.grey-box:hover img {
	filter: grayscale(0)
}

.brand-box {
	border: 1px solid #f2f2f2;
	padding: 40px
}

.award-section .brand-box {
	padding: 20px
}

.award-section .brand-box img {
	height: 200px;
	width: 200px;
	object-fit: contain;
	margin: 0 auto
}

.blue-bg {
	background: #303293;
	padding: 45px
}

.expert-part {
	width: 80%;
	float: right
}

.expert-part h4 {
	color: #fff;
	font-weight: 900;
	font-size: 24px;
	line-height: 30px;
	margin-bottom: 26px
}

form.exp-form input.form-control {
	background: #f4f4f4;
	border-radius: 0;
	padding: 22px
}

form.exp-form textarea.form-control {
	background: #f4f4f4;
	border-radius: 0;
	padding: 22px;
	resize: none;
	width: 100%
}

form.exp-form select {
	background: #f4f4f4;
	border-radius: 0;
	padding: 12px;
	resize: none;
	width: 100%
}

form.exp-form p.select-note {
	color: #fff;
	font-size: 16px;
	font-style: italic;
	margin-top: 6px;
	margin-bottom: 5px
}

form.exp-form .blue-btn {
	margin-right: 12px;
	width: 55%;
	float: right
}

.contact-right {
	padding: 70px 30px 0;
	position: relative
}

.contact-right a.contact-phone {
	color: #303293;
	font-size: 50px;
	font-weight: 900
}

.contact-right h3 {
	font-weight: 900;
	line-height: 34px;
	font-size: 24px;
	color: #000;
	margin-bottom: 20px
}

.det-box img {
	height: 63px;
	width: 63px;
	object-fit: contain;
	margin-right: 20px
}

.det-box h3 span {
	font-weight: 400
}

.det-box h3 {
	font-size: 25px;
	color: #2d2d2d
}

.det-box {
	margin-bottom: 30px;
}

ul.social li a {
	border: 1.4px solid #000;
	width: 45px;
	height: 45px;
	border-radius: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 21px;
	margin: 0 5px
}

ul.social {
	display: flex;
	margin-top: 25%
}

ul.social li:hover a {
	background: #08d1db;
	border-color: transparent;
	transition: all .5s ease-in-out;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	-webkit-box-shadow: -1px 0 15px -4px #08d1db;
	-moz-box-shadow: -1px 0 15px -4px #df2429;
	box-shadow: -1px 0 15px -4px #08d1db
}

ul.social li:hover i {
	color: #fff
}

.banner-ss img {
	width: 90%;
	margin: 0 auto;
	margin-bottom: 30px;
	object-fit: cover;
	display: block;
	height: 340px
}

.social-content {
	position: relative;
	top: 0
}

.contact-icon-new img {
	width: 35px;
	position: absolute;
	content: '';
	right: 65px;
	top: 47px;
	bottom: 0
}

.call-to-action-margin {
	margin-top: 0px;
}

ul.social-new-1 {
	margin-top: 8% !important;
	margin-bottom: 30px
}

.footer-1 p {
	color: #181f3c;
	font-size: 14px;
	line-height: 22px;
	font-family: Montserrat, sans-serif;
	font-weight: 400;
	margin-top: 20px
}

.payment-margin {
	margin-top: 25px
}

.webdesign-2022 img {
	width: 50% !important
}

.footer-head h3 {
	color: #181f3c;
	font-size: 24px;
	font-weight: 700;
	margin-bottom: 15px;
	margin-top: 0
}

.footer-1 img {
	margin-top: -29px;
	filter: brightness(.1);
	width: auto
}

footer {
	overflow: hidden
}

ul.ftr-list li a {
	font-size: 15px;
	color: #181f3c;
	font-weight: 300
}

ul.ftr-list.contact-det li {
	display: flex
}

ul.ftr-list.contact-det li i {
	font-size: 26px;
	width: 20%
}

ul.ftr-list.contact-det li a {
	width: 80%
}

ul.ftr-list li {
	padding: 8px 0
}

footer {
	padding: 50px 0 0 0
}

footer form.search-bar input {
	border: 0;
	padding: 14px;
	width: 100%;
	margin-bottom: 11px
}

.footer-text h4 {
	font-size: 16px;
	font-weight: 500;
	line-height: 25px;
	color: #181f3c;
	margin-top: 35px
}

.footer-text h4 span {
	color: #181f3c;
	font-weight: 600;
	font-size: 22px
}

ul.ftr-list li a:hover {
	color: #0ad0db
}

footer a:hover {
	color: #0ad0db
}

.copy-right p {
	color: #0ad0db;
	font-size: 15px;
	font-weight: 500;
	margin-top: 0;
	margin-bottom: 0
}

.copy-right ul li a {
	color: #0ad0db;
	font-size: 14px;
	font-weight: 500
}

.copy-right ul li a:hover {
	color: #000
}

footer form.search-bar button.red-btn {
	width: 60%;
	font-size: 15px;
	font-weight: 600;
	border: 0
}

.footer-text .pop-head {
	font-size: 20px;
	font-weight: 400
}

footer ul.social {
	margin: 0
}

footer ul.social li a {
	background: #efefef;
	border-color: #efefef
}

.copy-right {
	border-top: 1px solid #d4dce7;
	padding: 17px 0;
	margin-top: 10px
}

.ftr-logos img {
	margin-right: 20px
}

.ftr-logos {
	flex-wrap: wrap;
	display: flex;
	align-items: center;
	justify-content: flex-start;
	margin-top: 23px;
	border-top: 1px solid #333
}

.ftr-logos img {
	width: auto
}

.dots-img:before {
	content: '';
	position: absolute;
	background-image: url(../img/dots.png);
	background-repeat: no-repeat;
	height: 100px;
	width: 90px;
	z-index: 1;
	top: -99px;
	right: -12%;
	left: 0;
	margin: 0 auto
}

.dots-img {
	position: relative
}

.case-section .dots-img:before {
	right: -90%
}

.offer-section ul.nav.nav-pills {
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0
}

.offer-section .nav-pills>li.active>a {
	color: #fff;
	background-color: #fe08a7;
	border-radius: 0
}

.offer-section .nav-pills>li>a {
	border-radius: 4px;
	color: #181f3c;
	font-size: 13px;
	font-weight: 600;
	padding: 10px 7px
}

.brand-strategy .section-head {
	font-size: 30px;
	margin-bottom: 20px;
	text-align: center;
	border-bottom: 1px solid #ccc
}

.brand-strategy h4 {
	color: #df2429;
	font-size: 50px;
	font-weight: 900;
	margin: 23px 0
}

.brand-strategy h4 span {
	font-size: 31px;
	color: #000
}

.brand-strategy ul li i {
	background: #f57d80;
	color: #fff;
	font-size: 17px;
	padding: 0;
	border-radius: 100%;
	height: 30px;
	width: 30px;
	object-fit: contain;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-right: 16px
}

.brand-strategy ul li {
	margin: 10px 0
}

.brand-strategy {
	background: #fff;
	position: relative;
	-webkit-box-shadow: 0 0 16px -5px rgba(0, 0, 0, .75);
	-moz-box-shadow: 0 0 16px -5px rgba(0, 0, 0, .75);
	box-shadow: 0 0 16px -5px rgba(0, 0, 0, .75);
	z-index: 99
}

.sec-pd {
	padding: 30px
}

.offer-section .tab-content {
	margin-top: 2%
}

.brand-strategy .get-started {
	text-align: center;
	background: #f5f8fb;
	padding: 16px;
	margin-top: 35px
}

.brand-strategy .get-started:hover a {
	color: #cd2221
}

.customized-sec .contact-btn:hover a {
	color: #181f3c
}

.brand-strategy .get-started a {
	color: #181f3c;
	font-weight: 600;
	font-size: 16px
}

.brand-strategy .get-started a i {
	color: #e13a3e;
	margin-left: 13px
}

.customized-sec .contact-btn a {
	color: #fff;
	font-weight: 600;
	font-size: 16px
}

.customized-sec .contact-btn a i {
	margin-left: 10px
}

.customized-sec {
	background: #181f3c;
	-webkit-box-shadow: 0 2px 14px 2px #8778c6;
	-moz-box-shadow: 0 2px 14px 2px #8778c6;
	box-shadow: 0 2px 14px 2px #8778c6
}

.customized-sec h4 {
	color: #fff;
	text-transform: uppercase;
	font-size: 22px;
	border-bottom: 2px solid #df2429;
	padding-bottom: 17px
}

.customized-sec h5 {
	color: #fff;
	font-size: 17px;
	padding: 10px 0
}

.customized-sec p {
	color: #abb7c4;
	font-size: 17px
}

.customized-sec table {
	margin: 27px 0;
	color: #fff;
	text-align: center
}

.customized-sec table>tbody>tr>td {
	padding: 17px;
	border: 2px solid #28356c
}

.package .scroll-wrapper::-webkit-scrollbar {
	width: 6px
}

.package .scroll-wrapper::-webkit-scrollbar-track {
	box-shadow: inset 0 0 5px grey;
	border-radius: 10px
}

.package .scroll-wrapper::-webkit-scrollbar-thumb {
	background: #2f55c4;
	border-radius: 10px
}

.package .scroll-wrapper::-webkit-scrollbar-thumb:hover {
	background: #000
}

.package .scroll-wrapper::-moz-scrollbar {
	width: 6px
}

.package .scroll-wrapper::-moz-scrollbar-track {
	box-shadow: inset 0 0 5px grey;
	border-radius: 10px
}

.package .scroll-wrapper::-moz-scrollbar-thumb {
	background: #2f55c4;
	border-radius: 10px
}

.package .scroll-wrapper::-moz-scrollbar-thumb:hover {
	background: #000
}

.package .scroll-wrapper {
	position: relative;
	overflow-y: scroll
}

.package .scroll-wrapper.scroll-wrapper-1 {
	height: 200px
}

.package .scroll-wrapper.scroll-wrapper-2 {
	height: 120px
}

.package h4 {
	color: #000;
	font-size: 19px;
	font-weight: 700
}

.package h3 {
	color: #000;
	font-size: 38px;
	font-weight: 800
}

.package:hover {
	-webkit-box-shadow: 0 2px 14px 2px #8778c6;
	-moz-box-shadow: 0 2px 14px 2px #8778c6;
	box-shadow: 0 2px 14px 2px #8778c6
}

.package h3 sub {
	font-weight: 500;
	font-size: 14px
}

.package h3 sup {
	font-weight: 500;
	font-size: 31px
}

.package h4 {
	color: #000;
	font-size: 19px;
	font-weight: 700
}

.package h3 {
	color: #000;
	font-size: 44px;
	font-weight: 800
}

.package h3 sub {
	font-weight: 500;
	font-size: 14px
}

.package h3 sup {
	font-weight: 500;
	font-size: 30px;
	margin-right: 5px
}

.package a {
	display: inline-block;
	color: #000;
	font-size: 17px;
	font-weight: 800;
	text-transform: capitalize;
	border: 1px solid #000;
	padding: 10px;
	width: 72%;
	border-radius: 30px;
	margin: 15px 0
}

.package p {
	color: #6a6a6a;
	font-size: 15px
}

.package ul.pkg-list {
	color: #000;
	text-align: left;
	font-weight: 600;
	line-height: 26px;
	font-size: 13px
}

.package ul.pkg-list li {
	margin-bottom: 5px
}

.package ul.pkg-list li i {
	padding: 0 2px;
	position: relative;
	top: .5px
}

.package {
	padding: 40px 25px;
	margin-bottom: 30px;
	-moz-box-shadow: 0 0 7px -3px rgba(0, 0, 0, .75);
	box-shadow: 0 0 7px -3px rgba(0, 0, 0, .75);
	position: relative;
	border-radius: 5px;
	transition: all .5s ease-in-out
}

.package .btn-box a:hover {
	background: #000;
	color: #fff;
	transition-delay: 0s !important;
	-webkit-transition: 0s !important
}

.package button {
	display: inline-block;
	color: #000;
	font-size: 17px;
	font-weight: 800;
	text-transform: capitalize;
	border: 1px solid #000;
	padding: 10px;
	width: 72%;
	border-radius: 30px;
	margin: 15px 0;
	background: 0 0
}

.package button:hover {
	background: #000;
	color: #fff
}

.package h5 {
	background: #000;
	color: #fff;
	padding: 13px;
	position: absolute;
	top: -15px;
	left: 0;
	right: 0;
	border-radius: 5px
}

.industry-section .ind-box h4 {
	color: #ff09aa;
	font-weight: 900;
	margin: 10px 0
}

.industry-section .ind-box img {
	height: 50px;
	width: 50px;
	object-fit: contain;
	margin: 0 auto
}

.industry-section .ind-box {
	margin-bottom: 20%
}

.test-box p {
	color: #000;
	font-size: 17px;
	font-weight: 800;
	font-style: italic;
	line-height: 27px
}

.test-box .flexRow {
	justify-content: center
}

.test-box {
	background: rgba(0, 0, 0, 0) linear-gradient(281deg, #75e0eb 0, #75e0eb 85%, #fff 85%, #fff 38%, rgba(255, 255, 255, 0) 83%) repeat scroll 0 0;
	padding: 30px;
	position: relative;
	height: auto
}

.test-box img.comma {
	position: relative;
	top: -15px;
	left: -10px
}

.test-box h3 {
	color: #000;
	font-size: 26px;
	font-weight: 800;
	text-transform: uppercase;
	font-style: italic;
	line-height: 27px
}

.test-box h3 span {
	font-size: 10px;
	line-height: 0
}

.test-box img {
	height: 60px;
	width: 60px;
	border-radius: 100%;
	object-fit: contain;
	margin-left: 15px
}

.loader {
	position: fixed;
	z-index: 99999;
	height: 100%;
	width: 100%;
	background: #f3f3fe
}

.loader .auto-center {
	height: 100%;
	display: inline-block;
	vertical-align: middle
}

.loader .bounce-conteneur {
	display: inline-block;
	width: 100%;
	vertical-align: middle;
	text-align: center
}

.loader .bounce-conteneur .bounce {
	display: inline-block;
	height: 13px;
	width: 13px;
	background: #0ad0db;
	border-radius: 100%;
	margin: 2px
}

.loader .bounce-conteneur .bounce-left {
	animation: left 1.5s ease infinite
}

.loader .bounce-conteneur .bounce-center {
	animation: center 1.5s ease infinite
}

.loader .bounce-conteneur .bounce-right {
	animation: right 1.5s ease infinite
}

@keyframes left {
	0%,
	100%,
	50%,
	75% {
		transform: scale(1)
	}

	25% {
		transform: scale(1.5)
	}

}

@keyframes center {
	0%,
	100%,
	25%,
	75% {
		transform: scale(1)
	}

	50% {
		transform: scale(1.5)
	}

}

@keyframes right {
	0%,
	100%,
	25%,
	50% {
		transform: scale(1)
	}

	75% {
		transform: scale(1.5)
	}

}

@-webkit-keyframes left {
	0%,
	100%,
	50%,
	75% {
		transform: scale(1)
	}

	25% {
		transform: scale(1.5)
	}

}

@-webkit-keyframes center {
	0%,
	100%,
	25%,
	75% {
		transform: scale(1)
	}

	50% {
		transform: scale(1.5)
	}

}

@-webkit-keyframes right {
	0%,
	100%,
	25%,
	50% {
		transform: scale(1)
	}

	75% {
		transform: scale(1.5)
	}

}

section.inner-banner {
	position: relative
}

.banner-text {
	position: absolute;
	top: 0;
	width: 100%;
	text-align: center;
	left: 0;
	right: 0;
	bottom: 0;
	display: flex;
	align-items: center;
	justify-content: center
}

.banner-text h3 {
	color: #fff;
	text-transform: capitalize;
	font-size: 65px;
	font-weight: 900
}

.about-content .section-head {
	font-size: 32px;
	margin: 0;
	margin-bottom: 15px
}

.about-content p {
	line-height: 31px;
	font-size: 19px
}

.about-section figure img {
	border: 8px solid #ddd
}

.row.mg-btm {
	margin-bottom: 6%
}

.fact-boxes {
	display: flex
}

.brand-box.fact-box img {
	width: 60px;
	height: 60px;
	object-fit: contain;
	margin: 0;
	margin-bottom: 10px
}

.brand-box.fact-box.two-col {
	width: 40%
}

.brand-box.fact-box h3 {
	font-size: 22px;
	margin: 0;
	line-height: 32px;
	margin-bottom: 15px
}

.brand-box.fact-box p {
	font-weight: 500;
	font-size: 12px;
	line-height: 20px
}

.fact-boxes .fact-box {
	width: 20%
}

.port-imgs {
	display: flex
}

.portfolio-section .tab-content {
	margin-top: 0
}

.portfolio-section .slick-slide img {
	display: block;
	height: 430px;
	object-fit: cover;
	object-position: top;
	width: 100%
}

.port-imgs a {
	border: 5px solid #fff
}

.portfolio-page .nav-pills {
	margin-bottom: 30px
}

.process-text h3 {
	text-transform: uppercase;
	position: relative;
	font-size: 53px
}

.process-section .container {
	border-bottom: 1px solid #ebebeb;
	padding-bottom: 4%
}

.process-text h3:after {
	content: '';
	background: #7ae6ec;
	height: 3px;
	width: 40%;
	position: absolute;
	bottom: -13px;
	left: 0
}

.culture-flex {
	display: flex;
	justify-content: center
}

.culture-flex .ind-box {
	width: 20%;
	margin: 0;
	min-height: 300px;
	padding: 20px 10px;
	margin: 0 5px
}

.culture-flex .ind-box p {
	font-size: 16px;
	line-height: 22px;
	font-weight: 600
}

.culture-flex .ind-box:hover {
	background: #7ae6ec
}

.culture-flex .ind-box:hover h4 {
	color: #000
}

.onboard-content .section-head {
	font-size: 38px
}

.onboard-section .nav-pills>li {
	float: none !important
}

.onboard-section .nav-pills>li>a {
	color: #000;
	font-weight: 600;
	font-size: 19px
}

.onboard-section .nav-pills>li.active>a {
	color: #303293;
	background: 0 0
}

.onboard-content .section-head {
	font-size: 38px
}

.onboard-section .item-box {
	background: #303293;
	padding: 40px;
	-webkit-box-shadow: 0 2px 14px 2px #8778c6;
	-moz-box-shadow: 0 2px 14px 2px #8778c6;
	box-shadow: 0 2px 14px 2px #8778c6;
	min-height: 230px
}

.onboard-section .item-box p {
	color: #fff;
	font-size: 18px
}

section.process-section .test-box {
	height: auto !important
}

section.process-section {
	padding: 40px 0
}

.award-box .section-head {
	font-size: 32px;
	margin: 10px 0
}

.award-box p {
	font-size: 15px;
	line-height: 26px;
	margin-bottom: 20px
}

.award-box h4 {
	display: inline-block;
	font-size: 14px;
	color: #000;
	font-weight: 700;
	text-transform: uppercase;
	line-height: 24px;
	border-bottom: 2px solid #303293
}

.award-box img {
	width: 100%;
	object-fit: contain;
	display: block;
	height: 200px
}

.award-box {
	padding: 40px
}

.award-box:hover {
	background: #eaf2ff;
	border-color: transparent;
	border-radius: 20px 0 1px 8px -2px #303293;
	-moz-box-shadow: 0 1px 8px -2px #303293;
	box-shadow: 0 1px 8px -2px #303293
}

.faq-section .panel.panel-default {
	margin-bottom: 25px;
	position: relative
}

.faq-section .panel-default>.panel-heading+.panel-collapse>.panel-body {
	background: #f9f9f9
}

.faq-section .panel-default>.panel-heading {
	padding: 20px;
	background: #fff;
	color: #000
}

.faq-section .panel-default>.panel-heading i {
	background: #2e55c3;
	padding: 0;
	position: absolute;
	left: 0;
	top: 0;
	border: 2px solid #ff08a9;
	color: #fff;
	font-size: 45px;
	bottom: 0;
	width: 55px;
	display: flex;
	align-items: center;
	justify-content: center;
	height: 65px
}

.faq-section .panel-default>.panel-heading .panel-title a {
	padding: 0 53px;
	font-family: 'Roboto Condensed', sans-serif;
	font-size: 20px;
	font-weight: 400
}

.faq-section .panel-default>.panel-heading .panel-title a:focus,
.faq-section .panel-default>.panel-heading .panel-title a:hover {
	color: #000
}

.faq-section .panel-default>.panel-heading+.panel-collapse>.panel-body p {
	font-size: 17px;
	font-family: 'Roboto Condensed', sans-serif
}

.award-box.download-box img {
	width: 80%;
	margin: 20px 0
}

.award-box.download-box h3 {
	font-size: 25px;
	line-height: 28px
}

.detail-content h3 {
	font-size: 30px;
	width: 70%
}

.detail-content img {
	padding: 20px 0
}

.detail-content p {
	color: #999;
	font-size: 15px
}

.detail-content .detail-head p {
	color: #999;
	font-size: 17px;
	text-transform: uppercase
}

.detail-content .detail-head {
	justify-content: space-between
}

.detail-content h3 span.tag {
	color: #fff;
	background: #08d1db;
	font-size: 20px;
	text-transform: uppercase;
	padding: 8px;
	border-radius: 9px;
	margin-left: 5%
}

.press-box {
	border: 3px solid #f9f7f7;
	min-height: 400px;
	padding: 12px;
	margin-bottom: 30px
}

.press-box h3 {
	color: #181f3c;
	font-weight: 700;
	font-size: 17px
}

.press-box a {
	color: #ff09aa;
	font-size: 16px;
	font-weight: 700
}

.press-box a:hover {
	color: #0ad0db
}

.detail-content.insight-detail {
	display: flex;
	background: #eceaff;
	margin-bottom: 30px
}

.detail-content.insight-detail img {
	padding: 0
}

.detail-content.insight-detail .detail-text {
	padding: 20px 36px
}

.detail-content.insight-detail .detail-text h3 span {
	margin: 0;
	display: block;
	width: 100px;
	text-align: center
}

.detail-content.insight-detail .detail-text p.date {
	text-transform: uppercase;
	font-size: 17px
}

.detail-content.insight-detail .detail-text p {
	color: #777;
	line-height: 27px;
	margin-bottom: 20px
}

.detail-content.insight-detail .detail-text h3.section-head {
	font-size: 30px;
	margin: 10px 0;
	line-height: 35px;
	width: 100%
}

.detail-content.insight-detail:hover {
	background: #303394
}

.detail-content.insight-detail:hover a {
	background: #fff;
	color: #303394;
	border-color: transparent
}

.detail-content.insight-detail:hover h3,
.detail-content.insight-detail:hover p {
	color: #fff
}

.detail-content.insight-detail:hover h3 span.tag {
	background: #ff09aa
}

.contact-left .section-head span {
	font-size: 36px
}

.contact-left .section-head {
	font-size: 36px
}

.contact-box h4 {
	font-size: 14px;
	color: #000;
	text-transform: uppercase;
	font-weight: 900
}

.contact-box p {
	font-size: 18px;
	line-height: 28px
}

.contact-box h4 i {
	color: #0ad0db;
	font-size: 25px !important;
	margin-right: 10px
}

.contact-box p {
	font-weight: 500;
	font-size: 14px !important
}

.contact-section button {
	float: right;
	font-size: 13px;
	padding: 10px
}

.contact-section p {
	font-size: 16px;
	line-height: 26px;
	margin: 0;
	color: #000;
	margin-bottom: 24px
}

.expert-part select {
	width: 100%;
	height: 50px;
	border-radius: 5px;
	padding-left: 10px
}

.contact-box {
	margin-bottom: 20px
}

.contact-section p {
	font-size: 13px;
	line-height: 26px;
	margin-bottom: 20px;
	color: #000
}

.contact-section p.select-note {
	color: #fff
}

.contact-form input.form-control {
	padding: 20px;
	padding-left: 55px
}

.contact-form .form-group {
	position: relative
}

.contact-form .form-group i {
	position: absolute;
	top: 10px;
	font-size: 19px;
	left: 14px;
	border-right: 1px solid #ccc;
	width: 30px
}

.contact-form textarea.form-control {
	padding: 10px;
	padding-left: 55px
}

.map-sec iframe {
	display: block;
	width: 100%;
	height: 400px
}

.career-box {
	background: #ebebff;
	margin-bottom: 30px
}

.career-box figure {
	background: #72a3f9;
	width: 30%
}

.career-box .career-text {
	width: 70%;
	padding: 25px
}

.career-text h4 {
	color: #000;
	font-size: 20px;
	font-weight: 900
}

.career-box .career-text p {
	color: #000;
	font-size: 16px;
	line-height: 25px
}

.career-box .career-text ul li {
	list-style-type: disc
}

.career-box .career-text ul {
	margin-left: 5%
}

.career-box .career-text a {
	color: #000;
	font-weight: 700
}

.career-box .career-text a:hover {
	color: #0ad0db
}

.career-box #more {
	display: none
}

.career-box a.blue-btn.hvr-bounce-to-right {
	text-align: center;
	color: #fff;
	margin: 20px 0
}

.why-box {
	background: #bff7fa;
	border-radius: 20px;
	width: 90%
}

.why-box figure.why-right {
	position: relative;
	right: -30%;
	/* top: 85px; */
}

.why-box figure.why-right img {
	border-radius: 20px
}

.point-box .point-text h4 {
	font-size: 18px;
	color: #000;
	text-transform: uppercase;
	font-weight: 900
}

.point-box .point-text p {
	font-size: 15px
}

.point-box img {
	width: 10%;
	margin-right: 15px
}

.point-box.flexRow {
	align-items: flex-start;
	margin-bottom: 25px
}

.why-box .section-head {
	text-align: center;
	font-size: 60px;
}

.why-box {
	padding: 30px 45px
}

.brand-stories {
	background: #f3f3fe
}

.brand-stories .ind-box {
	padding: 40px 4px;
	background: #fff;
	margin-bottom: 0;
	transition: all .5s ease-in-out
}

.brand-stories .ind-box img {
	display: block;
	margin: 0 auto;
	margin-bottom: 20px;
	width: auto;
	height: 65px
}

.brand-stories .ind-box h4 {
	font-size: 18px;
	font-weight: 700;
	color: #ff09aa;
	line-height: 30px;
	margin-bottom: 20px;
	text-transform: capitalize;
	transition: inherit
}

.brand-stories .ind-box p {
	font-size: 15px;
	font-weight: 400;
	color: #000;
	line-height: 25px
}

.brand-stories .ind-box:hover {
	background: #7ae6ec;
	transform: scale(1.1)
}

.brand-stories .ind-box:hover h4 {
	color: #000
}

.services-how .nav-pills {
	border-left: 2px solid #000;
	position: relative;
	right: -30px;
	z-index: 1
}

.services-how .nav-pills li {
	margin-left: 0
}

.services-how .nav-pills li a {
	padding: 12px 35px;
	border-radius: 0
}

.services-how .nav-pills li a:hover {
	background: #ff09aa;
	color: #fff
}

.services-how .nav-pills li.active a {
	background: #ff09aa;
	color: #fff
}

.services-how .item-box {
	padding: 50px;
	min-height: auto;
	text-align: center
}

.services-how .item-box figure {
	margin-bottom: 20px
}

.services-how .item-box figure img {
	width: auto;
	height: auto
}

.services-how .item-box p {
	font-size: 18px;
	font-weight: 700;
	color: #fff;
	line-height: 35px
}

.logo-thumbnail {
	position: relative;
	background: #fff;
	outline: 0;
	padding: 20px;
	transition: all .5s ease-in-out
}

.logo-thumbnail a {
	display: block;
	outline: 0
}

.logo-thumbnail a img {
	width: 100%;
	object-fit: contain;
	display: block;
	height: 100px
}

.logo-thumbnail:hover {
	box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1)
}

.experience-sec {
	background: #303293
}

.experience-sec h4 {
	margin: 0;
	font-size: 22px;
	font-weight: 900;
	color: #fff;
	line-height: 32px
}

.experience-thumbnail {
	position: relative;
	transition: all .5s ease-in-out;
	text-align: center;
	padding: 10px
}

.experience-thumbnail h2 {
	font-size: 51px;
	font-weight: 900;
	color: #7ae6ec;
	line-height: 61px;
	margin: 0
}

.experience-thumbnail span {
	font-size: 51px;
	font-weight: 900;
	color: #7ae6ec;
	line-height: 61px;
	margin: 0
}

.experience-thumbnail h5 {
	font-size: 12px;
	font-weight: 600;
	color: #fff;
	line-height: 25px;
	margin: 0
}

.services-industry {
	background: #f3f3fe
}

.content-pg .content-head {
	font-size: 23px;
	color: #000;
	font-weight: 600;
	margin-top: 4%
}

.content-pg p {
	font-size: 16px;
	line-height: 27px
}

.menu-section h3.menu-head {
	color: #000;
	font-size: 26px;
	font-weight: 700;
	line-height: 36px;
	margin: 0;
	margin-bottom: 0;
	padding-bottom: 10px
}

.menu-section .flexRow {
	align-items: flex-start
}

.menu-section .menu-box h3 {
	font-size: 17px !important;
	color: #000;
	font-weight: 700;
	margin: 0;
	line-height: 22px;
	padding: 0;
	transition: all .5s ease-in-out
}

section.review_sec.new-testi-page-st h2 {
	font-size: 30px
}

.menu-section .menu-box img {
	object-fit: contain;
	width: 40px;
	margin-right: 10px
}

.menu-section {
	padding: 10px 0 20px 0;
	background-color: #e8ebf4 !important;
	box-shadow: 0 15px 10px -4px #11111133
}

.menu-section:before {
	background-color: #cad8ff !important;
	content: "";
	width: 34vw;
	height: 100%;
	position: absolute;
	right: 0;
	top: 0
}

.menu-section .menu-box.flexRow {
	align-items: flex-start;
	margin-bottom: 10px;
	padding: 15px 10px
}

.menu-section .menu-box p {
	font-size: 16px;
	color: #8e8d8d;
	margin: 0;
	margin-top: 5px;
	font-weight: 400 !important
}

.menu-section ul.social {
	display: flex;
	margin-top: 0;
	margin-bottom: 70px
}

.menu-section .menu-box:hover {
	background: #fff;
	-webkit-box-shadow: -2px 0 23px -16px rgba(0, 0, 0, .75);
	-moz-box-shadow: -2px 0 23px -16px rgba(0, 0, 0, .75);
	box-shadow: -2px 0 23px -16px rgba(0, 0, 0, .75)
}

.menu-section .menu-box:hover img {
	filter: invert(70%) sepia(13%) saturate(3207%) hue-rotate(130deg) brightness(95%) contrast(80%)
}

.menu-section .social-content p {
	font-size: 16px;
	margin: 0;
	line-height: 26px;
	margin-bottom: 30px
}

.menu-section .menu-box:hover h3 {
	color: #4adbe5
}

.menu-section ul.social li a {
	border: 1.4px solid #fff;
	border-radius: 9px;
	background: #fff
}

.menu-section ul.social li a:hover {
	box-shadow: none;
	background: 0 0;
	color: #000
}

.menu-section .lgt-btn.white-btn {
	background: 0 0;
	color: #2f55c4;
	border-color: #2f55c3;
	display: inline-block;
	width: 50%
}

.menu-section a.lgt-btn {
	width: 50%;
	margin-left: 10px
}

.sitemap-pg ul.site-maplist {
	list-style-type: disc;
	margin-left: 5%
}

.sitemap-pg ul.site-maplist li a {
	text-transform: capitalize
}

.sitemap-pg ul.site-maplist.second-level {
	margin-left: 4%;
	margin-top: 15px
}

.sitemap-pg ul.site-maplist li {
	padding: 4px 0
}

.sitemap-pg ul.site-maplist li a:hover {
	color: #08d1db
}

.plan-form-head .logo {
	width: 30% !important;
	margin: 0 auto
}

.plan-form input.form-control {
	padding: 0 10px;
	height: 40px;
	box-shadow: none;
	border-radius: 0
}

.plan-form textarea.form-control {
	padding: 10px 15px;
	height: auto;
	box-shadow: none;
	border-radius: 0;
	resize: none
}

.port-listing .port-slider.web-port figure img {
	height: 800px;
	object-fit: cover
}

.port-listing .port-slider.brand-port figure img {
	height: 300px;
	object-fit: cover
}

.port-listing .port-slider {
	margin-bottom: 40px
}

.port-listing h3.section-head {
	margin-top: 30px !important
}

.web-dev .banner-content p {
	font-style: normal;
	font-weight: 400
}

.serve-flex {
	justify-content: space-around
}

.flexRow.serve-flex ul li {
	list-style-type: disc
}

section.industry-section.web-box-sec .ind-box p {
	font-size: 15px
}

.comboopack {
	background: #f6f6f8;
	padding-bottom: 90px
}

.comboopack .combopackwrap {
	background: #fff;
	width: 100%;
	display: inline-block;
	box-shadow: 0 6px 20px 0 rgba(0, 0, 0, .06)
}

.comboopack .combopackwrap .headdd {
	padding: 20px 50px;
	background: #2f55c4;
	text-align: left;
	position: relative
}

.comboopack .combopackwrap .headdd figure {
	position: absolute;
	margin-bottom: 0;
	right: -20px;
	top: -30px
}

.comboopack .combopackwrap .headdd figure img {
	width: 185px
}

.comboopack .combopackwrap .headdd h3 {
	text-align: left;
	padding-bottom: 0;
	color: #fff;
	font-size: 34px;
	text-transform: capitalize
}

.comboopack .combopackwrap .headdd h3 span {
	display: block;
	font-size: 24px;
	margin-top: 10px
}

.comboopack .combopackwrap .bodyyy {
	font-size: 0;
	padding: 30px 50px
}

.comboopack .combopackwrap .bodyyy .coll {
	width: 33.33%;
	display: inline-block;
	vertical-align: top;
	padding: 0 15px
}

.comboopack .combopackwrap .bodyyy .coll ul li {
	color: #5c5856;
	font-size: 15px;
	padding: 0 0 10px 30px;
	position: relative;
	line-height: 1.4
}

.comboopack .combopackwrap .bodyyy .coll ul li:before {
	content: "\f00c";
	font-family: FontAwesome !important;
	color: #2f55c4;
	position: absolute;
	left: 0;
	top: 0
}

.comboopack .combopackwrap .bodyyy .coll ul li.heading {
	font-weight: 700;
	color: #2f55c4;
	padding-left: 0
}

.comboopack .combopackwrap .bodyyy .coll ul li.heading:before {
	display: none
}

.comboopack .combopackwrap .footterr {
	padding: 30px 50px;
	font-size: 0;
	background: #28304a;
	border-top: 1px solid #f3f3f3
}

.comboopack .combopackwrap .footterr .left {
	display: inline-block;
	width: 45%;
	vertical-align: bottom;
	font-size: 0
}

.comboopack .combopackwrap .footterr .left .btnwrap {
	display: inline-block;
	width: 70%;
	padding-left: 20px;
	vertical-align: middle
}

.comboopack .combopackwrap .footterr .left .btnwrap .numbercta {
	color: #fff;
	font-size: 16px;
	font-weight: 600;
	margin-right: 15px;
	padding: 14px 20px;
	border: 1px solid #fff;
	border-radius: 30px
}

.comboopack .combopackwrap .footterr .left .btnwrap .numbercta span {
	margin-right: 10px
}

.comboopack .combopackwrap .footterr .left .btnwrap .chatcta {
	color: #fff;
	font-size: 16px;
	font-weight: 600;
	margin-right: 21px;
	padding: 15px 30px;
	border: 1px solid #fff;
	border-radius: 30px
}

.comboopack .combopackwrap .footterr .left .btnwrap .chatcta span {
	margin-right: 10px
}

.comboopack .combopackwrap .footterr .left .txtt {
	display: inline-block;
	width: 25%;
	vertical-align: middle
}

.comboopack .combopackwrap .footterr .left .txtt h4 {
	color: #fff;
	font-size: 22px;
	padding-bottom: 0
}

.comboopack .combopackwrap .footterr .right {
	display: inline-block;
	width: 55%;
	vertical-align: bottom;
	position: relative
}

.comboopack .combopackwrap .footterr .right .price {
	display: inline-block;
	width: 40%;
	vertical-align: middle;
	padding-left: 10px
}

.comboopack .combopackwrap .footterr .right .price h2 {
	font-size: 27px;
	color: #ee3c5a;
	padding-bottom: 0
}

.comboopack .combopackwrap .footterr .right .price h2 span {
	position: relative;
	font-size: 20px;
	padding-bottom: 0;
	color: #b3b1b1;
	margin-left: 10px;
	text-decoration: line-through
}

.comboopack .combopackwrap .footterr .right figure {
	margin-bottom: 0;
	display: inline-block;
	width: 30%
}

.comboopack .combopackwrap .footterr .right figure img {
	width: 180px;
	position: absolute;
	top: -50px;
	left: 0
}

.comboopack .combopackwrap .footterr .right .price h2 span:before {
	width: 60px;
	height: 2px;
	display: block;
	background: #9e9c9c;
	position: absolute;
	left: 0;
	top: 44%
}

.comboopack .combopackwrap .footterr .right .price h6 {
	color: #fff;
	font-size: 21px;
	padding-bottom: 0
}

.comboopack .combopackwrap .footterr .right .orderbtn {
	display: inline-block;
	vertical-align: middle;
	width: 30%;
	text-align: right
}

.footer-top .socialmid {
	font-size: 0
}

.footer-top .socialmid .left {
	display: inline-block;
	width: 50%
}

.footer-top .socialmid .right {
	width: 50%;
	text-align: right;
	display: inline-block
}

.footer-top .socialmid .right img {
	width: 70%
}

@media only screen and (min-width:1024px) and (max-width:1366px) {
	.menu-section .menu-box p {
		font-size: 14px
	}

	.mainbannerLp::before {
		display: none
	}

	.menu-section .menu-box h3 {
		font-size: 14px
	}

	.menu-section h3.menu-head {
		font-size: 22px
	}

	.menu-section .social-content p {
		font-size: 14px;
		line-height: 24px;
		margin-bottom: 25px
	}

	header ul.navbar-set>li>a {
		font-size: 13px;
		padding: 0 8px
	}

	.navigation>ul>li:not(:last-child) {
		margin-right: 5px
	}

	.blue-btn {
		padding: 10px;
		width: auto;
		font-size: 13px;
		width: 100% !important;
		text-align: center !important
	}

	.experience-sec h4 {
		font-size: 15px;
		line-height: 25px
	}

	.contact-right a.contact-phone {
		font-size: 39px
	}

	ul.ftr-list.contact-det li i {
		font-size: 23px;
		width: 15%
	}

	.service-box {
		min-height: 575px
	}

	.social-content ul.social li a {
		width: 40px;
		height: 40px
	}

	.pop-head {
		letter-spacing: 4px
	}

	.section-head {
		font-size: 38px;
		line-height: 50px;
		margin-bottom: 25px
	}

	.banner-content h5 {
		font-size: 25px;
		margin: 20px 0
	}

	.we-content p {
		font-size: 20px;
		line-height: 32px;
		margin: 0;
		margin-top: 20px
	}

	.service-box .section-head {
		font-size: 24px;
		line-height: 34px;
		margin-top: 0
	}

	.service-desc ul li a {
		font-size: 14px
	}

	.offer-section .nav-pills>li>a {
		font-size: 13px
	}

	.test-box p {
		font-size: 16px;
		line-height: 28px
	}

	.expert-part {
		width: 100%;
		float: none
	}

	.det-box h3 {
		font-size: 20px
	}

	.det-box h3 span {
		font-weight: 400;
		font-size: 18px
	}

	.contact-right h3 {
		line-height: 34px;
		font-size: 22px
	}

	.contact-right a.contact-phone {
		font-size: 34px
	}

	form.exp-form input.form-control {
		padding: 20px
	}

	form.exp-form .blue-btn {
		margin-right: 0;
		float: none;
		width: 50% !important;
		display: table;
		margin: auto
	}

	.footer-head h3 {
		font-size: 25px;
		margin-bottom: 20px
	}

	ul.ftr-list.contact-det {
		margin-top: 80px
	}

	.brand-stories .ind-box h4 {
		font-size: 16px;
		line-height: 26px
	}

	.experience-thumbnail h5 {
		font-size: 10px
	}

	.experience-thumbnail h2 {
		font-size: 50px;
		line-height: 60px
	}

}

@media only screen and (min-width:767px) and (max-width:1023px) {
	.contact-icon-new img {
		width: 30px;
		right: -30px;
		top: 50px;
		bottom: 0
	}

	.error-page .section-head {
		font-size: 170px;
		margin-top: 90px !important;
		margin-bottom: 45px !important
	}

	.error-page .banner-content h5 {
		font-size: 32px;
		margin: 0 0 45px 0;
		text-align: center
	}

	.error-page .lgt-btn {
		display: table;
		margin: auto
	}

	section.mainbannerLp .row {
		flex-direction: column;
		justify-content: center
	}

	section.mainbannerLp .row img {
		margin: 20px auto;
		text-align: center;
		display: table
	}

	.mainbannerLp a {
		margin: 0 auto;
		display: table
	}

	.menu-section {
		background: linear-gradient(to right, #e8ebf4 0, #e8ebf4 65%, #cad8ff 65%, #cad8ff 100%)
	}

	.menu-section .menu-box p {
		font-size: 11px
	}

	.menu-section .menu-box h3 {
		font-size: 12px
	}

	.menu-section h3.menu-head {
		font-size: 22px;
		line-height: 30px;
		margin-bottom: 15px
	}

	#contact-form-mera .col-md-6 {
		padding: 0
	}

	.expert-part select {
		height: 40px
	}

	.all-section {
		padding: 40px 0
	}

	.top-bar a {
		font-size: 12px
	}

	.blue-btn {
		padding: 10px;
		width: auto;
		font-size: 13px
	}

	.blue-btn i {
		display: none
	}

	header ul.navbar-set li a {
		font-size: 12px;
		padding: 0 1px
	}

	.menu-section .social-content p {
		font-size: 13px;
		line-height: 23px
	}

	a.red-phone {
		font-size: 16px
	}

	.pop-head {
		line-height: 24px;
		font-size: 12px;
		letter-spacing: 2px;
		margin: 0;
		margin-bottom: 10px
	}

	.banner-content .lgt-btn.white-btn {
		margin-left: 0;
		margin: 10px 0
	}

	.package {
		padding: 20px 10px;
		padding-top: 39px
	}

	.package a {
		font-size: 15px;
		padding: 8px;
		width: 80%;
		margin: 15px 0
	}

	.package p {
		font-size: 12px;
		line-height: 22px
	}

	.package ul.pkg-list {
		line-height: 20px;
		font-size: 12px
	}

	.pkg-list li {
		display: flex;
		margin-bottom: 10px;
		font-size: 11px
	}

	.pkg-list li i {
		position: relative;
		top: 2px
	}

	.portfolio-section .nav-pills>li>a {
		font-size: 13px
	}

	.contact-right {
		padding: 70px 0 0 20px
	}

	.test-box p {
		font-size: 13px;
		line-height: 21px
	}

	.blue-bg {
		padding: 20px
	}

	.expert-part {
		width: 100%
	}

	form.exp-form .nopadding {
		padding: 15px
	}

	.footer-bottom .col-sm-6 {
		min-height: 320px
	}

	.brand-stories .col-md-4.col-xs-12 {
		width: 50%
	}

	.brand-box.fact-box h3 {
		font-size: 16px;
		line-height: 20px;
		margin: 0 0;
		margin-top: 15px;
		margin-bottom: 5px
	}

	.brand-stories .ind-box {
		padding: 30px 20px
	}

	.onboard-content .section-head {
		font-size: 26px;
		margin-bottom: 20px
	}

	.social-content ul.social li a {
		width: 30px;
		height: 30px;
		font-size: 17px;
		margin: 0 2px
	}

	.section-head {
		font-size: 25px;
		line-height: 35px;
		margin-bottom: 10px
	}

	.banner-ss img {
		height: auto
	}

	.banner-content h5 {
		font-size: 18px;
		margin: 0;
		margin-bottom: 20px
	}

	.banner-content p {
		font-size: 14px;
		margin: 10px 0;
		line-height: 24px;
		font-weight: 500
	}

	.lgt-btn {
		align-items: center;
		justify-content: space-between;
		display: inline-flex;
		font-size: 13px;
		width: auto;
		padding: 8px 10px
	}

	.banner-content .our-customers img {
		width: 75px;
		margin-right: 10px
	}

	.we-content p {
		font-size: 17px;
		line-height: 28px
	}

	.service-box .section-head {
		font-size: 22px;
		line-height: 32px
	}

	.offer-section .nav-pills>li>a {
		font-size: 12px;
		padding: 7px
	}

	.contact-right a.contact-phone {
		font-size: 29px
	}

	.contact-right h3 {
		font-size: 18px;
		line-height: 28px
	}

	.expert-part h4 {
		color: #fff;
		font-weight: 900;
		font-size: 20px;
		line-height: 30px;
		margin-bottom: 15px
	}

	.exp-form>div {
		padding: 0 !important
	}

	form.exp-form input.form-control,
	form.exp-form select,
	form.exp-form textarea {
		padding: 20px;
		width: 100% !important
	}

	form.exp-form select {
		padding: 12px 20px
	}

	form.exp-form .blue-btn {
		width: 100%;
		margin: 0
	}

	.career-section .section-head {
		font-size: 36px;
		line-height: 47px;
		padding: 10px
	}

	.contact-box p {
		font-size: 12px
	}

	.detail-content.insight-detail {
		display: block
	}

	.process-text h3 {
		font-size: 30px;
		line-height: 35px
	}

	.culture-flex .ind-box p {
		font-size: 13px;
		line-height: 18px
	}

	.industry-section .ind-box h4 {
		font-size: 12px
	}

	.experience-thumbnail h2 {
		font-size: 35px
	}

	.experience-thumbnail h5 {
		line-height: 22px;
		font-size: 13px
	}

	footer {
		padding: 40px 0 0 0
	}

	ul.ftr-list li {
		padding: 6px 0
	}

	ul.ftr-list li a {
		font-size: 14px
	}

	.footer-head h3 {
		font-size: 20px;
		margin-bottom: 20px
	}

	.ftr-logos {
		margin-top: 0
	}

	form.exp-form p.select-note {
		font-size: 12px;
		margin-top: 0;
		margin-bottom: 15px
	}

	.banner-text h3 {
		font-size: 50px
	}

	.about-content p {
		line-height: 26px;
		font-size: 15px
	}

	.about-content .section-head {
		font-size: 26px;
		margin-bottom: 10px
	}

	.award-section .brand-box {
		padding: 10px;
		text-align: center
	}

	.brand-box.fact-box img {
		margin: 0 auto;
		display: block;
		margin-bottom: 10px
	}

	.brand-stories .ind-box p {
		font-size: 13px;
		line-height: 22px
	}

	.services-how .nav-pills li a {
		padding: 10px 20px
	}

	.onboard-section .nav-pills>li>a {
		font-size: 15px
	}

	.services-how .item-box p {
		font-size: 13px;
		line-height: 25px
	}

	.experience-sec .flexRow {
		display: block
	}

	.experience-sec h4 {
		font-size: 22px;
		text-align: center
	}

	.test-box {
		background: rgba(0, 0, 0, 0) linear-gradient(281deg, #75e0eb 0, #75e0eb 75%, #fff 80%, #fff 35%, rgba(255, 255, 255, 0) 50%) repeat scroll 0 0;
		padding: 28px
	}

	.test-box h3 {
		font-size: 18px
	}

	.award-box {
		padding: 0 20px
	}

	.award-box img {
		height: 145px
	}

	.award-box .section-head {
		font-size: 20px
	}

	.award-box h4 {
		font-size: 11px;
		line-height: 20px
	}

	.award-box p {
		font-size: 13px;
		line-height: 24px;
		margin-bottom: 0
	}

	.contact-left .section-head span {
		font-size: 25px
	}

	.contact-section p {
		font-size: 13px;
		line-height: 23px;
		color: #fff
	}

	.contact-box p {
		font-size: 12px !important
	}

	.contact-form input.form-control,
	.contact-form textarea.form-control {
		padding: 18px;
		padding-left: 55px;
		font-size: 12px
	}

	.point-box .point-text h4 {
		font-size: 16px;
		line-height: 26px
	}

	.point-box .point-text p {
		font-size: 14px;
		line-height: 24px
	}

	.navigation>ul>li:not(:last-child) {
		margin-right: 6px
	}

	header .navigation>ul>li.megamenu>a::before {
		right: -9px;
		font-size: 12px
	}

	.package h3 {
		font-size: 30px
	}

	.package h3 sup {
		font-size: 20px
	}

	.package h3 sub {
		font-size: 12px
	}

	.package h4 {
		font-size: 16px
	}

	.package button {
		font-size: 14px;
		padding: 5px;
		width: 65%
	}

}

.video-testi-txt-bx:before {
	content: '';
	background: url(../img/quote-testi-icon.png);
	position: absolute;
	top: 0;
	left: 15px;
	margin: auto;
	width: 30px;
	height: 26px
}

.video-testi-txt-bx {
	text-align: left;
	position: relative;
	padding-left: 70px
}

.video-testi-txt-bx h2 {
	text-align: left;
	font-size: 30px;
	font-weight: 700
}

.video-testi-txt-bx p {
	color: #4f4f4f;
	font-size: 16px
}

.video-testi-txt-bx h5 {
	font-size: 14px;
	color: #4f4f4f;
	border-bottom: 1px solid #e6e7e8;
	display: table;
	padding-bottom: 10px
}

.testi-star-st i {
	color: #ff7e65;
	margin: 0 3px;
	font-size: 18px;
	padding-top: 10px
}

.new-testi-page-st .video-col-testi-div {
	padding: 50px 0 0 0;
	display: flex;
	align-items: center
}

.video-testi-img-bx img {
	width: 100%
}

.testi-new-box {
	border: 1px solid #ededee;
	border-radius: 15px;
	background-color: #fff;
	box-shadow: 0 0 30px 0 rgba(0, 0, 0, .05);
	padding: 30px 20px;
	display: flex;
	align-items: flex-start;
	margin-top: 20px
}

.testi-new-sec {
	padding: 50px 0;
	background: #f9f9f9
}

.testi-new-main-col {
	padding-top: 20px
}

.hd-txt-st {
	text-align: center
}

.hd-txt-st h2 {
	color: #000;
	font-size: 32px;
	text-transform: uppercase;
	font-weight: 700
}

.testi-name {
	border-radius: 50%;
	background-image: -moz-linear-gradient(0deg, #2f55c4 0, #294189 100%);
	background-image: -webkit-linear-gradient(0deg, #2f55c4 0, #294189 100%);
	background-image: -ms-linear-gradient(0deg, #2f55c4 0, #294189 100%);
	height: 120px;
	width: 120px;
	margin-right: 30px
}

.testi-name h3 {
	width: 120px;
	height: 120px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0;
	font-size: 24px;
	font-weight: 700;
	color: #fff
}

.testi-dtl h4 {
	font-weight: 700;
	font-size: 20px;
	color: #000
}

.testi-dtl p {
	color: #4f4f4f;
	font-size: 16px;
	margin-bottom: 15px;
	line-height: normal;
	height: 100px;
	overflow-x: auto;
	overflow-y: scroll;
	padding-right: 15px
}

.testi-dtl h5 {
	font-size: 13px;
	color: #2f55c4;
	margin: 0;
	font-weight: 700
}

.testi-dtl::-webkit-scrollbar {
	width: 8px
}

.testi-dtl h4 {
	display: none
}

.testi-dtl::-webkit-scrollbar-track {
	box-shadow: inset 0 0 5px grey;
	border-radius: 10px
}

.testi-dtl::-webkit-scrollbar-thumb {
	background: #e944a0;
	border-radius: 10px
}

.testi-dtl::-webkit-scrollbar-thumb:hover {
	background: #b30000
}

.video-testi-img-bx {
	position: relative;
	overflow: hidden;
	transition-duration: 1s
}

.video-hvr {
	position: absolute;
	top: 500px;
	transition-duration: 1s;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	display: flex;
	align-items: center;
	justify-content: center;
	background: #0000008a
}

.video-hvr i {
	font-size: 60px;
	color: #fff
}

.video-testi-img-bx:hover .video-hvr {
	top: 0
}

.new-testi-page-st .video-testi-txt-bx h2 {
	text-align: left
}

@media only screen and (min-width:320px) and (max-width:767px) {
	section.prlog-sec .col-md-5 img {
		width: 50%;
		display: table;
		height: auto
	}

	.linkBtn {
		display: table !important;
		margin: 10px auto
	}

	section.prlog-sec .row {
		display: table !important;
		align-items: center
	}

	.prlog-sec a {
		display: table !important
	}

	.service-desc {
		text-align: center
	}

	.service-desc ul {
		display: table;
		margin: auto
	}

	ul.new-2022 {
		font-size: 14px !important
	}

	section.content-pg.all-section.terms-con h3 {
		text-align: center
	}

	.payment-method-img.webdesign-2022 img {
		display: table;
		margin: 20px auto
	}

	section.prlog-sec .row {
		display: block
	}

	.prlog-sec a {
		display: table;
		margin: 10px auto
	}

	.details-text.package {
		float: left;
		width: 100%
	}

	.pkg-banner-new img {
		display: none
	}

	.contact-banner img {
		display: none
	}

	.contact-banner {
		height: 200px;
		background-color: #000
	}

	ul.all-brand-tabs li a {
		background: 0 0;
		padding: 0;
		margin: 0
	}

	ul.all-brand-tabs li a {
		margin: 0 !important;
		padding: 0 !important;
		background: 0 0 !important
	}

	ul.all-brand-tabs li {
		width: 200px;
		background: #2f55c4;
		height: 50px;
		border-radius: 10px;
		text-align: center;
		line-height: 50px
	}

	ul.all-brand-tabs li.active a {
		background: 0 0 !important
	}

	ul.all-brand-tabs li.active {
		background: #000
	}

	.pkg-banner-new {
		background: #000;
		height: 200px
	}

	.contact-section {
		padding: 0
	}

	.test-banner {
		background-image: none;
		background-color: #000;
		height: 160px
	}

	ul.all-brand-tabs {
		display: table !important;
		margin: auto !important
	}

	ul.all-brand-tabs li {
		margin: 0 0 25px 0
	}

	.test-banner img {
		display: none
	}

	.review_sec {
		padding: 20px 0 10px 0 !important
	}

	.video-testi-txt-bx:before {
		display: none
	}

	.new-testi-page-st .video-col-testi-div {
		padding: 0
	}

	.testi-new-main-col {
		padding: 0
	}

	.testi-new-sec {
		padding: 20px 0
	}

	ul.social li {
		width: 25%;
		margin: 0 0 20px 0;
		display: table
	}

	.banner-content.wow.fadeInLeft {
		text-align: center
	}

	section#brand1 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#brand3 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#design1 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#design3 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#custom1 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#custom3 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#host1 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	.error-page .section-head {
		font-size: 88px !important;
		margin-top: 91px !important;
		margin-bottom: 30px !important
	}

	.error-page .banner-content h5 {
		font-size: 21px !important
	}

	.error-page .lgt-btn {
		display: table;
		margin: auto !important
	}

	.error-page .banner-content a {
		width: 132px !important;
		font-size: 12px !important
	}

	section#host3 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#maint1 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#maint3 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section.about-section.bottom-section .mg-btm-1 {
		display: flex;
		flex-direction: column-reverse
	}

	.mg-btm-3 {
		display: flex;
		flex-direction: column-reverse
	}

	.section-head {
		margin-bottom: 29px;
		margin-top: 10px !important
	}

	.mainbannerLpHead2 {
		margin-bottom: 41px
	}

	.mainbannerLp2 a {
		display: table;
		margin: auto
	}

	.view-btn {
		margin: 5% 13px
	}

	ul.social li a {
		padding: 0;
		text-align: center;
		margin: auto
	}

	.package a {
		font-size: 16px
	}

	.review_sec.new-testi-page-st h2 {
		font-size: 30px
	}

	.video-testi-txt-bx:before {
		top: -35px
	}

	.review_sec.new-testi-page-st .video-col-testi-div.video-col-testi-div2 {
		flex-direction: column-reverse
	}

	.review_sec.new-testi-page-st .video-testi-txt-bx p {
		text-align: left
	}

	section.banner-news {
		padding: 50px 0;
		height: auto
	}

	section.mainbannerLp .row {
		flex-direction: column;
		justify-content: center
	}

	section.mainbannerLp .row img {
		margin: 20px auto;
		text-align: center;
		display: table
	}

	.mainbannerLp a {
		margin: 0 auto;
		display: table
	}

	.banner-main {
		padding-top: 0
	}

	section.service-sec {
		padding: 50px 0;
		text-align: center
	}

	.text-box h2 {
		font-size: 18px;
		padding-top: 30px
	}

	.service-main {
		display: block;
		align-items: center
	}

	.service-main h4 {
		padding-top: 16px
	}

	section.service-sec {
		padding: 30px 0 20px 0
	}

	.sirvice-bottom .row {
		padding-bottom: 20px
	}

	img.pic-box {
		padding-left: 0
	}

	.new-testi-page-st .video-col-testi-div {
		flex-direction: column
	}

	.hd-txt-st h2 {
		font-size: 26px
	}

	.testi-new-box {
		flex-direction: column;
		text-align: center
	}

	.testi-name {
		margin: 0 auto;
		margin-bottom: 10px
	}

	.video-testi-txt-bx {
		padding-left: 0
	}

	.tab-content.tab-new .row {
		display: inline-block !important;
		align-items: center !important
	}

	.lgt-btn {
		width: 100%;
		text-align: center;
		margin-bottom: 35px;
		display: table;
		margin: 13px auto;
		border-radius: 10px
	}

	section.portfolio-section.port-listing.all-section.portfolio-page {
		overflow-x: hidden
	}

	.details-text.package h3 {
		margin: 50px 0 25px;
		font-size: 31px
	}

	.details-text.package button {
		width: 70% !important
	}

	.package .scroll-wrapper.scroll-wrapper-1 {
		height: 150px;
		width: 100%
	}

	.tab-new .package .scroll-wrapper.scroll-wrapper-2 {
		float: left;
		width: 100%
	}

	ul.ftr-list.contact-det li i {
		font-size: 26px;
		width: 40px
	}

	.package.detial-pkg {
		margin: 0;
		float: left;
		width: 100%;
		margin: 0 0 50px 0 !important
	}

	ul.ftr-list {
		text-align: center
	}

	.bottom-section {
		padding-bottom: 30px
	}

	.top-bar {
		text-align: center;
		padding: 0
	}

	.top-bar a {
		margin: 3px 0;
		font-size: 12px;
		width: 100%;
		display: block
	}

	header .blue-btn {
		display: none
	}

	.blue-btn {
		padding: 6px;
		width: 100%;
		font-size: 13px
	}

	.top-bar a.red-phone {
		width: 50%;
		font-size: 13px
	}

	.top-bar a.red-phone i {
		padding-left: 0;
		padding-right: 5px
	}

	.main-navigate .col-xs-12 {
		width: 100%
	}

	.main-navigate .logo {
		width: 60%;
		margin: 10px auto
	}

	.pop-head {
		text-align: center;
		line-height: 20px;
		font-size: 12px
	}

	.section-head {
		font-size: 25px;
		line-height: 35px
	}

	.flexRow {
		display: block
	}

	.flexStart {
		display: block
	}

	header {
		text-align: center
	}

	.banner-ss img {
		height: auto
	}

	.banner-content .lgt-btn {
		margin: 10px 0
	}

	.banner-img {
		margin-bottom: 20px
	}

	.banner-content ul {
		margin-bottom: 20px
	}

	.banner-content .lgt-btn.white-btn {
		margin: 0
	}

	.all-section {
		padding: 25px 0
	}

	.banner-content .our-customers {
		display: flex;
		justify-content: center
	}

	.package {
		margin-bottom: 20px
	}

	.offer-section .nav>li>a {
		padding: 1px 5px
	}

	.offer-section ul.nav.nav-pills {
		display: block
	}

	.offer-section .nav-pills>li>a {
		font-size: 12px;
		padding: 5px 0;
		margin: 0;
		text-align: center
	}

	.portfolio-section .nav {
		display: block
	}

	.test-box p {
		font-size: 13px;
		line-height: 23px
	}

	.test-box h3 {
		font-size: 20px;
		line-height: 19px
	}

	.test-box .flexRow {
		display: flex
	}

	.test-box {
		padding: 13px
	}

	.award-section .brand-box img {
		height: 130px;
		width: 130px
	}

	.award-section .brand-box {
		padding: 20px;
		width: 85%;
		margin: 0 auto
	}

	.blue-bg {
		padding: 20px
	}

	.expert-part {
		width: 100%
	}

	.expert-part h4 {
		font-size: 18px
	}

	form.exp-form .nopadding {
		padding: 0 15px
	}

	.contact-right a.contact-phone {
		font-size: 27px;
		text-align: center;
		display: block
	}

	.contact-right h3 {
		line-height: 28px;
		font-size: 18px
	}

	.contact-icon-new img {
		width: 25px;
		right: 32px;
		top: 30px
	}

	.flexRow.det-box {
		margin: 18px auto;
		text-align: center
	}

	.det-box img {
		margin: 0 auto
	}

	.new-testi-page-st .video-col-testi-div:nth-child(2) {
		flex-direction: column-reverse
	}

	section.review_sec.new-testi-page-st h2 {
		text-align: center
	}

	.video-testi-txt-bx h5 {
		display: table;
		padding-bottom: 10px;
		margin: 0 auto 30px
	}

	ul.social {
		justify-content: center;
		margin-bottom: 13px;
		flex-wrap: wrap
	}

	footer {
		padding: 10px 0 0 0
	}

	.ftr-logos img {
		width: auto;
		margin: 0 10px
	}

	.ftr-logos {
		display: flex;
		justify-content: center;
		align-items: center
	}

	form.exp-form .blue-btn {
		width: 92%
	}

	.banner-text h3 {
		font-size: 30px
	}

	.fact-boxes {
		display: block
	}

	.brand-box.fact-box.two-col {
		width: 85%
	}

	.brand-box.fact-box img {
		width: 60px;
		height: 60px;
		margin: 0 auto
	}

	.brand-box.fact-box {
		text-align: center
	}

	.menu-section .menu-box img {
		width: 23px;
		margin-bottom: 14px
	}

	.menu-section .lgt-btn.white-btn {
		width: 95%;
		margin-bottom: 14px
	}

	.menu-section a.lgt-btn {
		width: 95%
	}

	.award-inner-section .award-box {
		text-align: center
	}

	.award-inner-section .award-box img {
		margin: 0 auto
	}

	.career-section .section-head {
		font-size: 24px;
		line-height: 34px;
		padding: 0 0 0 15px
	}

	.career-box .career-text {
		width: 100%;
		padding: 19px
	}

	.career-box .career-text p {
		font-size: 13px;
		line-height: 24px
	}

	.career-box .career-text a {
		font-size: 16px;
		line-height: 26px;
		display: block
	}

	.career-box figure {
		width: 100%;
		display: flex;
		justify-content: center
	}

	.why-box .section-head {
		text-align: center
	}

	.point-box.flexRow {
		display: block;
		margin-bottom: 20px
	}

	.why-box {
		margin: 0 auto;
		padding: 30px 20px
	}

	.why-box .section-head {
		font-size: 30px
	}

	.point-box .point-text h4 {
		font-size: 16px;
		line-height: 26px
	}

	.point-box .point-text p {
		font-size: 13px;
		line-height: 23px
	}

	.point-box img {
		width: 15%;
		margin: 0 auto;
		margin-bottom: 20px
	}

	.why-box figure.why-right {
		right: 0;
		top: 0
	}

	p {
		font-size: 17px;
		line-height: 21px
	}

	.award-inner-section .award-box.download-box {
		text-align: center;
		padding: 10px
	}

	.award-inner-section .award-box.download-box img {
		margin: 20px auto
	}

	.portfolio-section.portfolio-page .view-btn .blue-btn {
		width: 85%
	}

	.faq-section .panel-default>.panel-heading .panel-title a {
		font-size: 14px;
		line-height: 18px;
		padding: 3px 0;
		padding-left: 55px
	}

	.faq-section h4.panel-title {
		display: flex
	}

	.faq-section .panel-default>.panel-heading {
		padding: 10px
	}

	.faq-section .panel-default>.panel-heading+.panel-collapse>.panel-body p {
		font-size: 14px
	}

	.detail-content.insight-detail {
		display: block
	}

	.detail-content.insight-detail .detail-text {
		padding: 20px
	}

	.detail-section .detail-content h3 {
		font-size: 30px;
		width: 100%
	}

	.process-text h3 {
		font-size: 25px;
		line-height: 35px
	}

	.onboard-section .item-box p {
		font-size: 14px;
		line-height: 28px
	}

	.culture-flex {
		display: block
	}

	.culture-flex .ind-box p {
		font-size: 13px;
		line-height: 23px
	}

	.culture-flex .ind-box {
		width: 100%;
		min-height: auto
	}

	.experience-sec h4 {
		text-align: center;
		margin-bottom: 20px
	}

	.services-how .item-box {
		padding: 20px;
		width: 100%;
		margin: 0 auto
	}

	.services-how .nav-pills {
		right: 0;
		width: 100%;
		margin: 0 auto
	}

	.services-how .nav-pills li a {
		padding: 10px 20px;
		font-size: 14px
	}

	.onboard-section .p-right-0 {
		padding-right: 15px !important
	}

	.onboard-section .p-left-0 {
		padding-left: 15px !important
	}

	.logo-thumbnail a img {
		height: 140px
	}

	.banner-section .section-head {
		font-size: 24px;
		line-height: 34px;
		margin-bottom: 15px;
		text-align: center
	}

	.banner-content h5 {
		font-size: 17px;
		margin: 0;
		margin-bottom: 20px
	}

	.banner-content a {
		width: 125px;
		font-size: 14px;
		display: inline-flex;
		align-items: center;
		justify-content: center
	}

	.banner-content p {
		font-size: 13px;
		line-height: 23px
	}

	.we-content p {
		font-size: 16px;
		line-height: 26px
	}

	.service-box {
		padding: 30px 20px;
		margin-bottom: 30px;
		min-height: auto
	}

	.service-box .section-head {
		font-size: 22px;
		line-height: 32px;
		margin-bottom: 15px
	}

	.service-desc ul li a {
		font-size: 14px
	}

	.offer-section .nav-pills li {
		width: 49%
	}

	.package ul.pkg-list {
		line-height: 35px;
		font-size: 12px
	}

	.portfolio-section .nav-pills li {
		width: auto;
		padding: 0 15px
	}

	.portfolio-section .nav-pills>li>a {
		font-size: 10px;
		padding: 10px 0
	}

	.footer-head h3 {
		font-size: 20px;
		margin-bottom: 15px;
		margin-top: 30px;
		text-align: center
	}

	ul.ftr-list.contact-det li {
		align-items: center;
		align-content: center;
		text-align: center;
		display: inline-block
	}

	ul.ftr-list.contact-det li a {
		width: auto
	}

	.mobile-nav .navbar-nav {
		text-align: left;
		min-height: 350px
	}

	ul.ftr-list li a {
		font-size: 14px
	}

	.copy-right p {
		font-size: 13px;
		text-align: center;
		margin-bottom: 10px
	}

	.copy-right ul {
		text-align: center;
		float: none !important
	}

	.copy-right ul li a {
		font-size: 12px
	}

	.contact-right {
		padding: 40px 0 0
	}

	.contact-section h3.section-head {
		margin-bottom: 10px;
		font-size: 33px !important
	}

	.about-content .section-head {
		font-size: 28px
	}

	.about-content p {
		line-height: 28px;
		font-size: 14px;
		margin-bottom: 20px
	}

	.banner-content.ml-2 {
		margin-left: 0
	}

	.onboard-content .section-head {
		font-size: 30px
	}

	.experience-thumbnail {
		padding: 10px 0
	}

	.experience-thumbnail h2 {
		font-size: 45px;
		line-height: 55px
	}

	.experience-thumbnail h5 {
		font-size: 12px;
		line-height: 24px
	}

	.award-box {
		padding: 20px 0
	}

	.award-box .section-head {
		font-size: 25px
	}

	.award-box p {
		font-size: 14px;
		line-height: 24px
	}

	.career-box .career-text a {
		font-size: 16px;
		line-height: 26px
	}

	.award-box.download-box h3 {
		font-size: 20px;
		line-height: 30px
	}

	form.exp-form .form-control,
	form.exp-form select {
		width: 100% !important
	}

	#contact-form-mera .col-md-6 {
		padding: 0 !important
	}

	.expert-part select {
		height: 45px
	}

	header.fixed-header.fixed {
		position: relative
	}

	.call-to-action-margin {
		margin-top: 30px
	}

	.footer-1 img {
		margin-top: 0;
		max-width: 220px;
		margin: 13px auto
	}

	.footer-1 p {
		font-size: 13px;
		text-align: center
	}

	.logo img {
		width: 190px !important;
		max-width: initial;
		margin: -60px 0 0 -60px
	}

	.banner-content .our-customers img {
		width: 260px;
		margin-right: 12px;
		max-width: initial
	}

}

section.blogs-sec {
	padding: 100px 0
}

.blog-content h2 {
	font-size: 20px;
	font-family: Montserrat, sans-serif;
	line-height: 26px;
	margin: 5px 0 16px 0;
	color: #333
}

.blog-content p {
	font-size: 14px;
	color: #3333337d;
	font-family: Poppins, sans-serif;
	line-height: 23px
}

.blog-btn a {
	font-size: 14px;
	color: #303293;
	font-weight: 600;
	font-family: Poppins, sans-serif;
	display: inline-block;
	margin: 10px 0
}

.blog-btn a:hover {
	color: #000
}

.blog-btn a .fa {
	margin: 0 0 0 10px
}

.blog-content span {
	font-size: 15px;
	color: #777;
	font-family: Poppins, sans-serif;
	font-weight: 400
}

.blog-content span i {
	padding-right: 10px
}

.blog-content img {
	padding: 0 0 19px 0;
	width: 100%
}

section.thankyoubox {
	background-color: #fbfbfb;
	padding: 100px 0 60px;
	margin: 0 0 50px
}

section.thankyoubox h2 {
	text-align: center;
	color: #000;
	font-size: 46px;
	font-weight: 700;
	line-height: 65px;
	margin-bottom: 40px;
	margin-top: 0 !important
}

section.thankyoubox h2 br {
	display: none
}

section.thankyoubox p {
	text-align: center
}

section.thankyoubox p br {
	display: none
}

.logo img {
	width: 197px !important;
	max-width: initial
}

.loader {
	position: fixed;
	z-index: 99999;
	height: 100%;
	width: 100%;
	background: #f3f3fe;
	top: 0;
	bottom: 0;
	margin: auto;
	align-items: center;
	display: flex
}

.loader .auto-center {
	height: 100%;
	display: inline-block;
	vertical-align: middle;
	position: absolute;
	margin: auto
}

.loader .bounce-conteneur {
	display: inline-block;
	width: 100%;
	text-align: center;
	top: 0;
	bottom: 0;
	margin: auto
}

.loader .bounce-conteneur .bounce {
	display: inline-block;
	height: 13px;
	width: 13px;
	background: #ed1c24;
	border-radius: 100%;
	margin: 2px
}

.loader .bounce-conteneur .bounce-left {
	animation: left 1.5s ease infinite
}

.loader .bounce-conteneur .bounce-center {
	animation: center 1.5s ease infinite
}

.loader .bounce-conteneur .bounce-right {
	animation: right 1.5s ease infinite
}

@keyframes left {
	0%,
	100%,
	50%,
	75% {
		transform: scale(1)
	}

	25% {
		transform: scale(1.5)
	}

}

@keyframes center {
	0%,
	100%,
	25%,
	75% {
		transform: scale(1)
	}

	50% {
		transform: scale(1.5)
	}

}

@keyframes right {
	0%,
	100%,
	25%,
	50% {
		transform: scale(1)
	}

	75% {
		transform: scale(1.5)
	}

}

@-webkit-keyframes left {
	0%,
	100%,
	50%,
	75% {
		transform: scale(1)
	}

	25% {
		transform: scale(1.5)
	}

}

@-webkit-keyframes center {
	0%,
	100%,
	25%,
	75% {
		transform: scale(1)
	}

	50% {
		transform: scale(1.5)
	}

}

@-webkit-keyframes right {
	0%,
	100%,
	25%,
	50% {
		transform: scale(1)
	}

	75% {
		transform: scale(1.5)
	}

}

.lgt-btn1 {
	background: #000;
	color: #fff;
	width: 100%;
	display: inline-block;
	padding: 12px;
	font-size: 16px;
	border: 2px solid transparent;
	font-weight: 500;
	width: 200px;
	text-align: center
}

.lgt-btn2 {
	background: #2f55c4;
	color: #fff;
	width: 100%;
	display: inline-block;
	padding: 12px;
	font-size: 16px;
	border: 2px solid transparent;
	font-weight: 500;
	width: 200px;
	text-align: center;
	margin: 0 0 0 20px
}

.details-text.package {
	box-shadow: none;
	padding: 0;
	margin: 0
}

.details-text.package button {
	width: 30%
}

.tab-content.tab-new {
	padding: 60px 0 30px
}

.tab-new .package .scroll-wrapper.scroll-wrapper-2 {
	margin: 30px 0 0
}

.tab-content.tab-new .row {
	display: flex;
	align-items: center
}

.details-text.package h3 {
	margin: 0 0 25px
}

.package.detial-pkg {
	margin: 0
}

.btn-box {
	display: flex;
	margin-top: 10px
}

.package .btn-box a {
	margin-left: 11px
}

#review .pricing-bg {
	background-size: cover;
	background-size: 43%;
	background-position: right center;
	background-repeat: no-repeat
}

.review_sec {
	padding: 40px 0 70px
}

.review_sec h2 {
	font-size: 41px;
	color: #000;
	text-align: center;
	font-family: "Helvetica Neue", Helvetica
}

.review_sec .moreBox {
	display: block
}

.review_boxes {
	margin: 50px 0 0
}

.review_inner {
	margin: 0 0 60px
}

.review_inner {
	background: #dadada;
	position: relative;
	-moz-border-radius: 10px
}

.review_inner:before {
	content: "";
	position: absolute;
	right: 100%;
	top: 180px;
	width: 0;
	height: 0;
	border-right: 35px solid transparent;
	border-top: 36px solid #dadada;
	border-left: 0 solid transparent;
	left: 0
}

.review_inner:hover:before {
	border-right: 35px solid transparent;
	border-top: 36px solid #235acf;
	border-left: 0 solid transparent;
	left: 1px
}

h3.review_name {
	margin: 0;
	font-size: 18px;
	color: #000;
	text-transform: uppercase;
	width: 60%;
	float: left
}

.review_ret {
	width: 40%;
	float: right;
	text-align: right
}

.review_body {
	padding: 20px 15px 15px;
	border: 1px solid #dadada;
	border-bottom: 0 solid transparent;
	height: 130px;
	overflow-y: auto
}

.review_footer {
	padding: 15px 15px 35px;
	border-radius: 0;
	border: 1px solid #dadada;
	border-top: 0 solid transparent
}

.review_body p {
	margin: 0
}

.review-rating i {
	color: #ffe400;
	font-size: 18px
}

.review-rating .fa-star:before {
	content: "\f005"
}

.review_inner:hover {
	background-color: #235acf;
	border-radius: 0;
	color: #fff
}

.review_inner:hover h3 {
	color: #fff
}

.red_btn_more {
	text-transform: uppercase;
	font-weight: 600;
	background: #0084cd;
	border: 1px solid #0084cd;
	color: #fff;
	padding: 14px 65px 11px;
	font-size: 18px;
	margin-top: 34px;
	-webkit-transition: all .1s linear;
	-moz-transition: all .1s linear;
	-o-transition: all .1s linear;
	-ms-transition: all .1s linear;
	transition: all .1s linear;
	margin: auto;
	display: table;
	border-radius: 5px
}

.red_btn_more:hover {
	background: #235acf
}

#loadMoreMore {
	display: none
}

.loadMore_Btn {
	margin: auto;
	display: table
}

.hide_review {
	display: none
}

.review_body::-webkit-scrollbar {
	width: 5px
}

.review_body::-webkit-scrollbar-track {
	border-radius: 10px
}

.review_body::-webkit-scrollbar-thumb {
	background: #235acf;
	border-radius: 10px
}

.review_body:hover::-webkit-scrollbar-thumb {
	background: #fff
}

img.img-responsive.testi-img {
	width: 25px;
	margin-right: 10px
}

.slick-dots li button:before {
	content: "\f111" !important;
	font: normal normal normal 14px/1 FontAwesome !important
}

.add-ons-st-vidpck {
	display: none
}

.offer-section ul.nav.nav-pills.inner-tab-ul-list {
	display: flex;
	text-align: center;
	margin: 0 auto;
	flex-wrap: wrap;
	justify-content: center;
	column-gap: 29px
}

.offer-section ul.nav.nav-pills.inner-tab-ul-list li {
	display: table
}

.navs_price_slider_mm .item a {
	text-align: center;
	font-size: 15px;
	font-weight: 600
}

.navs_price_slider_mm {
	text-align: center
}

.navs_price_slider_mm .owl-next,
.navs_price_slider_mm .owl-prev {
	background-color: #000;
	top: 0;
	padding: 3px 10px;
	left: 0;
	color: #fff;
	display: inline-block;
	margin: 20px 10px 0
}

.our-customers img {
	width: 184px !important
}

@media (min-width:1700px) and (max-width:1800px) {
	.menu-section:before {
		width: 33vw !important
	}

}

@media (min-width:1600px) and (max-width:1700px) {
	.menu-section:before {
		width: 32vw
	}

}

@media (min-width:1500px) and (max-width:1600px) {
	.menu-section:before {
		width: 31vw
	}

}

@media (min-width:1400px) and (max-width:1500px) {
	.menu-section:before {
		width: 30vw
	}

}

@media (min-width:1300px) and (max-width:1400px) {
	.menu-section:before {
		width: 29vw
	}

}

@media (min-width:1200px) and (max-width:1366px) {
	.menu-section:before {
		width: 28vw
	}

	.pkg-banner-new p {
		font-size: 16px
	}

	.pkg-banner-new p {
		font-size: 16px
	}

	.navs_port_slider .prev-arrow {
		left: 2px !important;
		z-index: 1
	}

	.navs_port_slider .next-arrow {
		z-index: 1;
		right: 3px !important
	}

	.screen {
		height: 213px !important
	}

	.case-7-inner-1 {
		margin-bottom: 0
	}

	.case-std-8-bnr {
		background-position: center
	}

	.mainbannerLp6.case-std-8-bnr {
		background-position: center
	}

	.lp6Sec4.case-8-inner-2 {
		margin: 0 0 50px
	}

	.lp6Sec5.case-8-inner-3 {
		margin-bottom: 50px
	}

	section.mainbannerLp6.case-std-9-bnr p {
		color: #fff
	}

	.case-9-inner-1:after {
		display: none
	}

	.case-9-inner-2:after {
		display: none
	}

	section.lp6Sec4.case-9-inner-2 {
		margin-bottom: 50px
	}

	section.lp6Sec3.case-9-inner-1 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-9-inner-1 {
		margin-bottom: 50px
	}

	section.lp6Sec4.case-10-inner-2 {
		margin-bottom: 50px
	}

	.lp6Sec5.case-10-inner-3 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-10-inner-4 {
		margin-bottom: 50px
	}

	section.lp6Sec4.case-12-inner-2 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-12-inner-3 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-12-inner-4 {
		margin-bottom: 50px
	}

	.mainbannerLp6.case-std-13-bnr {
		background-position: center
	}

	section.lp6Sec3.case-13-inner-1 {
		margin-bottom: 50px
	}

	section.lp6Sec4.case-13-inner-2 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-13-inner-3 {
		margin-bottom: 50px
	}

	.mainbannerLp6.case-std-14-bnr {
		background-position: center
	}

	section.lp6Sec3.case-14-inner-1 {
		margin-bottom: 50px
	}

	section.lp6Sec4.case-14-inner-2 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-14-inner-3 {
		margin-bottom: 50px
	}

	section.lp6Sec5.case-14-inner-4 {
		margin-bottom: 50px
	}

}

section.banner-news {
	padding: 50px 0;
	background-image: url(../img/news-bg1.png);
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	height: 400px;
	display: flex;
	align-items: center
}

.banner-main {
	text-align: center;
	color: #fff;
	width: 80%;
	display: table;
	margin: auto
}

.banner-main h2 {
	padding-bottom: 15px;
	font-size: 45px;
	font-weight: 700;
	margin: 0
}

.banner-main p {
	font-size: 15px;
	font-weight: 300;
	margin: 0;
	color: #fff
}

section.service-sec {
	padding: 50px 0 0 0
}

.img-box img {
	width: 100%
}

.text-box h2 {
	font-size: 23px;
	font-weight: 700;
	color: #282526;
	margin: 0;
	padding-bottom: 20px
}

.text-box:hover h2 a {
	color: red
}

.text-box p {
	padding-bottom: 10px;
	font-size: 15px;
	font-weight: 500;
	color: #282526;
	line-height: 26px
}

.service-main {
	display: flex;
	align-items: center
}

.service-main h4 {
	font-size: 18px;
	font-weight: 600;
	padding-left: 20px
}

.sirvice-bottom .row {
	border-bottom: 1px solid #cbcaca;
	display: table;
	padding-bottom: 50px
}

.bottom-box {
	padding-bottom: 50px !important
}

.service-main img {
	width: 15%
}

img.pic-box {
	padding-left: 20px;
	width: 65%
}

.mainbannerLp a:hover {
	background: #2f55c4
}

.mainbannerLp::before {
	position: absolute;
	content: "";
	width: 459px;
	background: url(../casestudies/images/lp1/15.png);
	height: 628px;
	left: -213px;
	bottom: 0
}

.mainbannerLp::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/14.png);
	width: 394px;
	height: 242px;
	right: 0;
	bottom: 0
}

.mainbannerLp {
	font-family: Poppins, sans-serif;
	background: url(../casestudies/images/lp1/12.jpg);
	height: 627px;
	background-size: cover;
	background-repeat: no-repeat;
	display: flex;
	align-items: center;
	position: relative;
	overflow: hidden;
	padding: 50px 0
}

.mainbannerLp a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgba(0, 0, 0, .15);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.mainbannerLpHead p {
	font-size: 16px;
	line-height: 28px;
	color: #000;
	margin-bottom: 50px
}

.lp1Sec1 ul {
	display: flex;
	justify-content: space-between
}

.lp1Sec1 {
	padding: 37px 0 50px 0
}

.lp1Sec1 ul li a {
	color: #666;
	font-weight: 500
}

.lp1Sec1 i.fas.fa-arrow-left {
	padding: 0 20px 0 0
}

.lp1Sec1 i.fas.fa-bars {
	padding: 0 20px 0 0
}

.lp1Sec1 i.fas.fa-arrow-right {
	padding: 0 0 0 20px
}

.lp1Sec2 h3 {
	color: #333;
	font-weight: 700;
	font-size: 42px;
	padding: 0 0 35px 0
}

.lp1Sec2 p {
	font-size: 16px;
	line-height: 28px;
	color: #000;
	padding: 0 0 80px 0
}

.lp1Sec2 h4 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize;
	line-height: normal
}

.lp1Sec2 {
	position: relative;
	padding-bottom: 50px
}

.lp1Sec2::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/5.png);
	height: 544px;
	width: 291px;
	background-position: left
}

.lp1Sec2::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/6.png);
	width: 145px;
	height: 257px;
	background-repeat: no-repeat;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	background-position: right
}

.lp1Sec3 {
	padding: 50px 0 50px;
	background: #f4f4f4;
	position: relative;
	z-index: 1
}

.lp1Sec3::before {
	position: absolute;
	content: "";
	width: 206px;
	background: url(../casestudies/images/lp1/8.png);
	height: 296px;
	bottom: 0;
	background-position: left
}

.lp1Sec3::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/9.png);
	width: 392px;
	height: 623px;
	top: 0;
	right: 0;
	z-index: -1
}

.lp1Sec3 h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 20px 0;
	text-transform: capitalize;
	line-height: normal
}

.lp1Sec3 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp1Sec4 img {
	width: 100%
}

.lp1Sec4 {
	position: relative;
	padding: 50px 0
}

.lp1Sec4 h3 {
	color: #333;
	font-size: 36px;
	font-weight: 700;
	padding: 0 0 20px 0
}

.lp1Sec4::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/5.png);
	height: 544px;
	width: 291px;
	background-position: left;
	left: auto;
	top: 0;
	bottom: 0;
	margin: auto
}

.lp1Sec4::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/16.png);
	width: 116px;
	height: 224px;
	background-repeat: no-repeat;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	background-position: right
}

.lp1Sec5 {
	padding: 45px 0;
	background: #f4f4f4;
	position: relative;
	z-index: 1
}

.lp1Sec5 h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 60px 0 20px 0;
	text-transform: capitalize
}

section.lp1Sec5 img {
	position: relative;
	top: 68px
}

.lp1Sec5 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp1Sec5::before {
	position: absolute;
	content: "";
	width: 206px;
	background: url(../casestudies/images/lp1/8.png);
	height: 296px;
	bottom: 0;
	background-position: left
}

.lp1Sec5::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp1/9.png);
	width: 392px;
	height: 623px;
	top: 0;
	right: 0;
	z-index: -1
}

.lp1Sec6 a {
	padding: 19px 48px;
	background: #2f55c4;
	border-radius: 5px;
	color: #ffff;
	font-weight: 500;
	display: block;
	margin: auto;
	text-align: center;
	width: 23%
}

.lp1Sec6 {
	padding: 50px 0;
	z-index: 1
}

.mainbannerLp2 {
	background: url(../casestudies/images/lp2/1.jpg);
	height: 627px;
	display: flex;
	align-items: center
}

.mainbannerLp2 a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgb(0 0 0 / 15%);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.mainbannerLp2 a:hover {
	background: #2f55c4
}

.mainbannerLp2 h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000
}

.lp2Sec2 h3 {
	color: #333;
	font-weight: 700;
	font-size: 42px;
	padding: 0 0 35px 0
}

.lp2Sec2 p {
	font-size: 16px;
	line-height: 28px;
	color: #000;
	padding: 0 0 80px 0
}

.lp2Sec2 h4 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize;
	line-height: normal
}

.lp2Sec2 img {
	width: 100%
}

.mainbannerLpHead2 p {
	padding: 10px 0 30px 0
}

.mainbannerLpHead2 {
	padding: 5% 0 0 0
}

.lp2Sec3 img {
	width: 100%
}

.lp2Sec3 h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize
}

.lp2Sec3 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp2Sec3 {
	position: relative;
	padding: 60px 0
}

.lp2Sec3::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp2/4.png);
	width: 993px;
	height: 607px;
	right: 0;
	top: 0;
	background-size: 91%;
	background-repeat: no-repeat;
	background-position: right
}

.lp2Sec4 img {
	width: 100%
}

.lp2Sec4 h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize
}

.lp2Sec4 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp2Sec4 {
	padding: 50px 0
}

.mainbannerLp3 {
	background: url(../casestudies/images/lp3/2.jpg);
	height: 627px;
	display: flex;
	align-items: center
}

.mainbannerLp3 a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgb(0 0 0 / 15%);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.mainbannerLp3 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.mainbannerLp3 .row.align-items-center {
	display: flex;
	align-items: center
}

.mainbannerLpHead3 p {
	padding: 20px 0
}

.lp3Sec3::before {
	display: none
}

.mainbannerLp4 {
	background: url(../casestudies/images/lp4/1.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.mainbannerLp4::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp4/3.png);
	height: 627px;
	width: 902px
}

.mainbannerLp4::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp4/4.png);
	width: 772px;
	height: 681px;
	right: 0;
	bottom: 0;
	z-index: -1
}

.mainbannerLp4 a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgb(0 0 0 / 15%);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.mainbannerLp4 a:hover {
	background: #2f55c4
}

.lp4Sec3 {
	position: relative;
	background: #f7f7f7;
	padding: 30px 0
}

.lp4Sec3 h4 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize;
	line-height: normal
}

.lp4Sec3 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp4Sec3 .row {
	align-items: center;
	display: flex
}

.lp4Sec3 img {
	width: 100%
}

.lp4Sec3 .row {
	display: flex;
	align-items: center
}

.lp2Sec2 .row {
	display: flex;
	align-items: center
}

.lp4Sec1 .row {
	display: flex;
	align-items: center
}

.lp2Sec4 .row {
	display: flex;
	align-items: center
}

.banImglp3 {
	z-index: 1;
	padding: 30px 0 0 0
}

.mainbannerLp4 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.mainbannerLp5 {
	background: url(../casestudies/images/lp5/1.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.mainbannerLp5 a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgb(0 0 0 / 15%);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.mainbannerLp5 p {
	font-size: 16px;
	line-height: 28px;
	color: #ffff
}

.mainbannerLp5 a:hover {
	background: #2f55c4
}

.lp5Sec3 img {
	width: 100%
}

.lp5Sec3 h4 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize
}

.lp5Sec3 {
	padding: 100px 0
}

.lp5Sec3 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp5Sec2Head {
	position: relative
}

.lp5Sec2Head::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp5/6.png);
	width: 39px;
	height: 48px;
	right: 0;
	top: -30%
}

.lp5Sec3Head {
	position: relative
}

.lp5Sec3Head::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp5/7.png);
	width: 50px;
	height: 32px;
	right: 0;
	bottom: -50%;
	left: 0
}

.mainbannerLp5 .row {
	display: flex;
	align-items: center
}

.lp5Sec4Head {
	position: relative
}

.lp5Sec4Head::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp5/8.png);
	width: 39px;
	height: 48px;
	right: 0;
	top: -50%
}

.mainbannerLp6 {
	background: url(../casestudies/images/lp6/13.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.mainbannerLp6 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.mainbannerLp6 a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgb(0 0 0 / 15%);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.mainbannerLp6 .row {
	display: flex;
	align-items: center
}

.lp6Sec2 h3 {
	color: #333;
	font-weight: 700;
	font-size: 42px;
	padding: 0 0 35px 0
}

.lp6Sec2 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp6Sec3 h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0;
	text-transform: capitalize
}

.lp6Sec3 p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

.lp6Sec2 {
	padding: 0 0 80px 0;
	position: relative
}

.lp6Sec3 {
	position: relative;
	margin: 0 0 100px 0
}

.lp6Sec3::before {
	position: absolute;
	content: "";
	width: 1136px;
	background: url(../casestudies/images/lp6/2.png);
	height: 484px;
	left: 0
}

.lp6Sec3 .row {
	display: flex;
	align-items: center
}

.lp6Sec3::after {
	position: absolute;
	content: "";
	width: 108px;
	background: url(../casestudies/images/lp6/4.png);
	height: 95px;
	right: 20%;
	bottom: 0
}

p {
	font-size: 16px;
	line-height: 28px;
	color: #000
}

h3 {
	font-size: 36px;
	font-weight: 700;
	color: #000;
	padding: 0 0 30px 0
}

.lp6Sec4 img {
	width: 100%
}

.lp6Sec4Head img {
	width: auto
}

.lp6Sec4 {
	position: relative;
	margin: 0 0 160px 0
}

.lp6Sec4::before {
	position: absolute;
	content: "";
	width: 1078px;
	background: url(../casestudies/images/lp6/5.png);
	height: 484px;
	right: 0
}

.lp6Sec4 .row {
	display: flex;
	align-items: center
}

.lp6Sec4::after {
	position: absolute;
	content: "";
	width: 108px;
	background: url(../casestudies/images/lp6/8.png);
	height: 95px;
	left: 20%
}

.lp6Sec5 {
	position: relative;
	margin: 0 0 150px 0
}

.lp6Sec5 img {
	width: 100%
}

.lp6Sec5 .row {
	display: flex;
	align-items: center
}

.lp6Sec6 img {
	width: 100%
}

.lp6Sec6 .row {
	display: flex;
	align-items: center
}

.lp6Sec5::before {
	position: absolute;
	content: "";
	width: 1136px;
	background: url(../casestudies/images/lp6/9.png);
	height: 484px;
	left: 0
}

.lp6Sec5::after {
	position: absolute;
	content: "";
	width: 108px;
	background: url(../casestudies/images/lp6/4.png);
	height: 95px;
	right: 20%;
	bottom: 0
}

.lp6Sec6::before {
	position: absolute;
	content: "";
	width: 1078px;
	background: url(../casestudies/images/lp6/10.png);
	height: 484px;
	right: 0
}

.lp6Sec6::after {
	position: absolute;
	content: "";
	width: 108px;
	background: url(../casestudies/images/lp6/8.png);
	height: 95px;
	left: 20%
}

section.lp6Sec6 {
	position: relative;
	margin: 0 0 100px 0
}

.mainbannerLp7 {
	background: url(../casestudies/images/lp7/3.jpg);
	height: 627px;
	display: flex;
	align-items: center
}

.mainbannerLp7 a:hover {
	background: #2f55c4
}

.mainbannerLp7 .row {
	display: flex;
	align-items: center
}

section.mainbannerLp7 a {
	background-color: #fbb03b;
	box-shadow: 0 11px 35px 0 rgb(0 0 0 / 15%);
	padding: 15px 68px;
	border-radius: 25px;
	color: #ffff;
	font-size: 20px;
	font-weight: 500;
	transition: .5s
}

.lp7Sec3 {
	position: relative
}

.lp7Sec3::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp7/5.png);
	height: 391px;
	width: 1108px;
	left: 0;
	background-position: left
}

.lp7Sec3::after {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp7/6.png);
	height: 453px;
	width: 341px;
	right: 0;
	bottom: 0;
	background-repeat: no-repeat
}

.lp7Sec3 img {
	width: 100%
}

.lp7Sec3 .row {
	display: flex;
	align-items: center
}

.lp7Sec3Head {
	position: relative
}

.lp7Sec3Head::before {
	position: absolute;
	content: "";
	background: url(../casestudies/images/lp7/7.png);
	width: 30px;
	height: 50px;
	right: 0;
	top: -50%
}

@media (max-width:1440px) {
	.lp1Sec3 img {
		width: 100%
	}

	.mainbannerLp img {
		width: 100%
	}

	.lp1Sec5 img {
		width: 100%
	}

	.mainbannerLp::before {
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: bottom;
		left: -12%
	}

	.mainbannerLpHead {
		padding: 0
	}

	.lp1Sec5::before {
		bottom: 0;
		background-position: left bottom;
		background-repeat: no-repeat;
		background-size: 50%
	}

	.lp1Sec5::after {
		background-repeat: no-repeat;
		background-size: 50%;
		background-position: right
	}

	.lp1Sec4::after {
		z-index: -1;
		right: -82px
	}

	.lp1Sec3::after {
		background-repeat: no-repeat;
		background-position: right;
		background-size: 50%
	}

	.lp1Sec2::before {
		background-position: left;
		background-size: 50%;
		background-repeat: no-repeat
	}

	.lp1Sec2::after {
		z-index: -1
	}

}

@media (min-width:768px) and (max-width:1199px) {
	section.mainbannerLp2 {
		height: auto;
		text-align: center
	}

	.lp2Sec3 {
		padding: 0
	}

	.lp2Sec4 .row {
		display: block
	}

	.lp2Sec4 {
		padding: 0
	}

	.lp1Sec6 a {
		width: 40%
	}

	.lp1Sec6 {
		padding: 0 0 50px 0
	}

	h3,
	h4 {
		font-size: 25px !important;
		padding: 0 !important
	}

	.lp1Sec1 {
		padding: 30px 0 10px 0
	}

	.lp2Sec2 h3 {
		padding: 0
	}

	.lp2Sec2 .row {
		display: block
	}

	.lp2Sec2 p {
		padding: 0
	}

	.mainbannerLpHead2 p {
		padding: 0
	}

	.mainbannerLp2 img {
		padding: 20px 0 10px 0
	}

	.mainbannerLpHead2 {
		padding: 0
	}

	h3 {
		padding: 0
	}

	.mainbannerLp2 a {
		width: 60%;
		margin: auto;
		text-align: center;
		display: block
	}

	.mainbannerLp2 h3 {
		font-size: 36px;
		font-weight: 700;
		color: #000;
		text-align: center
	}

	.mainbannerLp::before {
		background-size: 20%;
		background-repeat: no-repeat;
		background-position: left bottom;
		left: 0
	}

	.mainbannerLp::after {
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: right bottom
	}

	section.mainbannerLp img {
		width: 65%;
		display: block;
		text-align: center;
		margin: 45px auto 0
	}

	.mainbannerLp {
		text-align: center;
		height: auto;
		padding: 20px 0
	}

	.lp1Sec2::before {
		background-size: 30%
	}

	.lp1Sec2::before {
		background-size: 30%
	}

	.lp1Sec4 {
		padding: 50px 0
	}

	.lp1Sec4::before {
		background-size: 40%;
		background-repeat: no-repeat;
		background-position: left
	}

	.lp1Sec2 img {
		width: 100%
	}

}

@media (max-width:767px) {
	.lp1Sec2 img {
		width: 100%
	}

	section.lp6Sec4.case-7-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec4.case-7-inner-2 {
		margin-bottom: 0;
		padding-bottom: 0
	}

	section.lp6Sec6.case-7-inner-2.case-7-inner-4 .row {
		flex-direction: column-reverse
	}

	section.mainbannerLp6.case-std-8-bnr {
		background-position: center
	}

	section.mainbannerLp6.case-std-8-bnr {
		background-position: center
	}

	section.lp6Sec4.case-8-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec6.case-8-inner-2.case-8-inner-4 .row {
		flex-direction: column-reverse;
		display: flex
	}

	section.mainbannerLp6.case-std-9-bnr p {
		color: #fff
	}

	section.lp6Sec4.case-9-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec4.case-10-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec4.case-11-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec5.case-11-inner-4 .row {
		display: flex;
		flex-direction: column-reverse
	}

	section.lp6Sec5.case-10-inner-4 .row {
		flex-direction: column-reverse;
		display: flex
	}

	section.lp6Sec4.case-12-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec5.case-12-inner-4 .row {
		display: flex;
		flex-direction: column-reverse
	}

	section.mainbannerLp6.case-std-13-bnr {
		background-position: center
	}

	section.lp6Sec4.case-13-inner-2 .row {
		flex-direction: column-reverse
	}

	section.mainbannerLp6.case-std-14-bnr {
		background-position: center
	}

	section.lp6Sec4.case-14-inner-2 .row {
		flex-direction: column-reverse
	}

	section.lp6Sec4.case-14-inner-2 img {
		width: 100%
	}

	section.lp6Sec5.case-14-inner-4 .row {
		display: flex;
		flex-direction: column-reverse
	}

	section.lp2Sec3 .lp2Sec3-row {
		display: flex;
		flex-direction: column-reverse
	}

	.process-text h3:after {
		left: 115px
	}

	section#result1 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	section#result3 .flexRow {
		display: flex;
		flex-direction: column-reverse
	}

	.lp1Sec1 ul li a {
		font-size: 10px;
		line-height: 10px;
		padding: 0 8px
	}

	.lp1Sec1 i.fas.fa-arrow-left {
		padding: 0 5px 0 0
	}

	.lp1Sec1 i.fas.fa-bars {
		padding: 0 5px 0 0
	}

	.lp1Sec1 i.fas.fa-arrow-right {
		padding: 0 0 0 5px
	}

	section {
		overflow: hidden
	}

	.mainbannerLp::before {
		display: none
	}

	.mainbannerLp::after {
		display: none
	}

	.mainbannerLp {
		height: auto;
		padding: 20px 0 0
	}

	.mainbannerLp img {
		margin: 45px 0 0 0
	}

	p {
		font-size: 14px !important;
		line-height: 26px !important;
		text-align: center !important
	}

	.lp1Sec1::before {
		display: none
	}

	.lp1Sec1::after {
		display: none
	}

	.lp1Sec2::before {
		display: none
	}

	.lp1Sec2::after {
		display: none
	}

	.lp1Sec3::before {
		display: none
	}

	.lp1Sec3::after {
		display: none
	}

	.lp1Sec4::before {
		display: none
	}

	.lp1Sec4::after {
		display: none
	}

	.lp1Sec5::before {
		display: none
	}

	.lp1Sec5::after {
		display: none
	}

	h3,
	h4 {
		font-size: 20px !important;
		text-align: center !important
	}

	.lp1Sec1 {
		padding: 20px 0
	}

	.lp1Sec2 p {
		padding: 0 0 15px 0
	}

	.lp1Sec2 h3 {
		padding: 0;
		margin: 0 0 10px 0
	}

	.lp1Sec2 h4 {
		padding: 0
	}

	.lp1Sec2 p {
		padding: 0
	}

	.lp1Sec3 {
		padding: 20px 0
	}

	.lp1Sec3 h3 {
		padding: 0
	}

	section.lp1Sec3 {
		padding: 0
	}

	section.lp1Sec4 {
		padding: 10px 0
	}

	.lp1Sec1 ul {
		justify-content: center;
		text-align: center
	}

	.lp1Sec5 h3 {
		padding: 0
	}

	.lp1Sec5 {
		padding: 10px 0
	}

	.lp1Sec5 p {
		margin-bottom: 0
	}

	section.lp1Sec5 img {
		position: relative;
		top: 0
	}

	section.lp1Sec6 {
		padding: 10px 0
	}

	.lp1Sec6 a {
		width: 100%
	}

}

@media (max-width:1440px) {
	.mainbannerLp2 img {
		width: 100%
	}

	.lp2Sec3::before {
		background-size: 60%
	}

	.mainbannerLp3 a {
		width: 60%
	}

	.lp2Sec4 {
		padding: 70px 0
	}

	.lp1Sec6 {
		padding: 0 0 50px 0
	}

	.lp2Sec2 p {
		padding: 0 0 50px 0
	}

	.lp2Sec2 h3 {
		padding: 0
	}

	.lp1Sec1 {
		padding: 30px 0 20px 0
	}

	.lp2Sec3 {
		padding: 50px 0 0
	}

}

@media(min-width:768px) and (max-width:1199px) {
	section.mainbannerLp2 {
		height: auto;
		text-align: center
	}

	.mainbannerLp3 {
		height: auto;
		padding: 20px 0;
		text-align: center
	}

	.mainbannerLp3 a {
		display: block;
		margin: auto;
		width: 55%;
		font-size: 14px
	}

	.mainbannerLpHead3 p {
		padding-bottom: 0
	}

	section.mainbannerLp2 img {
		width: auto;
		padding: 40px 0 10px 0
	}

	.mainbannerLpHead2 {
		padding: 0
	}

	.mainbannerLp2 h3 {
		padding: 0
	}

	.lp2Sec2 p {
		padding: 0
	}

	.lp2Sec3 {
		padding: 50px 0
	}

	.lp2Sec3::before {
		background-size: 60%;
		background-position: top right
	}

	section.mainbannerLp2 img {
		width: 100% !important
	}

}

@media (max-width:767px) {
	.mainbannerLp3 a {
		width: 79%;
		font-size: 14px;
		display: block;
		margin: auto
	}

	.mainbannerLpHead2 p {
		padding: 0
	}

	.lp2Sec3::before {
		display: none
	}

	.lp2Sec2 h3 {
		padding: 0;
		margin: 0 0 10px 0
	}

	.lp2Sec2 p {
		padding: 0
	}

	.lp2Sec2 h4 {
		padding: 0 0 10px 0
	}

	.lp2Sec3 {
		padding: 0
	}

	.lp2Sec3 h3 {
		padding: 0
	}

	.lp2Sec4 {
		padding: 20px 0
	}

	.lp2Sec4 h3 {
		padding: 0
	}

	.lp2Sec4 {
		padding: 0
	}

	.mainbannerLp2 {
		height: auto;
		padding: 0 0 15px 0
	}

	.mainbannerLp3 {
		height: auto;
		padding: 20px 0
	}

}

@media (max-width:1440px) {
	.mainbannerLp3 img {
		width: 100%
	}

	.mainbannerLpHead3 img {
		width: auto
	}

	.mainbannerLp3 .row.align-items-center {
		display: block
	}

	.banImglp3 {
		padding: 30px 0 0 0
	}

	.mainbannerLp3 a {
		display: block;
		text-align: center
	}

	.lp3Sec3 {
		padding: 0 0 30px 0
	}

	.mainbannerLp4::before {
		background-repeat: no-repeat;
		background-position: left top
	}

}

@media (min-width:768px) and (max-width:1199px) {
	.mainbannerLp3 {
		display: block;
		text-align: center
	}

	.mainbannerLp4 {
		height: auto;
		padding: 20px 0;
		text-align: center
	}

	.mainbannerLp4::before {
		background-position: top left;
		top: 0;
		background-size: 60%;
		background-repeat: no-repeat
	}

	.lp4Sec3::before {
		background-position: top left;
		top: 0
	}

	.mainbannerLp3 a {
		width: 61%
	}

	.mainbannerLp3 {
		padding: 20px 0;
		height: auto
	}

	.lp1Sec6 {
		padding-top: 0
	}

	.banImglp3 img {
		width: 100%
	}

}

@media (max-width:767px) {
	.mainbannerLp4 {
		height: auto;
		padding: 20px 0
	}

	.mainbannerLp4 a {
		width: 55%;
		font-size: 14px;
		display: block;
		margin: auto
	}

}

.lp4Sec3::before {
	position: absolute;
	content: "";
	background: url(../images/lp4/7.png);
	width: 383px;
	height: 698px;
	left: 0;
	background-repeat: no-repeat;
	background-size: 80%;
	top: -79px
}

@media (max-width:1440px) {
	.mainbannerLp4::after {
		background-repeat: no-repeat;
		background-size: 31%;
		background-position: right bottom
	}

	.lp4Sec3::before {
		top: -45%;
		background-size: 30%;
		background-position: bottom left
	}

}

@media (min-width:768px) and (max-width:1199px) {
	.mainbannerLp4::before {
		display: none
	}

	.mainbannerLp5 .row {
		display: block
	}

	section.mainbannerLp5 {
		height: auto;
		padding: 20px 0;
		text-align: center
	}

	.mainbannerLp5 a {
		width: 50%;
		font-size: 14px;
		margin: auto
	}

	.mainbannerLp4 img {
		width: 100%
	}

	.mainbannerLpHead3 img {
		width: auto
	}

	section.mainbannerLp4 {
		height: auto;
		padding: 20px 0;
		display: block;
		margin: auto;
		text-align: center
	}

	.banImglp3 img {
		display: block;
		margin: auto
	}

	.lp4Sec3::before {
		top: 0;
		background-size: 27%;
		background-position: top left
	}

}

@media (max-width:767px) {
	.mainbannerLp4 img {
		width: 100%
	}

	.mainbannerLpHead3 img {
		width: auto
	}

	.mainbannerLp4 a {
		width: 100%;
		display: block;
		text-align: center
	}

	.lp2Sec2 .row {
		display: block
	}

	.lp4Sec3 .row {
		display: block
	}

	.lp2Sec4 .row {
		display: block
	}

	.lp4Sec3::before {
		display: none
	}

	.lp4Sec3 h4 {
		padding: 0
	}

	.mainbannerLp4::before {
		display: none
	}

	.mainbannerLp4::after {
		display: none
	}

	.mainbannerLp5 {
		height: auto
	}

	.mainbannerLp5 a {
		width: 52%;
		font-size: 14px;
		display: block;
		margin: auto
	}

	.mainbannerLpHead3 p {
		padding: 20px 0 0 0
	}

}

@media (max-width:1440px) {
	.mainbannerLp5 img {
		width: 100%
	}

	.mainbannerLpHead3 img {
		width: auto
	}

	.mainbannerLp5 a {
		display: block;
		text-align: center;
		width: 50%
	}

	.mainbannerLp5 p {
		text-align: left
	}

	.lp5Sec3 {
		padding: 20px 0
	}

	.lp5Sec3 h4 {
		padding: 0 0 10px 0
	}

	.lp5Sec3 {
		padding: 0
	}

}

@media (max-width:767px) {
	.mainbannerLp5 .row {
		display: block
	}

	.mainbannerLp5 {
		padding-bottom: 20px
	}

}

@media screen and (min-device-width:768px) and (max-device-width:1199px) {
	.mainbannerLp5 .row {
		display: block
	}

	ul.social li a {
		width: 39px;
		height: 39px
	}

	.navs_port_slider .prev-arrow {
		left: 9px !important;
		z-index: 1
	}

	.navs_port_slider .next-arrow {
		right: 4px !important;
		z-index: 1
	}

	div#portfilio1 .screen {
		width: 70%
	}

	section.review_sec.new-testi-page-st h2 {
		font-size: 18px
	}

	.testi-dtl p {
		font-size: 12px;
		padding-right: 10px
	}

	.video-testi-txt-bx p {
		color: #4f4f4f;
		font-size: 12px;
		line-height: 20px
	}

	.contact-box h4 {
		font-size: 14px !important
	}

	.ind-box.text-center {
		height: 100px
	}

	.copy-right p {
		font-size: 13px
	}

	.fact-boxes h3 {
		font-size: 13px !important
	}

	section.process-section {
		padding: 40px 0 0
	}

	.all-section {
		padding: 15px 0
	}

	section.award-inner-section .flexRow h4 {
		font-size: 10px !important
	}

	.lp2Sec3-row {
		display: flex;
		flex-direction: column-reverse
	}

	.logo img {
		width: 152px !important
	}

	.services-how .nav-pills li.active a {
		width: 90%
	}

	.offer-section .nav-pills>li>a {
		font-size: 10px
	}

	.package button {
		font-size: 11px
	}

	.package a {
		font-size: 11px
	}

	.industry-section .ind-box h4 {
		font-size: 16px !important
	}

	.mainbannerLp5 img {
		width: auto
	}

	.mainbannerLp5 {
		height: auto;
		padding: 20px 0;
		display: block;
		text-align: center
	}

	.mainbannerLp5 a {
		width: 50%
	}

	.lp2Sec2 .row {
		display: block
	}

	.lp2Sec4 .row {
		display: block
	}

}

@media (max-width:1440px) {
	.mainbannerLp6 {
		background-position: right
	}

	.lp6Sec3::before {
		background-size: 75%;
		background-repeat: no-repeat
	}

	.lp6Sec4::before {
		background-size: 74%;
		background-repeat: no-repeat;
		background-position: right
	}

	.lp6Sec5::before {
		background-repeat: no-repeat;
		background-size: 70%
	}

	.lp6Sec6::before {
		background-size: 75%;
		background-repeat: no-repeat;
		background-position: right
	}

	.mainbannerLp6 img {
		width: 100%
	}

	.mainbannerLp6 .mainbannerLpHead3 img {
		width: auto
	}

}

@media (min-width:768px) and (max-width:1199px) {
	.lp6Sec5::after {
		right: 0;
		background-position: right;
		background-size: 50%;
		background-repeat: no-repeat
	}

	.mainbannerLp6 .row {
		display: block
	}

	.mainbannerLp6 {
		height: auto;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: inherit;
		padding: 20px 0;
		text-align: center
	}

	.lp1Sec6 a {
		width: 35%
	}

	.lp6Sec6::after {
		left: 0;
		background-position: left;
		background-size: 50%;
		background-repeat: no-repeat
	}

	.lp6Sec4::after {
		left: 0;
		background-position: left;
		background-size: 50%;
		background-repeat: no-repeat
	}

	.lp6Sec3::after {
		right: 0;
		background-size: 50%;
		background-repeat: no-repeat;
		background-position: right
	}

	.lp6Sec3::before {
		width: 100%
	}

	.lp6Sec4::before {
		width: 100%;
		background-position: top right
	}

	.lp6Sec5::before {
		width: 100%
	}

	.lp6Sec6::before {
		width: 100%;
		background-position: top right
	}

	.lp6Sec3 .row {
		display: block
	}

	.lp6Sec4 .row {
		display: block
	}

	.lp6Sec5 .row {
		display: block
	}

	.lp6Sec6 .row {
		display: block
	}

}

@media (max-width:767px) {
	.mainbannerLp6 .row {
		display: block
	}

	.mainbannerLp6 {
		height: auto;
		padding: 20px 0;
		text-align: center
	}

	.mainbannerLp6 p {
		padding-bottom: 10px
	}

	.mainbannerLp6 {
		background-position: inherit
	}

	.mainbannerLpHead3 img {
		margin: auto;
		width: auto;
		text-align: center;
		display: block
	}

	.lp6Sec2 h3 {
		padding: 0
	}

	.lp6Sec2 {
		padding: 0
	}

	.lp6Sec3 .row {
		display: block
	}

	.lp6Sec3 img {
		width: 100%
	}

	.lp6Sec3::before {
		display: none
	}

	.lp6Sec3::after {
		display: none
	}

	.lp6Sec3 h3 {
		padding: 0
	}

	.lp6Sec3 {
		margin: 0
	}

	.lp6Sec4::before {
		display: none
	}

	.lp6Sec4::after {
		display: none
	}

	h3 {
		padding: 0
	}

	.lp6Sec4 {
		margin: 0
	}

	.lp6Sec5::before {
		display: none
	}

	.lp6Sec5::after {
		display: none
	}

	.lp6Sec5 .row {
		display: block
	}

	.lp6Sec5 {
		margin: 0
	}

	.lp6Sec6::before {
		display: none
	}

	.lp6Sec6::after {
		display: none
	}

	.lp6Sec6 .row {
		display: block
	}

	section.lp6Sec6 {
		margin: 0
	}

}

.mainbannerLpHead3 img {
	width: auto
}

.lp1Sec3::before {
	background-size: 45%;
	background-repeat: no-repeat
}

.lp1Sec4 {
	overflow: hidden
}

section.lp1Sec1 .fa-bars {
	margin-right: 5px
}

.payment-margin h3 {
	margin-bottom: 0
}

.case-studies-bx {
	margin-top: 20px;
	overflow: hidden;
	position: relative
}

.case-studies-bx img {
	width: 100%
}

.case-studies-sec {
	padding: 50px 0
}

.case-btn-st {
	position: absolute;
	left: 0;
	right: 0;
	display: flex;
	top: 500px;
	bottom: 0;
	background: #06060687;
	border-radius: 8px;
	transition-duration: 1s;
	align-items: center;
	justify-content: center
}

.case-studies-bx:hover .case-btn-st {
	top: 0;
	transition-duration: 1s
}

.case-btn-st a {
	background: #2f55c4;
	color: #fff;
	padding: 10px 20px;
	border-radius: 5px
}

.logo-case-1 {
	width: auto;
	margin-bottom: 10px
}

section.mainbannerLp .row {
	display: flex;
	align-items: center
}

img.logo-case-1 {
	width: auto
}

ul.social-new-1 li img {
	width: 25px
}

.about-content {
	padding-top: 20px
}

.prlog-sec h3 {
	font-size: 23px;
	font-weight: 700;
	color: #282526;
	margin: 0;
	padding-bottom: 10px;
	line-height: 31px
}

.prlog-sec p {
	padding-bottom: 0;
	font-size: 15px;
	font-weight: 500;
	color: #282526;
	line-height: 26px
}

.prlog-sec a {
	background: #2f55c4;
	color: #fff;
	display: inline-block;
	padding: 12px;
	font-size: 16px;
	border: 2px solid transparent;
	font-weight: 500;
	width: 200px;
	text-align: center
}

.prlog-sec {
	padding: 50px 0
}

section.prlog-sec .row {
	display: flex;
	align-items: center
}

.case-std-7-bnr {
	background: url(../casestudies/images/generation/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-7-inner-1 {
	position: relative;
	padding: 50px 0;
	margin-bottom: 0
}

.case-7-inner-1:before {
	position: absolute;
	top: 0;
	left: 0;
	background: url(../casestudies/images/generation/inner-img-1-bg.png);
	width: 50%;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: left center;
	height: 54%
}

.case-7-inner-2:before {
	position: absolute;
	top: 0;
	right: 0;
	background: url(../casestudies/images/generation/inner-img-2-bg.png);
	width: 50%;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: right center;
	height: 100%
}

section.lp6Sec4.case-7-inner-2 {
	padding: 50px 0;
	margin-bottom: 20px
}

.case-7-inner-1:after {
	display: none
}

.case-7-inner-2:after {
	display: none
}

.bg-img-cse {
	position: relative
}

.bg-img-cse:before {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: url(../casestudies/images/generation/inner-bg.png);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	width: 100%;
	z-index: -1
}

.case-std-8-bnr {
	background: url(../casestudies/images/katherine/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-std-8-bnr p {
	color: #fff
}

.case-8-inner-2 {
	background: #f7f7f7;
	padding: 50px 0;
	margin-bottom: 50px
}

.case-8-inner-1 {
	margin-bottom: 50px
}

section.lp6Sec3.case-8-inner-1:after,
section.lp6Sec3.case-8-inner-1:before {
	display: none
}

section.lp6Sec3.case-8-inner-2:after,
section.lp6Sec3.case-8-inner-2:before {
	display: none
}

.lp6Sec5.case-8-inner-1.case-8-inner-3:before,
.lp6Sec5.case-8-inner-1:after {
	display: none
}

section.lp6Sec6.case-8-inner-2:after,
section.lp6Sec6.case-8-inner-2:before {
	display: none
}

section.lp6Sec4.case-8-inner-2:after,
section.lp6Sec4.case-8-inner-2:before {
	display: none
}

section.lp6Sec5.case-8-inner-1:before {
	display: none
}

.bg-img-cse {
	background: 0 0;
	z-index: -1
}

.case-std-9-bnr {
	background: url(../casestudies/images/kevin/banner-img.png);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-9-inner-1:before {
	content: '';
	background: url(../casestudies/images/kevin/inner-bf-img.png);
	background-size: 85%;
	background-position: left center;
	background-repeat: no-repeat;
	width: 50%;
	position: absolute;
	left: 0;
	top: 0;
	bottom: 0;
	margin: auto
}

.case-9-inner-1:after {
	content: '';
	background: url(../casestudies/images/kevin/inner-bf-af-img.png);
	background-size: 85%;
	background-position: right center;
	background-repeat: no-repeat;
	width: 10%;
	position: absolute;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	height: 260px
}

.case-9-inner-2:before {
	content: '';
	background: url(../casestudies/images/kevin/inner-img-af.png);
	background-size: 85%;
	background-position: right center;
	background-repeat: no-repeat;
	width: 50%;
	position: absolute;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto
}

.case-9-inner-2:after {
	content: '';
	background: url(../casestudies/images/kevin/inner-af-bf-img.png);
	background-size: 85%;
	background-position: left center;
	background-repeat: no-repeat;
	width: 10%;
	position: absolute;
	left: 0;
	top: 0;
	bottom: 0;
	margin: auto;
	height: 260px
}

.case-9-inner-1 {
	margin-bottom: 50px
}

.case-9-inner-2 {
	margin-bottom: 50px
}

.case-std-10-bnr {
	background: url(../casestudies/images/lee-ann/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-10-inner-1:before {
	display: none
}

.case-10-inner-1:after {
	content: '';
	background: url(../casestudies/images/lee-ann/inner-img-1-af.png);
	background-size: 85%;
	background-position: right bottom;
	background-repeat: no-repeat;
	width: 10%;
	position: absolute;
	right: 0;
	bottom: 0;
	margin: auto;
	height: 416px
}

.case-10-inner-2 {
	background: url(../casestudies/images/lee-ann/inner-img-2-bg.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	padding: 50px 0;
	margin-bottom: 50px
}

.case-10-inner-3 {
	margin-bottom: 50px
}

.case-10-inner-1 {
	margin-bottom: 50px
}

.case-10-inner-4 {
	background: url(../casestudies/images/lee-ann/inner-img-4-bg.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	padding: 50px 0
}

.case-10-inner-2:after,
.case-10-inner-2:before {
	display: none
}

.case-10-inner-3:after,
.case-10-inner-3:before {
	display: none
}

.case-10-inner-4:after,
.case-10-inner-4:before {
	display: none
}

.case-std-11-bnr {
	background: url(../casestudies/images/sosa/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-11-inner-1:after,
.case-11-inner-1:before {
	display: none
}

.case-11-inner-2:after,
.case-11-inner-2:before {
	display: none
}

.case-11-inner-3:after,
.case-11-inner-3:before {
	display: none
}

.case-11-inner-4:after,
.case-11-inner-4:before {
	display: none
}

.case-std-11-bnr p {
	color: #fff
}

.case-11-inner-1 {
	background: url(../casestudies/images/sosa/inner-img-1-bg.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	padding: 50px 0;
	margin: 0
}

.case-11-inner-2 {
	background: url(../casestudies/images/sosa/inner-img-2-bg.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	padding: 50px 0;
	margin: 0
}

.case-11-inner-3 {
	background: url(../casestudies/images/sosa/inner-img-3-bg.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	padding: 50px 0;
	margin: 0
}

.case-11-inner-4 {
	background: url(../casestudies/images/sosa/inner-img-4-bg.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	padding: 50px 0
}

.case-std-12-bnr {
	background: url(../casestudies/images/olivea/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-12-inner-1:after,
.case-12-inner-1:before {
	display: none
}

.case-12-inner-2:after,
.case-12-inner-2:before {
	display: none
}

.case-12-inner-3:after,
.case-12-inner-3:before {
	display: none
}

.case-12-inner-4:after,
.case-12-inner-4:before {
	display: none
}

.case-12-inner-1 {
	margin-bottom: 50px
}

.case-12-inner-2 {
	margin-bottom: 50px
}

.case-12-inner-3 {
	margin-bottom: 50px
}

.case-std-13-bnr {
	background: url(../casestudies/images/sammy/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-std-13-bnr p {
	color: #fff
}

.case-13-inner-1:before {
	display: none
}

.case-13-inner-2:after,
.case-13-inner-2:before {
	display: none
}

.case-13-inner-3:before {
	display: none
}

.case-13-inner-1 {
	padding: 50px 0;
	margin-bottom: 0
}

.case-13-inner-2 {
	margin-bottom: 50px
}

.case-13-inner-1:after {
	background: #d0c4b2;
	position: absolute;
	left: 0;
	top: 0;
	width: 50%;
	height: 80%;
	border-radius: 0 296px 0 0;
	z-index: -1
}

.case-13-inner-3:after {
	background: #d0c4b2;
	position: absolute;
	right: 0;
	top: 0;
	width: 55%;
	height: 102%;
	border-radius: 296px 0 0 0;
	z-index: -1
}

.case-std-14-bnr {
	background: url(../casestudies/images/mask/banner-img.jpg);
	height: 627px;
	display: flex;
	align-items: center;
	position: relative;
	z-index: 1
}

.case-14-inner-1:before,
.case-14-inner-3:before {
	content: '';
	background: url(../casestudies/images/mask/inner-bg-1.png);
	background-size: 100%;
	background-position: left top;
	background-repeat: no-repeat;
	width: 50%;
	position: absolute;
	left: 0;
	top: 0;
	margin: auto;
	height: 89%
}

.case-14-inner-2:after,
.case-14-inner-4:after {
	content: '';
	background: url(../casestudies/images/mask/inner-bg-2.png);
	background-size: 100%;
	background-position: right top;
	background-repeat: no-repeat;
	width: 50%;
	position: absolute;
	right: 0;
	top: 0;
	margin: auto;
	height: 100%;
	z-index: -1;
	left: inherit
}

.case-14-inner-1:after {
	display: none
}

.case-14-inner-2:before {
	display: none
}

.case-14-inner-3:after {
	display: none
}

.case-14-inner-4:before {
	display: none
}

.case-14-inner-2:after {
	height: 130%
}

.case-14-inner-2 img {
	width: 120%
}

.case-14-inner-2 {
	padding: 50px 0
}

.case-14-inner-1 {
	margin-bottom: 50px
}

.case-14-inner-3 {
	margin-bottom: 50px
}

.contact-section .section-head {
	margin: 0 !important;
	padding: 10px 0 20px 0
}

.contact-section p {
	padding: 10px 0 0 0
}

.contact-left h3 {
	margin: 0 0 20px 0 !important
}

.therapist-box {
	position: relative
}

.nonprofit-box {
	position: relative
}

.portfolio-section .section-head {
	padding: 0 0 22px 0;
	margin: 0
}

.test-banner {
	position: relative
}

.test-banner::before {
	position: absolute;
	content: "";
	background: #000000de;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	width: 100%;
	height: 100%
}

.pkg-heads h3 {
	padding: 0;
	margin: 0
}

.pkg-heads p {
	padding: 15px 0 25px 0
}

.pkg-banner-new h3 {
	padding: 0
}

.pkg-banner-new p {
	text-align: center;
	color: #fff;
	font-size: 18px;
	line-height: 27px
}

.offer-section {
	padding: 50px 0 20px 0
}

[class^=box-] {
	display: none
}

[class^=box-].showfirst {
	display: block
}

ul.all-brand-tabs li a {
	background: #2f55c4;
	padding: 12px 50px;
	border-radius: 5px;
	color: #fff;
	font-weight: 500;
	font-size: 16px;
	margin: 0 10px 0 0
}

ul.all-brand-tabs {
	display: flex;
	justify-content: center;
	margin: 0 0 50px 0
}

ul.all-brand-tabs li.active a {
	background: #000
}

.portfolio-banner p {
	color: #fff;
	font-size: 17px
}

.portfolio-banner h3 {
	padding: 0
}

.contact-banner h3 {
	padding: 0
}

.contact-banner p {
	color: #fff;
	font-size: 17px
}

.test-banner p {
	color: #fff;
	font-size: 17px
}

.test-banner h3 {
	padding: 0
}

.logo-foilo-box {
	margin: 0 0 40px 0
}

section.industry-section {
	padding-bottom: 30px
}

.award-section .section-head {
	padding: 0 !important
}

.offer-section .section-head {
	padding: 0 0 30px 0;
	margin: 0
}

.tech-sec .section-head {
	padding: 40px 0 0 0
}

.contact-section {
	padding: 40px 0 0 0
}

.pkg-banner-new {
	background: #000
}

header.fixed-header i.fa.fa-envelope {
	color: #e944a0;
	font-size: 20px;
	position: relative;
	left: -6px
}

.tech-logo-box img {
	width: 200px;
	margin: 0 70px
}

.inner-tab-brands {
	display: flex;
	align-items: center;
	justify-content: center;
	margin: 0 0 20px 0
}

.inner-tab-brands a {
	border-radius: 4px;
	color: #181f3c;
	font-size: 14px;
	font-weight: 600;
	margin: 0 20px
}

.inr-tb-st-clr .inner-tab-brands .item.active a {
	color: #2f55c4
}

.hero_banner_newyear {
	position: relative;
	overflow: hidden
}

@media (min-width:1200px) and (max-width:1600px) {
	.hero_banner_newyear:after,
	.hero_banner_newyear:before {
		opacity: .3
	}

	section.content-pg.all-section.terms-con li {
		color: #000 !important
	}

}

@media (max-width:767px) {
	.hero_banner_newyear:before {
		background-image: url(../img/hero-new-year-before-1.webp);
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		padding: 60px 0;
		width: 100%;
		height: 100%;
		content: "";
		position: absolute;
		left: 0;
		top: -140px;
		background-repeat: no-repeat;
		background-size: 100%;
		z-index: 0;
		bottom: 0;
		margin: auto;
		right: 0;
		opacity: .5
	}

	.hero_banner_newyear:after {
		display: none
	}

}

.testimonial-trust {
	position: relative;
	top: -10px
}

.top-bar .pull-right {
	float: none !important;
	margin: 0 0 0 -29px
}

section.content-pg.all-section.terms-con li {
	font-size: 16px;
	line-height: 25px;
	color: #333;
	font-family: Poppins, sans-serif;
	margin-bottom: 10px;
	list-style: disc;
	color: #000 !important
}

section.content-pg.all-section.terms-con ul {
	padding-left: 20px
}

section.content-pg.all-section.terms-con h3 {
	padding: 0
}

section.content-pg.all-section.terms-con a {
	color: #2f55c4
}

ul.terms-ul-sub {
	padding: 10px 0 0 0
}

ul.terms-ul-sub li {
	list-style: numeric !important
}

ul.new-2022 {
	list-style: disc;
	margin: 18px;
	font-size: 16px;
	line-height: 28px;
	color: #000;
	font-family: Poppins, sans-serif
}



.portfolio_page_mmz .slick-slide img {
    height: auto;
}

.portfolio-list-new li a {
    background: #2f55c4;
    padding: 12px 50px;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
    font-size: 16px;
}

.portfolio-list-new {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: center;
    column-gap: 20px;
}

.portfolio-list-new li {
    margin: 0 0 35px 0;
    cursor: pointer;
}

.portfolio-list-new  li.active a{

	background: #000000
}
</style>








<section class="banner-section all-section">
<div class="container">
<div class="row flexStart">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class=" wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h1 class="section-head"> TRANSFORM TARGET AUDIENCE INTO CUSTOMERS WITH AMERICAN WEB CODERS, THE #1 <span>DENTAL WEBSITE DEVELOPMENT AGENCY</span></h1>
<p>We are the pioneers of dentist service websites, with a record of catering to 3900+ dental practices. Our approach evolves, advances, and progresses your dental practice business in the digital world. We are specialized in engaging clients with appealing features. So, what are you waiting for? Leverage our expertise to grow your sales and revenues!</p>
<a class="lgt-btn hvr-bounce-to-right" href="#">Get a Quote
<i aria-hidden="true" class="pull-right fa fa-angle-right"></i></a> <a class="lgt-btn white-btn hvr-bounce-to-right" href="#">See offers <i aria-hidden="true" class="pull-right fa fa-angle-right"></i></a>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="banner-ss slick-initialized slick-slider">
<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 345px; transform: translate3d(0px, 0px, 0px);" role="listbox"><figure class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 345px;" tabindex="-1" role="option" aria-describedby="slick-slide10">
<img alt="Image" class="img-responsive" src="img/dental-case-side-img-2.png">
</figure></div></div>
</div>
</div>
</div>
</div>
</section>
<section class="banner-section all-section">
<div class="container">
<div class="row flexRow">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="banner-img">
<img src="img/dental-port-14.png" class="img-responsive" alt="service-2">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class=" ml-2 wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h2 class="section-head">We <span>Design Websites</span> That Appeal To New Customers</h2>
<p>Our dental marketing approach initiates with a rapidly converting dental website design. We discuss with clients to understand their requirements. We incorporate elements that make our clients a distinct entity, as per the practices. We translate your expertise into a custom design, convincing more new patients to choose your dental service.</p>
</div>
</div>
</div>
</div>
</section>
<section id="design1" class="banner-section bottom-section">
<div class="container">
<div class="row flexRow">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class=" ml-2 wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h2 class="section-head">Online Appointment Scheduling</h2>
<p>We will develop an online booking facility on your website that makes it easy for customers to book and avail your services.</p>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="banner-img">
<img src="img/dental-cta-computer.png" class="img-responsive" alt="service-detail-1">
</div>
</div>
</div>
</div>
</section>
<section id="design2" class="banner-section bottom-section">
<div class="container">
<div class="row flexRow">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="banner-img">
<img src="img/dental-feature-img.png" class="img-responsive" alt="service-detail-2">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class=" ml-2 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="2s">
<h2 class="section-head">Social Media Integrated<span> Websites</span></h2>
<p>Industries depend on social media in the present era, and we understand the value of social media for your dental services. Linking the social media accounts to the site enhances the credibility of your business and allows clients to learn more about your business.</p>
</div>
</div>
</div>
</div>
</section>
<section id="design3" class="banner-section bottom-section">
<div class="container">
<div class="row flexRow">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class=" ml-2 wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h2 class="section-head">Mobile <span>Friendly</span></h2>
<p>More than half of the online searches are conducted through mobile phones. To target a larger audience, including mobile users, we develop responsive, mobile-friendly dental service website designs to seamlessly meet the expectations of smartphone users. Our designs are highly functional on mobile phones and other devices, enabling countless consumers to reach out to you without any hassle.</p>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="banner-img">
<img src="img/dental-port-17.png" class="img-responsive" alt="service-detail-3">
</div>
</div>
</div>
</div>
</section>

<section class="industry-section brand-stories all-section">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 center-col">
<h2 class="section-head wow bounceIn text-center" data-wow-delay="0.6s" data-wow-duration="2s">
Why Choose Us </h2>
</div>
<div class="col-md-4 col-xs-12">
<div class="ind-box text-center hvr-grow mb-3">
<img alt="Image" class="img-responsive" src="img/brand-stories-1.png">
<h4>Interactive Site</h4>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="ind-box text-center hvr-grow mb-3">
<img alt="Image" class="img-responsive" src="img/brand-stories-2.png">
<h4>UI/UX Design</h4>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="ind-box text-center hvr-grow mb-3">
<img alt="Image" class="img-responsive" src="img/brand-stories-3.png">
<h4>Responsive Layouts</h4>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="ind-box text-center hvr-grow mb-3">
<img alt="Image" class="img-responsive" src="img/brand-stories-4.png">
<h4>Content Strategy</h4>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="ind-box text-center hvr-grow mb-3">
<img alt="Image" class="img-responsive" src="img/brand-stories-5.png">
<h4>User-friendly Websites</h4>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="ind-box text-center hvr-grow mb-3">
<img alt="Image" class="img-responsive" src="img/brand-stories-6.png">
<h4>24/7 Chat Support</h4>

</div>
</div>
</div>
</div>
</section>

<section class="onboard-section services-how all-section">
<div class="container">
<div class="row">
<div class="col-md-10 col-sm-10 col-xs-12 center-col">
<div class="onboard-content text-center wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="2s">
<h3 class="pop-head">HOW <span>WE WORK</span> </h3>
<h3 class="section-head">We design powerful, dental focused platforms</h3>
</div>
</div>
</div>
<div class="row flexRow">
<div class="col-md-5 col-sm-5 col-xs-12 p-right-0">
<ul class="nav nav-pills">
<li class="active"><a data-toggle="pill" href="#home">Goal Identification</a></li>
<li><a data-toggle="pill" href="#menu1">Scope Definition</a></li>
<li><a data-toggle="pill" href="#menu2">Wireframe and Sitemap</a></li>
<li><a data-toggle="pill" href="#menu3">Strategized Content Creation</a></li>
<li><a data-toggle="pill" href="#menu4">Visible Essentials</a></li>
<li><a data-toggle="pill" href="#menu5">Testing</a></li>
<li><a data-toggle="pill" href="#menu6">Launching</a></li>
</ul>
</div>
<div class="col-md-7 col-sm-7 col-xs-12 p-left-0">
<div class="tab-content">
<div id="home" class="tab-pane fade in active">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>The first step is to determine the purpose of your website design. This is where we discuss our clients' requirements and specifications.</p>
</div>
</div>
<div id="menu1" class="tab-pane fade">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>Next, we define the scope of the website. This step identifies the timeline and goal and the features to be added.</p>
</div>
</div>
<div id="menu2" class="tab-pane fade">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>This step consists of wireframe and sitemap creation where we identify the pages that relate to the respective content.</p>
</div>
</div>
<div id="menu3" class="tab-pane fade">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>In this phase, we work on the website content. We create optimized content using relevant information that helps your site reach a wider audience.</p>
</div>
</div>
<div id="menu4" class="tab-pane fade">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>This step focuses on the noticeable essentials of the site, covering everything from graphics to site features. </p>
</div>
</div>
<div id="menu5" class="tab-pane fade">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>We test the website to ensure that all the features are working correctly and check the site's responsiveness. This step involves everything from setting meta-titles and descriptions to fixing the coding issues.</p>
</div>
</div>
<div id="menu6" class="tab-pane fade">
<div class="item-box">
<figure><img src="img/servcie-work-1.png" alt="servcie-work-1"></figure>
<p>Launching is the final part of the process after all the previous issues are solved. In this step, we finally launch the website and make it available to the audiences online.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="logo-sec bottom-section">
<div class="container">
<div class="onboard-content text-center wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2s">
<h3 class="section-head">Website Compliances</h3>
</div>
<div class="logo-slider slick-initialized slick-slider">







<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3120px; transform: translate3d(-2400px, 0px, 0px); transition: transform 6000ms linear 0s;" role="listbox"><div class="logo-thumbnail m-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide04" data-slick-index="-3" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-5.png" class="img-responsive" alt="logo-5">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide05" data-slick-index="-2" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-6.png" class="img-responsive" alt="logo-6">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide06" data-slick-index="-1" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-7.png" class="img-responsive" alt="logo-7">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-current slick-active" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
<a href="#" tabindex="-1">
<img src="img/logo-1.png" class="img-responsive" alt="logo-1">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-active" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="false">
<a href="#" tabindex="-1">
<img src="img/logo-2.png" class="img-responsive" alt="logo-2">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-active" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="false">
<a href="#" tabindex="-1">
<img src="img/logo-3.png" class="img-responsive" alt="logo-3">
</a>
</div><div class="logo-thumbnail m-2 slick-slide" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide03" data-slick-index="3" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-4.png" class="img-responsive" alt="logo-4">
</a>
</div><div class="logo-thumbnail m-2 slick-slide" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide04" data-slick-index="4" aria-hidden="true">
<a href="#" tabindex="0">
<img src="img/logo-5.png" class="img-responsive" alt="logo-5">
</a>
</div><div class="logo-thumbnail m-2 slick-slide" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide05" data-slick-index="5" aria-hidden="true">
<a href="#" tabindex="0">
<img src="img/logo-6.png" class="img-responsive" alt="logo-6">
</a>
</div><div class="logo-thumbnail m-2 slick-slide" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide06" data-slick-index="6" aria-hidden="true">
<a href="#" tabindex="0">
<img src="img/logo-7.png" class="img-responsive" alt="logo-7">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="7" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-1.png" class="img-responsive" alt="logo-1">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="8" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-2.png" class="img-responsive" alt="logo-2">
</a>
</div><div class="logo-thumbnail m-2 slick-slide slick-cloned" style="width: 240px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="9" aria-hidden="true">
<a href="#" tabindex="-1">
<img src="img/logo-3.png" class="img-responsive" alt="logo-3">
</a>
</div></div></div></div>
</div>
</section>


<section class="experience-sec all-section">
<div class="container">
<div class="row flexRow">
<div class="col-md-3 col-sm-12">
<h4>We have over 10 years of experience in the Website design and development Industry</h4>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="experience-thumbnail">
<h2>264+</h2>
<h5>Ecommerce Websites</h5>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="experience-thumbnail">
<h2>161+</h2>
<h5>Online Businesses</h5>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="experience-thumbnail">
<h2>105+</h2>
<h5>Gallery Websites</h5>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
 <div class="experience-thumbnail">
<h2>187+</h2>
<h5>Blogging Websites</h5>
</div>
</div>
<div class="col-md-2 col-sm-4 col-xs-6">
<div class="experience-thumbnail">
<h2>327+</h2>
<h5>Landing Pages</h5>
</div>
</div>
</div>
</div>
</section>



<section class="portfolio-section all-section purple-bg">
<div class="container">
<div class="row text-center">
<div class="col-md-7 col-sm-7 col-xs-12 center-col">
<h3 class="section-head wow bounceIn" data-wow-delay="0.6s" data-wow-duration="2s">Our Portfolio</h3>
<ul class="nav nav-pills">
<li class="active"><a data-toggle="pill" href="#webdesign">Websites</a></li>
<li><a data-toggle="pill" href="#logodesign">Logos</a></li>
<li><a data-toggle="pill" href="#branddesign">Branding</a></li>
</ul>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="tab-content">
<div id="webdesign" class="tab-pane fade in active">
<div class="port-slider portfolio-ss slick-initialized slick-slider">



















<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 6350px; transform: translate3d(-2286px, 0px, 0px); transition: transform 6000ms linear 0s;" role="listbox"><a href="img/webdesignimg17.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide616" data-slick-index="-3" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg17.jpg">
</figure>
</a><a href="img/webdesignimg18.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide617" data-slick-index="-2" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg18.jpg">
</figure>
</a><a href="img/webdesignimg20.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide618" data-slick-index="-1" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg20.jpg">
</figure>
</a><a href="img/webdesignimg1.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide60" data-slick-index="0" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg1.jpg">
</figure>
</a><a href="img/webdesignimg2.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide61" data-slick-index="1" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg2.jpg">
</figure>
</a><a href="img/webdesignimg3.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide62" data-slick-index="2" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg3.jpg">
</figure>
</a><a href="img/webdesignimg4.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide63" data-slick-index="3" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg4.jpg">
</figure>
</a><a href="img/webdesignimg5.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide64" data-slick-index="4" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg5.jpg">
</figure>
</a><a href="img/webdesignimg6.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide65" data-slick-index="5" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg6.jpg">
</figure>
</a><a href="img/webdesignimg7.jpg" data-fancybox="" class="slick-slide slick-current slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide66" data-slick-index="6" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg7.jpg">
</figure>
</a><a href="img/webdesignimg8.jpg" data-fancybox="" class="slick-slide slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide67" data-slick-index="7" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg8.jpg">
</figure>
</a><a href="img/webdesignimg9.jpg" data-fancybox="" class="slick-slide slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide68" data-slick-index="8" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg9.jpg">
</figure>
</a><a href="img/webdesignimg10.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide69" data-slick-index="9" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg10.jpg">
</figure>
</a><a href="img/webdesignimg11.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide610" data-slick-index="10" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg11.jpg">
</figure>
</a><a href="img/webdesignimg12.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide611" data-slick-index="11" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg12.jpg">
</figure>
</a><a href="img/webdesignimg13.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide612" data-slick-index="12" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg13.jpg">
</figure>
</a><a href="img/webdesignimg14.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide613" data-slick-index="13" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg14.jpg">
</figure>
</a><a href="img/webdesignimg15.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide614" data-slick-index="14" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg15.jpg">
</figure>
</a><a href="img/webdesignimg16.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide615" data-slick-index="15" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg16.jpg">
</figure>
</a><a href="img/webdesignimg17.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide616" data-slick-index="16" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg17.jpg">
</figure>
</a><a href="img/webdesignimg18.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide617" data-slick-index="17" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg18.jpg">
</figure>
</a><a href="img/webdesignimg20.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide618" data-slick-index="18" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg20.jpg">
</figure>
</a><a href="img/webdesignimg1.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide60" data-slick-index="19" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg1.jpg">
</figure>
</a><a href="img/webdesignimg2.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide61" data-slick-index="20" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg2.jpg">
</figure>
</a><a href="img/webdesignimg3.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide62" data-slick-index="21" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/webdesignimg3.jpg">
</figure>
</a></div></div></div>
</div>
<div id="logodesign" class="tab-pane fade">
<div class="port-slider logo-sli logo-ss slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>













<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4826px; transform: translate3d(-3048px, 0px, 0px); transition: transform 6000ms linear 0s;" role="listbox"><a href="img/logodesignimg12.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide710" data-slick-index="-3" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg12.jpg">
</figure>
</a><a href="img/logodesignimg13.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide711" data-slick-index="-2" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg13.jpg">
</figure>
</a><a href="img/logodesignimg14.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide712" data-slick-index="-1" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg14.jpg">
</figure>
</a><a href="img/logodesignimg1.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide70" data-slick-index="0" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg1.jpg">
</figure>
</a><a href="img/logodesignimg2.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide71" data-slick-index="1" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg2.jpg">
</figure>
</a><a href="img/logodesignimg3.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide72" data-slick-index="2" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg3.jpg">
</figure>
</a><a href="img/logodesignimg4.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide73" data-slick-index="3" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg4.jpg">
</figure>
</a><a href="img/logodesignimg5.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide74" data-slick-index="4" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg5.jpg">
</figure>
</a><a href="img/logodesignimg7.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide75" data-slick-index="5" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg7.jpg">
</figure>
</a><a href="img/logodesignimg8.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide76" data-slick-index="6" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg8.jpg">
 </figure>
</a><a href="img/logodesignimg9.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide77" data-slick-index="7" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg9.jpg">
</figure>
</a><a href="img/logodesignimg10.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide78" data-slick-index="8" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg10.jpg">
</figure>
</a><a href="img/logodesignimg11.jpg" data-fancybox="" class="slick-slide slick-current slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide79" data-slick-index="9" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg11.jpg">
</figure>
</a><a href="img/logodesignimg12.jpg" data-fancybox="" class="slick-slide slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide710" data-slick-index="10" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg12.jpg">
</figure>
</a><a href="img/logodesignimg13.jpg" data-fancybox="" class="slick-slide slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide711" data-slick-index="11" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg13.jpg">
</figure>
</a><a href="img/logodesignimg14.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide712" data-slick-index="12" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg14.jpg">
</figure>
</a><a href="img/logodesignimg1.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide70" data-slick-index="13" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg1.jpg">
</figure>
</a><a href="img/logodesignimg2.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide71" data-slick-index="14" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg2.jpg">
</figure>
</a><a href="img/logodesignimg3.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide72" data-slick-index="15" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/logodesignimg3.jpg">
</figure>
</a></div></div><button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>
</div>
<div id="branddesign" class="tab-pane fade">
<div class="port-slider logo-sli logo-ss slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>











<div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4318px; transform: translate3d(-1524px, 0px, 0px); transition: transform 6000ms linear 0s;" role="listbox"><a href="img/branddesignimg8.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide88" data-slick-index="-3" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg8.jpg">
</figure>
</a><a href="img/branddesignimg9.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide89" data-slick-index="-2" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg9.jpg">
</figure>
</a><a href="img/branddesignimg10.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide810" data-slick-index="-1" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg10.jpg">
</figure>
</a><a href="img/branddesignimg1.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide80" data-slick-index="0" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg1.jpg">
</figure>
</a><a href="img/branddesignimg2.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide81" data-slick-index="1" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg2.jpg">
</figure>
</a><a href="img/branddesignimg3.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide82" data-slick-index="2" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg3.jpg">
</figure>
</a><a href="img/branddesignimg4.jpg" data-fancybox="" class="slick-slide slick-current slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide83" data-slick-index="3" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg4.jpg">
</figure>
</a><a href="img/branddesignimg5.jpg" data-fancybox="" class="slick-slide slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide84" data-slick-index="4" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg5.jpg">
</figure>
</a><a href="img/branddesignimg6.jpg" data-fancybox="" class="slick-slide slick-active" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide85" data-slick-index="5" aria-hidden="false">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg6.jpg">
</figure>
</a><a href="img/branddesignimg7.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide86" data-slick-index="6" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg7.jpg">
</figure>
</a><a href="img/branddesignimg8.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide87" data-slick-index="7" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg8.jpg">
</figure>
</a><a href="img/branddesignimg8.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide88" data-slick-index="8" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg8.jpg">
</figure>
</a><a href="img/branddesignimg9.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide89" data-slick-index="9" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg9.jpg">
</figure>
</a><a href="img/branddesignimg10.jpg" data-fancybox="" class="slick-slide" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide810" data-slick-index="10" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg10.jpg">
</figure>
</a><a href="img/branddesignimg1.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide80" data-slick-index="11" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg1.jpg">
</figure>
</a><a href="img/branddesignimg2.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide81" data-slick-index="12" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg2.jpg">
</figure>
</a><a href="img/branddesignimg3.jpg" data-fancybox="" class="slick-slide slick-cloned" style="width: 254px;" tabindex="-1" role="option" aria-describedby="slick-slide82" data-slick-index="13" aria-hidden="true">
<figure>
<img alt="Image" class="img-responsive" src="img/watermark-logo.svg" data-url="img/branddesignimg3.jpg">
</figure>
</a></div></div><button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>
</div>
</div>
<div class="view-btn wow zoomIn" data-wow-delay="0.6s" data-wow-duration="2s">
<a class="lgt-btn hvr-bounce-to-right" href="portfolio.php">Full Portfolio<i aria-hidden="true" class="pull-right fa fa-angle-right"></i></a>
</div>
</div>
</div>
</section>
 


<section class="offer-section all-section" id="package-div">
<div class="container">
<div class="row text-center">
<div class="col-md-7 col-sm-7 col-xs-12 center-col">
<h3 class="section-head wow bounceIn" data-wow-delay="0.6s" data-wow-duration="2s">Packages</h3>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 center-col">
<ul class="nav nav-pills wow zoomIn" data-wow-delay="0.6s" data-wow-duration="2s">
<li class="active">
<a data-toggle="pill" href="#men1">Website Design</a>
</li>
<li>
<a data-toggle="pill" href="#men2">Ecommerce Website</a>
</li>
<li>
<a data-toggle="pill" href="#men4">Hosting &amp; Domain</a>
</li>
<li>
<a data-toggle="pill" href="#men5">Website Maintenance</a>
</li><li>
<a data-toggle="pill" href="#men7">Logo Design</a>
</li>
<li>
<a data-toggle="pill" href="#men3">Video Animation</a>
</li>

<li>
<a data-toggle="pill" href="#men8">SEO</a>
</li>
<li>
<a data-toggle="pill" href="#men9">Video Marketing</a>
</li>
<li>
<a data-toggle="pill" href="#men10">SMM</a>
</li>
<li>
<a data-toggle="pill" href="#men11">PPC</a>
</li>
<li>
<a data-toggle="pill" href="#men12">ORM</a>
</li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="tab-content">
<div class="tab-pane fade in active" id="men1">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter</h4>
<h3>
<sup></sup>$149
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Designed Homepage (1x concept)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 Custom Designed Inner Pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 Custom Banner Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Contact Us Form</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross-Browser (Chrome, Firefox, Safari, etc.) Compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
<li><i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/website-design-starter.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $149">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h5>Recommended</h5>
<h4>Professional</h4>
<h3>
<sup></sup>$399
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Designed Homepage (2x concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Custom Designed inner pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 Custom Banner Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive &amp; Animated Slider Banner</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Contact Us Form</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross-Browser (Chrome, Firefox, Safari, etc.) Compatibility.</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security Plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 scroll-wrapper-2mm">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) responsive compatibility <strong> ($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong> </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/website-design-professional.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Recommended Professional">
<input type="hidden" name="price" value="for $399">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="terminal" value="">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Business </h4>
<h3>
<sup></sup>$899
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Designed Homepage (3x concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>10 Custom Designed Inner Pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive &amp; Animated Slider Banner</li>
<li><i class="fa fa-check" aria-hidden="true"></i>8 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Custom Banner Designs</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Contact/Query Form</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 Landing Page Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Newsletter Subscription (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>2 Business Email Address</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross-Browser (Chrome, Firefox, Safari, etc.) Compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Parallax Scrolling</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross Browser Compatible</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
<li><i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
 <h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>How-to-use Training Manual for CMS</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Online Reservation/ Appointment/ Scheduling Tool <strong>($199)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Online Payment Integration <strong>($149)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/website-design-business.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Business">
<input type="hidden" name="price" value="for $899">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Corporate </h4>
<h3>
<sup></sup>$1,599
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Designed Homepage (5x Concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>15 Custom Designed Inner Pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive and Dynamic Website Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) Responsive Compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Online Reservation/Appointment/Scheduling Tools</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Striking Hover Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider Banner</li>
<li><i class="fa fa-check" aria-hidden="true"></i>12 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>8 Custom Banner Designs</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 Landing Page Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Online Payment Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Dynamic Forms</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Signup Area (For Newsletters, Offers etc.)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Live Feeds Widget (Facebook, Instragram, Pinterest)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Business Email Address</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Search Engine Indexing (Google, Yahoo, and Bing)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Parallax Scrolling</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security Plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Analytic Installation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Webmaster Tool</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross Browser Compatible</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
<li><i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>60 Days Free Maintenance (Post-Launch Support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>How-to-use Training Manual for CMS</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 scroll-wrapper-2mm">
<div class="plainng-heading-new">
<h4>Add-Ons:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>30 Seconds Explainer Video <strong>($199)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration <strong>($249)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/website-design-corporate.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Business Plus">
<input type="hidden" name="price" value="for $1,599">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=a870d724-5147-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">

<h4>Enterprise </h4>
<h3>
<sup></sup>$2,799
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom designed Homepage (6x concepts)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>20 Custom designed Inner pages</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Custom Made, Interactive, Dynamic &amp; User Friendly Design</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Custom Wordpress/PHP Development</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Customized CMS Integration</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Striking Hover Effects</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider Banner</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>15 Premium Stock Photos</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>10 Custom Banner Designs</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>2 Landing Page Designs</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Custom Dynamic Forms</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Online Reservation/ Appointment/ Scheduling Tool</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Online Payment Integration</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration (Optional)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Multi Lingual</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>3rd Party API Integrations</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Signup Area (For Newsletters, Offers etc.)
</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Downloadable items (eBooks, PDFs, Podcast, Videos)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Social Media Live Feeds Widget (Facebook, Instragram, Pinterest)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, etc)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Search Engine Indexing (Google, Yahoo, and Bing)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Mailing List Plugin (Optional)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>2 Years Domain Registration (Optional)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>10 Business Email Address</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Security plugins</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Google Analytic Installation</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Google Webmaster Tool</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross Browser Compatible</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>90 Days Free Maintenance (Post-launch support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>How-to-use Training Manual for CMS</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Industry Specified Team of Expert Designers and Developers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee *</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>Add-Ons:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Complete Brand Identity &nbsp;<strong>($199)</strong> </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>30 Seconds Explainer Video &nbsp; <strong>($349)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/website-design-enterprise.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Enterprise Website plan">
<input type="hidden" name="price" value="for $2,799">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=eb6e9aca-5147-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Enterprise Plus </h4>
<h3>
<sup></sup>$4,599
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom designed Homepage (Unlimited concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Custom designed Inner pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Made, Interactive, Dynamic &amp; User Friendly Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>High End UI|UX</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Coding &amp; Development</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Customized CMS Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Striking Hover Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider Banner</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Custom Banner Designs</li>
<li><i class="fa fa-check" aria-hidden="true"></i>2 Landing Page Designs</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Dynamic Forms</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Enterprise Web Portals (multi-user accounts and roles)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>User Signup Area</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Client/User Dashboard Area</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Database Creation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Extensive Admin Panel</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Online Reservation/Appointment/Scheduling Tool</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Online Payment Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Downloadable items (eBooks, PDFs, Podcast, Videos)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Multi Lingual</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3rd Party API Integrations</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Signup Area (For Newsletters, Offers etc.)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Search Bar for Easy Search</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Live Feeds Widget (Facebook, Instragram, Pinterest)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Search Engine Indexing (Google, Yahoo, and Bing)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, W3C compliant etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>404 Redirect</li>
<li><i class="fa fa-check" aria-hidden="true"></i>XML Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Mailing List Plugin (Optional</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Years Domain Registration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>10 Business Email Address</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Parallax Scrolling</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Analytic Installation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Webmaster Tool</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
 <li><i class="fa fa-check" aria-hidden="true"></i>Cross Browser Compatible</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
<li><i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>180 Days Free Maintenance (Post-launch support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>How-to-use Training Manual for CMS</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Industry Specified Team of Expert Designers and Developers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee *</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul></div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>Add-Ons:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Complete Brand Identity &nbsp;<strong>($199)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Professional Content/Copywriting – $1000 (Up to 20 Pages) – (Per Page $50)</li>
</ul></div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/website-design-enterprise-plus.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Enterprise Plus plan">
<input type="hidden" name="price" value="for $4,599">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="men2">
<div class="col-md-6 col-sm-6 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter</h4>
<h3>
<sup></sup>$599
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
 <li><i class="fa fa-check" aria-hidden="true"></i>Custom designed Homepage (1x concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Custom designed Inner pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 25 to 50 Products</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 7 Categories</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Management System</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Sales &amp; Inventory Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Mini Shopping Cart Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Payment Gateway Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Easy Product Search</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>2 Promotional Banners</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>30 Days Free Maintenance (Post-launch support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Industry Specified Team of Expert Designers and Developers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee *</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Complete Brand Identity&nbsp; <strong>($199)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration&nbsp; <strong>($249)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/ecommerce-starter.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Custom Website">
<input type="hidden" name="starter" value="E-Commerce - Starter Package">
<input type="hidden" name="price" value="for $599">
<input type="hidden" name="service_id" value="5672" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">

<h4>Professional</h4>
<h3>
<sup></sup>$1299
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom designed Homepage (2x concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>10 Custom designed Inner pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive and Dynamic Website Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 50 - 250 Products</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 10 Categories</li>
<li><i class="fa fa-check" aria-hidden="true"></i>15 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>8 Promotional Banners</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 Landing Page Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Customer Login/Signup Area</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Database Creation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Shipping Merchant Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Dropshipping Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Management System</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Sales &amp; Inventory Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product offers (wish-list, discount options, coupon codes)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product rating &amp; reviews</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Easy Product Search</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product sorting (Newest, Featured, Popular, Best Seller)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Full Shopping Cart Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Payment Module Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3rd Party API Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Customized Filters for Refined Search</li>
<li><i class="fa fa-check" aria-hidden="true"></i>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, W3C compliant etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Search Engine Indexing (Google, Yahoo, Bing, etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>5 Business Email Address</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>90 Days Free Maintenance (Post-launch support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>How-to-use Training Manual for CMS</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Industry Specified Team of Expert Designers and Developers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee *</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Marketplace Development - <strong>($749)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Multi-Currency Support - <strong>($249)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
 <button type="submit">Select Plan</button>
<a href="view-detail/ecommerce-professional.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Custom Website">
<input type="hidden" name="starter" value="E-Commerce - Professional Package ">
<input type="hidden" name="price" value="for $1299">
<input type="hidden" name="service_id" value="5672" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Business </h4>
<h3>
<sup></sup>$2699
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom designed Homepage (3x concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>20 Custom designed Inner pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive and Dynamic Website Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 250 - 1000 Products</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 20 Categories</li>
<li><i class="fa fa-check" aria-hidden="true"></i>25 Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>15 Promotional Banners</li>
<li><i class="fa fa-check" aria-hidden="true"></i>2 Landing Pages Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Customer Login/Signup Area</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Database Creation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Shipping Merchant Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Multi-Currency Support (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Dropshipping Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Management System</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Sales &amp; Inventory Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Manage orders (track order, billing history, order status, automated invoicing)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product offers (wish-list, discount options, coupon codes)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Multiple Product variation (Color, Size, Quantity, and other attributes)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Intelligent search system with filtering options (search by price, categories, Styles, etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product sorting (Newest, Featured, Popular, Best Seller)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product rating &amp; reviews</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Easy Product Search</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Full Shopping Cart Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Payment Module Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Guest Checkout</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3rd Party API Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 year free hosting</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 year free domain registration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, W3C compliant etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Search Engine Indexing (Google, Yahoo, Bing, etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Email Marketing Campaigns</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Analytic Installation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Webmaster Tool</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>5 Business Email Address</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>180 Days Free Maintenance (Post-launch support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>How-to-use Training Manual for CMS</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Industry Specified Team of Expert Designers and Developers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee *</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Marketplace Development - <strong>($749)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>30 Seconds Explainer Video - <strong>($349)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/ecommerce-business.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Custom Website">
<input type="hidden" name="starter" value="E-Commerce - Business Package ">
<input type="hidden" name="price" value="for $2699">
<input type="hidden" name="service_id" value="5672" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">

<h4>Enterprise </h4>
<h3>
<sup></sup>$4499
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Custom designed Homepage (6x concepts)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Custom designed Inner pages</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Made, Interactive, Dynamic &amp; User Friendly Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>High End UI|UX</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Coding &amp; Development</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Marketplace Development (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Management System</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Sales &amp; Inventory Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Products</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Categories</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Premium Stock Photos</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Promotional Banners</li>
<li><i class="fa fa-check" aria-hidden="true"></i>2 Landing Pages Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Interactive jQuery Slider</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross platform (Desktop, iPhone, Android, etc) responsive compatibility</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product Detail Page Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Bulk CSV Products Upload</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product Return Management System</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Reward pointing system</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Calculators</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product offers (wish-list, discount options, coupon codes)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Multiple Product variation (Color, Size, Quantity, and other attributes)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Intelligent search system with filtering options (search by price, categories, Styles etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product sorting (Newest, Featured, Popular, Best Seller)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Shipping Merchant Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Dropshipping Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Customer Login/Signup Area</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Database Creation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Full Shopping Cart Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Product Rating &amp; Reviews</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Automated Emails</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Automated Reminders</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Email Marketing Campaigns</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Tell a Friend Feature</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Guest Checkout</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Shipping Labels</li>
<li><i class="fa fa-check" aria-hidden="true"></i>News &amp; promotions</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Downloadable items (eBooks, PDFs, Podcast, Videos)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Easy Product Search</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Payment Gateway Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Multi-currency Support</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Live Chat/Bot Chat Integration (Optional)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Integration (Facebook, Twitter, LinkedIn)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Live Feeds Widget (Facebook, Instragram, Pinterest)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3rd Party API Integration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Signup Automated Email Authentication</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Signup Area (For Newsletters, Offers etc.)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Search Engine Indexing (Google, Yahoo, and Bing)</li>
 <li><i class="fa fa-check" aria-hidden="true"></i>Module-wise Architecture</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Extensive Admin Panel</li>
<li><i class="fa fa-check" aria-hidden="true"></i>404 Redirect</li>
<li><i class="fa fa-check" aria-hidden="true"></i>XML Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Parallax Scrolling</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Fast Load Time</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Security plugins</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 year free hosting</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 year free domain registration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, etc)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-page SEO configuration</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Friendly Sitemap</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Analytic Installation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Webmaster Tool</li>
<li><i class="fa fa-check" aria-hidden="true"></i>W3C Certified HTML</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Cross Browser Compatible</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Complete Deployment</li>
<li><i class="fa fa-check" aria-hidden="true"></i>48-72 Hours Turnaround Time</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Business Email Address</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>1 Year Free Maintenance (Post-launch support)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Industry Specified Team of Expert Designers and Developers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Dedicated Account Manager</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>24/7 Customer Support</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee *</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Professional Content/Copywriting – $1,000 (Up to 20 Pages) – (Per Page $50)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Search Engine Optimization (3 Months - 50 Keywords) - $1,350</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/ecommerce-enterprise.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Custom Website">
<input type="hidden" name="starter" value="Ecommerce Enterprise Plan">
<input type="hidden" name="price" value="for $4499">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=249831fe-5149-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5672" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men3">
<div class="row">
<div class="tab-pane" id="men2">
<ul class="nav nav-pills inner-tab-ul-list ">
<li class="active">
<a data-toggle="pill" href="#inner-tab-1">Motion Graphics</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-2">Logo Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-3">2D Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-4">3D Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-5">Whiteboard Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-6">Character Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-7">Screenplay Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-8">Typography</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-9">Music Video</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-10">Video Editing</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-11">Cut Out Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-12">Chalkboard Animation</a>
</li>
<li>
<a data-toggle="pill" href="#inner-tab-13">Isometric Animation</a>
</li>
</ul>
<div class="col-sm-12">
<div class="tab-content">
<div class="tab-pane fade in active" id="inner-tab-1">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter</h4>
<h3>
<sup></sup>$195
<sub>

</sub>
 </h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 4 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/motion-graphic-starter.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic</h4>
<h3>
<sup></sup>$399
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
 <li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/motion-graphic-classic.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $399">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$599
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>60 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>6 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
 <div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/motion-graphic-advance.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $599">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Pro Advance</h4>
<h3>
<sup></sup>$799
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>90 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/motion-graphic-pro-advance.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $799">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3>
<sup></sup>$999
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>120 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
 <ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/motion-graphic-premium.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $999">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-2">
</div>
</div>
<div class="tab-pane" id="inner-tab-2">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>2D Standard</h4>
<h3>
<sup></sup>$149
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>3</strong> Custom and Unique Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>2</strong> Unique Animation Styles</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Camera Angles/Positioning</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting/Compositing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 3 Revisions</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation and Effects</li>
 <li><i class="fa fa-check" aria-hidden="true"></i> Dynamic Colors</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Background Music</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Source File Formats MP4 MOV etc.</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/logo-animation-2d.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $149">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>2D Advance</h4>
<h3>
<sup></sup>$199
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>3</strong> Custom and Unique Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>3</strong> Unique Animation Styles</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Camera Angles/Positioning</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting/Compositing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation and Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Dynamic Colors</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Background Music</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Source File Formats MP4 MOV etc.</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/logo-animation-2d-advance.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $199">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>3D Standard</h4>
<h3>
<sup></sup>$244
 <sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>5</strong> Custom and Unique Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>2</strong> Unique Animation Styles</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Camera Angles/Positioning</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting/Compositing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 3 Revisions</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation and VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Dynamic Colors</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Background Music</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Source File Formats MP4 MOV etc.</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/logo-animation-3d.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $244">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>3D Advance</h4>
<h3>
<sup></sup>$299
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>5</strong> Custom and Unique Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> <strong>3</strong> Unique Animation Styles</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Camera Angles/Positioning</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting/Compositing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation and VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Dynamic Colors</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Background Music</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Source File Formats MP4 MOV etc.</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/logo-animation-3d-advance.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $299">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
</div>
<div class="tab-pane" id="inner-tab-3">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Basic</h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 4 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
 <li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/basic-2d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Standard</h4>
<h3>
<sup></sup>$399
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 5 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/standard-2d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $399">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$599
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 60 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 6 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-2d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $599">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance Pro</h4>
<h3>
<sup></sup>$799
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 90 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
 </div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-pro-2d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $799">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3>
<sup></sup>$999
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 120 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
 <hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-2d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $999">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-2">
</div>
</div>
<div class="tab-pane" id="inner-tab-4">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Basic</h4>
<h3>
<sup></sup>$1499
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Scritp Writing </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Story Board</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 3D Modeling</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Texturing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Rigging &amp; Camera Setting</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/basic-3d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $1499">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Standard</h4>
<h3>
<sup></sup>$2499
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 60 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Profesional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 3D Modeling</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Texturing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Rigging &amp; Camera Setting</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/standard-3d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $2499">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
 <div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$3999
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 90 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Profesional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 3D Modeling</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Texturing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Rigging &amp; Camera Setting</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-3d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $3999">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3>
<sup></sup>$4999
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 120 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Profesional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 3D Modeling</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Texturing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Rigging &amp; Camera Setting</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Lighting </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
 <li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-3d-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $4999">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
</div>
<div class="tab-pane" id="inner-tab-5">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup</h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 4 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
 </ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-whiteboard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic</h4>
<h3>
<sup></sup>$399
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 5 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-whiteboard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $399">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$599
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 60 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 6 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
 <h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-whiteboard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $599">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-2">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance Pro</h4>
<h3>
<sup></sup>$799
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 90 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 7 Weeks Delivery</li>
 <li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-pro-whiteboard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $4999">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3>
<sup></sup>$999
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 120 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-whiteboard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $999">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-2">
</div>
</div>
<div class="tab-pane" id="inner-tab-6">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>2D Character Standard</h4>
<h3>
<sup></sup>$149
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
 <ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 5 to 10 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/character-2d-standard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $149">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>2D Character Advance</h4>
<h3>
<sup></sup>$249
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 11 to 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/character-2d-advance.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $249">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>3D Character Standard</h4>
<h3>
<sup></sup>$349
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 5 to 10 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/character-3d-standard.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $349">
<input type="hidden" name="service_id" value="5669">
 <input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>3D Character Advance</h4>
<h3>
<sup></sup>$399
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 11 to 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/character-3d-advance.php">View Details</a>
</div>
 <input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $399">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
</div>
<div class="tab-pane" id="inner-tab-7">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$145
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-screenplay-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $145">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
 <li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-screenplay-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium </h4>
<h3>
<sup></sup>$245
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 45 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
 <li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-screenplay-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $245">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
<div class="tab-pane" id="inner-tab-8">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$145
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
 <div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-typography.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $145">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-typography.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$245
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 45 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-typography.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $245">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
<div class="tab-pane" id="inner-tab-9">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 4 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-music-video.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
<h3>
<sup></sup>$249
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 5 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-music-video.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $249">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$349
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 60 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
 <li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 6 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-music-video.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $349">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3>
<sup></sup>$699
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 120 Seconds Video</li>
 <li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-music-video.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $699">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
</div>
<div class="tab-pane" id="inner-tab-10">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$150
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds Video Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Editing </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Sound Effects Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-video-editing.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $150">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
 <h3>
<sup></sup>$300
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 60 Seconds Video Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Editing </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Sound Effects Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-video-editing.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $300">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
 <div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3>
<sup></sup>$450
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 90 Seconds Video Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Editing </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Sound Effects Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Editing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-video-editing.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $450">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
 </div>
</div>
</div>
<div class="tab-pane" id="inner-tab-11">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$145
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-cutout-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $145">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-cutout-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$245
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 45 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
 <div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-cutout-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $245">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
<div class="tab-pane" id="inner-tab-12">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$145
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-chalkboard-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $145">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
<h3>
<sup></sup>$195
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-chalkboard-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $195">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$245
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 45 Seconds - HD 1080</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Storyboard Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animations &amp; VFX</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Music And Foley</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over Artists</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
 <h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-chalkboard-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $245">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
<div class="tab-pane" id="inner-tab-13">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup </h4>
<h3>
<sup></sup>$250
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 4 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
 <li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/startup-isometric-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $250">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Classic </h4>
<h3>
<sup></sup>$450
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 30 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 5 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/classic-isometric-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $450">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Advance</h4>
<h3>
<sup></sup>$699
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 60 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 6 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
 <div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/advance-isometric-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $699">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>PREMIUM</h4>
<h3>
<sup></sup>$899
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> 120 Seconds Video</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Professional Script Writing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Voice Over &amp; Sound Effects</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Custom Storyboard</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Animation</li>
 <li><i class="fa fa-check" aria-hidden="true"></i> 7 Weeks Delivery</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Unlimited Revisions</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2 add-ons-st-vidpck">
<div class="plainng-heading-new">
<h4>ADD-ONS:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Cross-Platform (Desktop, iPhone, Android, etc.) Responsive Compatibility <strong>($149)</strong></li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Content Management System (CMS) <strong>($199)</strong></li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a class=" " href="view-detail/premium-isometric-animation.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Design">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $899">
<input type="hidden" name="service_id" value="5669">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men4">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter</h4>
<h3>
<sup></sup>$499
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>1 Website</li>
 <li> <i class="fa fa-check" aria-hidden="true"></i>SSL Certificate </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>20 GB SSD Storage </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>20’000 Visits Monthly</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>2 TB Bandwidth</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unmetered Traffic</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Installation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Migrator </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Auto Updates </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Daily Backup </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>CDN </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Email</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Database </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>Specials:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Domain for 01 year</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>05 Parked Domains</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>25 Sub Domains </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>TLDs On Offer:</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>.fun, .host, .online, .site, .Press, .Store, Space. Pw. tech. website. Agency. Center. .Digital, .Live, .Studio, .business, .Company, .ltd, .solutions .center</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/hosting-starter.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Hosting Packages">
<input type="hidden" name="starter" value="Starter Domain Plan">
<input type="hidden" name="price" value="for $499">
<input type="hidden" name="service_id" value="5712" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=735fd6f6-5147-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h5>Recommended</h5>
<h4>Corporate</h4>
<h3>
<sup></sup>$799
<sub>

</sub>
</h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Websites</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>SSL Certificate </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>40 GB SSD Storage </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>40’000 Visits Monthly</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>04 TB Bandwidth</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unmetered Traffic</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Installation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Migrator </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Auto Updates </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Daily Backup </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>CDN Enabled </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Email</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Database </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>Specials:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Domain for 05 years</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>25 Parked Domains</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Sub Domains </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>TLDs On Offer:</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>.fun, .host, .online, .site, .Press, .Store, Space. Pw. tech. website. Agency. Center. .Digital, .Live, .Studio, .business, .Company, .ltd, .solutions .center</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/hosting-corporate.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Hosting Packages">
<input type="hidden" name="starter" value="Corporate Domain Plan">
<input type="hidden" name="price" value="for $799">
<input type="hidden" name="service_id" value="5712" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=087d53ee-5148-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Complete</h4>
<h3>
<sup></sup>$1999
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
 <ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Unlimited Websites</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>SSL Certificate </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited GB SSD Storage </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Visits Monthly</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>06 TB Bandwidth</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unmetered Traffic</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Installation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Migrator </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>WP Auto Updates </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Daily Backup </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>CDN Enabled </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Email</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Database </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>Specials:</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Domain for lifetime</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Parked Domains</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Sub Domains </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>TLDs On Offer:</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>.fun, .host, .online, .site, .Press, .Store, Space. Pw. tech. website. Agency. Center. .Digital, .Live, .Studio, .business, .Company, .ltd, .solutions .center</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/hosting-complete.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Hosting Packages">
<input type="hidden" name="starter" value="Complete Domain Plan">
<input type="hidden" name="price" value="for $1999">
<input type="hidden" name="service_id" value="5712" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=34d8381b-5148-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="men5">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter</h4>
<h3><sup></sup>$49<sub>/Month</sub></h3>

<div class="scroll-wrapper scroll-wrapper-1">
 <ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> Making updates on the current features </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Making content related updates </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Performing website version updates and backups </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Security checkups and scans </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Fixing bugs or errors on your website </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Real-time website protection </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee* </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Quick Turnaround (24-48 hrs)</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/maintenance-starter.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Maintenance">
<input type="hidden" name="starter" value="Starter Website Maintenance">
<input type="hidden" name="price" value="for $49">
<input type="hidden" name="service_id" value="6013" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=ed1c757c-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h5>Recommended</h5>
<h4>Advanced</h4>
<h3><sup></sup>$69<sub>/Month</sub></h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> Making updates on the current features </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Making content related updates </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Performing website version updates and backups </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Security checkups and scans </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Fixing bugs or errors on your website </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Real-time website protection </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Analyzing website for broken links </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Speed optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> SEO friendly images and alt-image tags for search engines </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Making content SEO friendly </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee* </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Quick Turnaround (24-48 hrs)</li>
</ul>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/maintenance-advance.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Maintenance">
<input type="hidden" name="starter" value="Website Maintenance Advanced ">
<input type="hidden" name="price" value="for $69">
<input type="hidden" name="service_id" value="6013" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=3c4fae94-5147-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Premium</h4>
<h3><sup></sup>$149 <sub>/Month</sub></h3>



<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> Making updates on the current features </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Making content related updates </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Performing website version updates and backups </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Security checkups and scans </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Fixing bugs or errors on your website </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Real-time website protection </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Analyzing website for broken links </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Speed optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i> SEO friendly images and alt-image tags for search engines </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Making content SEO friendly </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Technical support for domain and hosting server </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Web server migrations </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Email technical support </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Adding new pages and features </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Changing entire theme (1 time) of the website </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revisions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee* </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Quick Turnaround (24-48 hrs)</li>
</ul>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/maintenance-premium.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Website Maintenance">
<input type="hidden" name="starter" value="Website Maintenance Premium ">
<input type="hidden" name="price" value="for $149">
<input type="hidden" name="service_id" value="6013" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=3c4fae94-5147-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="men6">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter</h4>
<h3>
<sup></sup>$950
<sub>

</sub>
</h3>

<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>

</div>
<input type="hidden" name="website_design" value="Marketing Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $950">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=3c4fae94-5147-11eb-bfc6-52540009454a">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Campaign Setup and Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Website Audit</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Pages Optimized (10 pages) </li>
<li><i class="fa fa-check" aria-hidden="true"></i>15 Selected Keywords Targeting </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Research </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Grouping </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Mapping </li>
<li><i class="fa fa-check" aria-hidden="true"></i>On-Page Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>SEO Road Map </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Blog Creation </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Webpage Copywriting (3 pages, 350 words per page)
</li><li><i class="fa fa-check" aria-hidden="true"></i>Title Tag Optimization (10 titles) </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Meta Description Optimization (10 Meta description) </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Meta Keyword Optimization (10 Meta keywords) </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Domain Redirect Optimization (10 domain redirects)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>xml Sitemap Optimization
</li><li><i class="fa fa-check" aria-hidden="true"></i>Robots.txt Check
</li><li><i class="fa fa-check" aria-hidden="true"></i>URL Rewrites (10 URL rewrites) </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Broken Link Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Rich Snippet Recommendations </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Breadcrumbs</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Initial Off-Page SEO </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Bookmarking</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Slide Share Marketing </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Forums/FAQ’s </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Link Building </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Directory Submission</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Local Business Listings</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> Award Winning Marketers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee* </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Results</li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h5>Scaling Plan</h5>
<h4>Corporate</h4>
<h3>
<sup></sup>$1600
<sub>

</sub>
</h3>

<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>

</div>
<input type="hidden" name="website_design" value="Marketing Packages">
<input type="hidden" name="starter" value="Scaling Plan">
<input type="hidden" name="price" value="for $1600">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> Prior Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Business Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Consumer Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Competitor Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i> 35 Selected Keywords Targeting </li>
<li><i class="fa fa-check" aria-hidden="true"></i> 15 Pages Keyword Targeted </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Webpage Optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Meta Tags Creation </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Keyword Optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Image Optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Inclusion of anchors</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Tracking &amp; Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Google Analytics Installation </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Google Webmaster Installation </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Call To Action Plan </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Creation of Sitemaps </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Reporting </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Monthly Reporting </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Recommendation </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Email Support </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Phone Support </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Off Page Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Social Bookmarking </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Slide Share Marketing</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Forums/FAQ’s </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Link Building </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Directory Submission </li>
<li><i class="fa fa-check" aria-hidden="true"></i> Local Business Listings </li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> Award Winning Marketers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee* </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Results</li>
</ul>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Venture Plan </h4>
<h3>
<sup></sup>$2600
<sub>

</sub>
</h3>

<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>

</div>
<input type="hidden" name="website_design" value="Marketing Packages">
<input type="hidden" name="starter" value="Venture Plan">
<input type="hidden" name="price" value="for $2600">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Prior Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Business Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Consumer Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor Analysis </li>
<li><i class="fa fa-check" aria-hidden="true"></i>60+ Selected Keywords Targeting </li>
<li><i class="fa fa-check" aria-hidden="true"></i>30 Pages Keyword Targeted</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Webpage Optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Meta Tags Creation </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Image Optimization </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Inclusion of anchors Tags</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Inclusion of anchors Indexing Modifications </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Tracking &amp; Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Places Inclusions </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Analytics Installation </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Google Webmaster Installation </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Call To Action Plan</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Creation of Sitemaps </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Reporting </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Monthly Reporting </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Recommendation </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Email Support</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Phone Support </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Off Page Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Bookmarking</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Slide Share Marketing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Forums/FAQ’s </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Link Building </li>
<li><i class="fa fa-check" aria-hidden="true"></i>Directory Submission</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Local Business Listings</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get</h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> Award Winning Marketers</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee* </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Results</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men7">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Starter Logo</h4>
<h3>
<sup></sup>$99
<sub>

</sub>
</h3>

<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $99">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=c08a24e3-5145-11eb-bfc6-52540009454a">

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Logo Design (1x concepts)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revision </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Color Version </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Black, White &amp; Gray Version</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>FINAL FILES FORMATS (PSD, PDF, AI, JPEG, PNG)</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Award Winning Design Team</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee*</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Complete source files delivery</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Free NDA (optional)</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/starter-logo.php">View Details</a>
<input type="hidden" name="logo_design" value="Logo Packages">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $99">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Professional Logo</h4>
<h3><sup></sup>$199<sub></sub></h3>

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Logo Design (2x concepts)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revision </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Color Version </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Black, White &amp; Gray Version</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>FINAL FILES FORMATS (PSD, PDF, AI, JPEG, PNG)</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Award Winning Design Team</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee*</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true">
</i>Complete source files delivery</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Free NDA (optional)</li>
</ul>
</div>

<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/professional-logo.php">View Details</a>
</div> <input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Professional Logo">
<input type="hidden" name="price" value="for $199">
<input type="hidden" name="service_id" value="5640" class="service_id">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=49ac676e-5146-11eb-bfc6-52540009454a">

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Business Logo</h4>
<h3>
<sup></sup>$299
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
 <li><i class="fa fa-check" aria-hidden="true"></i>Logo Design (3x concepts)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Unlimited Revision </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Color Version </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Black, White &amp; Gray Version</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Stationery Design (Business Cards, Letterhead, Envelope, etc.)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Social Media Pages Design (Facebook, Instagram, Twitter, etc.)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>FINAL FILES FORMATS (PSD, PDF, AI, JPEG, PNG)</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i>Award Winning Design Team</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Unique Design Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money Back Guarantee*</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>100% Ownership Rights</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Complete source files delivery</li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Free NDA (optional)</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/business-logo.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $299">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men8">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Startup Plan</h4>
<h3>
<sup></sup>$350
<sub>

</sub>
</h3>

<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $350.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=c08a24e3-5145-11eb-bfc6-52540009454a">

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Campaign Setup And Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Website Audit</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Pages Optimized (10 pages) </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 15 Selected Keywords Targeting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Keyword Research </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Keyword Grouping </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Keyword Mapping </li>
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> On-Page Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> SEO Road Map</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Blog Creation</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Webpage Copywriting (3 pages, 350 words per page)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Title Tag Optimization (10 titles)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Meta Description Optimization (10 meta description)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Meta Keyword Optimization (10 meta keywords)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Domain Redirect Optimization (10 domain redirects)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> xml Sitemap Optimization</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Robots.txt Check</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> URL Rewrites (10 URL rewrites)</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Broken Link Report</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li class="heading"><i class="fa fa-check" aria-hidden="true"></i> Rich Snippet Recommendations </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Breadcrumbs</li>
<li class="heading"><i class="fa fa-check" aria-hidden="true"></i> Initial Off-Page SEO </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Social Bookmarking</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Slide Share Marketing</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Forums/FAQ’s</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Link Building</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Directory Submission</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Local Business Listings</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
 <button type="submit">Select Plan</button>
<a href="view-detail/seo-startup-plan.php">View Details</a>
<input type="hidden" name="logo_design" value="Logo Packages">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $350.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Scaling Plan</h4>
<h3>
<sup></sup>$700
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Prior Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Business Analysis</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Consumer Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Competitor Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 35 Selected Keywords Targeting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 15 Pages Keyword Targeted</li>
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Webpage Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Meta Tags Creation</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Keyword Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Image Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Inclusion of anchors</li>
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Tracking &amp; Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Google Analytics Installation</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Google Webmaster Installation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Call To Action Plan </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Creation of Sitemaps</li>
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Reporting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Monthly Reporting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Recommendation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Email Support </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Phone Support</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Off Page Optimization</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Social Bookmarking</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Slide Share Marketing </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Forums/FAQ’s </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Link Building </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Directory Submission </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Local Business Listings</li>
</ul>
</div>

<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/seo-scaling-plan.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Scaling Plan">
<input type="hidden" name="starter" value="Scaling Plan">
<input type="hidden" name="price" value="for $700">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Venture Plan</h4>
<h3>
<sup></sup>$1200
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Prior Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Business Analysis</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Consumer Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Competitor Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 60+ Selected Keywords Targeting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 30 Pages Keyword Targeted</li>
<li class="heading"><i class="fa fa-check" aria-hidden="true"></i> Webpage Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Meta Tags Creation</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Keyword Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Image Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Inclusion of anchors Tags </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Inclusion of anchors Indexing Modifications</li>
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Tracking &amp; Analysis </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Google Places Inclusions</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Google Analytics Installation</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Google Webmaster Installation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Call To Action Plan </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Creation of Sitemaps</li>
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Reporting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Monthly Reporting </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Recommendation </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Email Support </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Phone Support</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li class="heading"> <i class="fa fa-check" aria-hidden="true"></i> Off Page Optimization </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Social Bookmarking</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Slide Share Marketing </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Forums/FAQ’s </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Link Building </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Directory Submission </li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Local Business Listings</li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="view-detail/seo-venture-plan.php">View Details</a>
</div>
<input type="hidden" name="website_design" value="Venture Plan">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $1200">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men9">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Basic Video Marketing</h4>
<h3>
<sup></sup>$299
<sub>

</sub>
</h3>

<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $350.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=c08a24e3-5145-11eb-bfc6-52540009454a">
 
<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>1 Channel Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Thumbnail Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Banners Optimized For <br> Mobile, TV and PC</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Video Uploading</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Title Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 Video Campaign Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Monthly Reporting</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Broken Link Report</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="">View Details</a>
<input type="hidden" name="logo_design" value="Logo Packages">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $299.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Pro Video Marketing</h4>
<h3>
<sup></sup>$499
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>2 Channel Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Thumbnail Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Banners Optimized For Mobile, <br> TV and PC</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Video Uploading</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Title Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 Video Campaign Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Monthly Reporting
</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> Phone Support</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>

<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Scaling Plan">
<input type="hidden" name="starter" value="Scaling Plan">
<input type="hidden" name="price" value="for $499">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Elite Video Marketing</h4>
<h3>
<sup></sup>$1499
<sub>

</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>3 Channel Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Thumbnail Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Banners Optimized For Mobile,<br> TV and PC</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Video Uploading</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Title Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>5 Video Campaign Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Monthly Reporting</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Venture Plan">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $1499">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men10">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>SMM Startup</h4>
<h3>
<sup></sup>$299
<sub>
Month
</sub>
</h3>

<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $350.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=c08a24e3-5145-11eb-bfc6-52540009454a">

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i> Platforms (Facebook &amp; Instagram)</li>
<li><i class="fa fa-check" aria-hidden="true"></i> 12 Design Posts + Copywriting</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Contact Us Page (with Google Map Integration)</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Competitive Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Audit + Recommendation</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Content Calendar</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Industry &amp; Keyword Research</li>
<li><i class="fa fa-check" aria-hidden="true"></i> Social Media Copywriting</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="">View Details</a>
<input type="hidden" name="logo_design" value="Logo Packages">
 <input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $299.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Pro Video Marketing</h4>
<h3>
<sup></sup>$499
<sub>
Month
</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Platforms (Facebook &amp; Instagram)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>15 Design Posts + Copywriting</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Marketing Strategy</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitive Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Brand Reputation Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Audit + Recommendation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Monthly Reporting and Analytics</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 GIF creatives</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Calendar</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Industry and Keyword Research</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Copywriting</li>
<li><i class="fa fa-check" aria-hidden="true"></i>1 Ads Campaign Setup (Free)</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>

<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Scaling Plan">
<input type="hidden" name="starter" value="Scaling Plan">
<input type="hidden" name="price" value="for $499">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>SMM Elite</h4>
<h3>
<sup></sup>$1399
<sub>
Month
</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>3 Channel Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Platforms (Facebook, Instagram, Twitter)</li>
<li><i class="fa fa-check" aria-hidden="true"></i>18 Post Designs + Copywriting</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Marketing Strategy</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitive Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Brand Reputation Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Audit + Recommendation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Community Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Monthly Reporting and Analytics</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 GIF Creatives</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Content Calendar</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Industry &amp; Keyword Research</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Media Copywriting</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Business Manager Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 Ads Campaign Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>A/B Testing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Winning Adset Replication</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Monthly Ad Spend Management Fee Included</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Venture Plan">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $1399">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
 <input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men11">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>PPC Basic Management</h4>
<h3>
<sup></sup>$299
<sub>
Month
</sub>
</h3>

<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $350.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=c08a24e3-5145-11eb-bfc6-52540009454a">

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Ad Network - 1</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Keywords -120</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Text Ads</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Adgroups - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>GEO Targeting Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Setup Conversion Code</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 3 Ad Copies Per Ad Group</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Campaign Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Budget Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Landing page consultation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Bid Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Basic Google Analytics Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Statistics Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Goal Conversions Code Implement</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Reports</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Conversion Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto $2000/month</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
 <div class="btn-box">
<button type="submit">Select Plan</button>
<a href="">View Details</a>
<input type="hidden" name="logo_design" value="Logo Packages">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $299.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>PPC Pro Management</h4>
<h3>
<sup></sup>$839
<sub>
Month
</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Ad Network - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Keywords - 250</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Text Ads</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Adgroups - 20</li>
<li><i class="fa fa-check" aria-hidden="true"></i>GEO Targeting Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Setup Conversion Code</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 4 Ad Copies Per Ad Group</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Campaign Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Ad Copy Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Budget Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Landing page consultation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Bid Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Basic Google Analytics Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Statistics Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>ROI Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Goal Conversions Code Implement</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Reports</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Conversion Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>$2000-$6000/month</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>

<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Scaling Plan">
<input type="hidden" name="starter" value="Scaling Plan">
<input type="hidden" name="price" value="for $839">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>PPC Elite Management</h4>
<h3>
<sup></sup>$1399
<sub>
Month
</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Ad Network - All</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Keywords - 500</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Text Ads</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Adgroups - 50</li>
<li><i class="fa fa-check" aria-hidden="true"></i>GEO Targeting Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Setup Conversion Code</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 6 Ad Copies Per Ad Group</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Campaign Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Ad copy Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Budget Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Landing page consultation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Landing Page Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>CTR Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>A/B Testing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Bid Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Advanced Google Analytics Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Statistics Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>ROI Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Goal Conversions Code Implement</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Reports</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Conversion Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>$6500 and Above per month</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Venture Plan">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $1399">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
<div class="tab-pane fade in" id="men12">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Basic ORM</h4>
<h3>
<sup></sup>$999
<sub>
Month
</sub>
</h3>

<input type="hidden" name="website_design" value="Logo Packages">
<input type="hidden" name="starter" value="Starter">
<input type="hidden" name="price" value="for $999.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=c08a24e3-5145-11eb-bfc6-52540009454a">

<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>2 Phrases monitored &amp; protected</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Top 10 Search positions monitored</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Choose any 2 Social Media Channels</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Bookmarking - 20</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Business Card, Letterhead, Envelope</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Business Listings &amp; Reviews - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Company Profile Listing - 5</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Blog Writing - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Article Writing - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PDF Creation - 1</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PPT Creation - 1</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Blog Submission - 4</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Article Submission - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PDF/Doc Submission - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PPT Submission - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Blog Promotion - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Article Promotion - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PPT Promotion -5</li>
<li><i class="fa fa-check" aria-hidden="true"></i>ORM Activity Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Low - Medium DA Distribution</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="">View Details</a>
<input type="hidden" name="logo_design" value="Logo Packages">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $999.00">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form></div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Business ORM</h4>
<h3>
<sup></sup>$999
<sub>
Month
</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
<ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>3 Phrases protected &amp; monitored</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Top 10 Search positions monitored</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Choose any 3 Social Media Channels</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Social Bookmarking - 30</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Business Listings &amp; Reviews - 3</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Company Profile Listing - 7</li>
 <li><i class="fa fa-check" aria-hidden="true"></i>Blog Writing - 4</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Article Writing - 4</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Press Release Writing - 1</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PDF Creation - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PPT Creation - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Image Creation* - 2</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Blog Submission - 8</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Article Submission - 20</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Press Release Submission - 5</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PDF/Doc Submission - 4</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PPT Submission - 4</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Image Submission* - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Blog Promotion - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Article Promotion - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Press Release Promotion - 5</li>
<li><i class="fa fa-check" aria-hidden="true"></i>PPT Promotion - 10</li>
<li><i class="fa fa-check" aria-hidden="true"></i>3 Phrases Search Position</li>
<li><i class="fa fa-check" aria-hidden="true"></i>ORM Activity Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Medium - High DA Distribution</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>

<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Scaling Plan">
<input type="hidden" name="starter" value="Scaling Plan">
<input type="hidden" name="price" value="for $999">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">

</div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 ">
<div class="package text-center hvr-grow wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>Enterprise ORM</h4>
<h3>
<sup></sup>1999
<sub>
Month
</sub>
</h3>


<div class="scroll-wrapper scroll-wrapper-1">
 <ul class="pkg-list">
<li><i class="fa fa-check" aria-hidden="true"></i>Ad Network - All</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Keywords - 500</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Text Ads</li>
<li><i class="fa fa-check" aria-hidden="true"></i>No. of Adgroups - 50</li>
<li><i class="fa fa-check" aria-hidden="true"></i>GEO Targeting Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Setup Conversion Code</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Upto 6 Ad Copies Per Ad Group</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Campaign Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Ad copy Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Budget Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Competitor analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Keyword Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Landing page consultation</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Landing Page Design</li>
<li><i class="fa fa-check" aria-hidden="true"></i>CTR Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>A/B Testing</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Bid Optimization</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Advanced Google Analytics Setup</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Statistics Analysis</li>
<li><i class="fa fa-check" aria-hidden="true"></i>ROI Management</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Goal Conversions Code Implement</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Traffic Reports</li>
<li><i class="fa fa-check" aria-hidden="true"></i>Conversion Report</li>
<li><i class="fa fa-check" aria-hidden="true"></i>$6500 and Above per month</li>
</ul>
</div>
<hr>
<div class="scroll-wrapper scroll-wrapper-2">
<div class="plainng-heading-new">
<h4>You’ll get </h4>
</div>
<ul class="pkg-list">
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Satisfaction Guarantee</li>
<li> <i class="fa fa-check" aria-hidden="true"></i> 100% Unique Design Guarantee </li>
<li> <i class="fa fa-check" aria-hidden="true"></i>Money-Back Guarantee </li>
</ul>
</div>
<form method="POST" action="/plan-form">
<div class="btn-box">
<button type="submit">Select Plan</button>
<a href="#">View Details</a>
</div>
<input type="hidden" name="website_design" value="Venture Plan">
<input type="hidden" name="starter" value="Business Logo">
<input type="hidden" name="price" value="for $1999">
<input type="hidden" name="terminal" value="americanwebcoders.com?id=6b7265f7-5146-11eb-bfc6-52540009454a">
<input type="hidden" name="service_id" value="5640" class="service_id">
 <input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.americanwebcoders.com/"><input type="hidden" name="first_visit_date_time" value="Sat Dec 31 2022 14:20:44 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="view-btn wow zoomIn" data-wow-delay="0.6s" data-wow-duration="2s">
<a class="lgt-btn1 hvr-bounce-to-right" href="#">Live Chat<i aria-hidden="true" class="pull-right fa fa-angle-right"></i></a>
<a class="lgt-btn2 hvr-bounce-to-right" href="/quote.php">Order Now<i aria-hidden="true" class="pull-right fa fa-angle-right"></i></a>
</div>
</section>  
<section class="tech-sec bottom-section">
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-8 col-xs-12 center-col">
<h3 class="section-head wow bounceIn text-center" data-wow-delay="0.6s" data-wow-duration="2s">
We're Equipped With The Apt <span>Tools &amp; Expertise!</span></h3>
</div>
</div>
<figure>
<img src="img/logos.png" class="img-responsive" alt="logos">
</figure>
</div>
</section>










<?php include('inc/footer.php');?>