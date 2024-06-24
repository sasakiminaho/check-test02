$('#image').on('change', function () {
    var $fr = newFileReader();
    $fr.onload = function () {
        $('#preview').attr('src', $fr.result);
    }
    $fr.readAsDataURL(this.files[0]);
})