@extends('User.layoutMain')

@section('main-content')
        <div class="container">
            <div class="page-contact">
                <h1 class="text-center heading-big">Yêu cầu hỗ trợ thông tin</h1>
                <div class="d-flex justify-content-center align-items-center contact-detail my-5">
                    <img src="{{ asset('User/images/contact.png') }}" alt="" class="mr-5" />
                    <p class="m-0">Chúng tôi luôn sẵn sàng hỗ trợ bạn mọi lúc mọi nơi.</p>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center contact-block">
                    <div class="hotline-block mr-md-4 mb-5">
                        <p class="text-1 text-white">Liên hệ tổng đài chăm sóc khách hàng</p>
                        <p class="text-2 text-white"><a class="text-white" href="tel:0337517047">0337 517 047</a></p>
                        <p class="text-3 text-white">(Cước phí 1000đ/phút)</p>
                        <p class="text-4 text-white">Giải quyết khiếu nại trong vòng 24h</p>
                    </div>
                    <div class="mail-block mb-5">
                        <p class="text-1">Yêu cầu phản hồi online</p>
                        <button class="btn btn-secondary text-white" data-toggle="modal" data-target="#supportModal">Gửi yêu cầu Online</button>
                        <p class="text-4">Hoặc Quý khách có thể gửi email trực tiếp tới: <a href="mailto:fastshipping101099@gmail.com">fastshipping101099@gmail.com</a></p>
                    </div>
                </div>
                <div class="notice-block p-3 mb-4">
                    <p class="text-1 noitice-info">Một số thông tin cần lưu ý</p>
                    <div id="questions" class="panel-group panel-group-faq">
                        <div class="panel panel-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#questions" href="#collapseOne" class="collapsed"><img style="padding-right: 10px; width: 30px; margin-bottom: 3px" src="{{ asset('User/images/icons/arrow-right.png') }}" alt=""> Khiếu nại & đền bù</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body pn-bd-2">A: Bên Sử dụng Dịch Vụ<br>
                                    B: Bên Cung cấp Dịch vụ (Fast shipping)<br>
                                    ĐIỀU 1 _ PHẠM VI DỊCH VỤ <br>
                                    Các loại dịch vụ bên B cung cấp cho bên A gồm: <br>
                                    + Dịch vụ chuyển phát nhanh trong nước và quốc tế <br>
                                    + Dịch vụ chuyển phát nhanh Hỗn Hợp <br>
                                    + Dịch vụ vận tải đường hàng không và đường bộ <br>
                                    + Dịch vụ thuê xe nguyên chuyến chạy nội và ngoại thành <br>
                                    ĐIỀU 2 _ GIÁ CƯỚC<br>
                                    1. Giá cước được tính theo bảng giá thỏa thuận, áp dụng cho hàng chuyển đi được đính
                                    kèm theo hợp đồng này. Các khu vực khác chuyển hàng về địa chỉ của khách hàng
                                    theo hợp đồng này với hình thức người nhận thanh toán thì sẽ áp dụng theo giá cước
                                    vận chuyển của khu vực gửi hàng đi. Đối với các khu vực trả hàng không quy định
                                    trong hợp đồng hoặc phụ lục của hợp đồng này, cước vận chuyển sẽ được tính theo
                                    bảng giá công bố hiện hành của bên B căn cứ vào thời điểm gửi hàng (đối với dịch vụ
                                    chuyển phát trong nước).<br>
                                    2. Giá cước chưa bao gồm các khoản phí theo quy định của Bên B tại từng thời điểm. Đối
                                    với hàng hóa để lưu tại kho Bên B quá 07 ngày do phía Bên A hoặc đối tác của Bên A thì
                                    Bên A sẽ phải thanh toán phí lưu kho cho Bên B. Phí lưu kho sẽ được bên B tính toán
                                    căn cứ vào khối lượng, thể tích hàng hóa và chi phí lưu kho bảo quản thức tế tại thời
                                    điểm phát sinh chi phí này.<br>
                                    3. Giá cước sẽ được điều chỉnh theo bảng giá kèm theo nếu có sai sót từ nhân viên của
                                    Bên B.<br>
                                    4. Giá cước có thể thay đổi nếu là hàng hóa đặc biệt hoặc thỏa thuận giữa 02 bên và được
                                    chú thích lên từng vận đơn cụ thể.<br>
                                    5. Trọng lượng hàng được xác định qua cân thực tế (trọng lượng thực) hoặc quy đổi theo
                                    0337 517 047 thể tích (trọng lượng quy đổi). Nếu trọng lượng nào lớn hơn thì sẽ lấy trọng lượng đó và
                                    áp vào bảng giá để tính cước.<br>
                                    6. Cách tính trọng lượng quy đổi sẽ tùy thuộc vào bảng giá, loại hình dịch vụ và thỏa
                                    thuận riêng của hai bên (nếu có). Trong trường hợp không có thỏa thuận riêng thì cách
                                    thức quy đổi được thực hiện theo quy ước trên bảng giá công bố của bên B có hiệu lực
                                    tại thời điểm gửi hàng.<br>
                                    7. Trọng lượng, khối lượng bưu gửi được thể hiện cụ thể trên mẫu phiếu gửi của Nhất Tín
                                    qua từng lần bên A gửi qua dịch vụ của bên B.<br>
                                    8. Bảng giá cước được tính căn cứ vào giá xăng dầu thể hiện trên bảng giá trừ trường hợp
                                    hai bên có thỏa thuận khác. Trong trường hợp giá nhiên liệu tăng hoặc giảm, giá cước
                                    sẽ tăng hoặc giảm bằng 45% mức thay đổi của giá xăng dầu, cụ thể:<br>
                                    GIÁ MỚI = GIÁ CŨ (1 + 45% x TỶ LỆ THAY ĐỔI GIÁ CỦA XĂNG DẦU)<br>
                                    ĐIỀU 3 _ THỜI GIAN, ĐỊA ĐIỂM, PHƯƠNG THỨC CUNG ỨNG DỊCH VỤ<br>
                                    1. Bên cung cấp dịch vụ (Bên B) phục vụ bên A 24 giờ/ 7 ngày trong tuần<br>
                                    2. Bên B nhận bưu gửi tại địa chỉ của bên A hoặc bên A ra trực tiếp bên B để gửi.<br>
                                    3. Phương thức cung ứng dịch vụ: Bên B chấp nhận bưu gửi của Bên A từ Việt Nam để
                                    vận chuyển và phát tại nước ngoài.<br>
                                    ĐIỀU 4 _ QUY CÁCH ĐÓNG GÓI HÀNG HÓA<br>
                                    1. Đối với hàng hóa là hàng điện tử: (như điện thoại di động, máy vi tính, laptop, tablet,
                                    máy ảnh, loa, đèn pin, pin sạc dự phòng…), Bên A có trách nhiệm:<br>
                                    - Đóng gói hàng hóa bằng hộp carton cứng nhằm đảm bảo an toàn trong quá trình vận
                                    chuyển.<br>
                                    - Sử dụng vật liệu chèn lót sản phẩm chắc chắn đảm bảo hàng hóa không bị xê dịch,
                                    ma sát, va chạm với nhau trong quá trình vận chuyển.<br>
                                    - Niêm phong thùng hàng bằng băng keo niêm phong đặc chủng của Bên B hoặc của
                                    Bên A.<br>
                                    - Trong trường hợp Bên A sử dụng dịch vụ vận chuyển bằng đường hàng không, Bên A
                                    phải tuân thủ tuyệt đối các quy định về an toàn hàng hóa theo các văn bản yêu cầu
                                    của Tổng Cục Hàng Không Việt Nam và các quy định pháp luật khác có liên quan
                                    như: Tắt nguồn toàn bộ các thiết bị có chứa pin Lion, pin Lithium (điện thoại di động,
                                    máy tính bảng, laptop, đèn pin…), tháo rời Pin ra khỏi thân máy đối với máy tính xách
                                    tay và đóng trong hộp tiêu chuẩn của nhà sản xuất để đảm bảo các điều kiện an toàn
                                    khi vận chuyển.<br>
                                    2. Đối với hàng hóa là các thiết bị vật tư đặc biệt, hàng hóa nguy hiểm, hàng hóa dễ
                                    hư hại:<br>
                                    - Bên A có trách nhiệm khai báo trung thực cho Bên B và đóng gói thiết bị vật tư đúng
                                    tiêu chuẩn an toàn theo quy định pháp luật và các yêu cầu do Bên B đề ra đối với
                                    từng trường hợp cụ thể.<br>
                                    3. Đối với hàng hóa, thiết bị có nguy cơ bể vỡ trong quá trình vận chuyển:<br>
                                    - Đóng kiện gỗ hoặc thùng xốp hoặc thùng carton có chèn lót để tránh va chạm, xê
                                    dịch trong suốt quá trình vận chuyển.<br>
                                    - Phải đánh dấu kí hiệu nhận biết như: hàng dễ vỡ, chiều chất xếp v.v… để đảm bảo khai
                                    thác theo đúng yêu cầu.<br>
                                    - Việc đóng gói do bên A thực hiện<br>
                                    4. Trong trường hợp Bên A không thể đóng gói hàng hóa theo yêu cầu thì có thể sử dụng
                                    dịch vụ đóng gói do Bên B cung cấp và tính phí theo bảng giá đính kèm hợp đồng.<br>
                                    5. Trong trường hợp Bên A không thực hiên việc đóng gói theo đúng quy định của Bên B,
                                    Bên B có quyền từ chối vận chuyển, thay đổi loại hình và phương thức vận chuyển
                                    hoặc từ chối thực hiện nghĩa vụ bồi thường nếu có xảy ra sự cố bể vỡ, móp méo, trầy
                                    xước hàng hóa …<br>
                                    6. Trong trường hợp Bên A vi phạm các quy định về đóng gói đối với dịch vụ vận chuyển
                                    bằng đường hàng không, mọi thiệt hại xảy ra sẽ do Bên A tự chịu trách nhiệm.</div>
                            </div>
                        </div>
                        <div class="panel panel-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#questions" class="collapsed" href="#collapseTwo"><img style="padding-right: 10px; width: 30px; margin-bottom: 3px" src="{{ asset('User/images/icons/arrow-right.png') }}" alt="">Quy định gửi & nhận hàng</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in" style="height: auto;">
                                <div class="panel-body pn-bd-2">I. QUY ĐỊNH GỬI HÀNG<br>
                                    1. Các cách thức gửi hàng<br>
                                    1.1. Gửi hàng tại nhà<br>
                                    Khách hàng có thể yêu cầu nhân viên Nhất Tín đến nhận thư từ, hàng hóa tại nhà
                                    riêng hoặc công ty bằng nhiều cách sau:<br>
                                    - Cách 1: Gọi Tổng đài Chăm sóc khách hàng 0337 517 047 và tạo vận đơn thông
                                    qua Tư vấn viên.<br>
                                    - Cách 2: Truy cập website www.online.ntlogistics.vn và tạo vận đơn trực tuyến.<br>
                                    - Cách 3: Quý khách tải App Nhất Tín tại CH Play hoặc App Store và tạo vận đơn
                                    trực tiếp từ ứng dụng.<br>
                                    1.2. Gửi hàng tại Bưu cục<br>
                                    Quý khách có thể đến trực tiếp các Bưu cục Nhất Tín gần nhất để sử dụng các
                                    dịch vụ gửi thư, chuyển phát nhanh hàng hóa.<br>
                                    2. Quy định chung khi Gửi hàng<br>
                                    - Không gửi các loại hàng quốc cấm.<br>
                                    - Kiểm tra đầy đủ hàng hóa tương ứng với các vận đơn được tạo thành công.<br>
                                    - Vận đơn ghi đầy đủ các thông tin cần thiết. Mỗi vận đơn có thể bao gồm một
                                    hoặc nhiều kiện hàng.<br>
                                    - Cung cấp đúng trọng lượng, số lượng và kích thước hàng hóa sản phẩm. Hàng hóa
                                    cần được đóng gói kỹ lưỡng để đảm bảo an toàn trong suốt quá trình vận chuyển.<br>
                                    - Hàng hóa bên trong sẽ được nhân viên kiểm tra nội dung, kể cả hàng hoá
                                    khách hàng đã tự niêm phong (Không áp dụng đối với hàng hóa đã được niêm
                                    phong bởi nhà sản xuất).<br>
                                    II. QUY ĐỊNH VỀ NHẬN HÀNG<br>
                                    1. Các quy định chung khi nhận hàng<br>
                                    1.1. Nhận hàng tận nơi<br>
                                    - Nhân viên Fast shipping sẽ đọc kỹ thông tin ghi trên vận đơn, kiểm tra yêu
                                    cầu trả hàng như: thời gian trả hàng, chuyển hoàn chứng từ, thu hộ, liên hệ
                                    người nhận trước khi đi giao.<br>
                                    - Nhân viên sẽ liên hệ khách hàng thông qua điện thoại. Trường hợp người nhận
                                    không bắt máy hoặc không liên lạc được, hệ thống Fast shipping sẽ gửi
                                    thông tin đến người nhận qua App hoặc SMS.<br>
                                    - Fast shipping chỉ đồng ý xác nhận việc thay đổi địa chỉ trả hàng không quá
                                    03 (ba) lần/vận đơn, và sẽ tính phí phát sinh nếu điểm trả mới cách xa điểm trả
                                    trên vận đơn hơn 03 km.<br>
                                    - Khách hàng cần kiểm tra kỹ hàng hóa trước khi ký nhận , ghi đầy đủ họ tên lên
                                    vận đơn khi nhận hàng.<br>
                                    1.2. Nhận hàng tại Bưu cục<br>
                                    - Khách hàng khi đến nhận hàng tại Bưu cục Nhất Tín phải mang theo CMND. Thông
                                    tin trên CMND phải trùng khớp thông tin người nhận đã ghi trên vận đơn.<br>
                                    - Trường hợp khách hàng khi đến nhận hộ, phải cung cấp CMND của người nhận hộ
                                    và giấy ủy quyền nhận hộ được xác nhận bởi người nhận trên vận đơn. Trên giấy
                                    Ủy quyền phải ghi rõ số CMND của cả người ủy quyền và người được ủy quyền.<br>
                                    - Khách hàng cung cấp số điện thoại của người nhận. Số điện thoại phải trùng
                                    khớp với thông tin ghi trên vận đơn Fast shipping.<br>
                                    - Nhân viên tại bưu cục sau khi giao hàng sẽ ghi đầy đủ số CMND, nơi cấp, ngày
                                    cấp lên vận đơn.<br>
                                    * Một số lưu ý khi Giao trả hàng<br>
                                    - Hàng hóa sẽ được bàn giao lại cho bưu cục hoặc nhập lại kho trong các trường
                                    hợp không phát được hàng như: khách hàng không có ở địa chỉ ghi trên vận
                                    đơn, địa chỉ không có thật, số điện thoại không liên hệ được…<br>
                                    - Nhân viên Nhất Tín sẽ thông báo cho khách hàng kiểm tra thông tin và xác
                                    nhận phương án giải quyết tiếp theo cho đơn hàng trong các trường hợp
                                    không phát được hàng vì các lý do như: địa chỉ sai, thay đổi địa chỉ mới, người
                                    nhận từ chối nhận hàng v.v…<br>
                                    Có 2 trường hợp:<br>
                                    + Khách hàng yêu cầu chuyển hoàn: Nhân viên sẽ thông báo và lấy xác nhận
                                    đồng ý thanh toán cước phí chuyển hoàn từ khách hàng, tiến hành làm các thủ
                                    tục chuyển hoàn hàng hóa theo quy định.<br>
                                    + Khách hàng yêu cầu chuyển tiếp: Nhân viên sẽ thông báo và lấy xác nhận
                                    đồng ý thanh toán cước phí chuyển tiếp (nếu có) từ khách hàng, tiến hành làm
                                    các thủ tục chuyển tiếp hàng hóa qua địa chỉ mới theo quy định. <br>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#questions" class="collapsed" href="#collapseFour"><img style="padding-right: 10px; width: 30px; margin-bottom: 3px" src="{{ asset('User/images/icons/arrow-right.png') }}" alt="">Trách nhiệm các bên</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body pn-bd-2">
                                    A: Bên Sử dụng Dịch Vụ<br>
                                    B: Bên Cung cấp Dịch vụ (Fast shipping)<br>
                                    A. BÊN A: BÊN SỬ DỤNG DỊCH VỤ<br>
                                    QUYỀN LỢI:<br>
                                    1. Yêu cầu Bên B cung cấp các dịch vụ theo nội dung tại Điều 1 và nhu cầu cung cấp
                                    dịch vụ khác theo thỏa thuận.<br>
                                    2. Được đảm bảo bí mật thông tin riêng và an toàn đối với bưu gửi<br>
                                    3. Bên A có quyền khiếu nại bằng văn bản về việc sử dụng dịch vụ của Bên B. Thời
                                    hiệu khiếu nại được quy định như sau:<br>
                                    a) 06 tháng, kể từ ngày kết thúc thời gian toàn trình của bưu gửi đối với khiếu nại
                                    về việc mất bưu gửi, chuyển phát bưu gửi chậm so với thời gian toàn trình đã
                                    công bố; trường hợp doanh nghiệp không công bố thời gian toàn trình thì thời
                                    hiệu này được tính từ ngày sau ngày bưu gửi đó được chấp nhận;<br>
                                    b) 01 tháng, kể từ ngày bưu gửi được phát cho người nhận đối với khiếu nại về
                                    việc bưu gửi bị suy suyển, hư hỏng, về giá cước và các nội dung khác có liên
                                    quan trực tiếp đến bưu gửi;<br>
                                    4. Được bồi thường thiệt hại theo thỏa thuận và theo quy định của pháp luật về bưu
                                    chính.<br>
                                    5. Yêu cầu Bên B cung cấp bảng kê và hóa đơn thanh toán cước hàng tháng.
                                    NGHĨA VỤ:<br>
                                    1. Bên A chủ động báo trước cho Bên B đối với trường hợp Bên A yêu cầu dịch vụ
                                    đặc biệt hoặc số lượng bưu gửi lớn cần Bên B điều động phương tiện vận tải
                                    lớn.<br>
                                    2. Cung cấp toàn bộ chứng từ chứng minh nguồn gốc và tính hợp pháp của bưu gửi
                                    như hóa đơn, lệnh điều động, phiếu xuất kho, tờ khai khải quan…và các giấy tờ
                                    pháp lý khác theo quy định của pháp luật có liên quan đến hàng hóa để xuất trình
                                    cho các cơ quan chức năng khi có yêu cầu.<br>
                                    3. Đóng gói bưu gửi (nếu cần) khi có nguy cơ hư hỏng, bể vỡ, móp, ướt hoặc trầy
                                    xước theo quy định đóng gói của Bên B để đảm bảo an toàn cho hàng hóa trong
                                    quá trình vận chuyển.<br>
                                    4. Chịu trách nhiệm trước pháp luật về nội dung bưu gửi.<br>
                                    5. Tuân thủ các quy định của pháp luật về việc cấm lưu thông hoặc hạn chế lưu
                                    thông đối với thông tin dưới dạng văn bản, kiện, gói hàng hóa.<br>
                                    6. Thanh toán đầy đủ, đúng hạn cước phí các dịch vụ đã sử dụng theo quy định và
                                    thỏa thuận tại hợp đồng này, kể cả trong thời gian xảy ra khiếu nại giữa hai bên.<br>
                                    7. Khi có yêu cầu thay đổi địa chỉ, tên gọi của doanh nghiệp, ngừng sử dụng dịch vụ
                                    hoặc chấm dứt hợp đồng, Bên A phải có văn bản gửi cho Bên B trước ít nhất 30
                                    ngày để giải quyết.<br>
                                    8. Bảo quản mẫu phiếu gửi hàng mà Bên B cấp phát cho Bên A và chịu trách nhiệm
                                    thanh toán cước gửi hàng được lập bởi những mẫu phiếu gửi đó.<br>
                                    9. Bồi thường cho Bên B theo quy định pháp luật nếu thiệt hại phát sinh do lỗi Bên A.<br>
                                    B. BÊN B: BÊN CUNG CẤP DỊCH VỤ (Fast shipping)<br>
                                    QUYỀN LỢI:<br>
                                    1. Yêu cầu Bên A thực hiện đúng các yêu cầu của nhà nước và hướng dẫn của Bộ
                                    Thông tin và Truyền thông về các dịch vụ trên.<br>
                                    2. Yêu cầu Bên A thanh toán cước phí các dịch vụ đầy đủ, đúng hạn, kể cả trong thời
                                    gian xem xét và giải quyết khiếu nại.<br>
                                    3. Yêu cầu Bên A đóng gói hàng hóa theo đúng tiêu chuẩn quy định tại điều 3 (đối với
                                    những hàng hóa dễ bể vỡ, hàng đông lạnh, hàng hóa nguy hiểm…) để đảm bảo
                                    hàng hóa được bảo quản an toàn trong suốt quá trình vận chuyển.<br>
                                    4. Kiểm tra nội dung gói, kiện trước khi chấp nhận và từ chối thực hiện dịch vụ
                                    nếu Bên A không thực hiện đúng các quy định vận chuyển.<br>
                                    5. Có quyền tạm ngưng cung cấp một phần hoặc toàn bộ dịch vụ nếu Bên A
                                    không thanh toán cước phí trong thời gian 30 ngày kể từ ngày Bên B gửi hóa
                                    đơn thanh toán.<br>
                                    NGHĨA VỤ:<br>
                                    1. Đảm bảo đúng chất lượng dịch vụ được Công ty công bố công khai.<br>
                                    2. Cử nhân viên đến nhận hàng tại địa chỉ của Bên A sau khi nhận được yêu cầu của
                                    Bên A.<br>
                                    3. Đảm bảo chất lượng dịch vụ theo đúng tiêu chuẩn quy định và các thỏa thuận
                                    giữa hai bên theo hợp đồng.<br>
                                    4. Đảm bảo an toàn, chính xác và bí mật thông tin của Bên A theo quy định của
                                    pháp luật, việc cung cấp chi tiết thông tin liên quan đến lô hàng phải được sự
                                    chấp thuận bằng văn bản của bên A, trừ trường hợp theo yêu cầu của cơ quan
                                    có thẩm quyền.<br>
                                    5. Bồi thường thiệt hại cho Bên A theo Điều 9 của hợp đồng này và giải quyết các
                                    khiếu nại theo đúng quy định của Luật bưu chính và các văn bản có liên quan.<br>
                                    6. Có trách nhiệm chuyển hoàn bưu gửi cho bên A khi không phát được cho người
                                    nhận của bên A và theo yêu cầu chuyển hoàn của bên A; nếu việc không phát
                                    được do cho người nhận của bên A là do lỗi của bên A thì bên A có trách nhiệm
                                    thanh toán cước phí chuyển hoàn (trừ trường hợp quy định tại khoản 3 Điều 17
                                    Luật bưu chính)<br>
                                    7. Cung cấp cho Bên A bảng kê chi tết và hóa đơn tài chính tương đương với cước phí
                                    vận chuyển Bên A đã sử đụng.<br>
                                    8. Thực hiện các yêu cầu của Bên A về thay đổi địa chỉ nhận hàng.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-faq">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#questions" class="collapsed" href="#collapseSeven"><img style="padding-right: 10px; width: 30px; margin-bottom: 3px" src="{{ asset('User/images/icons/arrow-right.png') }}" alt="">Hàng hóa cấm gửi</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body pn-bd-2">
                                    I. HÀNG HÓA CẤM GỬI<br>
                                    - Các chất ma túy và chất kích thích thần kinh, gây nghiện.<br>
                                    - Vũ khí đạn dược, trang thiết bị kỹ thuật quân sự.<br>
                                    - Các loại văn hóa phẩm đồi trụy, phản động; ấn phẩm, tài liệu nhằm phá hoại trật tự
                                    công cộng chống lại Nhà nước Cộng hòa Xã hội Chủ Nghĩa Việt Nam.<br>
                                    - Vật hoặc chất dễ nổ, dễ cháy và các chất gây nguy hiểm hoặc làm mất vệ sinh, gây ô
                                    nhiễm môi trường.<br>
                                    - Các loại vật phẩm hàng hóa mà nhà nước cấm lưu thông, cấm kinh doanh, cấm xuất,
                                    nhập khẩu.<br>
                                    - Vật phẩm, ấn phẩm, hàng hóa cấm nhập vào nước nhận.<br>
                                    II. QUY ĐỊNH MIỄN TRỪ TRÁCH NHIỆM ĐỀN BÙ, BỒI THƯỜNG<br>
                                    - Hàng hóa đã được giao đúng thoả thuận.<br>
                                    - Hàng hóa bị hư hại, mất mát do lỗi của bên gửi hàng.<br>
                                    - Bị cơ quan nhà nước có thẩm quyền tịch thu hoặc tiêu hủy do nội dung bên trong vi
                                    phạm các qui định cấm gửi của pháp luật hoặc do không xác minh được nguồn gốc,
                                    xuất xứ.<br>
                                    - Người gửi không cung cấp đầy đủ thông tin các giấy tờ cần thiết phục vụ cho việc giao
                                    hàng dẫn đến các thiệt hại như hàng hoá hư hỏng do để lâu, bị phạt vi phạm, bị tịch
                                    thu hàng hoá.<br>
                                    - Chú ý: Hàng hóa cần có giấy tờ chứng minh nguồn gốc, xuất xứ hoặc hóa đơn GTGT đi
                                    kèm. Nếu không, Fast shipping không chịu trách nhiệm trong trường hợp hàng hóa bị
                                    Quản lý thị trường và các cơ quan chức năng thu giữ theo quy định của pháp luật. 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="supportModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-custom-w modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body d-flex p-0">
                        <div class="modal-left d-none d-md-block">
                            <img src="{{ asset('User/images/support-bg.jpg') }}" alt="" />
                        </div>
                        <div class="modal-right">
                            <div class="close-top">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <!--Before: support-form-->
                            <form class="needs-validation" id="support-form" novalidate>
                                <div class="form-group">
                                    <label for="username" class="required">Họ và tên</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Nhập họ tên" required />
                                    <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="required">Số điện thoại</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" value="" pattern="[0-9]{10,}" required />
                                    <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email" required />
                                    <div class="invalid-feedback">Vui lòng nhập Email</div>
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="required">Chủ đề</label>
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Nhập chủ đề" required />
                                    <div class="invalid-feedback">Vui lòng nhập Chủ đề</div>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="required">Nội dung</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Nhập nội dung" required></textarea>
                                    <div class="invalid-feedback">Vui lòng nhập Nội dung</div>
                                </div>
                                <input type="hidden" id="wp_nonce" value="a914499e98" />
                                <button class="btn btn-secondary" id="support-submit" type="submit" style="position: unset; width: 100%">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Start of widget script -->
</body>
@endsection