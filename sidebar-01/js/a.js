var fruit = $("[name=fruit] option").detach()
$("[name=color]").change(function() {
    var val = $(this).val()
    $("[name=fruit] option").detach()
    fruit.filter("." + val).clone().appendTo("[name=fruit]")
}).change()