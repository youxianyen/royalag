const mySpans = document.querySelectorAll('span[data-jstoicon]');
mySpans.forEach((mySpan) => {
    window.addEventListener('scroll', () => {
        const windowOffsetTop = window.pageYOffset;
        if (windowOffsetTop >= 50) {
            const content = mySpan.getAttribute('data-jstoicon');
            if(content) {
                mySpan.innerHTML = content;
                mySpan.removeAttribute('data-jstoicon');
            }
        }
        window.removeEventListener('scroll', this);
    });
});

var horoscope=[
    {"menh":"Hải Trung Kim","mang":"kim","year":[1924,1925,1984,1985]},
    {"menh":"Lư Trung Hỏa","mang":"hoa","year":[1926,1927,1986,1987]},
    {"menh":"Đại Lâm Mộc","mang":"moc","year":[1928,1929,1988,1989]},
    {"menh":"Lộ Bàng Thổ","mang":"tho","year":[1930,1931,1990,1991]},
    {"menh":"Kiếm Phong Kim","mang":"kim","year":[1932,1933,1992,1993]},
    {"menh":"Sơn Đầu Hỏa","mang":"hoa","year":[1934,1935,1994,1995]},
    {"menh":"Giản Hạ Thủy","mang":"thuy","year":[1936,1937,1996,1997]},
    {"menh":"Thành Đầu Thổ","mang":"tho","year":[1938,1939,1998,1999]},
    {"menh":"Bạch Lạp Kim","mang":"kim","year":[1940,1941,2000,2001]},
    {"menh":"Dương Liễu Mộc","mang":"moc","year":[1942,1943,2002,2003]},
    {"menh":"Tuyền Trung Thủy","mang":"thuy","year":[1944,1945,2004,2005]},
    {"menh":"Ốc Thượng Thổ","mang":"tho","year":[1946,1947,2006,2007]},
    {"menh":"Thích Lịch Hỏa","mang":"hoa","year":[1948,1949,2008,2009]},
    {"menh":"Tùng Bách Mộc","mang":"moc","year":[1950,1951,2010,2011]},
    {"menh":"Trường Lưu Thủy","mang":"thuy","year":[1952,1953,2012,2013]},
    {"menh":"Sa Trung Kim","mang":"kim","year":[1954,1955,2014,2015]},
    {"menh":"Sơn Hạ Hỏa","mang":"hoa","year":[1956,1957,2016,2017]},
    {"menh":"Bình Địa Mộc","mang":"moc","year":[1958,1959,2018,2019]},
    {"menh":"Bích Thượng Thổ","mang":"tho","year":[1960,1961,2020,2021]},
    {"menh":"Kim Bạch Kim","mang":"kim","year":[1962,1963,2022,2023]},
    {"menh":"Phú Đăng Hỏa","mang":"hoa","year":[1964,1965,2024,2025]},
    {"menh":"Thiên Hà Thủy","mang":"thuy","year":[1966,1967,2026,2027]},
    {"menh":"Đại Trạch Thổ","mang":"tho","year":[1968,1969,2028,2029]},
    {"menh":"Thoa Xuyến Kim","mang":"kim","year":[1970,1971,2030,2031]},
    {"menh":"Tang Đố Mộc","mang":"moc","year":[1972,1973,2032,2033]},
    {"menh":"Đại Khe Thủy","mang":"thuy","year":[1974,1975,2034,2035]},
    {"menh":"Sa Trung Thổ","mang":"tho","year":[1976,1977,2036,2037]},
    {"menh":"Thiên Thượng Hỏa","mang":"hoa","year":[1978,1979,2038,2039]},
    {"menh":"Thạch Lưu Mộc","mang":"moc","year":[1980,1981,2040,2041]},
    {"menh":"Đại Hải Thủy","mang":"thuy","year":[1982,1983,2042,2043]}
];
var urlhoroscope = {
    'hoa': 'https://thienmochuong.com/vong-tay-phong-thuy-menh-hoa',
    'kim': 'https://thienmochuong.com/vong-tay-phong-thuy-menh-kim',
    'moc': 'https://thienmochuong.com/vong-tay-phong-thuy-menh-moc',
    'tho': 'https://thienmochuong.com/vong-tay-phong-thuy-menh-tho',
    'thuy': 'https://thienmochuong.com/vong-tay-phong-thuy-menh-thuy',
};

