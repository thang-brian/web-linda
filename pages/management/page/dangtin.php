<div class="p-2">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="ban-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
            Bán
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="chothue-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
            Cho thuê
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="canmua-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
            Cần mua
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="canthue-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
            Cần thuê
        </a>
    </li>
    </ul>
    <div class="tab-content p-2" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="ban-tab">
        <div style="display:flex !important;">
            <h4>Thông tin cơ bản</h4>
            <hr style="width:66% !important">
        </div>
        <div class="container">
          <div class="row">
            <div class="col">
              <form class="was-validated">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại bất động sản</label>
                    <select class="form-control" id="exampleFormControlSelect1" required>
                    <option value="">Chọn loại bất động sản</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tỉnh / Thành phố</label>
                  <select class="form-control " name="calc_shipping_provinces" required><option value="">Tỉnh / Thành phố</option><option value="1">An Giang</option><option value="2">Bà Rịa - Vũng Tàu</option><option value="3">Bạc Liêu</option><option value="4">Bắc Kạn</option><option value="5">Bắc Giang</option><option value="6">Bắc Ninh</option><option value="7">Bến Tre</option><option value="8">Bình Dương</option><option value="9">Bình Định</option><option value="10">Bình Phước</option><option value="11">Bình Thuận</option><option value="12">Cà Mau</option><option value="13">Cao Bằng</option><option value="14">Cần Thơ</option><option value="15">Đà Nẵng</option><option value="16">Đắk Lắk</option><option value="17">Đắk Nông</option><option value="18">Đồng Nai</option><option value="19">Đồng Tháp</option><option value="20">Điện Biên</option><option value="21">Gia Lai</option><option value="22">Hà Giang</option><option value="23">Hà Nam</option><option value="24">Hà Nội</option><option value="25">Hà Tĩnh</option><option value="26">Hải Dương</option><option value="27">Hải Phòng</option><option value="28">Hòa Bình</option><option value="29">Hậu Giang</option><option value="30">Hưng Yên</option><option value="31">Thành phố Hồ Chí Minh</option><option value="32">Khánh Hòa</option><option value="33">Kiên Giang</option><option value="34">Kon Tum</option><option value="35">Lai Châu</option><option value="36">Lào Cai</option><option value="37">Lạng Sơn</option><option value="38">Lâm Đồng</option><option value="39">Long An</option><option value="40">Nam Định</option><option value="41">Nghệ An</option><option value="42">Ninh Bình</option><option value="43">Ninh Thuận</option><option value="44">Phú Thọ</option><option value="45">Phú Yên</option><option value="46">Quảng Bình</option><option value="47">Quảng Nam</option><option value="48">Quảng Ngãi</option><option value="49">Quảng Ninh</option><option value="50">Quảng Trị</option><option value="51">Sóc Trăng</option><option value="52">Sơn La</option><option value="53">Tây Ninh</option><option value="54">Thái Bình</option><option value="55">Thái Nguyên</option><option value="56">Thanh Hóa</option><option value="57">Thừa Thiên - Huế</option><option value="58">Tiền Giang</option><option value="59">Trà Vinh</option><option value="60">Tuyên Quang</option><option value="61">Vĩnh Long</option><option value="62">Vĩnh Phúc</option><option value="63">Yên Bái</option></select>
                  <input class="billing_address_1" name="" type="hidden" value="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Quận / Huyện</label>
                  <select class="form-control" name="calc_shipping_district" required>
                    <option value="">Quận / Huyện</option>
                  </select>
                  <input class="billing_address_2" name="" type="hidden" value="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Dự án</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option value="">Chọn dự án</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Đường / Số nhà</label>
                  <div class="row">
                    <div class="col-8">
                      <input type="text" class="form-control" placeholder="Chọn đường">
                    </div>
                    <div class="col-4">
                      <input type="text" class="form-control" placeholder="Chọn số nhà">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phường / Xã</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập phường / xã">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ chi tiết</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="VD: Ấp, hẻm, ngõ,.." required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Diện tích</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập diện tích" required>
                  </div>
                  <div class="row">
                    <div class="form-group col-7">
                      <label for="exampleInputEmail1">Giá</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập giá" required>
                    </div>
                    <div class="form-check col-5 p-4">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                      <label class="form-check-label" for="defaultCheck1">
                        Thỏa thuận
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề</label>
                    <input type="text" class="form-control" id="textcount" maxlength="80" aria-describedby="emailHelp" required placeholder="Tóm tắt gọn nội dung">
                    <small id="emailHelp" class="form-text text-muted flex">
                      Đã nhập: &nbsp; <div id="the-count">
                                <span id="current">0</span>
                                <span id="maximum">/ 80</span>
                              </div>
                      &nbsp; ký tự
                    </small>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Nội dung</label>
                    <textarea class="form-control is-invalid" id="textareacount" rows="5" maxlength="2000" required placeholder="Nhập nội dung"></textarea>
                    <small id="emailHelp" class="form-text text-muted flex">
                      Đã nhập: &nbsp; <div id="the-count2">
                                <span id="current2">0</span>
                                <span id="maximum2">/ 2000</span>
                              </div>
                      &nbsp; ký tự
                    </small>
                  </div>
                  <div class="form-group">
                    <label for="file-ip-1">Đăng hình ảnh</label>
                    <div class="preview">
                      <img id="file-ip-1-preview" style="width:100%;display:none;margin-bottom:30px;">
                    </div>
                    <input type="file" class="form-control-file" id="file-ip-1" accept=".jpg,.png,.pdf " onchange="showPreview(event)" multiple>
                    <small id="emailHelp" class="form-text text-muted">Đăng tối đa 15 ảnh với tài khoản thường và 25 ảnh với tài khoản VIP</small>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <script>
                    function showPreview(event){
                    if(event.target.files.length > 0){
                      var src = URL.createObjectURL(event.target.files[0]);
                      var preview = document.getElementById("file-ip-1-preview");
                      preview.src = src;
                      preview.style.display = "block";
                    }
                  }
                </script>
              </form>
            </div>
            <div class="col">
            <div class="card">
              <div class="card-header">
                Tin đăng mẫu
              </div>
              <div class="card-body">
                <p class="card-text"><b>Tiêu đề: </b> Bán gấp căn hộ dự án Nhà Ở Quân Khu 7, Quận 12, 78,88m2, 3PN </p>
                <p>Bán căn hộ dự án Nhà Ở Quân Khu 7, phòng 806 lô A, 3 phòng ngủ, 1 balcon, 1 sân phơi, quý 3/2016 giao nhà, vị trí đẹp, 78,88m2, 14,3tr/m2.
                  <p>
                  - Cơ hội hiếm có và duy nhất!
                  </p>
                  <p>
                  - Căn hộ vị trí cực đẹp, phong thủy tốt nhất.
                  </p>
                  <p>
                  - Phòng 806 lô A, 3 PN, 2 WC, 1 balcon, 1 sân phơi, quý 3/2016 giao nhà.
                  </p>
                  <p>
                  - Địa chỉ: Dự án Nhà Ở Quân Khu 7, Quận 12, TP.HCM.
                  </p>
                </p>
              </div>
            </div>
            <div class="card p-4 mt-3">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Làm nổi bật tin đăng</label>
              </div>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">Tự động đăng lại</label>
              </div>
              <small>(Áp dụng cho tài khoản VIP)</small>
            </div>
            <div>
              <p>Vị trí trên bản đồ</p>
              <div id="map"></div>
              <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhKqTXCGloRKwO8USX1ImIDtqwOJPUsho&callback=initMap&libraries=&v=weekly&channel=2"async
              ></script>
            </div>
            </div>
          </div>
        </div>
        <div style="display:flex !important;">
            <h4>Thông tin bổ sung</h4>
            <hr style="width:66% !important">
        </div>
        <div class="row">
          <div class="col-8">
            <label for="inputEmail3" class=" col-form-label">Số tầng</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
            <div class="form-group custom-control-inline">
              <div class="col">
                <input type="number" class="form-control" id="inputEmail3" placeholder="Nhập nếu nhiều hơn">
              </div>
            </div>
            </div>
            <label for="inputEmail3" class=" col-form-label">Số phòng ngủ</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PNRadioOptions" id="PNRadio1" value="option1">
              <label class="form-check-label" for="PNRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PNRadioOptions" id="PNRadio2" value="option2">
              <label class="form-check-label" for="PNRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PNRadioOptions" id="PNRadio3" value="option3">
              <label class="form-check-label" for="PNRadio3">3</label>
            </div>
            <div class="form-group custom-control-inline">
              <div class="col">
                <input type="number" class="form-control" name="PNRadioOptionsmore" id="inputEmail3" placeholder="Nhập nếu nhiều hơn">
              </div>
            </div>
            </div>
            <label for="inputEmail3" class=" col-form-label">Số phòng tắm/Vệ sinh</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PTRadioOptions" id="PTRadio1" value="option1">
              <label class="form-check-label" for="PTRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PTRadioOptions" id="PTRadio2" value="option2">
              <label class="form-check-label" for="PTRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PTRadioOptions" id="PTRadio3" value="option3">
              <label class="form-check-label" for="PTRadio3">3</label>
            </div>
            <div class="form-group custom-control-inline">
              <div class="col">
                <input type="number" class="form-control" name="PTRadioOptionsmore" id="inputEmail3" placeholder="Nhập nếu nhiều hơn">
              </div>
            </div>
            </div>
            <label for="inputEmail3" class=" col-form-label">Số phòng bếp</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PBRadioOptions" id="PBRadio1" value="option1">
              <label class="form-check-label" for="PBRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PBRadioOptions" id="PBRadio2" value="option2">
              <label class="form-check-label" for="PBRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PBRadioOptions" id="PBRadio3" value="option3">
              <label class="form-check-label" for="PBRadio3">3</label>
            </div>
            <div class="form-group custom-control-inline">
              <div class="col">
                <input type="number" class="form-control" name="PBRadioOptionsmore" id="inputEmail3" placeholder="Nhập nếu nhiều hơn">
              </div>
            </div>
            </div>
            <label for="inputEmail3" class=" col-form-label">Số nhà kho</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="NKRadioOptions" id="NKRadio1" value="option1">
              <label class="form-check-label" for="NKRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="NKRadioOptions" id="NKRadio2" value="option2">
              <label class="form-check-label" for="NKRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="NKRadioOptions" id="NKRadio3" value="option3">
              <label class="form-check-label" for="NKRadio3">3</label>
            </div>
            <div class="form-group custom-control-inline">
              <div class="col">
                <input type="number" class="form-control" name="NKRadioOptionsmore" id="inputEmail3" placeholder="Nhập nếu nhiều hơn">
              </div>
            </div>
            </div>
            <label for="inputEmail3" class=" col-form-label">Căn góc/Căn thường</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CGRadioOptions" id="CGRadio1" value="option1">
              <label class="form-check-label" for="CGRadio1">Căn góc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CGRadioOptions" id="CGRadio2" value="option2">
              <label class="form-check-label" for="CGRadio2">Căn thường</label>
            </div>
            </div>
            <label for="inputEmail3" class=" col-form-label">Hướng cửa chính</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio1" value="option1">
              <label class="form-check-label" for="CCRadio1">Đông</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio2" value="option2">
              <label class="form-check-label" for="CCRadio2">Tây Bắc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio3" value="option2">
              <label class="form-check-label" for="CCRadio3">Tây</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio4" value="option2">
              <label class="form-check-label" for="CCRadio4">Tây Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio5" value="option2">
              <label class="form-check-label" for="CCRadio5">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio6" value="option2">
              <label class="form-check-label" for="CCRadio6">Đông Bắc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio7" value="option2">
              <label class="form-check-label" for="CCRadio7">Bắc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CCRadioOptions" id="CCRadio8" value="option2">
              <label class="form-check-label" for="CCRadio8">Đông</label>
            </div>
          </div>
          <label for="inputEmail3" class=" col-form-label">Hướng ban công</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio1" value="option1">
              <label class="form-check-label" for="BCRadio1">Đông</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio2" value="option2">
              <label class="form-check-label" for="BCRadio2">Tây Bắc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio3" value="option2">
              <label class="form-check-label" for="BCRadio3">Tây</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio4" value="option2">
              <label class="form-check-label" for="BCRadio4">Tây Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio5" value="option2">
              <label class="form-check-label" for="BCRadio5">Nam</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio6" value="option2">
              <label class="form-check-label" for="BCRadio6">Đông Bắc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio7" value="option2">
              <label class="form-check-label" for="BCRadio7">Bắc</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="BCRadioOptions" id="BCRadio8" value="option2">
              <label class="form-check-label" for="BCRadio8">Đông</label>
            </div>
          </div>
          <label for="inputEmail3" class=" col-form-label">Pháp lý</label>
            <div class="container">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PLRadioOptions" id="PLRadio1" value="option1">
              <label class="form-check-label" for="PLRadio1">Có sổ hồng</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PLRadioOptions" id="PLRadio2" value="option2">
              <label class="form-check-label" for="PLRadio2">Hợp đồng mua bán</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PLRadioOptions" id="PLRadio3" value="option2">
              <label class="form-check-label" for="PLRadio3">Văn bản chuyển nhượng</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PLRadioOptions" id="PLRadio4" value="option2">
              <label class="form-check-label" for="PLRadio4">Khác</label>
            </div>
          </div>
        </div>
        <div class="col-4">
        <img src="img/motatindang.png" width="100%" alt="">
        </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="chothue-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="canmua-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="canthue-tab">...</div>
