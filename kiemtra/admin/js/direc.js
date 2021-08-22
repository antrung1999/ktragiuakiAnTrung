$(document).ready(function(){
    $('.btnAdd').click(function(){
        $('#addForm').show();
        $('#updateForm').hide();
        $('#deleteForm').hide();
        $('.titlePage').text("Thêm thông tin");
    })
    $('.btnUpdate').click(function(){
        $('#addForm').hide();
        $('#updateForm').show();
        $('#deleteForm').hide();
        $('.titlePage').text("Sửa thông tin");
    })
    $('.btnDelete').click(function(){
        $('#addForm').hide();
        $('#updateForm').hide();
        $('#deleteForm').show();
        $('.titlePage').text("Xóa thông tin");
    })
});