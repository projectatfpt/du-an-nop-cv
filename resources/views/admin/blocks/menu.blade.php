<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src="{{ asset('assets/admin/img/logo1.png') }}" width="40" height="40" alt="">
                    <span class="text-uppercase">Male Fashion</span>
                </a>
            </div>
            <ul class="sidebar-ul">
                <li>
                    <a href="#"><i class="fa fa-cogs"></i><span>Client</span><span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.sliders.index') }}"><i
                                    class="far fa-images"></i><span>Slider</span></a></li>
                        <li><a href="{{ route('admin.banner-top.index') }}"><i
                                    class="fas fa-sort-amount-up-alt"></i><span>Banner-Top</span></a></li>
                        <li><a href="{{ route('admin.banner-bottom.index') }}"><i
                                    class="fas fa-sort-amount-down-alt"></i><span>Banner-Bottom</span></a></li>
                        <li><a href="{{ route('admin.social-network.index') }}"><i
                                    class="fas fa-share-alt"></i><span>Social Network</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fas fa-chart-pie"></i><span>Thống Kê</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}"><i class="fas fa-list-ul"></i><span> Danh
                            Mục</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.brands.index') }}"><i class="fas fa-user-tie"></i><span> Brand</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.products.index') }}"><i class="fas fa-tshirt"></i><span> Sản
                            Phẩm</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.coupons.index') }}"><i class="fas fa-gift"></i><span> Voucher</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.index') }}"><i class="far fa-newspaper"></i> <span> Bài
                            Viết</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}"><i class="fa fa-address-book"></i><span> Người
                            Dùng</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.comments.index') }}"><i class="fa fa-comment-dots"></i>
                        <span> Comment</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-chart-bar"></i><span>Đơn Hàng</span><span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.orders.index') }}"><i
                                    class="fas fa-exclamation-circle"></i><span>Chưa Xác Nhận</span></a></li>
                        <li><a href="{{ route('admin.orders.index1') }}"><i class="fas fa-check-circle"></i><span>Đã
                                    Xác Nhận</span></a></li>
                        <li><a href="{{ route('admin.orders.index2') }}"><i class="fas fa-shipping-fast"></i><span>Đang
                                    Giao Hàng</span></a></li>
                        <li><a href="{{ route('admin.orders.index3') }}"><i
                                    class="fas fa-money-check-alt"></i></i><span>Đã Giao Hàng</span></a></li>
                        <li><a href="{{ route('admin.orders.index4') }}"><i class="fas fa-times"></i><span>Đã
                                    Hủy</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i>
                        <span> Về Trang Chủ</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