</div>
</div>
<?php 
include "framework/tinhthanh/data.php";
?>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
// giới hạn nhập nội dung 
  $('#textcount').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');
      
    current.text(characterCount);
   
    
    /*This isn't entirely necessary, just playin around*/
    if (characterCount < 10) {
      current.css('color', '#666');
    }
    if (characterCount > 10 && characterCount < 20) {
      current.css('color', '#6d5555');
    }
    if (characterCount > 20 && characterCount < 40) {
      current.css('color', '#793535');
    }
    if (characterCount > 40 && characterCount < 60) {
      current.css('color', '#841c1c');
    }
    if (characterCount > 60 && characterCount < 70) {
      current.css('color', '#8f0001');
    }
    
    if (characterCount >= 70) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#666');
      theCount.css('font-weight','normal');
    }
    
        
  });
  $('#textareacount').keyup(function() {
    
    var characterCount = $(this).val().length,
        current = $('#current2'),
        maximum = $('#maximum2'),
        theCount = $('#the-count2');
      
    current.text(characterCount);
   
    
    /*This isn't entirely necessary, just playin around*/
    if (characterCount < 100) {
      current.css('color', '#666');
    }
    if (characterCount > 100 && characterCount < 500) {
      current.css('color', '#6d5555');
    }
    if (characterCount > 500 && characterCount < 1000) {
      current.css('color', '#793535');
    }
    if (characterCount > 1000 && characterCount < 1500) {
      current.css('color', '#841c1c');
    }
    if (characterCount > 1500 && characterCount < 1800) {
      current.css('color', '#8f0001');
    }
    
    if (characterCount >= 1600) {
      maximum.css('color', '#8f0001');
      current.css('color', '#8f0001');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#666');
      theCount.css('font-weight','normal');
    }
    
        
  });

// Giới hạn nhập file ảnh
$(function(){
  $("button[type = 'submit']").click(function(){
      var $fileUpload = $("input[type='file']");
      if (parseInt($fileUpload.get(0).files.length) > 3){
        alert("Bạn chỉ đăng tối đa 3 ảnh");
      }
  });
});


//Thêm map
// Initialize and add the map
function initMap() {
  var myOptions = {
      zoom: 15,
      center: new google.maps.LatLng(21.0477359,105.7495967),
      mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"),myOptions);
       marker = new google.maps.Marker({
           map: map,
           position: new google.maps.LatLng(21.0477359,105.7495967)
       });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
</script>
