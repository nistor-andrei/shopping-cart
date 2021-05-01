$(".add-to-cart").on('click', function () {
    var attribute = $(this).attr("data-product-id");
    var postData = 'id_product=' + attribute;
    $.ajax({
        type: "POST",
        url: "Controller/ajax-add.php",
        dataType: "json",
        data: postData
    }).done(function (data) {
        $("#number-products").text(data.items);
    })
});

$(".remove-to-cart").on('click', function () {
    var attribute = $(this).attr("data-product-id");
    var dataPost = 'id_product=' + attribute;
    $.ajax({
        type: "POST",
        url: "Controller/ajax-remove.php",
        dataType: "json",
        data: dataPost
    }).done(function (data) {
        $("#number-products").text(data.items);
    })
    window.location.reload();
});
$(".remove-all").on('click', function () {
    var attribute = $(this).attr("data-product-id");
    var dataPost = 'id_product=' + attribute;
    $.ajax({
        type: "POST",
        url: "Controller/ajax-remove-all.php",
        dataType: "json",
        data: dataPost
    }).done(function (data) {
        $("#number-products").text(data.items);
    })
    window.location.reload();
});