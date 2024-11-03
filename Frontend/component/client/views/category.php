<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Frontend/Css/home.css">
    <link rel="stylesheet" href="Frontend/Css/category.css">
    <title>category</title>

</head>

<body>
    <?php require_once(HF . "header.php")  ?>
    <div>
        <div class="grid wide row align-items-center">
            <span> <a class="past__product" href="?clt=/">Trang Chủ </a></span>
            <span class="past__icon--next"><img src="Frontend/public/svg/next.svg" alt=""></span>
            <span class="past__product--category"> Nam</span>
        </div>
        <div class="grid wide name__category ">
            Nam
        </div>
        <div class="grid wide">
            <div class="intro__products row">
                <span>
                    <p>321 sản phẩm</p>
                </span>
                <span>
                    <div class="dropdown">
                        <button class="dropbtn">Sắp xếp theo <i class="fa-solid fa-angle-down"></i></button>
                        <div class="dropdown-content">
                            <a href="#">Nổi bật</a>
                            <a href="#">Mới nhất</a>
                            <a href="#">Giá từ thấp đến cao</a>
                            <a href="#">Giá từ cao đến thấp</a>
                        </div>
                    </div>
                </span>
            </div>
            <div class="row">
                <div class="category__left l-2 m-0 c-0">
                    <div class="scollosss">
                        <span>Bộ Lọc</span>
                        <div>
                            <div class="list__sex">
                                <div class="list__name" onclick="dropdao(this)">
                                    Giới Tính <i class="fa-solid fa-angle-down"></i>
                                </div>
                                <div class="list__content--none">
                                    <ul class="checkbox-list">
                                        <li class="checkbox-item">
                                            <a href="#">
                                                <input type="checkbox" id="nam">
                                                <label for="Nam">Nam</label>
                                            </a>
                                        </li>
                                        <li class="checkbox-item">
                                            <a href="#">
                                                <input type="checkbox" id="nu">
                                                <label for="">Nữ</label>
                                            </a>
                                        </li>
                                        <li class="checkbox-item">
                                            <a href="#">
                                                <input type="checkbox" id="treem">
                                                <label for="treem">Trẻ Em</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- //////////// -->
                            <div class="list__color">
                                <div class="list__name" onclick="dropdao(this)">
                                    Màu Sắc <i class="fa-solid fa-angle-down"></i>
                                </div>
                                <div class="list__content--none">
                                    <ul class="color-grid grid">
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: black;"></div>
                                                <p>Đen</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: red;"></div>
                                                <p>Đỏ</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: yellow;"></div>
                                                <p>Vàng</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: orange;"></div>
                                                <p>Cam</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: gray;"></div>
                                                <p>Xám</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: pink;"></div>
                                                <p>Hồng</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: purple;"></div>
                                                <p>Tím</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle" style="background-color: brown;"></div>
                                                <p>Nâu</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle"
                                                    style="background-color: white; border: 1px solid black;"></div>
                                                <p>Trắng</p>
                                            </a>
                                        </li>
                                        <li class="color-item">
                                            <a href="#">
                                                <div class="color-circle"
                                                    style="background: linear-gradient(to bottom, green, yellow);">
                                                </div>
                                                <p></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ++++++++++++++++ -->
                            <div class="list__size">
                                <div class="list__name" onclick="dropdao(this)">
                                    Kích thước <i class="fa-solid fa-angle-down"></i>
                                </div>
                                <div class="list__content--none">
                                    <ul class="size-grid grid">
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">S</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">M</div>

<<<<<<< HEAD
                <div class="navigation">
                    <h4><a href="#" class="navigation-home">Trang chủ</a></h4>
                    <span class="navigation-next">></span>
                    <h4 class="navigation-title">Nam</h4>
                </div>
                <div class="news">
                    <h3>Nam</h3>
                </div>
                <div class="arrange">
                    <h5>334 sản phẩm</h5>
                    <div class="arrange-select">
                        <button>Sắp xếp theo <span class="arrange-select-icon"><img src="Frontend/public/svg/filter.svg" alt=""></span></button>
                        <div class="arrange-select-form">
                            <div class="arrange-select-item">1</div>
                            <div class="arrange-select-item">2</div>
                            <div class="arrange-select-item">3</div>
