<?php
header("Content-type: text/css");
?>
@import url(https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700);
@import url(https://fonts.googleapis.com/css?family=Arimo:300,400,400italic,600,700,700italic);
.bg-primary {
background-color: #1563eb !important;
}

.text-primary {
color: #8119f5;
}

/* ===================================== Basic CSS ==================================== */
* {
margin: 0px;
padding: 0px;
list-style: none;
}

img {
max-width: 100%;
}

a {
text-decoration: none;
outline: none;
color: #444;
}

a:hover {
color: #444;
}

ul {
margin-bottom: 0;
padding-left: 0;
}

a:hover,
a:focus,
input,
textarea {
text-decoration: none;
outline: none;
}

.center {
text-align: center;
}

.left {
text-align: left;
}

.right {
text-align: right;
}

.cp {
cursor: pointer;
}

html, body {
height: 100%;
font-family: "Poppins";
}

p {
margin-bottom: 0px;
width: 100%;
}

.no-padding {
padding: 0px;
}

.no-margin {
margin: 0px;
}

.hid {
display: none;
}

.top-mar {
margin-top: 15px;
}

.h-100 {
height: 100%;
}

::placeholder {
color: #747f8a !important;
font-size: 13px;
opacity: 0.5 !important;
}

.container-fluid {
padding: 0px;
}

h1, h2, h3, h4, h5, h6 {
color: #666565;
}

body {
background-color: #f5f8fc !important;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
text-rendering: optimizeLegibility;
color: #6A6A6A;
overflow-x: hidden;
}

.section-title {
padding: 30px;
margin: 0px;
margin-bottom: 20px;
}
@media screen and (max-width: 767px) {
.section-title {
padding: 5px;
}
}
.section-title h2 {
width: 100%;
text-align: center;
font-weight: 600;
margin-bottom: 0px;
}
.section-title p {
max-width: 850px;
text-align: center;
float: none;
margin: auto;
font-size: 0.9rem;
margin-top: 6px;
}
.section-title span {
float: right;
font-style: italic;
}

.inner-title {
padding: 20px;
padding-left: 0px;
margin: 0px;
margin-bottom: 10px;
padding-bottom: 0px;
border-bottom: 1px solid #ccccccc4;
display: block;
padding-right: 0px;
}
.inner-title h2 {
width: 100%;
text-align: center;
font-size: 1rem;
font-weight: 600;
text-align: left;
border-bottom: 1px solid #863dd9;
padding-bottom: 10px;
margin-bottom: 0px;
width: 300px;
}
.inner-title p {
width: 100%;
text-align: center;
}
.inner-title .btn {
float: right;
margin-top: -38px;
font-weight: 600;
font-size: 0.8rem;
}

.page-nav {
background-size: 100%;
padding: 68px;
text-align: center;
background-color: #eaeaea;
}
.page-nav ul {
float: none;
margin: auto;
}
@media screen and (max-width: 992px) {
.page-nav {
background-size: auto;
}
}
@media screen and (max-width: 767px) {
.page-nav {
padding-top: 200px;
padding-bottom: 40px;
}
}
@media screen and (max-width: 356px) {
.page-nav {
padding-top: 200px;
padding-bottom: 40px;
}
}
.page-nav h2 {
font-size: 28px;
width: 100%;
font-weight: 700;
color: #444;
}
@media screen and (max-width: 600px) {
.page-nav h2 {
font-size: 26px;
}
}
.page-nav ul li {
float: left;
margin-right: 10px;
margin-top: 10px;
font-size: 16px;
font-size: 0.93rem;
font-weight: 600;
color: #444;
}
.page-nav ul li i {
width: 30px;
text-align: center;
color: #444;
}
.page-nav ul li a {
color: #444;
font-size: 0.93rem;
font-weight: 600;
}

.btn-success {
background-color: #51be78;
border-color: #51be78;
}
.btn-success:hover {
background-color: #51be78 !important;
border-color: #51be78 !important;
}
.btn-success:active {
background-color: #51be78 !important;
border-color: #51be78 !important;
}
.btn-success:focus {
background-color: #51be78 !important;
border-color: #51be78 !important;
box-shadow: none !important;
}

.btn-primary {
background-color: #1563eb;
border-color: #1563eb;
}
.btn-primary:hover {
background-color: #1563eb !important;
border-color: #1563eb !important;
}
.btn-primary:active {
background-color: #1563eb !important;
border-color: #1563eb !important;
}
.btn-primary:focus {
background-color: #1563eb !important;
border-color: #1563eb !important;
box-shadow: none !important;
}

.btn-outline-primary {
border-color: #1563eb;
color: #1563eb;
}
.btn-outline-primary:hover {
background-color: #1563eb !important;
border-color: #1563eb !important;
}
.btn-outline-primary:active {
background-color: #1563eb !important;
border-color: #1563eb !important;
}
.btn-outline-primary:focus {
background-color: #1563eb !important;
border-color: #1563eb !important;
box-shadow: none !important;
}

.form-control:focus {
box-shadow: none !important;
border: 1px solid #CCC;
}

.btn-light {
background-color: #FFF;
color: #3F3F3F;
}

.collapse.show {
display: block !important;
}

.form-control:focus {
box-shadow: none;
border: 1px solid #CCC;
}

.form-control {
background-color: #F8F8F8;

}
.form-control:focus {
background-color: #FFF;
border-color: #CCC;
}

.container {
max-width: 1170px;
}
@media screen and (max-width: 575px) {
.container {
padding: 10px 15px;
}
}

/* ===================================== Basic CSS ==================================== */
.fw-md {
font-weight: 600;
}

.fw-sm {
font-weight: 500;
}

.big-padding {
padding: 50px;
}
@media screen and (max-width: 940px) {
.big-padding {
padding: 30px 10px;
}
}

.bggray {
background-color: #F7F5F4 !important;
}

.shadow-md {
box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.shadow-xs {
box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.13);
}

.truncate-2 {
display: -webkit-box !important;
-webkit-line-clamp: 2;
-webkit-box-orient: vertical;
height: 42px;
overflow: hidden;
line-height: 21px;
}

.truncate-4 {
display: -webkit-box !important;
-webkit-line-clamp: 4;
-webkit-box-orient: vertical;
height: 82px;
overflow: hidden;
line-height: 21px;
}

.truncate-6 {
display: -webkit-box !important;
-webkit-line-clamp: 7;
-webkit-box-orient: vertical;
height: 130px;
overflow: hidden;
line-height: 21px;
}

.rtable {
max-width: 500px;
float: none;
margin: auto;
}
.rtable tr td {
padding: 5px;
}

.fs-7 {
font-size: 0.95rem;
}

.fs-8 {
font-size: 0.8rem;
}

.sticky {
position: sticky;
}

.bg-gray {
background: rgba(217, 217, 217, 0.25);
}

.btn-xs {
padding: 2px 8px;
font-size: 0.875rem;
border-radius: 0.2rem;
}
.btn-xs i {
font-size: 16px;
}

@media screen and (max-width: 767px) {
.bordernosm {
border: 0px !important;
}
}

.h400 {
height: 400px;
overflow: auto;
}

.sticky-top-90 {
position: -webkit-sticky;
position: sticky;
top: 85px;
z-index: 1020;
}

.fs-9 {
font-size: 0.79rem;
}

.fs-55 {
font-size: 1.1rem;
}

.mt-25 {
margin-top: 11px;
}

.width-fit {
width: fit-content;
}

.text-justify {
text-align: justify;
}

.fw-semi {
font-weight: 600;
}

.w-45 {
width: 45%;
}

.head {
position: fixed;
background-color: #fff;
width: 260px;
height: 100vh;
box-shadow: 0 2px 6px 0 rgba(218, 218, 253, 0.65), 0 2px 6px 0 rgba(206, 206, 238, 0.54);
}
@media screen and (max-width: 991px) {
.head {
position: relative;
width: auto;
height: auto;
}
}
.head .logo {
padding: 12px 15px;
}
.head .logo img {
max-width: 250px;
}
@media screen and (max-width: 991px) {
.head .logo {
padding: 20px 15px;
}
}
.head .navcol {
padding-top: 15px;
}
.head .navcol ul li {
padding: 14px 30px;
text-transform: uppercase;
font-weight: 600;
font-size: 0.9rem;
}
.head .navbar-toggler {
float: right;
margin-top: 10px;
padding-right: 0px;
}
.head .navbar-toggler i {
font-size: 2rem;
}

.main-content {
margin-left: 260px;
}
@media screen and (max-width: 991px) {
.main-content {
margin-left: 0px;
}
}

html {
scroll-behavior: auto;
scroll-behavior: smooth;
}

.profile-head img {
max-width: 270px;
}

.sit {
background-color: #F8F8F8;
}

.ratfac {
font-size: 0.9rem;
}

/*# sourceMappingURL=style.css.map */
.card {
background-color: #fff;
border: none;
border-radius: 10px;
width: 190px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.image-container {
position: relative
}

.first {
position: absolute;
width: 100%;
padding: 9px
}
.discount {
background-color: red;
padding-top: 1px;
padding-bottom: 1px;
padding-left: 4px;
padding-right: 4px;
font-size: 10px;
border-radius: 6px;
color: #fff
}
.wishlist {
height: 25px;
width: 25px;
background-color: #eee;
display: flex;
justify-content: center;
align-items: center;
border-radius: 50%;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
.thumbnail-image {
border-radius: 10px !important
}

.new-price {
font-size: 13px;
font-weight: bold;
color: red
}
.old-price {
font-size: 8px;
font-weight: bold;
color: grey
}



.creme {
background-color: #fff;
border: 2px solid grey
}

.creme:hover {
border: 3px solid grey
}

.creme:focus {
background-color: grey
}


.rating-star {
font-size: 10px !important
}

.rating-number {
font-size: 10px;
color: grey
}

.buy {
font-size: 12px;
color: purple;
font-weight: 500
}
.darkblue {
background-color: #fff;
border: 2px solid #01579B
}

.darkblue:hover {
border: 3px solid #01579B
}

.darkblue:focus {
background-color: #01579B
}

.yellow {
background-color: #fff;
border: 2px solid #FFCA28
}

.yellow:hover {
border-radius: 3px solid #FFCA28
}

.yellow:focus {
background-color: #FFCA28
}

.item-size {
width: 15px;
height: 15px;
border-radius: 50%;
background: #fff;
border: 1px solid grey;
color: grey;
font-size: 10px;
text-align: center;
align-items: center;
display: flex;
justify-content: center
}