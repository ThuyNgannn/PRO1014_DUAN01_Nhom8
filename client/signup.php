<? include "particals/header.php"; ?>

<section class="section-conten padding-y" style="min-height:84vh">

    <!-- ============================ COMPONENT REGISTER ================================= -->
    <div class="card mb-4 mx-auto" style="max-width: 500px; margin-top:100px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Đăng ký</h4>
            </header>
            <form>
                <div class="form-row">
                    <div class="col form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" class="form-control" placeholder="Username">
                    </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Nhập địa chỉ email...">
                    <small class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ
                        ai khác.</small>
                </div> <!-- form-group end.// -->

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Tạo mật khẩu</label>
                        <input class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Nhập lại mật khẩu</label>
                        <input class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Đăng ký </button>
                </div> <!-- form-group// -->

            </form>
            <hr>
            <p class="text-center">Đã có tài khoản? <a href="login.html">Đăng nhập</a></p>
        </article> <!-- card-body end .// -->
    </div> <!-- card.// -->
    <!-- ============================ COMPONENT REGISTER END .// ================================= -->
</section>
<? include "particals/footer.php"; ?>