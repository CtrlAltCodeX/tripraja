<style>
    .coupon .container {
        width: 75%;
    }

    .coupon .coupon-container {
        width: 100%;
        height: 100vh;
        /* background: #f0fff3; */
        /* position: relative; */
        /* border-radius: var(--border-radius-md); */
        background-color: #f2f8fa;
        /* padding: var(--space-6); */
        /* overflow: hidden; */
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .col-md-4 a h3 {
        white-space: nowrap;
    }

    .coupon .coupon-card {
        /* background: linear-gradient(135deg, #7158fe, #9d4de6); */
        background: #f2f8fa;
        color: #000;
        text-align: center;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
        position: relative;

    }

    .coupon .logo {
        width: 80px;
        border-radius: 8px;
        margin-bottom: 20px;

    }

    .coupon-card p {
        font-size: 15px;

    }

    #cpnCode {
        border: 1px dashed #fff;
        /* padding: 10px 20px; */
        border-right: 0;

    }

    #cpnBtn {
        border: 1px solid #fff;
        background: #fff;
        padding: 10px 20px;
        color: #7158fe;
        cursor: pointer;
    }

    .circle1,
    .circle2 {
        background: #f0fff3;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);

    }

    .circle1 {
        left: -25px;
    }

    .circle2 {
        right: -25px;
    }
</style>

<section class="bravo-our-team layout-pt-lg layout-pb-lg coupon">
    <div class="container">
        <div class="coupon-card d-flex justify-content-around align-items-center">
            <img src="{{ asset('images/coupan.jpeg') }}" class="logo">
            <a href="{{ $link_title ?? '' }}" class="text-left">
                <h3>{{ $title ?? '' }}</h3>
                <span id="cpnCode">{{ $desc ?? '' }}</span>
            </a>
            <div class="coupon-row">
                <span id="cpnBtn">Copy Code</span>
            </div>
        </div>
    </div>
</section>

<script>
    var cpnBtn = document.getElementById("cpnBtn");
    var cpnCode = document.getElementById("cpnCode");

    cpnBtn.onclick = function() {
        navigator.clipboard.writeText(cpnCode.innerHTML);
        cpnBtn.innerHTML = "COPIED";
        setTimeout(function() {
            cpnBtn.innerHTML = "COPY CODE";
        }, 3000);
    }
</script>