=======
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">L</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">XL</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">2XL</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">3XL</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">4XL</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">5XL</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">F</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">XXX</div>

                                            </a>
                                        </li>

                                    </ul>
                                    <ul class="size-grid grid mt-4">
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">1</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">2</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">3</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">4</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">27</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">28</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">29</div>

                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="#">
                                                <div class="size-circle">30</div>

                                            </a>
                                        </li>

                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">31</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">32</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">33</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">34</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">35</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">36</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">37</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">38</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">39</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">40</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">41</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">42</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">43</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">44</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">110</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">115</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">120</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">125</div>
                                            </a>
                                        </li>
                                        <li class="size-item">
                                            <a href="">
                                                <div class="size-circle">130</div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- ================= -->
                            <div class="list__price">
                                <div class="list__name" onclick="dropdao(this)">
                                    Theo giá <i class="fa-solid fa-angle-down"></i>
                                </div>
                                <div class="list__content--none">
                                    <ul class="checkbox-list">
                                        <li class="checkbox-item">
                                            <a href="#">
                                                <input type="checkbox" id="below-350k">
                                                <label for="below-350k">Dưới 350.000đ</label>
                                            </a>
                                        </li>
                                        <li class="checkbox-item">
                                            <a href="#">
                                                <input type="checkbox" id="between-350k-750k">
                                                <label for="between-350k-750k">Từ 350.000đ - 750.000đ</label>
                                            </a>
                                        </li>
                                        <li class="checkbox-item">
                                            <a href="#">
                                                <input type="checkbox" id="above-750k">
                                                <label for="above-750k">Trên 750.000đ</label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
>>>>>>> 25266b53b043e8b57110559483ccfa92b2f43c3e
                        </div>
                    </div>
                </div>
                <div class="category__right l-10 m-12 c-12">
                    <section class="products row   justify-content-between grid">
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
<<<<<<< HEAD
                            <hr>
=======
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
>>>>>>> 25266b53b043e8b57110559483ccfa92b2f43c3e


                    </section>
                    <section class="products row mt-4  justify-content-between grid">
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>


                    </section>
                    <section class="products row mt-4  justify-content-between grid">
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>


                    </section>
                    <section class="products row mt-4  justify-content-between grid">
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>


                    </section>
                    <section class="products row mt-4  justify-content-between grid">
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                                <div class="overlay__image">
                                    <img loading="lazy"
                                        src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png" alt="">
                                </div>
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>
                        <article class="product l-3 m-4 c-12">
                            <div class="product__image">
                                <img loading="lazy"
                                    src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                    alt="" />
                            </div>
                            <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                            <div class="product__price row align-items-center  ">
                                <span class="price__new">599.000 đ</span>
                                <span class="price__old">3333</span>
                            </div>
                            <div class="product__variation row align-items-center">
                                <span class="product__variation--item active__product--variation "></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                                <span class="product__variation--item"></span>
                            </div>
                            <div class="product__logo--sale row align-items-center justify-content-center">
                                <span>-</span>5%
                            </div>
                        </article>


                    </section>


                </div>
            </div>

        </div>
<<<<<<< HEAD
    </main>



=======
    </div>
    </div>
    <div class="mt-4">
        <button class="row btn__view">Xem thêm</button>
    </div>
    <?php require_once(HF . "footer.php")  ?>
>>>>>>> 25266b53b043e8b57110559483ccfa92b2f43c3e
</body>
<script>
    function dropdao(element) {
        const dropboloc = element.nextElementSibling;
        const iconI = element.querySelector('.list__name > i');

        if (dropboloc.style.display === "block") {
            dropboloc.style.display = "none";
            iconI.style.animation = " xoayvong .8s linear 0s";
        } else {
            dropboloc.style.display = "block ";
            iconI.style.animation = " xoayvong2 .8s linear 0s";

        }
    }
</script>


</html>