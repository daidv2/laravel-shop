$(document).ready(function () {
    $('#dataTables-example').DataTable({
        responsive: true
    });
    $('#addImages').click(function() {
        $('#insert').append('<div class="form-group"><input type="file" name="fProductDetail[]"></div>');
    });
    $('.btn-del').click(function() {
        var rid = $(this).parent().attr('id');
        var data = {
            _token: $('input[name="_token"]').val(),
            id: $(this).parent().find('img').attr('id')
        };
        $.ajax({
            url: '/admin/products/delete',
            method: 'DELETE',
            data: data,
            type: 'json',
            success: function(response){
                if(response.status){
                    $('#' + rid).remove();
                }
                console.log(response.message);
            },
            error: function(error){
                console.log(error);
            }
        });
    });
});