<?php
session_start();
require_once '../../config/utils.php';
checkAdminLoggedIn();
$getRoleQuery = "select * from roles where status = 1";
$roles = queryExecute($getRoleQuery, true);

// lấy thông tin của người dùng ra ngoài thông id trên đường dẫn
$id = isset($_GET['id']) ? $_GET['id'] : -1;
// kiểm tra tài khoản có tồn tại hay không
$getRoomByIdQuery = "select * from room_types where id= '$id'";
$room = queryExecute($getRoomByIdQuery, false);
if (!$room) {
    header("location: " . ADMIN_URL . 'rooms?msg=Phòng không tồn tại');
    die;
}

//danh sách users
$getUsersQuery = "select
                    u.*,
                    r.name as role_name
                    from users u
                    join roles r
                    on u.role_id = r.id";




?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once '../_share/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once '../_share/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Cập nhật thông tin Phòng</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="edit-room-form" action="<?= ADMIN_URL . 'rooms/save-edit.php' ?>" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $room['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên Phòng<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="name" value="<?= $room['name'] ?>">
                                    <?php if (isset($_GET['nameerr'])) : ?>
                                    <label class="error"><?= $_GET['nameerr'] ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh</label><br>
                                    <img src="<?= BASE_URL . $room['featrue_image'] ?>" width="300" alt=""><br><br>
                                    <input type="file" class="form-control" name="featrue_image"
                                        onchange="encodeImageFileAsURL(this)">
                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <select name="status" class="form-control" id="">
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="INACTIVE">INACTIVE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Giá</label>
                                    <input type="text" name="price" class="form-control" value="<?= $room['price']?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Tiêu đề</label>
                                    <input type="text" class="form-control" name="short_desc"
                                        value="<?= $room['short_desc'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nội dung</label>
                                    <textarea name="about" id="" cols="30" rows="10" class="form-control"><?= $room['about']?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Người Lớn<span class="text-danger">*</span></label>
                                            <select name="adults" class="form-control" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Trẻ em<span class="text-danger">*</span></label>
                                            <select name="children" class="form-control" id="">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="col d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">Sửa</button>&nbsp;
                                                <a href="<?= ADMIN_URL . 'rooms' ?>" class="btn btn-danger">Hủy</a>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </form>

                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../_share/footer.php'; ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once '../_share/script.php'; ?>
    <script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if (file === undefined) {
            $('#preview-img').attr('src', "<?= BASE_URL . $room['featrue_image'] ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#preview-img').attr('src', reader.result)
        }
        reader.readAsDataURL(file);
    }
    $('#edit-room-form').validate({
        rules: {
            name: {
                required: true,
                maxlength: 191,
                minlength: 2
            },
            short_desc: {
                required: true,
                maxlength: 191
            },
           about: {
                required: true,
            },
            featrue_image: {
                extension: "png|jpg|jpeg|gif"
            }
        },
        messages: {
            name: {
                required: "hãy nhập tên phòng",
                maxlength: "kí tự không qá 191",
                minlength: "tên phòng từ 2 ký tự trở lên"
            },
            short_desc: {
                required: "hãy nhập tiêu đề",
                maxlength: "tiêu đề không quá 191 kí tự",
            },
            about: {
                required: "hãy nhập nội dung",
            },
           featrue_image:{
               extension:"hãy chọn đúng định dạng"
           }
        }
        
    });
    </script>
</body>

</html>