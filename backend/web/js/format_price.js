$(document).ready(function () {
    $("#price").keyup(function (event) {
        let str = $(this).val()
        if (!str) return
        console.log(str)
        str = str.split('.').join('')
        str = str.match(/.{1,3}/g)
        str = str.toString()
        str = str.split(',').join('.')
        console.log(str)
        $(this).val(str)
    });
});