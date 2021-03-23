@extends('User.layoutMain')

@section('main-content')
<div class="heading-box">
    <div class="container">
        <h1 class="page-heading py-4 py-md-5 m-0 text-white">Giá trị cốt lõi</h1>
        <div class="cv-tabs d-flex justify-content-around justify-content-md-between align-content-center flex-wrap pb-4">
            <a class="d-block tab text-center mb-2 mb-md-0" href="{{ route('user.onus') }}">Trách nhiệm</a>
            <a class="d-block tab text-center mb-2 mb-md-0" href="{{ route('user.honest') }}">Trung thực</a>
            <a class="d-block tab text-center mb-2 mb-md-0 active" href="{{ route('user.fighting') }}">Chiến đấu</a>
        </div>
    </div>
</div>
<div class="mb-3 d-block d-md-none">
    <img
        width="1256"
        height="357"
        src="{{ asset('/User/images/2.png') }}"
        class="img-fluid wp-post-image"
        alt="Chiến đấu"
        sizes="(max-width: 1256px) 100vw, 1256px"
    />
</div>
<div class="container">
    <article id="post-9689" class="mb-5">
        <div class="d-none d-md-block my-3">
            <img
                width="1256"
                height="357"
                src="{{ asset('/User/images/2.png') }}"
                class="img-fluid wp-post-image"
                alt="Chiến đấu"
                sizes="(max-width: 1256px) 100vw, 1256px"
            />
        </div>
        <div class="container-middle text-justify">
            <div class="text-slogan">
                <p>
                    Tôi không bao giờ nói “không”.<br />
                    Tôi quyết không bao giờ bỏ cuộc, luôn có kết quả vào thời điểm cụ thể.
                </p>
            </div>
            <p>
                Tại Nhất Tín Logistics, chúng ta dùng từ “Chiến đấu” của Nhà binh để thể hiện sự khát khao, máu lửa, nhiệt huyết như kim chỉ nam cho mọi hành động cam kết và suy nghĩ như con người Nhất Tín vậy. Đôi khi chính gia
                đình, người thân chúng ta cũng thấy không thoải mái vì sự chiến đấu điên rồ của chúng ta nhưng đó là điều thúc đẩy chúng ta phát triển mỗi ngày.
            </p>
            <p>
                Chúng ta chiến đấu như thể chúng ta là người sở hữu Công ty này và được lãnh đạo bởi chính chúng ta, những người thật sự quan tâm đến Công ty, quan tâm đến những gì chúng ta đang làm hôm nay và triển vọng thành
                quả trong tương lai.
            </p>
            <p>
                Chúng ta cùng nhau vẽ lại tương lai cho Công ty và cho chính bản thân ta. Chúng ta biết thành quả trong tương lai vào thời điểm cụ thể được hình thành là có thật, từ bối cảnh đó mỗi thành viên trong chúng ta là
                cộng sự của nhau và hành động, suy nghĩ như thể kết quả đạt được đó là điều hiển nhiên vậy. Nếu có người không làm như vậy, chúng ta sẽ chiến đấu với người đó đến cùng và người đó không thuộc về đội nhóm của
                chúng ta. Khi một người khác trong đội chiến đấu, chúng ta hết lòng cổ vũ, bởi vì chúng ta biết khi bất kỳ ai trong chúng ta chiến đấu, cả đội của chúng ta sẽ trở nên mạnh hơn. Đã là người Nhất Tín, chúng ta phản
                hồi một cách ngay thẳng và chính trực không kìm nén. Điều này sẽ giúp chúng ta chiến thắng.
            </p>
            <p>
                Đương nhiên sẽ có những lúc một trong số thành viên chúng ta rời khỏi cuộc chơi, khiến mục tiêu của chúng ta gặp sự cố. Điều đó chắc chắn lúc nào cũng có thể xảy ra, ngay cả khi chúng ta tiên đoán trước. Khi điều
                này xảy ra, chúng ta sẽ phải chiến đấu mạnh mẽ hơn để bù lại sự cố này. Đôi khi một số người trong chúng ta tụt lại phía sau, những người khác trong chúng ta sẽ hy sinh làm nhiều hơn để kéo họ lên, đảm bảo không
                ai bị bỏ lại quá xa. Chúng ta cùng đi đến Tầm nhìn với tư cách là một Đội hiệu suất cao.
            </p>
            <p>
                Trong Nhất Tín có thể cá nhân hay chi nhánh đã từng thành công trong quá khứ và trong tương lai vẫn được kỳ vọng nhưng không có cá nhân hoặc chi nhánh nào lớn hơn Công ty hoặc Đội ngũ. Khi chúng ta chiến thắng
                với tư cách là một Đội ngũ, phần thưởng sẽ lớn hơn và chiến thắng ngọt ngào và ý nghĩa hơn.
            </p>
        </div>
    </article>
</div>
@endsection