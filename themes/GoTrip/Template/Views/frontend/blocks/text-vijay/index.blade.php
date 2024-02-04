<style>
    .coupon .coupon-container {
        width: 100%;
        height: 100vh;
        /* background: #f0fff3; */
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .coupon .coupon-card {
        background: linear-gradient(135deg, #7158fe, #9d4de6);
        color: #fff;
        text-align: center;
        padding: 40px 80px;
        border-radius: 15px;
        box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
        position: relative;

    }

    .coupon .logo {
        width: 80px;
        border-radius: 8px;
        margin-bottom: 20px;

    }

    .coupon-card h3 {
        font-size: 28px;
        font-weight: 400;
        line-height: 40px;

    }

    .coupon-card p {
        font-size: 15px;

    }

    .coupon-row {
        display: flex;
        align-items: center;
        margin: 25px auto;
        width: fit-content;

    }

    #cpnCode {
        border: 1px dashed #fff;
        padding: 10px 20px;
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
        <div class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    {{-- <h2 class="sectionTitle__title">{{ $title ?? "" }}</h2> --}}
                    {{-- <p class=" sectionTitle__text mt-5 sm:mt-0">{{ $subtitle ?? "" }}</p> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="coupon-card">
                {{-- <img src="https://i.postimg.cc/KvTqpZq9/uber.png" class="logo"> --}}
                <a href="{{ $link_title ?? ""}}">
                    <h3>{{ $title ?? "" }}</h3>
                </a>
                <div class="coupon-row">
                    {{-- <input type="text" value="{{ $desc}}"> --}}
                    <span id="cpnCode">{{ (!$desc=='') ? $desc : "hghghg"}}</span>
                    <span id="cpnBtn">Copy Code</span>
                </div>
                <p>Valid Till: 20Dec, 2024</p>
                <div class="circle1"></div>
                <div class="circle2"></div>
            </div>
        </div>

        {{-- @if(!empty($list_item))
            <div class="overflow-hidden pt-40 js-section-slider" data-gap="30" data-slider-cols="xl-5 lg-4 md-2 sm-2 base-1" data-nav-prev="js-team-prev" data-pagination="js-team-pag" data-nav-next="js-team-next">
            <div class="swiper-wrapper">
                @foreach($list_item as $item)
                    <div class="swiper-slide">
                        <div class="">
                            <img src="{{ get_file_url($item['avatar'],'full') }}" alt="{{ $item['name'] }}" class="rounded-4 col-12">
        <div class="mt-10">
            <div class="text-18 lh-15 fw-500">{{ $item['name'] }}</div>
            <div class="text-14 lh-15">{{ $item['job'] }}</div>
        </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    @endif --}}
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