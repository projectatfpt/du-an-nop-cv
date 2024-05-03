@extends('layouts.client')
@section('content')
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2858.8667388582476!2d106.68178779315163!3d10.820074845315508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sde!2sde!4v1713193479651!5m2!1sde!2sde"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Thông Tin</span>
                            <h2>Liên Hệ Với Chúng Tôi</h2>
                            <p>Nếu có vấn đề gì xảy ra khi bạn trải nghiệm dịch vụ bạn có thể góp ý với chúng tôi ở đây.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Hồ Chí Minh</h4>
                                <p>24 Phường 3, Quang Trung, Gò Vấp, TP.HCM <br />+84 982-314-958</p>
                            </li>
                            <li>
                                <h4>Hà Nội</h4>
                                <p>109 Đống Đa, Hà Nội <br />+84 982-314-958</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form method="POST" action="">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Tên" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="note" placeholder="Góp ý ở đây..." required></textarea>
                                    <button class="site-btn">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
