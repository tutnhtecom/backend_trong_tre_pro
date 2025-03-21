<?php

use backend\models\NhuCauKhachHang;
use backend\models\SanPham;
use yii\bootstrap\Html;

$form = \yii\widgets\ActiveForm::begin([
    'options' => [
        'id' => 'form-khach-hang',
    ]
]);

?>
<div class="hidden">
<?= Html::hiddenInput('User[id]',$nhu_cau->khach_hang_id)?>
<?=$form->field($nhu_cau,'id')->hiddenInput();?>
<?=$form->field($nhu_cau,'khach_hang_id')->hiddenInput();?>
</div>
<div class="thong-tin-khach-hang">
    <?= $view_thong_tin_khach_hang ?>
</div>
<a type="button" class="" data-toggle="collapse" data-target="#nhu-cau">
    <h4 class="text-primary">NHU CẦU KHÁCH HÀNG </h4>
</a>
<div id="nhu-cau" class="collapse in ">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <?= $form->field($nhu_cau, 'nhu_cau_loai_hinh')->dropDownList([
                        SanPham::NHA => SanPham::NHA,
                        SanPham::DAT => SanPham::DAT,
                        SanPham::DU_AN => SanPham::DU_AN,
                        SanPham::CHO_THUE => SanPham::CHO_THUE
                    ], ['prompt' => '--Chọn--'])->label('Loại hình') ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($nhu_cau, 'nhu_cau_khoang_dien_tich')->dropDownList(NhuCauKhachHang::arr_khoang_dien_tich, ['prompt' => '--Chọn--'])->label("Diện tích (m <sup>2</sup>) ") ?>
                </div>
                <div class="col-md-3">
                    <?= $form->field($nhu_cau, 'nhu_cau_gia_tu')->dropDownList($khoang_gias, ['prompt' => '--Chọn--'])->label("Diện tích (m <sup>2</sup>) ") ?>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($nhu_cau, 'nhu_cau_huong')->dropDownList(
                        $arr_huong,
                        ['prompt' => '--Chọn--', 'multiple' => 'multiple']
                    )->label('Hướng') ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($nhu_cau, 'nhu_cau_quan_huyen')->dropDownList($quan_huyen, ['prompt' => '--Chọn--', 'multiple' => 'multiple'])->label('Quận huyện') ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($nhu_cau, 'nhu_cau_phuong_xa')->dropDownList($phuong_xa, ['prompt' => '--Chọn--', 'multiple' => 'multiple'])->label('Phường xã') ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($nhu_cau, 'nhu_cau_duong_pho')->dropDownList($duong_pho, ['prompt' => '--Chọn--', 'multiple' => 'multiple'])->label('Đường phố') ?>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($nhu_cau, 'ghi_chu')->textarea(['rows' => 9])->label('Ghi chú') ?>
                </div>
            </div>
        </div>
    </div>
    <p>
        <?= Html::a('<i class="fa fa-search"></i> Tìm sản phẩm', '', ['class' => 'btn btn-primary btn-tim-san-pham']) ?>
    </p>
    <div class="form-chon-san-pham">
        <ul id="san-pham-da-chon" class="list-inline list-unstyled"></ul>
    </div>
    <?php \yii\widgets\ActiveForm::end() ?>
    <script>
        $(document).ready(function () {
            $("#nhucaukhachhang-nhu_cau_huong,#nhucaukhachhang-nhu_cau_quan_huyen,#nhucaukhachhang-nhu_cau_phuong_xa,#nhucaukhachhang-nhu_cau_duong_pho").select2();
        });
    </script>