(function ($) {
    $(document).ready(function () {
        //$('.product-info.summary .single_add_to_cart_button').html('<strong>Thêm vào giỏ</strong> <small>Cho vào giỏ để mua tiếp</small>');
        if ($('body span.added-to-cart').length > 0) {
            var e = $.magnificPopup.open ? 0 : 300;
            e && $.magnificPopup.close(),
                setTimeout(function () {
                    if (matchMedia('only screen and (max-width: 849px)').matches) {
                        $('body .header-cart-link.off-canvas-toggle').trigger('click');
                    }
                }, e);
        }
        $(window).resize(function () {
            let widthWindow = $(this).width();
            if (widthWindow >= 850) {
                devvn_run_slider_sub_product_cats();
            }
        });

        function devvn_run_slider_sub_product_cats() {
            let elementSub = $('.devvn_title_type_2 ul.devvn_sub_product_cats'), isSubProCat = elementSub.length;
            if (!isSubProCat) return;
            elementSub.each(function () {
                let sliderSub = $(this);
                sliderSub.addClass('slider-nav-simple slider-nav-outside slider-nav-light');
                $('body').on('flatsome-flickity-ready', function () {
                    sliderSub.flickity({
                        wrapAround: false,
                        cellAlign: 'left',
                        pageDots: false,
                        prevNextButtons: true,
                        contain: true
                    });
                })
            });
            /* jQuery.lazyFlickity(function () {
             });*/
        }

            devvn_run_slider_sub_product_cats();

        function devvn_box_customers() {
            let box = $('.devvn_box_customers'), isBox = box.length;
            if (!isBox) return;
            let heightBoxImageCenter = $('.devvn_box_image_center', box).outerWidth(),
                boxSquareDiagonal = Math.sqrt(Math.pow(heightBoxImageCenter, 2) * 2),
                radiusBoxSquareDiagonal = boxSquareDiagonal / 2,
                radiusBox = radiusBoxSquareDiagonal * (Math.sqrt(2) / 2),
                yBox = radiusBox / 2,
                xBox = (radiusBox * Math.sqrt(3)) / 2,
                oneBoxToXBox = radiusBox - xBox,
                imageSubBox = $('.devvn_box_testmonial_conditional .img', box).outerWidth(),
                radiusImageSubBox = imageSubBox / 2,
                yBoxOne = radiusBox - radiusImageSubBox,
                xBoxOne = radiusImageSubBox,
                boxOne = $('.devvn_box_testmonial_conditional .img:nth-child(1)', box);
            if ($('.devvn_box_testmonial_conditional .img', box).length > 3) {
                /*boxOne.css({
                    'top': yBoxOne + 'px',
                    'left': '-' + xBoxOne + 'px',
                })
                    .next().css({
                    'top': yBoxOne + yBox + 'px',
                    'left': '-' + xBoxOne / 2 + 'px',
                })//1
                    .next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                })//3
                    .next().css({
                    'top': yBoxOne + 2 * yBox + 'px',
                    'right': radiusBox - radiusImageSubBox + 'px',
                })//5
                    .next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                })//7
                    .next().css({
                    'top': yBoxOne + yBox + 'px',
                    'right': '-' + xBoxOne / 2 + 'px',
                })//10
                    .next().css({
                    'top': yBoxOne + 'px',
                    'right': '-' + xBoxOne + 'px',
                })//9
                    .next().css({
                    'top': yBoxOne - yBox + 'px',
                    'right': '-' + xBoxOne / 2 + 'px',
                })//11
                    .next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                })//8
                    .next().css({
                    'top': '-' + radiusImageSubBox + 'px',
                    'right': radiusBox - radiusImageSubBox + 'px',
                })//6
                    .next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                })//12
                    .next().css({
                    'top': yBoxOne - yBox + 'px',
                    'left': '-' + xBoxOne / 2 + 'px',
                })//2

                    .next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                })//4 ;*/
                boxOne.css({
                    'top': yBoxOne + 'px',
                    'left': '-' + xBoxOne + 'px',
                })
                    .next().css({
                    'top': yBoxOne + yBox + 'px',
                    'left': '-' + xBoxOne / 2 + 'px',
                })//1
                    .next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                })//3
                    .next().css({
                    'top': yBoxOne + 2 * yBox + 'px',
                    'right': radiusBox - radiusImageSubBox + 'px',
                })//5
                    .next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                })//7
                    .next().css({
                    'top': yBoxOne + yBox + 'px',
                    'right': '-' + xBoxOne / 2 + 'px',
                })//10
                    .next().css({
                    'top': yBoxOne + 'px',
                    'right': '-' + xBoxOne + 'px',
                })//9
                    .next().css({
                    'top': yBoxOne - yBox + 'px',
                    'right': '-' + xBoxOne / 2 + 'px',
                })//11
                    .next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                })//8
                    .next().css({
                    'top': '-' + radiusImageSubBox + 'px',
                    'right': radiusBox - radiusImageSubBox + 'px',
                })//6
                    .next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                })//12
                    .next().css({
                    'top': yBoxOne - yBox + 'px',
                    'left': '-' + xBoxOne / 2 + 'px',
                })//2
                    .next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                })//4
                ;
            } else {
                boxOne.css({
                    'top': yBoxOne + 'px',
                    'left': '-' + xBoxOne + 'px',
                }).next().css({
                    'top': yBoxOne + yBox + 'px',
                    'left': '-' + xBoxOne / 2 + 'px',
                }).next().css({
                    'top': yBoxOne - yBox + 'px',
                    'left': '-' + xBoxOne / 2 + 'px',
                }).next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                }).next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'left': imageSubBox + 'px',
                }).next().css({
                    'top': yBoxOne + 2 * yBox + 'px',
                    'right': radiusBox - radiusImageSubBox + 'px',
                }).next().css({
                    'top': '-' + radiusImageSubBox + 'px',
                    'right': radiusBox - radiusImageSubBox + 'px',
                }).next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                }).next().css({
                    'top': yBoxOne - 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                }).next().css({
                    'top': yBoxOne + 'px',
                    'right': '-' + xBoxOne + 'px',
                }).next().css({
                    'top': yBoxOne + yBox + 'px',
                    'right': '-' + xBoxOne / 2 + 'px',
                }).next().css({
                    'top': yBoxOne - yBox + 'px',
                    'right': '-' + xBoxOne / 2 + 'px',
                }).next().css({
                    'top': yBoxOne + 1.75 * yBox + 'px',
                    'right': imageSubBox + 'px',
                });
            }


            $('.slider-wrapper .slider', box).on('change.flickity', function (event, index) {
                let index1 = index + 1, src = '';
                $('.devvn_box_testmonial_conditional .img').each(function () {
                    let thisImage = $('.devvn_box_testmonial_conditional .img:nth-child(' + index1 + ')');
                    src = $('img', thisImage).attr('src');
                    $('.devvn_box_testmonial_conditional .img').removeClass('active');
                    thisImage.addClass('active');
                    $('.devvn_box_testmonial_conditional .devvn_box_image_center img.devvn_image_center').attr('src', src);
                });
            });
            $('.devvn_box_testmonial_conditional .img a').click(function (e) {
                e.preventDefault()
                let index = $(this).attr('href').slice(1);
                $('.devvn_box_testmonial_conditional .img').removeClass('active');
                $(this).parent().addClass('active');
                $('.slider-wrapper .slider', box).flickity('select', index - 1);
                return false;
            });
        }

        devvn_box_customers();
        $(document).mouseup(function (e) {
            var container = $("ul.woocommerce-widget-layered-nav-list");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                var thisWrap = container.closest('div#shop-sidebar');
                $('div#shop-sidebar .widget').removeClass('active');
            }
        });

        function devvn_shop_sidebar() {
            let eleSidebar = $('div#shop-sidebar'), isProductCat = $('.widget', eleSidebar).length;
            if (!eleSidebar) return;
            $('div#shop-sidebar span.widget-title.shop-sidebar').click(function () {
                if (matchMedia('only screen and (max-width: 849px)').matches) {
                    var thisWrap = $(this).closest('.widget');
                    var thisContent = thisWrap.find(">ul");
                    var thisTitle = thisWrap.find('.widget-title');
                    $.magnificPopup.open({
                        items: {
                            src: '<div class="filter-popup"><div class="filter-popup-title">' + thisTitle.html() + ' <button class="button-popup-done">Xong</button></div><div class="filter-popup-content"><div class="filter_widget"><div class="widget"><ul> ' + thisContent.html() + '</ul></div> </div></div></div>',
                            type: 'inline'
                        }, showCloseBtn: !1,
                        mainClass: 'filter_popup_wrap'
                    });
                    return !1
                }else {
                    let parents = $(this).closest('div#shop-sidebar'),
                        numActive = $('.widget.active', parents).length,
                        isActive = $(this).parent().hasClass('active'),
                        thisBtn = $(this),
                        elementChild = $('ul.woocommerce-widget-layered-nav-list', thisBtn.parent()),
                        posittion = elementChild.offset();
                    $(this).parent().toggleClass('active');
                    if (posittion.left < 15){
                        elementChild.css({
                            'left' : 0,
                            'right' : 'auto',
                        });
                    }
                }

            });
            $('body').on('click', '.button-popup-done', function () {
                $.magnificPopup.close()
            });
            $('form.woocommerce-ordering select.orderby').change(function () {
                var productsWrap = $('.row.category-page-row .shop-container');
                var form = $(this).closest('form');
                var nextPage = window.location.protocol + '//' + window.location.hostname + window.location.pathname + '?' + form.serialize();
                $('body').addClass('devvn_loading');
                $.get(nextPage, function(data) {
                    var products = $(data).find('.row.category-page-row .shop-container').html();
                    productsWrap.html(products);
                }).done(function() {
                    devvn_shop_sidebar();
                    $('body').removeClass('devvn_loading');
                    $.magnificPopup.close();
                }).fail(function() {
                    alert("Có lỗi xảy ra");
                });
                return false;
            });
        }

        devvn_shop_sidebar();

        function devvn_view_more_desc(parent = '', e_height = 300, e_sidebar_height = '') {
            let e_content = $('.' + parent), e_h_content = e_content.height();
            if (e_sidebar_height) {
                e_height = $('.' + e_sidebar_height).height();
            }
            if (e_h_content > e_height) {
                e_content.wrapInner('<div class="devvn_box_desc_inner"></div>');
                $('.devvn_box_desc_inner',e_content).css({
                    'overflow': 'hidden',
                    'height': e_height + 'px',
                });
                e_content.addClass('relative');
                $('.devvn_box_desc_inner',e_content).after('<div class="devvn_button_btn_view_more z-1 devvn_active"><a href="javascript:void(0)" title="Xem thêm"> <span></span>Xem thêm</a></div>');
                $('body').on('click', '.devvn_button_btn_view_more a', function () {
                    let wrapper = $(this).parent();
                    let is_show = wrapper.hasClass('devvn_active');
                    if (is_show) {
                        $('.devvn_box_desc_inner',e_content).css({
                            'overflow': 'unset',
                            'height': 'auto',
                        });
                        $(this).html('<span></span>Thu gọn');
                        wrapper.removeClass('devvn_active');
                    } else {
                        $('.devvn_box_desc_inner',e_content).css({
                            'overflow': 'hidden',
                            'height': e_height + 'px',
                        });
                        $(this).html('Xem thêm');
                        wrapper.addClass('devvn_active');
                    }
                });
            }
        }

        // devvn_view_more_desc('devvn_box_descriptions .term-description', 1000);
        devvn_view_more_desc('product-section.devvn_description .panel.entry-content.devvn_section_content', 1000);
        $('body').on('click', '.ajax_paging', function () {
            var thisParent = $(this).closest('.devvn_btn_view_more');
            var nextLink = $('a.next', thisParent).attr('href');
            var productWrap = $('.row.category-page-row .products.row');
            if(nextLink){
                $(this).addClass('loading');
                $.post( nextLink, function( data ) {
                    var pagination = $(data).find('.devvn_btn_view_more').html();
                    var products = $(data).find('.row.category-page-row .products.row').html();
                    thisParent.html(pagination);
                    productWrap.append(products);
                    //window.history.pushState("", "", nextLink);
                }).done(function() {
                    //alert( "second success" );
                    Flatsome.behaviors['equalize-box'].attach();
                }).fail(function() {
                    alert( "Có lỗi xảy ra" );
                });
                return false;
            }
        });

        $('body').on('click', '.ajax_paging_category', function () {
            var thisParent = $(this).closest('.devvn_btn_view_more');
            var nextLink = $('a.next', thisParent).attr('href');
            var productWrap = $('.blog-archive > .row.align-center >.large-12.col>.row');
            if(nextLink){
                $(this).addClass('loading');
                $.post( nextLink, function( data ) {
                    var pagination = $(data).find('.devvn_btn_view_more').html();
                    var products = $(data).find('.blog-archive > .row.align-center >.large-12.col>.row').html();
                    thisParent.html(pagination);
                    productWrap.append(products);
                }).done(function() {

                }).fail(function() {
                    alert( "Có lỗi xảy ra" );
                });
                return false;
            }
        });

        var ProductViewed = (function () {
            var objToReturn = {};

            /*
            PRIVATE
            */
            localStorage.productsViewed = localStorage.productsViewed ? localStorage.productsViewed : "";
            var getIndexOfProduct = function (id) {
                var productIndex = -1;
                var productsViewed = getAllproductsViewed();
                $.each(productsViewed, function (index, value) {
                    if (value == id) {
                        productIndex = index;
                        return;
                    }
                });
                return productIndex;
            };
            var setAllproductsViewed = function (productsViewed) {
                localStorage.productsViewed = JSON.stringify(productsViewed);
            };
            var addProduct = function (prodID) {
                var productsViewed = getAllproductsViewed();
                productsViewed.push(prodID);
                setAllproductsViewed(productsViewed);
            };

            /*
            PUBLIC
            */
            var getAllproductsViewed = function () {
                try {
                    var productsViewed = JSON.parse(localStorage.productsViewed);
                    return productsViewed;
                } catch (e) {
                    return [];
                }
            };
            var checkExistsPoduct = function (id) {
                var productIndex = getIndexOfProduct(id);
                if (productIndex < 0) {
                    return false;
                }
                return true;
            };
            var setProduct = function (prodID) {
                if (typeof prodID === "undefined") {
                    console.error("ID required");
                    return false;
                }
                if (!checkExistsPoduct(prodID)) {
                    addProduct(prodID);
                }
            };
            var clearProduct = function () {
                setAllproductsViewed([]);
            };
            var removeProduct = function (id) {
                var productsViewed = getAllproductsViewed();
                productsViewed = $.grep(productsViewed, function (value, index) {
                    return value != id;
                });
                setAllproductsViewed(productsViewed);
            };

            objToReturn.getAllproductsViewed = getAllproductsViewed;
            objToReturn.setProduct = setProduct;
            objToReturn.clearProduct = clearProduct;
            objToReturn.removeProduct = removeProduct;
            return objToReturn;
        }());
        function devvn_ajax_viewed_product() {
            // $('body').on('click','button.devvn_product_watched',function () {
            if ($('.devvn_product_list_viewed').length > 0) {
                /* $('.devvn_product_list_viewed').show();
             }else {
                 $(this).addClass('active');
                 $('header#header .header-wrapper').after('<div class="devvn_product_list_viewed"><div class="container"><div class="col-inner"><span class="loading-spin"></span></div></div></div>');*/
                if (ProductViewed.getAllproductsViewed().length > 0) {
                    $.ajax({
                        type: "post", //Phương thức truyền post hoặc get
                        dataType: "json", //Dạng dữ liệu trả về xml, json, script, or html
                        url: devvn_theme_array.ajaxurl, //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                        data: {
                            prods: ProductViewed.getAllproductsViewed(),
                            action: "devvn_product_viewed", //Tên action
                        },
                        context: this,
                        beforeSend: function () {
                        },
                        success: function (response) {
                            if (response.success) {
                                $('.devvn_product_list_viewed').html(response.data);
                                Flatsome.behaviors['slider'].attach();
                                Flatsome.behaviors['equalize-box'].attach();
                            } else {
                                alert('Đã có lỗi xảy ra');
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log('The following error occured: ' + textStatus, errorThrown);
                        }
                    })
                }
            }
            // });

            /* $(document).mouseup(function (e) {
                 var container = $("button.devvn_product_watched, .devvn_product_list_viewed >.container>.col-inner");
                 if (!container.is(e.target) && container.has(e.target).length === 0) {
                     var thisWrap = container.closest('header#header');
                     $('button.devvn_product_watched').removeClass('active');
                     $('.devvn_product_list_viewed', thisWrap).hide();
                 }
             });*/
        }
        if ($('.devvn_product_list_viewed').length > 0) {
            var viewed_loaded = false;
            var viewed_div = $(".devvn_product_list_viewed");
            function loadFaceBook()
            {
                var top = viewed_div.offset().top;
                if ( !viewed_loaded && ($(window).scrollTop() + window.innerHeight >= top ) )
                {
                    viewed_loaded = true;
                    devvn_ajax_viewed_product();
                }
            }
            $(window).scroll(loadFaceBook);
        }

        if (typeof devvn_theme_array.postid != "undefined") {
            ProductViewed.setProduct(devvn_theme_array.postid);
        }

        function devvn_single_product(){
            let form = $('form.cart'), isVariation = form.hasClass('variations_form'), priceDefault = $('.product-info >.price-wrapper', form).html();
                $('body').on('change', 'input[name="variation_id"]', function () {
                    let stockLabel = $('.woocommerce-variation-availability').text();
                    if (stockLabel){
                        if ($('.woocommerce-variation-availability .stock').hasClass('available-on-backorder')){
                            $('.devvn_stock strong').html('Chờ hàng');
                        }else {
                            $('.devvn_stock strong').html(stockLabel);
                        }

                    }else {
                        $('.devvn_stock strong').html('Còn hàng');
                    }
                });
            $(document).on('found_variation', 'form.cart', function( event, variation ) {
                if(variation.price_html){
                    if (variation.price_suffix){
                        $('.product-info >.price-wrapper').html(variation.price_html + variation.price_suffix);
                    }else {
                        $('.product-info >.price-wrapper').html(variation.price_html);
                    }
                }
            });

            function  devvn_is_product_variable(){
                let tableVariable = $('table.variations'), form = $('form.cart'), isVariable = form.hasClass('variations_form'), idSelectedProduct = $('input[name="variation_id"]', form).val();
                console.log('hello');
                if (isVariable){
                    console.log('hello1');
                    console.log(idSelectedProduct);

                    if (idSelectedProduct == 0){
                        console.log('hello2');
                        $('html, body').animate({
                            scrollTop: tableVariable.offset().top - 125
                        }, 400);
                    }
                }
            }
            $('body').on('click', '.devvn_toolbar.devvn_toolbar_right.devvn_mobile_footer ul li a.devvn_add_to_cart_moible', function(e){
                e.preventDefault();
                $('form.cart .single_add_to_cart_button').trigger('click');
                devvn_is_product_variable();
            });
            $('body').on('click', '.devvn_toolbar ul li a.devvn_buy_now_moible', function(e){
                e.preventDefault();
                $('form.cart .buy_now_button').trigger('click');
                devvn_is_product_variable();
            });
            $('body').on('click', '.buy_now_button', function(e){
                e.preventDefault();
                var thisParent = $(this).parents('form.cart');
                if($('.single_add_to_cart_button', thisParent).hasClass('disabled')) {
                    $('.single_add_to_cart_button', thisParent).trigger('click');
                    return false;
                }
                thisParent.addClass('devvn-quickbuy');
                $('.is_buy_now', thisParent).val('1');
                $('.single_add_to_cart_button', thisParent).trigger('click');
            });


            // $('body').on('click',' .product-images  span, .devvn_after_product_thumbnail_image_1 ul li a.devvn_show_video', function (e){
            $('body').on('click','.devvn_after_product_thumbnail_image_1 ul li a.devvn_show_video', function (e){
                e.stopPropagation()
                $('a.button.is-outline.circle.icon.button.product-video-popup.tip-top').trigger('click');
                return false;
            });

            let question = $('.devvn_list_questions'), dem = 0;
            if ($('.devvn_question_item', question).length > 4){
                $('.devvn_question_item', question).each(function () {
                    dem++;
                    if (dem > 4){
                        $(this).css('display','none');
                    }
                });
            }else {
                $('.devvn_question_actions a.button.primary.devvn_link_question').css('display','none');
            }
            $('.devvn_question_actions a.button.primary.devvn_link_question').click(function () {
                let hef = $(this).attr('href');
                if (hef != '' || hef != '#' || hef.indexOf('javascript') != -1){
                    $('.devvn_question_item', question).each(function () {
                        $(this).css('display','block');
                    });
                    $(this).remove();
                    return false;
                }
            });

            $('.devvn_product_gift input[name="product_gift"]').change(function () {
                let val = $(this).val(), parent = $(this).closest('.devvn_box_quantity');
                if ($(this).is(':checked')){
                    $('.devvn_field_not_gift', parent).slideDown();
                }else {
                    $('.devvn_field_not_gift', parent).slideUp();
                }

            });
        }
        devvn_single_product();


        let devvnpvc_loading = false;

        function scroll_element(){
            let $top = $(window).scrollTop();
            if( $top >= 100 && !devvnpvc_loading){
                $('.bawpvc-ajax-counter').each(function (i) {
                    var $id = $(this).data('id');
                    var t = this;
                    var n = devvn_theme_array.is_single;
                    let box = $(this).closest('.article-inner');
                    $.get(devvn_theme_array.ajaxurl + '?action=bawpvc-ajax-counter&p=' + $id + '&n=' + n, function (html) {
                        $(t).html(html);
                        $('.devvn_post_view .devvn_text', box).html(html);
                    })
                });
                devvnpvc_loading = true;
            }
        }
        
        $(window).scroll(function(){
            scroll_element();
        });

        $(window).bind('touchmove', function(e) {
            scroll_element();
        });


        if ($(window).width() < 768){
            $('body').on('click', '.footer .widget:not(:nth-child(3)) span.widget-title', function () {
                $(this).parent().toggleClass('active');
            })
        }
           $(window).resize(function () {
               if ($(window).width() < 768){
                   $('body').on('click', '.footer .widget:not(:nth-child(3)) span.widget-title', function () {
                       $(this).parent().toggleClass('active');
                   })
               }
           })
            $('.devvn_box_meta_header_single_post .devvn_right span.value button').click(function (){
                let thisBtn = $(this), listNotSizes = ['kk-star-ratings', 'blog-share','kksr-legend'], isNotE = false, size = 0;
                $('.entry-content.single-page *').each(function () {
                    let currentSize = parseFloat($(this).css("font-size")), classListThis = $(this).attr('class');
                    for (let eNotSize of listNotSizes) {
                        // if (thisBtn.hasClass('plus')){
                            /*if ($(this).hasClass(eNotSize)){
                                return false;
                            }else {
                                currentSize += 1;
                            }*/
                        //}else {
                            if ($(this).hasClass(eNotSize)){
                                $(this).css({
                                    "font-size": currentSize + 'px',
                                });
                                return false;
                            }else {
                            }

                       // }
                    }

                    if (thisBtn.hasClass('plus')){

                            currentSize += 1;
                    }else {

                            currentSize -= 1;

                    }
                    $(this).css({
                        "font-size": currentSize + 'px',
                        "line-height": '175%'
                    });
                })
            })
        function devvn_count_banner_number(){
            let isCountNumber = $('.devvn_company_reviews').length;
            if (!isCountNumber) return;
            $(".devvn_company_reviews .count").each(function () {
                $(this)
                    .prop("Counter", 0)
                    .animate(
                        {
                            Counter: $(this).text(),
                        },
                        {
                            duration: 4000,
                            easing: "swing",
                            step: function (now) {
                                now = Number(Math.ceil(now)).toLocaleString('en');
                                $(this).text(now);
                            },
                        }
                    );
            });

        }
        //devvn_count_banner_number();
        $('body').on('click','.devvn_dat_lich_dich_vu  a.plain, .devvn_page_content_appointment a.devvn_btn_dat_lich_dich_vu', function () {
            let eleDkService = $('.devvn_dat_lich_dich_vu'), allTab = $('.devvn_page_content_appointment .devvn_dat_lich_video_call, .devvn_page_content_appointment .devvn_dat_lich_shop'),
                href = $(this).attr('href'),
                stringHref = href.trim().slice(1),
                tab = $('.' + stringHref);
            if ($(this).hasClass('devvn_btn_dat_lich_dich_vu')){
                eleDkService.removeClass('hidden');
                allTab.addClass('hidden')
            }else {
                tab.removeClass('hidden');
                eleDkService.addClass('hidden')
            }
        });

        $('body').on('click','.devvn_after_product_thumbnail_image_1 a.devvn_btn_show_image', function (e){
                let listImagesElement = $('.devvn_gallery_image_box'), listImages = [];
                $('a', listImagesElement).each(function () {
                    let image = $(this).attr('href'), caption = $(this).attr('title');
                    if (image){
                        listImages.push({
                            src : image,
                            title: caption
                        });
                    }
                });
                $.magnificPopup.open({
                    items: listImages,
                    gallery: {
                        enabled: true,

                    },
                    type: 'image' // this is default type
                });

            return false;
        });



        $('body').on('click', 'div#shop-sidebar .widget ul.woocommerce-widget-layered-nav-list li a, .devvn_product_cat_filtering_result .widget_layered_nav_filters ul li a, .filter_popup_wrap .filter-popup .filter-popup-content .filter_widget .widget ul > li a', function() {
            // var filterWrap = $('.row.category-page-row .devvn_product_cat_filters');
            var filterWrap = $('.row.category-page-row .devvn_box_header_product_cat');
            var paginationWrap = $('.row.category-page-row nav.woocommerce-pagination');
            var productsWrap = $('.row.category-page-row .shop-container');
            var nextPage = $(this).attr('href');
            $('body').addClass('devvn_loading');
            $.get(nextPage, function(data) {
                var products = $(data).find('.row.category-page-row .shop-container').html();
                productsWrap.html(products);
            }).done(function() {
                devvn_shop_sidebar();
                $('body').removeClass('devvn_loading');
                $.magnificPopup.close();
                window.history.pushState("", "", nextPage);
            }).fail(function() {
                alert("Có lỗi xảy ra");
            });
            return false;
        });


        $('body').on('click', '.btn_coupon_copy, .devvn_coupon_copy', function (){
            const copyText = "Sao chép";
            const copiedText = "Đã sao chép";
            const coupon = $(this).data('coupon');
            const _this = $(this);
            console.log(coupon);
            devVNCopyToClipboard(coupon);
            _this.html(`<span>${copiedText}</span>`);
            _this.addClass('disabled');
            setTimeout(function() {
                _this.html(`<span>${copyText}</span>`);
                _this.removeClass('disabled');
            }, 2000)
        });

        function devVNCopyToClipboard(string) {
            let textarea;
            let result;

            try {
                textarea = document.createElement('textarea');
                textarea.setAttribute('readonly', true);
                textarea.setAttribute('contenteditable', true);
                textarea.style.position = 'fixed'; // prevent scroll from jumping to the bottom when focus is set.
                textarea.value = string;
                $(textarea).html(string);

                document.body.appendChild(textarea);

                //textarea.focus();
                textarea.select();

                const range = document.createRange();
                range.selectNodeContents(textarea);

                const sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);

                textarea.setSelectionRange(0, textarea.value.length);
                result = document.execCommand('copy');
            } catch (err) {
                result = null;
            } finally {
                document.body.removeChild(textarea);
            }

            if(!result) return false;
            return true;
        }

        function coupon_slider_init(){
            if($('body .devvn_coupons .slider').length) {
                $('body .devvn_coupons .slider').lazyFlickity({
                    "cellAlign": "left",
                    "wrapAround": false,
                    "autoPlay": 6000,
                    "prevNextButtons": true,
                    "percentPosition": true,
                    "imagesLoaded": true,
                    "pageDots": false,
                    "rightToLeft": false,
                    "contain": true,
                    "adaptiveHeight": false,
                    "freeScroll": true
                });
            }
        }
        setTimeout((function() {
            coupon_slider_init();
        }), 300);

        $('body').on('click', '.devvn_coupon_apply', function (){
            let coupon = $(this).attr('data-coupon');
            let nonce = $(this).attr('data-nonce');

            let $form = $(this).closest('.coupon_list');

            if ( $form.is( '.processing' ) ) {
                return false;
            }

            $form.addClass( 'processing' ).block({
                message: null,
                overlayCSS: {
                    background: '#fff',
                    opacity: 0.6
                }
            });

            let data = {
                security:		nonce,
                coupon_code:	coupon
            };

            $.ajax({
                type:		'POST',
                url:		devvn_theme_array.wc_ajax_url.toString().replace( '%%endpoint%%', 'apply_coupon' ),
                data:		data,
                success:	function( code ) {
                    $( '.woocommerce-error, .woocommerce-message' ).remove();
                    $form.removeClass( 'processing' ).unblock();

                    if ( code ) {
                        $('.woocommerce-notices-wrapper').append( code );
                        // $.magnificPopup.close();

                        $( document.body ).trigger( 'applied_coupon_in_checkout', [ data.coupon_code ] );
                        $( document.body ).trigger( 'update_checkout', { update_shipping_method: false } );

                        //$('body .woocommerce-cart-form__contents .cart_item:nth-child(1) .qty').trigger('change');

                    }
                },
                dataType: 'html'
            });

            return false;
        });

        $('.year_horoscope').change(function(){
            $('.year_horoscope_result').fadeOut();
            if ($(this).val()) {
                var year = parseInt($(this).val());
                for (var i = 0; i < horoscope.length; i++) {
                    if (horoscope[i].year.includes(year)){
                        $('.year_horoscope_result .horoscope-desc').text(horoscope[i].menh);
                        $('.year_horoscope_result').fadeIn();
                        break;
                    }
                }
            }
        });
        $('.year_horoscope_box .button').on('click', function (e){
            e.preventDefault();
            var parents = $(this).closest('.year_horoscope_box'), selectedYear = $('.year_horoscope', parents).val();
            console.log(selectedYear);
            if (selectedYear) {
                var year = parseInt(selectedYear);
                for (var i = 0; i < horoscope.length; i++) {
                    if (horoscope[i].year.includes(year)){
                        window.location.href = urlhoroscope[horoscope[i].mang];
                        $(this).addClass('loading');
                        break;
                    }
                }
            }
        })
        //getLunarDate
        $('#check_mau_phongthuy').on('submit', function (e){
            e.preventDefault();
            let day = parseInt($('#ngay_sinh', this).val());
            let month = parseInt($('#thang_sinh', this).val());
            let year = parseInt($('#nam_sinh', this).val());
            let amlich = getLunarDate(day, month, year);
            let nam_amlich = amlich.year;
            if(!day || !month || !year){
                alert('Vui lòng nhập đủ thông tin ngày sinh');
                return false;
            }
            window.location.href = devvn_theme_array.home_url + 'sinh-nam-'+nam_amlich + '-hop-mau-gi';
        })
    });
})(jQuery);